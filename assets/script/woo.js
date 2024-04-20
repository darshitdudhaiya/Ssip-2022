jQuery( document ).ready( function( $ ) {
	'use strict';

	var $body = $( 'body' );

	initProductImagesSlider();
	initQuickViewPopup();

	function initProductImagesSlider() {
		if ( $maxcoach.isProduct === '1' && $maxcoach.productFeatureStyle === 'slider' ) {
			var $sliderWrap = $( '#woo-single-info' ).find( '.woo-single-gallery' );

			var options = {};
			if ( $sliderWrap.hasClass( 'has-thumbs-slider' ) ) {
				var thumbsSlider = $sliderWrap.children( '.maxcoach-thumbs-swiper' ).MaxcoachSwiper();
				options = {
					thumbs: {
						swiper: thumbsSlider
					}
				};
			}
			var mainSlider = $sliderWrap.children( '.maxcoach-main-swiper' ).MaxcoachSwiper( options );

			var $form = $( '.variations_form' );
			var variations = $form.data( 'product_variations' );

			$form.find( 'select' ).on( 'change', function() {
				var test = true;
				var globalAttrs = {};

				var formValues = $form.serializeArray();

				for ( var i = 0; i < formValues.length; i ++ ) {

					var _name = formValues[ i ].name;
					if ( _name.substring( 0, 10 ) === 'attribute_' ) {

						globalAttrs[ _name ] = formValues[ i ].value;

						if ( formValues[ i ].value === '' ) {
							test = false;

							break;
						}
					}
				}

				if ( test === true ) {
					globalAttrs = JSON.stringify( globalAttrs );

					for ( var i = variations.length - 1; i >= 0; i -- ) {
						var attributes = variations[ i ].attributes;
						var loopAttributes = JSON.stringify( attributes );

						if ( loopAttributes == globalAttrs ) {
							var url = variations[ i ].image.url;

							mainSlider.$wrapperEl.find( '.swiper-slide' ).each( function( index ) {
								var fullImage = $( this ).attr( 'data-src' );

								if ( fullImage === url ) {
									mainSlider.slideTo( index );

									return false;
								}
							} );
						}
					}
				} else {
					// Reset to main image.
					var $mainImage = mainSlider.$wrapperEl.find( '.product-main-image' );
					var index = $mainImage.index();
					mainSlider.slideTo( index );
				}
			} );
		}
	}

	function initQuickViewPopup() {
		$( '.maxcoach-product' ).on( 'click', '.quick-view-btn', function( e ) {
			e.preventDefault();
			e.stopPropagation();

			var $button = $( this );

			var $actions = $button.parents('.product-actions').first();
			$actions.addClass('refresh');

			$button.addClass( 'loading' );
			var productID = $button.data( 'pid' );

			/**
			 * Avoid duplicate ajax request.
			 */
			var $popup = $body.children( '#' + 'popup-product-quick-view-content-' + productID );
			if ( $popup.length > 0 ) {
				openQuickViewPopup( $popup, $button );
			} else {
				var data = {
					action: 'product_quick_view',
					pid: productID
				};

				$.ajax( {
					url: $maxcoach.ajaxurl,
					type: 'POST',
					data: $.param( data ),
					dataType: 'json',
					success: function( results ) {
						$popup = $( results.template );
						$body.append( $popup );
						openQuickViewPopup( $popup, $button );
					},
				} );
			}
		} );
	}

	function openQuickViewPopup( $popup, $button ) {
		$button.removeClass( 'loading' );

		$.magnificPopup.open( {
			mainClass: 'mfp-fade popup-product-quick-view',
			items: {
				src: $popup.html(),
				type: 'inline'
			},
			callbacks: {
				open: function() {
					var $sliderWrap = this.content.find( '.woo-single-gallery' );
					var thumbsSlider = $sliderWrap.children( '.maxcoach-thumbs-swiper' ).MaxcoachSwiper();
					var mainSlider = $sliderWrap.children( '.maxcoach-main-swiper' ).MaxcoachSwiper( {
						thumbs: {
							swiper: thumbsSlider
						}
					} );

					this.content.find( '.entry-summary .inner-content' ).perfectScrollbar( {
						suppressScrollX: true
					} );
				},
			}
		} );
	}
} );
