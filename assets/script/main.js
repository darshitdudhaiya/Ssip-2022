(
	function( $ ) {
		'use strict';

		var $window            = $( window ),
		    $html              = $( 'html' ),
		    $body              = $( 'body' ),
		    $pageHeader        = $( '#page-header' ),
		    $headerInner       = $( '#page-header-inner' ),
		    $pageContent       = $( '#page-content' ),
		    headerStickyHeight = parseInt( $maxcoach.header_sticky_height ),
		    smoothScrollOffset,
		    queueResetDelay,
		    animateQueueDelay  = 200,
		    wWidth             = window.innerWidth;

		$( window ).on( 'resize', function() {
			wWidth = window.innerWidth;

			calMobileMenuBreakpoint();
			initStickyHeader();
			handlerVerticalHeader();
		} );

		$( window ).on( 'load', function() {
			initPreLoader();
			initStickyHeader();
			navOnePage();
			handlerEntranceAnimation();
			handlerEntranceQueueAnimation();
		} );

		$( document ).ready( function() {
			calMobileMenuBreakpoint();

			scrollToTop();

			// Remove empty p tags form wpautop.
			$( 'p:empty' ).each( function() {
				if ( 0 >= this.attributes.length ) {
					$( this ).remove();
				}
			} );

			initHeaderSplitNavWithCenteredLogo();
			initSliders();
			initGridMainQuery();
			initSmoothScrollLinks();
			initLightGalleryPopups();
			initVideoPopups();
			initSearchPopup();
			initHeaderRightMoreTools();
			initOffSidebar();

			initSmartmenu();
			initOffCanvasMenu();
			initMobileMenu();
			initCookieNotice();
			handlerPageNotFound();
			handlerVerticalHeader();
			handlerArchiveFiltering();


			$( '.maxcoach-nice-select' ).MaxcoachNiceSelect();
		} );

		function handlerEntranceAnimation() {
			var items = $( '.modern-grid' ).children( '.grid-item' );

			items.elementorWaypoint( function() {
				// Fix for different ver of waypoints plugin.
				var _self = this.element ? this.element : this;
				var $self = $( _self );
				$self.addClass( 'animate' );
			}, {
				offset: '100%',
				triggerOnce: true
			} );
		}

		function handlerEntranceQueueAnimation() {
			$( '.maxcoach-entrance-animation-queue' ).each( function() {
				var itemQueue  = [],
				    queueTimer,
				    queueDelay = $( this ).data( 'animation-delay' ) ? $( this ).data( 'animation-delay' ) : animateQueueDelay;

				$( this ).children( '.item' ).elementorWaypoint( function() {
					// Fix for different ver of waypoints plugin.
					var _self = this.element ? this.element : $( this );

					queueResetDelay = setTimeout( function() {
						queueDelay = animateQueueDelay;
					}, animateQueueDelay );

					itemQueue.push( _self );
					processItemQueue( itemQueue, queueDelay, queueTimer );
					queueDelay += animateQueueDelay;
				}, {
					offset: '100%',
					triggerOnce: true
				} );
			} );
		}

		function processItemQueue( itemQueue, queueDelay, queueTimer, queueResetDelay ) {
			clearTimeout( queueResetDelay );
			queueTimer = window.setInterval( function() {
				if ( itemQueue !== undefined && itemQueue.length ) {
					$( itemQueue.shift() ).addClass( 'animate' );
					processItemQueue();
				} else {
					window.clearInterval( queueTimer );
				}
			}, queueDelay );
		}

		function initPreLoader() {
			setTimeout( function() {
				$body.addClass( 'loaded' );
			}, 200 );

			var $loader = $( '#page-preloader' );

			setTimeout( function() {
				$loader.remove();
			}, 2000 );
		}

		function initSliders() {
			$( '.tm-slider' ).each( function() {
				if ( $( this ).hasClass( 'maxcoach-swiper-linked-yes' ) ) {
					var mainSlider = $( this ).children( '.maxcoach-main-swiper' ).MaxcoachSwiper();
					var thumbsSlider = $( this ).children( '.maxcoach-thumbs-swiper' ).MaxcoachSwiper();

					mainSlider.controller.control = thumbsSlider;
					thumbsSlider.controller.control = mainSlider;
				} else {
					$( this ).MaxcoachSwiper();
				}
			} );
		}

		function initLightGalleryPopups() {
			$( '.maxcoach-light-gallery' ).each( function() {
				initLightGallery( $( this ) );
			} );
		}

		function initVideoPopups() {
			$( '.tm-popup-video' ).each( function() {
				handlerPopupVideo( $( this ) );
			} );
		}

		function initGridMainQuery() {
			$( '.maxcoach-main-post' ).MaxcoachGridLayout();
		}

		function handlerPopupVideo( $popup ) {
			var options = {
				selector: 'a',
				fullScreen: false,
				zoom: false,
				getCaptionFromTitleOrAlt: false,
				counter: false
			};
			$popup.lightGallery( options );
		}

		function navOnePage() {
			if ( ! $body.hasClass( 'one-page' ) ) {
				return;
			}

			var $mainNav = $( '#page-navigation' ).find( '.menu__container' ).first();
			var $li = $mainNav.children( '.menu-item' );
			var $links = $li.children( 'a[href*="#"]:not([href="#"])' );

			$li.each( function() {
				if ( $( this ).hasClass( 'current-menu-item' ) ) {
					var _link = $( this ).children( 'a' );

					if ( _link[ 0 ].hash !== '' ) {
						$( this ).removeClass( 'current-menu-item' );
					}
				}
			} );

			// Handler links class when scroll to target section.
			if ( $.fn.elementorWaypoint ) {
				$links.each( function() {
					var $this = $( this );
					var target = this.hash;
					var parent = $this.parent();

					if ( isValidSmoothScrollTarget( target ) ) {
						var $target = $( target );

						if ( $target.length > 0 ) {
							$target.elementorWaypoint( function( direction ) {
								if ( direction === 'down' ) {
									parent.siblings( 'li' ).removeClass( 'current-menu-item' );
									parent.addClass( 'current-menu-item' );
								}
							}, {
								offset: '25%'
							} );

							$target.elementorWaypoint( function( direction ) {
								if ( direction === 'up' ) {
									parent.siblings( 'li' ).removeClass( 'current-menu-item' );
									parent.addClass( 'current-menu-item' );
								}
							}, {
								offset: '-25%'
							} );
						}
					}
				} );
			}

			// Allows for easy implementation of smooth scrolling for navigation links.
			$links.on( 'click', function() {
				var $this = $( this );
				var target = this.hash;
				var parent = $this.parent( 'li' );

				parent.siblings( 'li' ).removeClass( 'current-menu-item' );
				parent.addClass( 'current-menu-item' );

				if ( isValidSmoothScrollTarget( target ) ) {
					handlerSmoothScroll( target );
				}

				return false;
			} );

			// Smooth scroll to section if url has hash tag when page loaded.
			var hashTag = window.location.hash;

			if ( isValidSmoothScrollTarget( hashTag ) ) {
				handlerSmoothScroll( hashTag );
			}
		}

		function initSmoothScrollLinks() {
			// Allows for easy implementation of smooth scrolling for buttons.
			$( '.smooth-scroll-link' ).on( 'click', function( e ) {
				var target = getSmoothScrollTarget( $( this ) );

				if ( isValidSmoothScrollTarget( target ) ) {
					e.preventDefault();
					e.stopPropagation();

					handlerSmoothScroll( target );
				}
			} );
		}

		function getSmoothScrollTarget( $link ) {
			var target = $link.attr( 'href' );

			if ( ! target ) {
				target = $link.data( 'href' );
			}

			return target;
		}

		function getSmoothScrollOffset() {
			if ( smoothScrollOffset ) {
				return smoothScrollOffset
			}

			var windowWidth = window.innerWidth;
			smoothScrollOffset = 0;

			// Add offset of header sticky.
			if ( $maxcoach.header_sticky_enable == 1 && $pageHeader.length > 0 && $headerInner.data( 'sticky' ) == '1' ) {

				if ( $headerInner.data( 'header-vertical' ) == '1' ) {
					if ( windowWidth < $maxcoach.mobile_menu_breakpoint ) {
						smoothScrollOffset += headerStickyHeight;
					}
				} else {
					smoothScrollOffset += headerStickyHeight;
				}
			}

			// Add offset of admin bar when viewport min-width 600.
			if ( windowWidth > 600 ) {
				var $adminBar = $( '#wpadminbar' );

				if ( $adminBar.length > 0 ) {
					var adminBarHeight = $adminBar.height();
					smoothScrollOffset += adminBarHeight;
				}
			}

			if ( smoothScrollOffset > 0 ) {
				smoothScrollOffset = - smoothScrollOffset;
			}

			return smoothScrollOffset;
		}

		function isValidSmoothScrollTarget( selector ) {
			if ( selector.match( /^([.#])(.+)/ ) ) {
				return true;
			}

			return false;
		}

		function handlerSmoothScroll( target ) {
			var offset = getSmoothScrollOffset();

			$.smoothScroll( {
				offset: offset,
				scrollTarget: $( target ),
				speed: 600,
				easing: 'linear'
			} );
		}

		function initSmartmenu() {
			var $primaryMenu = $pageHeader.find( '#page-navigation' ).find( 'ul' ).first();

			if ( ! $primaryMenu.hasClass( 'sm' ) ) {
				return;
			}

			$primaryMenu.smartmenus( {
				hideTimeout: 250,
				subMenusSubOffsetX: 0,
				subMenusSubOffsetY: - 17
			} );

			// Add animation for sub menu.
			$primaryMenu.on( {
				'show.smapi': function( e, menu ) {
					$( menu ).removeClass( 'hide-animation' ).addClass( 'show-animation' );
				},
				'hide.smapi': function( e, menu ) {
					$( menu ).removeClass( 'show-animation' ).addClass( 'hide-animation' );
				}
			} ).on( 'animationend webkitAnimationEnd oanimationend MSAnimationEnd', 'ul', function( e ) {
				$( this ).removeClass( 'show-animation hide-animation' );
				e.stopPropagation();
			} );
		}

		function initLightGallery( $gallery ) {
			var _download   = (
				    $maxcoach.light_gallery_download === '1'
			    ),
			    _autoPlay   = (
				    $maxcoach.light_gallery_auto_play === '1'
			    ),
			    _zoom       = (
				    $maxcoach.light_gallery_zoom === '1'
			    ),
			    _fullScreen = (
				    $maxcoach.light_gallery_full_screen === '1'
			    ),
			    _share      = (
				    $maxcoach.light_gallery_share === '1'
			    ),
			    _thumbnail  = (
				    $maxcoach.light_gallery_thumbnail === '1'
			    );

			var options = {
				selector: '.zoom',
				mode: 'lg-fade',
				thumbnail: _thumbnail,
				download: _download,
				autoplay: _autoPlay,
				zoom: _zoom,
				share: _share,
				fullScreen: _fullScreen,
				hash: false,
				animateThumb: false,
				showThumbByDefault: false,
				getCaptionFromTitleOrAlt: false
			};

			$gallery.lightGallery( options );
		}

		function scrollToTop() {
			if ( $maxcoach.scroll_top_enable != 1 ) {
				return;
			}
			var $scrollUp = $( '#page-scroll-up' );
			var lastScrollTop = 0;

			$window.on( 'scroll', function() {
				var st = $( this ).scrollTop();
				if ( st > lastScrollTop ) {
					$scrollUp.removeClass( 'show' );
				} else {
					if ( $window.scrollTop() > 200 ) {
						$scrollUp.addClass( 'show' );
					} else {
						$scrollUp.removeClass( 'show' );
					}
				}
				lastScrollTop = st;
			} );

			$scrollUp.on( 'click', function( evt ) {
				$( 'html, body' ).animate( { scrollTop: 0 }, 600 );
				evt.preventDefault();
			} );
		}

		function openMobileMenu() {
			$body.addClass( 'page-mobile-menu-opened' );

			$html.css( {
				'overflow': 'hidden'
			} );

			$( document ).trigger( 'mobileMenuOpen' );
		}

		function closeMobileMenu() {
			$body.removeClass( 'page-mobile-menu-opened' );

			$html.css( {
				'overflow': ''
			} );

			$( document ).trigger( 'mobileMenuClose' );
		}

		function calMobileMenuBreakpoint() {
			var _breakpoint = $maxcoach.mobile_menu_breakpoint;
			if ( wWidth <= _breakpoint ) {
				$body.removeClass( 'desktop-menu' ).addClass( 'mobile-menu' );
			} else {
				$body.addClass( 'desktop-menu' ).removeClass( 'mobile-menu' );
			}
		}

		function initMobileMenu() {
			$( '#page-open-mobile-menu' ).on( 'click', function( e ) {
				e.preventDefault();
				e.stopPropagation();

				openMobileMenu();
			} );

			$( '#page-close-mobile-menu' ).on( 'click', function( e ) {
				e.preventDefault();
				e.stopPropagation();

				closeMobileMenu();
			} );

			$( '#page-mobile-main-menu' ).on( 'click', function( e ) {
				if ( e.target !== this ) {
					return;
				}

				closeMobileMenu();
			} );

			var menu = $( '#mobile-menu-primary' );

			menu.on( 'click', 'a', function( e ) {
				var $this = $( this );
				var _li = $( this ).parent( 'li' );
				var target = getSmoothScrollTarget( $this );

				if ( $body.hasClass( 'one-page' ) && isValidSmoothScrollTarget( target ) ) {
					closeMobileMenu();

					_li.siblings( 'li' ).removeClass( 'current-menu-item' );
					_li.addClass( 'current-menu-item' );

					setTimeout( function() {
						handlerSmoothScroll( target );
					}, 300 );

					return false;
				}
			} );

			menu.on( 'click', '.toggle-sub-menu', function( e ) {
				var _li = $( this ).parents( 'li' ).first();

				e.preventDefault();
				e.stopPropagation();

				var _friends = _li.siblings( '.opened' );
				_friends.removeClass( 'opened' );
				_friends.find( '.opened' ).removeClass( 'opened' );
				_friends.find( '.sub-menu' ).stop().slideUp();

				if ( _li.hasClass( 'opened' ) ) {
					_li.removeClass( 'opened' );
					_li.find( '.opened' ).removeClass( 'opened' );
					_li.find( '.sub-menu' ).stop().slideUp();
				} else {
					_li.addClass( 'opened' );
					_li.children( '.sub-menu' ).stop().slideDown();
				}
			} );
		}

		function initOffCanvasMenu() {
			var menu = $( '#off-canvas-menu-primary' );
			var _lv1 = menu.children( 'li' );
			var $popup = $( '#popup-canvas-menu' );

			$( '#page-open-main-menu' ).on( 'click', function( e ) {
				e.preventDefault();
				$popup.addClass( 'open' );
				$body.addClass( 'page-popup-open' );
			} );

			$( '#page-close-main-menu' ).on( 'click', function( e ) {
				e.preventDefault();

				menu.fadeOut( function() {
					$body.removeClass( 'page-popup-open' );
					$popup.removeClass( 'open' );
					menu.fadeIn();
					menu.find( '.sub-menu' ).slideUp();
				} );
			} );

			var transDelay = 0.4;
			_lv1.each( function() {
				$( this )[ 0 ].setAttribute( 'style', '-webkit-transition-delay:' + transDelay + 's; -moz-transition-delay:' + transDelay + 's; -ms-transition-delay:' + transDelay + 's; -o-transition-delay:' + transDelay + 's; transition-delay:' + transDelay + 's' );
				transDelay += 0.1;
			} );

			menu.on( 'click', '.menu-item-has-children > a, .page_item_has_children > a', function( e ) {
				e.preventDefault();
				e.stopPropagation();

				var _li = $( this ).parent( 'li' );
				var _friends = _li.siblings( '.opened' );
				_friends.removeClass( 'opened' );
				_friends.find( '.opened' ).removeClass( 'opened' );
				_friends.find( '.sub-menu, .children' ).stop().slideUp();

				if ( _li.hasClass( 'opened' ) ) {
					_li.removeClass( 'opened' );
					_li.find( '.opened' ).removeClass( 'opened' );
					_li.find( '.sub-menu, .children' ).stop().slideUp();
				} else {
					_li.addClass( 'opened' );
					_li.children( '.sub-menu, .children' ).stop().slideDown();
				}
			} );
		}

		function initStickyHeader() {
			var $headerHolder = $pageHeader.children( '.page-header-place-holder' );
			if ( $maxcoach.header_sticky_enable == 1 && $pageHeader.length > 0 && $headerInner.data( 'sticky' ) == '1' ) {
				if ( $headerInner.data( 'header-vertical' ) != '1' ) {
					var _hOffset = $headerInner.offset().top;

					// Fix offset top return negative value on some devices.
					if ( _hOffset < 0 ) {
						_hOffset = 0;
					}

					var _hHeight = $headerInner.outerHeight();
					var offset = _hOffset + _hHeight + 100;

					if ( ! $pageHeader.hasClass( 'header-layout-fixed' ) ) {
						var _hHeight = $headerInner.outerHeight();

						$headerHolder.height( _hHeight );
						$headerInner.addClass( 'held' );
					}

					$pageHeader.headroom( {
						offset: offset,
						onTop: function() {
							if ( ! $pageHeader.hasClass( 'header-layout-fixed' ) ) {

								setTimeout( function() {
									var _hHeight = $headerInner.outerHeight();

									$headerHolder.height( _hHeight );
								}, 300 );
							}
						},
					} );
				} else {
					if ( wWidth <= $maxcoach.mobile_menu_breakpoint ) {
						if ( ! $pageHeader.data( 'headroom' ) ) {
							var _hOffset = $headerInner.offset().top;

							// Fix offset top return negative value on some devices.
							if ( _hOffset < 0 ) {
								_hOffset = 0;
							}

							var _hHeight = $headerInner.outerHeight();
							var offset = _hOffset + _hHeight + 100;

							$pageHeader.headroom( {
								offset: offset
							} );
						}
					} else {
						if ( $pageHeader.data( 'headroom' ) ) {
							$pageHeader.data( 'headroom' ).destroy();
							$pageHeader.removeData( 'headroom' );
						}
					}
				}
			}
		}

		function initSearchPopup() {
			var popupSearch = $( '#popup-search' );

			$( '#page-open-popup-search' ).on( 'click', function( e ) {
				e.preventDefault();

				$body.addClass( 'page-search-popup-opened' );
				popupSearch.addClass( 'open' );

				setTimeout( function() {
					popupSearch.find( '.search-field' ).focus();
				}, 500 );
			} );

			$( '#search-popup-close' ).on( 'click', function( e ) {
				e.preventDefault();

				$body.removeClass( 'page-search-popup-opened' );
				popupSearch.removeClass( 'open' );
			} );
		}

		function openOffSidebar() {
			$body.addClass( 'page-off-sidebar-opened' );
		}

		function closeOffSidebar() {
			$body.removeClass( 'page-off-sidebar-opened' );
		}

		function initOffSidebar() {
			$( '#page-open-off-sidebar' ).on( 'click', function( e ) {
				e.preventDefault();
				openOffSidebar();
			} );

			$( '#page-close-off-sidebar' ).on( 'click', function( e ) {
				e.preventDefault();
				closeOffSidebar();
			} );

			var offSidebar = $( '#page-off-sidebar' );

			offSidebar.on( 'click', function( e ) {
				if ( e.target !== this ) {
					return;
				}

				closeOffSidebar();
			} );
		}

		function initHeaderRightMoreTools() {
			var toggleBtn = $( '#page-open-components' );
			toggleBtn.on( 'click', function() {
				$body.toggleClass( 'header-more-tools-opened' );
			} );

			$( document ).on( 'click', function( evt ) {
				if ( evt.target.id === 'header-right-inner' ) {
					return;
				}

				if ( $( evt.target ).closest( '#header-right-inner' ).length ) {
					return;
				}

				if ( $( evt.target ).closest( toggleBtn ).length ) {
					return;
				}

				$body.removeClass( 'header-more-tools-opened' );
			} );
		}

		function initCookieNotice() {
			if ( $maxcoach.noticeCookieEnable == 1 && $maxcoach.noticeCookieConfirm != 'yes' && $maxcoach.noticeCookieMessages != '' ) {

				$.growl( {
					location: 'br',
					fixed: true,
					duration: 3600000,
					size: 'large',
					title: '',
					message: $maxcoach.noticeCookieMessages
				} );

				$( '#tm-button-cookie-notice-ok' ).on( 'click', function() {
					$( this ).parents( '.growl-message' ).first().siblings( '.growl-close' ).trigger( 'click' );

					var _data = {
						action: 'notice_cookie_confirm'
					};

					_data = $.param( _data );

					$.ajax( {
						url: $maxcoach.ajaxurl,
						type: 'POST',
						data: _data,
						dataType: 'json',
						success: function( results ) {

						},
						error: function( errorThrown ) {
							console.log( errorThrown );
						}
					} );
				} );
			}
		}

		function handlerPageNotFound() {
			if ( ! $body.hasClass( 'error404' ) ) {
				return;
			}

			$( '#btn-go-back' ).on( 'click', function( e ) {
				e.preventDefault();

				window.history.back();
			} );
		}

		function handlerVerticalHeader() {
			if ( $headerInner.data( 'header-vertical' ) != '1' ) {
				return;
			}

			var _wWidth = window.innerWidth;

			if ( _wWidth <= $maxcoach.mobile_menu_breakpoint ) {
				$html.css( {
					marginLeft: 0
				} );
			} else {
				var headerWidth = $headerInner.outerWidth();
				$html.css( {
					marginLeft: headerWidth + 'px'
				} );
			}
		}

		function handlerArchiveFiltering() {
			var $form = $( '#archive-form-filtering' );

			if ( $form.length > 0 ) {
				var $select = $form.find( 'select' );

				$select.on( 'change', function() {
					$( this ).closest( 'form' ).submit();
				} );
			}
		}

		function initHeaderSplitNavWithCenteredLogo() {
			if ( $pageHeader.data( 'centered-logo' ) !== 1 ) {
				return;
			}

			var $logo = $pageHeader.find( '.branding' );
			var $logoItem = $( '<li id="branding-logo-li" class="menu-item branding-logo-li"></li>' );
			$logoItem.append( $logo.clone() );

			var $menuContainer = $pageHeader.find( '.menu__container' );

			var menuNum = $menuContainer.children( 'li' ).length;
			var menuCenter = parseInt( Math.round( menuNum / 2 ), 10 );
			menuCenter -= 1;

			$menuContainer.children( 'li:eq(' + menuCenter + ')' ).after( $logoItem );
		}

	}( jQuery )
);
