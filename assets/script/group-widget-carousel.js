(
	function( $ ) {
		'use strict';

		var SwiperHandler = function( $scope, $ ) {
			var $element = $scope.find( '.tm-slider-widget' );

			$element.MaxcoachSwiper();
		};

		var SwiperLinkedHandler = function( $scope, $ ) {
			var $element = $scope.find( '.tm-slider-widget' );

			if ( $scope.hasClass( 'maxcoach-swiper-linked-yes' ) ) {
				var thumbsSlider = $element.filter( '.maxcoach-thumbs-swiper' ).MaxcoachSwiper();
				var mainSlider = $element.filter( '.maxcoach-main-swiper' ).MaxcoachSwiper( {
					thumbs: {
						swiper: thumbsSlider
					}
				} );
			} else {
				$element.MaxcoachSwiper();
			}
		};

		$( window ).on( 'elementor/frontend/init', function() {
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-image-carousel.default', SwiperHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-modern-carousel.default', SwiperHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-modern-carousel-02.default', SwiperHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-modern-slider.default', SwiperHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-team-member-carousel.default', SwiperHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-portfolio-carousel.default', SwiperHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-course-carousel.default', SwiperHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-event-carousel.default', SwiperHandler );

			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-testimonial.default', SwiperLinkedHandler );
		} );
	}
)( jQuery );
