(
	function( $ ) {
		'use strict';

		var $body = $( 'body' );

		var MaxcoachGridDataHandler = function( $scope, $ ) {
			var $element = $scope.find( '.maxcoach-grid-wrapper' );
			$element.find('.maxcoach-widget-nice-select').MaxcoachNiceSelect();
			$element.MaxcoachGridLayout().MaxcoachGridQuery();

			handlerOverlayHuge( $element );

			handlerOverlayMovement( $element );
		};

		function handlerOverlayMovement( $element ) {
			if ( ! $element.hasClass( 'portfolio-overlay-movement' ) ) {
				return;
			}

			$element.on( 'mousemove', '.post-wrapper', function( e ) {
				var offset = $( this ).offset();
				var x = e.pageX - offset.left;
				var y = e.pageY - offset.top;

				var mover = $( this ).find( '.post-overlay' );

				var moverW = mover.width();
				var moverH = mover.height();

				moverW /= 2;
				moverH /= 2;

				x -= moverW;
				y -= moverH;

				// Convert float number to int to fix box blur.
				var finalX = parseInt( x );
				var finalY = parseInt( y );

				mover.css( "transform", "translate3d(" + finalX + "px," + finalY + "px,0px)" );
			} );
		}

		function handlerOverlayHuge( $element ) {
			if ( ! $element.hasClass( 'portfolio-overlay-huge' ) ) {
				return;
			}

			$element.on( 'mouseenter', '.grid-item', function() {
				$element.addClass( 'on' );
				$body.addClass( 'portfolio-overlay-huge-on' );
			} );

			$element.on( 'mouseleave', '.grid-item', function() {
				$element.removeClass( 'on' );
				$body.removeClass( 'portfolio-overlay-huge-on' );
			} );
		}

		$( window ).on( 'elementor/frontend/init', function() {
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-portfolio.default', MaxcoachGridDataHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-blog.default', MaxcoachGridDataHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-product.default', MaxcoachGridDataHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-course.default', MaxcoachGridDataHandler );
		} );
	}
)( jQuery );
