<?php
$connection = new PDO("mysql:host=localhost;port=3306;dbname=ssip", "root", "");

if(isset($_SESSION["user"]) && $_SESSION["user_type"] == 'School Panel'){
	$user = $_SESSION["user"];
	$select_request = "SELECT count(*) as RemarkedCount FROM pstudr WHERE status='remarked' and sc_name = '$user' ";
	$query_request = $connection->query($select_request);
	$result_all_remarked = $query_request->fetch(PDO::FETCH_ASSOC);
}
else if(isset($_SESSION["user"]) && $_SESSION["user_type"] == 'College Panel')
{
	$user = $_SESSION["user"];
	$select_request = "SELECT count(*) as RemarkedCount FROM pstudr WHERE status='remarked' and c_name = '$user' ";
	$query_request = $connection->query($select_request);
	$result_all_remarked = $query_request->fetch(PDO::FETCH_ASSOC);
}

$select_request = "SELECT count(*) as StudentCount FROM pstudr WHERE status='pending'";
$query_request = $connection->query($select_request);
$result_all = $query_request->fetch(PDO::FETCH_ASSOC);

$select_emp_request = "SELECT count(*) as EmpCount FROM emp_req WHERE status='pending'";
$query_emp_request = $connection->query($select_emp_request);
$result_emp_all = $query_emp_request->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from maxcoach.thememove.com/main/remote-training/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2022 05:13:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>SLMS &#8211; Student Life Cycle Management System</title>
	<meta name='robots' content='max-image-preview:large' />
	<link rel='dns-prefetch' href='http://client.crisp.chat/' />
	<link rel="alternate" type="application/rss+xml" title="MaxCoach &raquo; Feed" href="../feed/index.html" />
	<!-- <link rel="alternate" type="application/rss+xml" title="MaxCoach &raquo; Comments Feed"
		href="../comments/feed/index.html" /> -->
	<link rel='stylesheet' id='course-review-css' href='<?= urlOf('assets/css/course-review.css') ?>' media='all' />
	<link rel='stylesheet' id='wp-block-library-css' href='<?= urlOf('assets/css/style.min.css') ?>' media='all' />
	<link rel='stylesheet' id='wp-block-library-theme-css' href='<?= urlOf('assets/css/theme.min.css') ?>' media='all' />
	<link rel='stylesheet' id='wc-blocks-vendors-style-css' href='<?= urlOf('assets/css/wc-blocks-vendors-style.css') ?>' media='all' />
	<link rel='stylesheet' id='wc-blocks-style-css' href='<?= urlOf('assets/css/wc-blocks-style.css') ?>' media='all' />
	<link rel='stylesheet' id='wc-blocks-style-css' href='<?= urlOf('assets/css/sstyle.css') ?>' media='all' />
	<link rel='stylesheet' id='pmpro_frontend-css' href='<?= urlOf('assets/css/frontend.css') ?>' media='screen' />
	<link rel='stylesheet' id='pmpro_print-css' href='<?= urlOf('assets/css/print.css') ?>' media='print' />

	<style id='woocommerce-inline-inline-css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel='stylesheet' id='wpems-countdown-css-css' href='<?= urlOf('assets/css/jquery.countdown.css') ?>' media='all' />
	<link rel='stylesheet' id='wpems-fronted-css-css' href='<?= urlOf('assets/css/events.css') ?>' media='all' />
	<link rel='stylesheet' id='perfect-scrollbar-css' href='<?= urlOf('assets/css/perfect-scrollbar.min.css') ?>' media='all' />
	<link rel='stylesheet' id='woosw-frontend-css' href='<?= urlOf('assets/css/ffrontend.css') ?>' media='all' />
	<style id='woosw-frontend-inline-css'>
		.woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-notice {
			background-color: #5fbd74;
		}

		.woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-page a:hover,
		.woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-continue:hover {
			color: #5fbd74;
		}
	</style>
	<link rel='stylesheet' id='font-gilroy-css' href='<?= urlOf('assets/css/font-gilroy.css') ?>' media='all' />
	<link rel='stylesheet' id='font-awesome-pro-css' href='<?= urlOf('assets/css/fontawesome-all.min.css') ?>' media='all' />
	<link rel='stylesheet' id='swiper-css' href='<?= urlOf('assets/css/swiper.min.css') ?>' media='all' />
	<link rel='stylesheet' id='lightgallery-css' href='<?= urlOf('assets/css/lightgallery.min.css') ?>' media='all' />
	<!-- <link rel='stylesheet' id='maxcoach-style-css' href='<?= urlOf('assets/css/style.css') ?>' media='all' /> -->

	<style id='maxcoach-style-inline-css'>
		:root {
			--maxcoach-color-primary: #20AD96;
			--maxcoach-color-primary-rgb: 32, 173, 150;
			--maxcoach-color-secondary: #3F3A64;
			--maxcoach-color-text: #696969;
			--maxcoach-color-heading: #333;
			--maxcoach-color-link: #696969;
			--maxcoach-color-link-hover: #20AD96;
			--maxcoach-typography-body-font-family: Gilroy;
			--maxcoach-typography-body-font-size: 15px;
			--maxcoach-typography-body-font-weight: 400;
			--maxcoach-typography-body-line-height: 1.74;
			--maxcoach-typography-body-letter-spacing: 0em;
			--maxcoach-typography-headings-font-family: inherit;
			--maxcoach-typography-headings-font-weight: 700;
			--maxcoach-typography-headings-line-height: 1.3;
			--maxcoach-typography-headings-letter-spacing: 0em;
		}

		.boxed {
			max-width: 1200px
		}

		::-moz-selection {
			color: #fff;
			background-color: #20AD96
		}

		::selection {
			color: #fff;
			background-color: #20AD96
		}

		mark,
		.primary-color.primary-color,
		.growl-close:hover,
		.tm-button.style-border,
		.tm-button.style-thick-border,
		.maxcoach-infinite-loader,
		.maxcoach-blog .post-title a:hover,
		.maxcoach-blog .post-categories a:hover,
		.maxcoach-blog-caption-style-03 .tm-button,
		.tm-portfolio .post-categories a:hover,
		.tm-portfolio .post-title a:hover,
		.maxcoach-pricing .price-wrap,
		.maxcoach-timeline.style-01 .title,
		.maxcoach-timeline.style-01 .timeline-dot,
		.tm-google-map .style-signal .animated-dot,
		.maxcoach-list .marker,
		.maxcoach-mailchimp-form-style-01 .form-submit,
		.maxcoach-pricing-style-02 .maxcoach-pricing .maxcoach-pricing-features li i,
		.tm-social-networks .link:hover,
		.tm-social-networks.style-solid-rounded-icon .link,
		.maxcoach-team-member-style-01 .social-networks a:hover,
		.elementor-widget-tm-testimonial .testimonial-quote-icon,
		.maxcoach-modern-carousel-style-02 .slide-button,
		.tm-slider a:hover .heading,
		.woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-page a:hover,
		.woosw-continue:hover,
		.tm-menu .menu-price,
		.woocommerce-widget-layered-nav-list a:hover,
		.entry-post-tags a:hover,
		.post-share a:hover,
		.post-share.style-01 .share-media .share-icon,
		.blog-nav-links h6:before,
		.header-search-form .search-submit,
		.widget_search .search-submit,
		.widget_product_search .search-submit,
		.page-main-content .search-form .search-submit,
		.page-sidebar .widget_pages .current-menu-item>a,
		.page-sidebar .widget_nav_menu .current-menu-item>a,
		.page-sidebar .insight-core-bmw .current-menu-item>a,
		.comment-list .comment-actions a:hover,
		.portfolio-nav-links.style-01 .inner>a:hover,
		.portfolio-nav-links.style-02 .nav-list .hover,
		.maxcoach-main-post .course-price,
		.learn-press-content-protected-message a,
		.maxcoach-fake-select-wrap .maxcoach-fake-select li.selected:before,
		.maxcoach-course .course-info .course-price,
		.maxcoach-course .course-title a:hover,
		.learn-press-checkout .lp-list-table td.course-total,
		.learn-press-checkout .lp-list-table .cart-subtotal td,
		.learn-press-checkout .lp-list-table .order-total td,
		.single-lp_course .lp-single-course .course-author .author-social-networks a:hover,
		.single-lp_course .course-curriculum ul.curriculum-sections .section-content .course-item.has-status.passed .course-item-status,
		.widget_lp-widget-recent-courses .course-price,
		.single-lp_course .lp-single-course .course-price,
		.entry-course-share .share-media,
		.single-course-layout-02 .lp-single-course .entry-course-share .tm-button,
		.elementor-widget-tm-icon-box.maxcoach-icon-box-style-01 .maxcoach-box:hover div.tm-button.style-text,
		.elementor-widget-tm-icon-box.maxcoach-icon-box-style-01 a.tm-button.style-text:hover,
		.tm-image-box.maxcoach-box:hover div.tm-button.style-text,
		.tm-image-box a.tm-button.style-text:hover,
		.maxcoach-event-carousel .event-date,
		.maxcoach-event-carousel .tm-button.style-flat,
		.maxcoach-event .tm-button.style-flat,
		.maxcoach-event-grid .event-date--day,
		.maxcoach-event-grid.style-minimal .event-caption:before,
		.event-price,
		.event-register-message a,
		.maxcoach-event-grid.style-one-left-featured .normal-events .event-date,
		.tp_single_event .entry-meta .meta-icon,
		.tm-zoom-meeting .zoom-countdown .countdown-content .number,
		.dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-timer .dpn-zvc-timer-cell,
		.lp-pmpro-membership-list .lp-price .amount,
		#pmpro_level_cost strong,
		.widget_price_filter .ui-slider,
		.maxcoach-product .woocommerce-loop-product__title a:hover,
		.woocommerce .product-badges .onsale,
		.cart-collaterals .order-total .amount,
		.woocommerce-mini-cart__empty-message .empty-basket,
		.woocommerce .cart_list.product_list_widget a:hover,
		.woocommerce .cart.shop_table td.product-name a:hover,
		.woocommerce ul.product_list_widget li .product-title:hover,
		.entry-product-meta a:hover,
		.popup-product-quick-view .product_title a:hover {
			color: #20AD96
		}

		.primary-background-color,
		.wp-block-tag-cloud a:hover,
		.wp-block-calendar #today,
		.header-search-form .search-submit:hover,
		.maxcoach-fake-select-wrap .maxcoach-fake-select li:hover,
		.maxcoach-progress .progress-bar,
		.maxcoach-link-animate-border .heading-primary a mark:after,
		.tm-button.style-flat:before,
		.tm-button.style-border:after,
		.tm-button.style-thick-border:after,
		.maxcoach-tab-nav-buttons button:hover,
		.maxcoach-list .badge,
		.maxcoach-blog-caption-style-03 .tm-button.style-bottom-line .button-content-wrapper:after,
		.hint--primary:after,
		[data-fp-section-skin='dark'] #fp-nav ul li a span,
		[data-fp-section-skin='dark'] .fp-slidesNav ul li a span,
		.page-scroll-up,
		.top-bar-01 .top-bar-button,
		.tm-social-networks.style-flat-rounded-icon .link:hover,
		.tm-swiper .swiper-pagination-progressbar .swiper-pagination-progressbar-fill,
		.tm-social-networks.style-flat-rounded-icon .link,
		.tm-social-networks.style-solid-rounded-icon .link:hover,
		.portfolio-overlay-group-01.portfolio-overlay-colored-faded .post-overlay,
		.maxcoach-modern-carousel .slide-tag,
		.maxcoach-light-gallery .maxcoach-box .maxcoach-overlay,
		.maxcoach-accordion-style-02 .maxcoach-accordion .accordion-section.active .accordion-header,
		.maxcoach-accordion-style-02 .maxcoach-accordion .accordion-section:hover .accordion-header,
		.maxcoach-mailchimp-form-style-01 .form-submit:hover,
		.maxcoach-modern-carousel-style-02 .slide-button:after,
		.nav-links a:hover,
		.page-sidebar .insight-core-bmw li:hover a,
		.page-sidebar .insight-core-bmw li.current-menu-item a,
		.single-post .entry-post-feature.post-quote,
		.post-share.style-01 .share-media:hover .share-icon,
		.entry-portfolio-feature .gallery-item .overlay,
		.widget .tagcloud a:hover,
		.widget_calendar #today,
		.widget_search .search-submit:hover,
		.widget_product_search .search-submit:hover,
		.page-main-content .search-form .search-submit:hover,
		.woocommerce .select2-container--default .select2-results__option--highlighted[aria-selected],
		.select2-container--default .select2-results__option[aria-selected=true],
		.select2-container--default .select2-results__option[data-selected=true],
		.course-caption-style-02 .maxcoach-course .course-info .course-price,
		.course-caption-style-04 .maxcoach-course .course-info .course-price,
		.course-caption-style-05 .maxcoach-course .course-info .course-price,
		.course-caption-style-07 .maxcoach-course .course-info .course-price,
		.profile .author-social-networks a:hover,
		.profile .lp-tab-sections .section-tab.active span:after,
		#learn-press-course-tabs ul.learn-press-nav-tabs .course-nav:before,
		.learnpress .learn-press-progress .progress-bg .progress-active,
		.learnpress .learn-press-course-results-progress .items-progress .lp-course-status .grade.passed,
		.learnpress .learn-press-course-results-progress .course-progress .lp-course-status .grade.passed,
		.dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-timer .dpn-zvc-meeting-ended,
		.pmpro_form table th,
		.maxcoach-product.style-grid .woocommerce_loop_add_to_cart_wrap a:hover,
		.maxcoach-product.style-grid .quick-view-icon:hover,
		.maxcoach-product.style-grid .woosw-btn:hover,
		.maxcoach-product.style-grid .woosc-btn:hover,
		.wishlist-btn.style-01 a:hover,
		.compare-btn.style-01 a:hover,
		.woocommerce-info,
		.woocommerce-message,
		.woocommerce-MyAccount-navigation .is-active a,
		.woocommerce-MyAccount-navigation a:hover {
			background-color: #20AD96
		}

		.primary-background-color-important,
		.lg-progress-bar .lg-progress {
			background-color: #20AD96 !important
		}

		.wp-block-quote,
		.wp-block-quote.has-text-align-right,
		.wp-block-quote.has-text-align-right,
		.tm-button.style-border,
		.tm-button.style-thick-border,
		.maxcoach-tab-nav-buttons button:hover,
		.maxcoach-fake-select-wrap.focused .maxcoach-fake-select-current,
		.maxcoach-fake-select-wrap .maxcoach-fake-select-current:hover,
		.page-search-popup .search-field,
		.tm-social-networks.style-solid-rounded-icon .link,
		.tm-popup-video.type-button .video-play,
		.widget_pages .current-menu-item,
		.widget_nav_menu .current-menu-item,
		.insight-core-bmw .current-menu-item,
		.page-sidebar .insight-core-bmw li:hover a,
		.page-sidebar .insight-core-bmw li.current-menu-item a,
		.course-caption-style-07 .maxcoach-course .course-wrapper:hover .course-thumbnail-wrapper,
		.course-caption-style-09 .maxcoach-course .course-wrapper:hover .course-info,
		.wishlist-btn.style-01 a:hover,
		.compare-btn.style-01 a:hover,
		body.woocommerce-cart table.cart td.actions .coupon .input-text:focus,
		.woocommerce div.quantity .qty:focus,
		.woocommerce div.quantity button:hover:before,
		.woocommerce.single-product div.product .images .thumbnails .item img:hover {
			border-color: #20AD96
		}

		.single-product .woo-single-gallery .maxcoach-thumbs-swiper .swiper-slide:hover img,
		.single-product .woo-single-gallery .maxcoach-thumbs-swiper .swiper-slide-thumb-active img,
		.lg-outer .lg-thumb-item.active,
		.lg-outer .lg-thumb-item:hover {
			border-color: #20AD96 !important
		}

		.hint--primary.hint--top-left:before,
		.hint--primary.hint--top-right:before,
		.hint--primary.hint--top:before {
			border-top-color: #20AD96
		}

		.hint--primary.hint--right:before {
			border-right-color: #20AD96
		}

		.hint--primary.hint--bottom-left:before,
		.hint--primary.hint--bottom-right:before,
		.hint--primary.hint--bottom:before,
		.maxcoach-tabpanel.maxcoach-tabpanel-horizontal>.maxcoach-nav-tabs li.active a,
		.mini-cart .widget_shopping_cart_content,
		.single-product .woocommerce-tabs li.active,
		.woocommerce .select2-container .select2-choice {
			border-bottom-color: #20AD96
		}

		.hint--primary.hint--left:before,
		.tm-popup-video.type-button .video-play-icon:before {
			border-left-color: #20AD96
		}

		.maxcoach-accordion-style-01 .maxcoach-accordion .accordion-section.active .accordion-header,
		.maxcoach-accordion-style-01 .maxcoach-accordion .accordion-section:hover .accordion-header {
			background-color: rgba(32, 173, 150, 0.7)
		}

		.portfolio-overlay-group-01 .post-overlay {
			background-color: rgba(32, 173, 150, 0.8)
		}

		.maxcoach-testimonial-style-07 .testimonial-item {
			background-color: rgba(32, 173, 150, 0.1)
		}

		.secondary-color,
		.elementor-widget-tm-icon-box.maxcoach-icon-box-style-01 .tm-icon-box .heading,
		.maxcoach-blog-zigzag .post-title,
		.maxcoach-event-grid.style-one-left-featured .featured-event .event-date .event-date--month,
		.course-caption-style-02 .maxcoach-course .course-title {
			color: #3F3A64
		}

		.secondary-background-color,
		.tm-button.style-flat:after,
		.hint--secondary:after,
		.course-caption-style-11 .course-price,
		.dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn.btn-start-link {
			background-color: #3F3A64
		}

		.maxcoach-event .event-overlay-background,
		.maxcoach-event-carousel .event-overlay-background {
			background-color: rgba(63, 58, 100, 0.6)
		}

		.tm-zoom-meeting .zoom-countdown .countdown-content .text {
			color: rgba(63, 58, 100, 0.7)
		}

		.hint--secondary.hint--top-left:before,
		.hint--secondary.hint--top-right:before,
		.hint--secondary.hint--top:before {
			border-top-color: #3F3A64
		}

		.hint--secondary.hint--right:before {
			border-right-color: #3F3A64
		}

		.hint--secondary.hint--bottom-left:before,
		.hint--secondary.hint--bottom-right:before,
		.hint--secondary.hint--bottom:before {
			border-bottom-color: #3F3A64
		}

		.hint--secondary.hint--left:before {
			border-left-color: #3F3A64
		}

		.secondary-border-color {
			border-color: #3F3A64
		}

		.maxcoach-modern-carousel-02 .slide-decorate-text {
			color: rgba(63, 58, 100, 0.15)
		}

		.lg-backdrop {
			background-color: #000 !important
		}
	</style>
	<link rel='stylesheet' id='maxcoach-woocommerce-css' href='<?= urlOf('assets/css/woocommerce.css') ?>' media='all' />
	<link rel='stylesheet' id='perfect-scrollbar-woosw-css' href='<?= urlOf('assets/css/custom-theme.css') ?>' media='all' />
	<link rel='stylesheet' id='magnific-popup-css' href='<?= urlOf('assets/css/magnific-popup.css') ?>' media='all' />
	<link rel='stylesheet' id='maxcoach-zoom-meetings-css' href='<?= urlOf('assets/css/video-conferencing-zoom.css') ?>' media='all' />
	<link rel='stylesheet' id='elementor-icons-css' href='<?= urlOf('assets/css/elementor-icons.min.css') ?>' media='all' />
	<link rel='stylesheet' id='elementor-animations-css' href='<?= urlOf('assets/css/animations.min.css') ?>' media='all' />
	<link rel='stylesheet' id='elementor-frontend-legacy-css' href='<?= urlOf('assets/css/frontend-legacy.min.css') ?>' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='<?= urlOf('assets/css/frontend.min.css') ?>' media='all' />
	<style id='elementor-frontend-inline-css'>
		@font-face {
			font-family: eicons;
			src: url(<?= 'assets/font/eicons0b93.eot?5.10.0' ?>);
			src: url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
			font-weight: 400;
			font-style: normal
		}
	</style>
	<link rel='stylesheet' id='elementor-post-1867-css' href='<?= urlOf('assets/css/post-1867.css') ?>' media='all' />
	<link rel='stylesheet' id='elementor-pro-css' href='<?= urlOf('assets/css/fffrontend.min.css') ?>' media='all' />
	<link rel='stylesheet' id='elementor-post-786-css' href='<?= urlOf('assets/css/post-786.css') ?>' media='all' />
	<link rel='stylesheet' id='elementor-post-230-css' href='<?= urlOf('assets/css/post-230.css') ?>' media='all' />
	<link rel='stylesheet' id='elementor-post-642-css' href='<?= urlOf('assets/css/post-642.css') ?>' media='all' />
	<link rel='stylesheet' id='dashicons-css' href='<?= urlOf('assets/css/dashicons.min.css') ?>' media='all' />
	<link rel='stylesheet' id='maxcoach-child-demo-style-css' href='<?= urlOf('assets/css/style.css') ?>' media='all' />
	<link rel='stylesheet' id='video-conferencing-with-zoom-api-css' href='<?= urlOf('assets/css/style.min.css') ?>' media='all' />
	<link rel='stylesheet' id='video-conferencing-with-zoom-api-css' href='<?= urlOf('assets/css/sstyle.min.css') ?>' media='all' />
	<link rel='stylesheet' id='learnpress-css' href='<?= urlOf('assets/css/learnpress.css') ?>' media='all' />
	<link rel='stylesheet' id='learnpress-widgets-css' href='<?= urlOf('assets/css/widgets.css') ?>' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto' media='all' />
	<script src='<?= urlOf('assets/script/jquery.min.js') ?>' id='jquery-core-js'></script>
	<script src='<?= urlOf('assets/script/jquery-migrate.min.js') ?>' id='jquery-migrate-js'></script>
	<script src='<?= urlOf('assets/script/rbtools.min.js') ?>' async id='tp-tools-js'></script>
	<script src='<?= urlOf('assets/script/rs6.min.js') ?>' async id='revmin-js'></script>
	<link rel="https://api.w.org/" href="<?= urlOf('assets/json/index.html') ?>" />
	<link rel="alternate" type="application/json" href="<?= urlOf('assets/json/786.json') ?>" />
	<link rel="canonical" href="index.html" />

	<style id="learn-press-custom-css">
		:root {
			--lp-primary-color: #ffb606;
			--lp-secondary-color: #442e66;
		}
	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-2E1D5791EG"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());

		gtag('config', 'G-2E1D5791EG');
	</script>
	<link rel="icon" href="<?= urlOf('assets/images/indian-government-logo.png') ?>" sizes="32x32">
	<link rel="icon" href="<?= urlOf('assets/images/indian-government-logo.png') ?>" sizes="192x192">
	<link rel="apple-touch-icon-precomposed" href="<?= urlOf('assets/images/indian-government-logo.png') ?>">
	<meta name="msapplication-TileImage" content="<?= urlOf('assets/images/indian-government-logo.png') ?>">
	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<script>
		function setREVStartSize(e) {
			//window.requestAnimationFrame(function() {
			window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
			window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
			try {
				var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
				pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
				e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
				e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
				e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
				e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
				e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
				e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
				e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
				if (e.layout === "fullscreen" || e.l === "fullscreen")
					newh = Math.max(e.mh, window.RSIH);
				else {
					e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
					for (var i in e.rl)
						if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
					e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
					e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
					for (var i in e.rl)
						if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

					var nl = new Array(e.rl.length),
						ix = 0,
						sl;
					e.tabw = e.tabhide >= pw ? 0 : e.tabw;
					e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
					e.tabh = e.tabhide >= pw ? 0 : e.tabh;
					e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
					for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
					sl = nl[0];
					for (var i in nl)
						if (sl > nl[i] && nl[i] > 0) {
							sl = nl[i];
							ix = i;
						}
					var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
					newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
				}
				var el = document.getElementById(e.c);
				if (el !== null && el) el.style.height = newh + "px";
				el = document.getElementById(e.c + "_wrapper");
				if (el !== null && el) {
					el.style.height = newh + "px";
					el.style.display = "block";
				}
			} catch (e) {
				console.log("Failure at Presize of Slider:" + e)
			}
			//});
		};
	</script>
	<style id="kirki-inline-styles">
		body,
		.gmap-marker-wrap {
			color: #696969;
			font-family: Gilroy;
			font-size: 15px;
			font-weight: 400;
			letter-spacing: 0em;
			line-height: 1.74;
		}

		a {
			color: #696969;
		}

		a:hover,
		a:focus,
		.maxcoach-map-overlay-info a:hover,
		.widget_rss li a:hover,
		.widget_recent_entries li a:hover,
		.widget_recent_entries li a:after {
			color: #20AD96;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		caption,
		th,
		blockquote,
		.heading,
		.heading-color,
		.widget_rss li a,
		.maxcoach-grid-wrapper.filter-style-01 .btn-filter.current,
		.maxcoach-grid-wrapper.filter-style-01 .btn-filter:hover,
		.elementor-accordion .elementor-tab-title,
		.tm-table.style-01 td,
		.tm-table caption,
		.page-links>span,
		.page-links>a:hover,
		.page-links>a:focus,
		.comment-nav-links li .current,
		.page-pagination li .current,
		.comment-nav-links li>a:hover,
		.page-pagination li>a:hover,
		.page-numbers li>a:hover,
		.page-numbers li .current,
		.woocommerce nav.woocommerce-pagination ul li span.current,
		.woocommerce nav.woocommerce-pagination ul li a:hover,
		.dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-tile h3,
		.learn-press-pagination ul.page-numbers li .current,
		.learn-press-pagination ul.page-numbers li a:hover,
		.learnpress .question-numbers li.current a span,
		.learnpress .question-numbers li a:hover span,
		.single-product form.cart .label>label,
		.single-product form.cart .quantity-button-wrapper>label,
		.single-product form.cart .wccpf_label>label,
		.learn-press-form .form-fields .form-field label,
		.entry-course-info .meta-label,
		.entry-event-info .meta-label,
		.answer-options .answer-option .option-title .option-title-content,
		.comment-list .comment-actions a {
			color: #333;
		}

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.wp-block-button__link,
		.button,
		.elementor-button,
		.event_auth_button,
		.pmpro_btn,
		.pmpro_btn:link,
		.pmpro_content_message a,
		.pmpro_content_message a:link,
		.dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn {
			color: #fff;
			border-color: #20AD96;
			background-color: #20AD96;
		}

		.wp-block-button.is-style-outline {
			color: #20AD96;
		}

		.maxcoach-booking-form #flexi_searchbox #b_searchboxInc .b_submitButton_wrapper .b_submitButton {
			color: #fff !important;
			border-color: #20AD96 !important;
			background-color: #20AD96 !important;
		}

		button:hover,
		input[type="button"]:hover,
		input[type="reset"]:hover,
		input[type="submit"]:hover,
		.wp-block-button__link:hover,
		.button:hover,
		.button:focus,
		.elementor-button:hover,
		.event_auth_button:hover,
		.pmpro_btn:hover,
		.pmpro_btn:link:hover,
		.pmpro_content_message a:hover,
		.pmpro_content_message a:link:hover,
		.dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn:hover {
			color: #fff;
			border-color: #3F3A64;
			background-color: #3F3A64;
		}

		.wp-block-button.is-style-outline .wp-block-button__link:hover {
			color: #3F3A64;
		}

		.maxcoach-booking-form #flexi_searchbox #b_searchboxInc .b_submitButton_wrapper .b_submitButton:hover {
			color: #fff !important;
			border-color: #3F3A64 !important;
			background-color: #3F3A64 !important;
		}

		input[type='text'],
		input[type='email'],
		input[type='url'],
		input[type='password'],
		input[type='search'],
		input[type='number'],
		input[type='tel'],
		select,
		textarea,
		.woocommerce .select2-container--default .select2-selection--single,
		.woocommerce .select2-container--default .select2-search--dropdown .select2-search__field,
		.elementor-field-group .elementor-field-textual {
			color: #7e7e7e;
			border-color: #f5f5f5;
			background-color: #f5f5f5;
			font-size: 15px;
			font-weight: 400;
			letter-spacing: 0em;
		}

		input[type='checkbox']:before,
		input[type='radio']:before {
			border-color: #f5f5f5;
			background-color: #f5f5f5;
		}

		input[type='text']:focus,
		input[type='email']:focus,
		input[type='url']:focus,
		input[type='password']:focus,
		input[type='search']:focus,
		input[type='number']:focus,
		input[type='tel']:focus,
		textarea:focus,
		select:focus,
		select:focus,
		textarea:focus,
		.woocommerce .select2-container--default .select2-search--dropdown .select2-search__field:focus,
		.woocommerce .select2-container--open.select2-container--default .select2-selection--single,
		.woocommerce .select2-container--open.select2-container--default .select2-dropdown,
		.elementor-field-group .elementor-field-textual:focus {
			color: #777;
			border-color: #20AD96;
			background-color: #fff;
		}

		input[type='checkbox']:checked:before,
		input[type='checkbox']:hover:before,
		input[type='radio']:checked:before,
		input[type='radio']:hover:before {
			border-color: #20AD96;
		}

		input[type='checkbox']:after,
		input[type='radio']:after {
			background-color: #20AD96;
		}

		input[type='checkbox']:checked:before,
		input[type='radio']:checked:before {
			background-color: #fff;
		}

		.top-bar-01 {
			padding-top: 0px;
			padding-bottom: 0px;
			background-color: #F5F5F5;
			border-bottom-width: 0px;
			border-bottom-color: #eee;
			color: #777;
		}

		.top-bar-01,
		.top-bar-01 a {
			font-size: 14px;
			line-height: 1.78;
		}

		.top-bar-01 a {
			color: #777;
		}

		.top-bar-01 a:hover,
		.top-bar-01 a:focus {
			color: #20AD96;
		}

		.top-bar-02 {
			padding-top: 0px;
			padding-bottom: 0px;
			border-bottom-width: 1px;
			border-bottom-color: #eee;
			color: #777;
		}

		.top-bar-02,
		.top-bar-02 a {
			font-size: 14px;
			line-height: 1.78;
		}

		.top-bar-02 a {
			color: #777;
		}

		.top-bar-02 a:hover,
		.top-bar-02 a:focus {
			color: #20AD96;
		}

		.headroom--not-top .page-header-inner .header-wrap {
			min-height: 80px;
		}

		.headroom--not-top .page-header-inner {
			padding-top: 0px !important;
			padding-bottom: 0px !important;
		}

		#page-header.headroom--not-top .page-header-inner {
			background: #ffffff;
			background-color: #ffffff;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.page-header.headroom--not-top .header-icon,
		.page-header.headroom--not-top .wpml-ls-item-toggle {
			color: #111 !important;
		}

		.page-header.headroom--not-top .header-icon:hover {
			color: #111 !important;
		}

		.page-header.headroom--not-top .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #111 !important;
		}

		.page-header.headroom--not-top .mini-cart .mini-cart-icon:after {
			color: #fff !important;
			background-color: #111 !important;
		}

		.page-header.headroom--not-top .header-social-networks a {
			color: #111 !important;
		}

		.page-header.headroom--not-top .header-social-networks a:hover {
			color: #111 !important;
		}

		.page-header.headroom--not-top .menu--primary>ul>li>a {
			color: #111 !important;
		}

		.page-header.headroom--not-top .menu--primary>li:hover>a,
		.page-header.headroom--not-top .menu--primary>ul>li>a:hover,
		.page-header.headroom--not-top .menu--primary>ul>li>a:focus,
		.page-header.headroom--not-top .menu--primary>ul>.current-menu-ancestor>a,
		.page-header.headroom--not-top .menu--primary>ul>.current-menu-item>a {
			color: #20AD96 !important;
		}

		.header-sticky-button.tm-button {
			color: #111;
			border-color: #eee;
		}

		.header-sticky-button.tm-button:before {
			background: rgba(17, 17, 17, 0);
		}

		.header-sticky-button.tm-button:hover {
			color: #fff;
			border-color: #111;
		}

		.header-sticky-button.tm-button:after {
			background: #111;
		}

		#page-header.headroom--not-top .search-field {
			color: #696969;
			border-color: #f5f5f5;
			background: #f5f5f5;
		}

		#page-header.headroom--not-top .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-more-tools-opened .header-right-inner {
			background: #ffffff;
			background-color: #ffffff;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.header-more-tools-opened .header-right-inner .header-icon,
		.header-more-tools-opened .header-right-inner .wpml-ls-item-toggle {
			color: #333 !important;
		}

		.header-more-tools-opened .header-right-inner .header-icon:hover {
			color: #20AD96 !important;
		}

		.header-more-tools-opened .header-right-inner .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96 !important;
		}

		.header-more-tools-opened .header-right-inner .mini-cart .mini-cart-icon:after {
			color: #fff !important;
			background-color: #111 !important;
		}

		.header-more-tools-opened .header-right-inner .header-social-networks a {
			color: #333 !important;
		}

		.header-more-tools-opened .header-right-inner .header-social-networks a:hover {
			color: #20AD96 !important;
		}

		.header-01 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-01 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-01 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-01.header-dark .page-header-inner {
			background: #fff;
			background-color: #fff;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			border-color: #eee;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-01.header-dark .header-icon,
		.header-01.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-01.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-01.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-01.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-01.header-dark .menu--primary>ul>li>a {
			color: #333;
		}

		.header-01.header-dark .menu--primary>ul>li:hover>a,
		.header-01.header-dark .menu--primary>ul>li>a:hover,
		.header-01.header-dark .menu--primary>ul>li>a:focus,
		.header-01.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-01.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-01.header-dark .search-field {
			color: #696969;
			border-color: #f5f5f5;
			background: #f5f5f5;
		}

		.header-01.header-dark .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-01.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-01.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-01.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-01.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-01.header-dark .header-social-networks a {
			color: #333;
		}

		.header-01.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-01.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-01.header-light .header-icon,
		.header-01.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-01.header-light .header-icon:hover {
			color: #fff;
		}

		.header-01.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-01.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-01.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-01.header-light .menu--primary>ul>li:hover>a,
		.header-01.header-light .menu--primary>ul>li>a:hover,
		.header-01.header-light .menu--primary>ul>li>a:focus,
		.header-01.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-01.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-01.header-light .search-field {
			color: #696969;
			border-color: #fff;
			background: #fff;
		}

		.header-01.header-light .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-01.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-01.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-01.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-01.header-light .header-button:after {
			background: #fff;
		}

		.header-01.header-light .header-social-networks a {
			color: #fff;
		}

		.header-01.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-02 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-02 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-02 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-02.header-dark .page-header-inner {
			border-color: #eee;
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-02.header-dark .header-icon,
		.header-02.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-02.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-02.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-02.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-02.header-dark .menu--primary>ul>li>a {
			color: #3F3A64;
		}

		.header-02.header-dark .menu--primary>ul>li:hover>a,
		.header-02.header-dark .menu--primary>ul>li>a:hover,
		.header-02.header-dark .menu--primary>ul>li>a:focus,
		.header-02.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-02.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-02.header-dark .search-field {
			color: #696969;
			border-color: #f5f5f5;
			background: #f5f5f5;
		}

		.header-02.header-dark .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-02.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-02.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-02.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-02.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-02.header-dark .header-social-networks a {
			color: #333;
		}

		.header-02.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-02.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-02.header-light .header-icon,
		.header-02.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-02.header-light .header-icon:hover {
			color: #fff;
		}

		.header-02.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-02.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-02.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-02.header-light .menu--primary>ul>li:hover>a,
		.header-02.header-light .menu--primary>ul>li>a:hover,
		.header-02.header-light .menu--primary>ul>li>a:focus,
		.header-02.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-02.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-02.header-light .search-field {
			color: #696969;
			border-color: #fff;
			background: #fff;
		}

		.header-02.header-light .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-02.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-02.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-02.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-02.header-light .header-button:after {
			background: #fff;
		}

		.header-02.header-light .header-social-networks a {
			color: #fff;
		}

		.header-02.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-03 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-03 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-03 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-03.header-dark .page-header-inner {
			border-color: #eee;
		}

		.header-03.header-dark .header-icon,
		.header-03.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-03.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-03.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-03.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-03.header-dark .menu--primary>ul>li>a {
			color: #3F3A64;
		}

		.header-03.header-dark .menu--primary>ul>li:hover>a,
		.header-03.header-dark .menu--primary>ul>li>a:hover,
		.header-03.header-dark .menu--primary>ul>li>a:focus,
		.header-03.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-03.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-03.header-dark .search-field {
			color: #8C89A2;
			border-color: #ffffff;
			background: #ffffff;
		}

		.header-03.header-dark .search-field:focus {
			color: #3F3A64;
			border-color: #20AD96;
			background: #fff;
		}

		.header-03.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-03.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-03.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-03.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-03.header-dark .header-social-networks a {
			color: #333;
		}

		.header-03.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-03.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
		}

		.header-03.header-light .header-icon,
		.header-03.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-03.header-light .header-icon:hover {
			color: #fff;
		}

		.header-03.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-03.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-03.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-03.header-light .menu--primary>ul>li:hover>a,
		.header-03.header-light .menu--primary>ul>li>a:hover,
		.header-03.header-light .menu--primary>ul>li>a:focus,
		.header-03.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-03.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-03.header-light .search-field {
			color: #696969;
			border-color: #fff;
			background: #fff;
		}

		.header-03.header-light .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-03.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-03.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-03.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-03.header-light .header-button:after {
			background: #fff;
		}

		.header-03.header-light .header-social-networks a {
			color: #fff;
		}

		.header-03.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-04 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-04 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-04 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-04.header-dark .page-header-inner {
			border-color: #eee;
		}

		.header-04.header-dark .header-icon,
		.header-04.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-04.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-04.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-04.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-04.header-dark .menu--primary>ul>li>a {
			color: #3F3A64;
		}

		.header-04.header-dark .menu--primary>ul>li:hover>a,
		.header-04.header-dark .menu--primary>ul>li>a:hover,
		.header-04.header-dark .menu--primary>ul>li>a:focus,
		.header-04.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-04.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-04.header-dark .search-field {
			color: #696969;
			border-color: #f5f5f5;
			background: #f5f5f5;
		}

		.header-04.header-dark .search-field:focus {
			color: #3F3A64;
			border-color: #20AD96;
			background: #fff;
		}

		.header-04.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-04.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-04.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-04.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-04.header-dark .header-social-networks a {
			color: #333;
		}

		.header-04.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-04.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
		}

		.header-04.header-light .header-icon,
		.header-04.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-04.header-light .header-icon:hover {
			color: #fff;
		}

		.header-04.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-04.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-04.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-04.header-light .menu--primary>ul>li:hover>a,
		.header-04.header-light .menu--primary>ul>li>a:hover,
		.header-04.header-light .menu--primary>ul>li>a:focus,
		.header-04.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-04.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-04.header-light .search-field {
			color: #696969;
			border-color: #fff;
			background: #fff;
		}

		.header-04.header-light .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-04.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-04.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-04.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-04.header-light .header-button:after {
			background: #fff;
		}

		.header-04.header-light .header-social-networks a {
			color: #fff;
		}

		.header-04.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-05 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-05 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-05 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-05.header-dark .page-header-inner {
			border-color: #eee;
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-05.header-dark .header-icon,
		.header-05.header-dark .wpml-ls-item-toggle {
			color: #696969;
		}

		.header-05.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-05.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-05.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-05.header-dark .menu--primary>ul>li>a {
			color: #333;
		}

		.header-05.header-dark .menu--primary>ul>li:hover>a,
		.header-05.header-dark .menu--primary>ul>li>a:hover,
		.header-05.header-dark .menu--primary>ul>li>a:focus,
		.header-05.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-05.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-05.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-05.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-05.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-05.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-05.header-dark .header-social-networks a {
			color: #696969;
		}

		.header-05.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-05.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-05.header-light .header-icon,
		.header-05.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-05.header-light .header-icon:hover {
			color: #fff;
		}

		.header-05.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-05.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-05.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-05.header-light .menu--primary>ul>li:hover>a,
		.header-05.header-light .menu--primary>ul>li>a:hover,
		.header-05.header-light .menu--primary>ul>li>a:focus,
		.header-05.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-05.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-05.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-05.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-05.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-05.header-light .header-button:after {
			background: #fff;
		}

		.header-05.header-light .header-social-networks a {
			color: #fff;
		}

		.header-05.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-06 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-06 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-06 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 10px;
			padding-right: 10px;
		}

		.header-06.header-dark .page-header-inner {
			border-color: #eee;
		}

		.header-06.header-dark .header-icon,
		.header-06.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-06.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-06.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-06.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-06.header-dark .menu--primary>ul>li>a {
			color: #3F3A64;
		}

		.header-06.header-dark .menu--primary>ul>li:hover>a,
		.header-06.header-dark .menu--primary>ul>li>a:hover,
		.header-06.header-dark .menu--primary>ul>li>a:focus,
		.header-06.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-06.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-06.header-dark .search-field {
			color: #696969;
			border-color: #f5f5f5;
			background: #f5f5f5;
		}

		.header-06.header-dark .search-field:focus {
			color: #3F3A64;
			border-color: #20AD96;
			background: #fff;
		}

		.header-06.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-06.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-06.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-06.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-06.header-dark .header-social-networks a {
			color: #333;
		}

		.header-06.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-06.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
		}

		.header-06.header-light .header-icon,
		.header-06.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-06.header-light .header-icon:hover {
			color: #fff;
		}

		.header-06.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-06.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-06.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-06.header-light .menu--primary>ul>li:hover>a,
		.header-06.header-light .menu--primary>ul>li>a:hover,
		.header-06.header-light .menu--primary>ul>li>a:focus,
		.header-06.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-06.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-06.header-light .search-field {
			color: #696969;
			border-color: #fff;
			background: #fff;
		}

		.header-06.header-light .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-06.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-06.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-06.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-06.header-light .header-button:after {
			background: #fff;
		}

		.header-06.header-light .header-social-networks a {
			color: #fff;
		}

		.header-06.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-07 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-07 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-07 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-07.header-dark .page-header-inner {
			border-color: #eee;
		}

		.header-07.header-dark .header-icon,
		.header-07.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-07.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-07.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-07.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-07.header-dark .menu--primary>ul>li>a {
			color: #3F3A64;
		}

		.header-07.header-dark .menu--primary>ul>li:hover>a,
		.header-07.header-dark .menu--primary>ul>li>a:hover,
		.header-07.header-dark .menu--primary>ul>li>a:focus,
		.header-07.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-07.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-07.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-07.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-07.header-dark .header-button:hover {
			color: #fff;
			border-color: #3F3A64;
		}

		.header-07.header-dark .header-button:after {
			background: #3F3A64;
		}

		.header-07.header-dark .header-social-networks a {
			color: #333;
		}

		.header-07.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-07.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
		}

		.header-07.header-light .header-icon,
		.header-07.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-07.header-light .header-icon:hover {
			color: #fff;
		}

		.header-07.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-07.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-07.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-07.header-light .menu--primary>ul>li:hover>a,
		.header-07.header-light .menu--primary>ul>li>a:hover,
		.header-07.header-light .menu--primary>ul>li>a:focus,
		.header-07.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-07.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-07.header-light .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-07.header-light .header-button:before {
			background: #20AD96;
		}

		.header-07.header-light .header-button:hover {
			color: #20AD96;
			border-color: #fff;
		}

		.header-07.header-light .header-button:after {
			background: #fff;
		}

		.header-07.header-light .header-social-networks a {
			color: #fff;
		}

		.header-07.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-08 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-08 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 600;
			line-height: 1.4;
		}

		.desktop-menu .header-08 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-08.header-dark .page-header-inner {
			background: #fff;
			background-color: #fff;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			border-color: #eee;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-08.header-dark .header-icon,
		.header-08.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-08.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-08.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-08.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-08.header-dark .menu--primary>ul>li>a {
			color: #3F3A64;
		}

		.header-08.header-dark .menu--primary>ul>li:hover>a,
		.header-08.header-dark .menu--primary>ul>li>a:hover,
		.header-08.header-dark .menu--primary>ul>li>a:focus,
		.header-08.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-08.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-08.header-dark .search-field {
			color: #696969;
			border-color: #f5f5f5;
			background: #f5f5f5;
		}

		.header-08.header-dark .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-08.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-08.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-08.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-08.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-08.header-dark .header-social-networks a {
			color: #333;
		}

		.header-08.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-08.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-08.header-light .header-icon,
		.header-08.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-08.header-light .header-icon:hover {
			color: #fff;
		}

		.header-08.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-08.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-08.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-08.header-light .menu--primary>ul>li:hover>a,
		.header-08.header-light .menu--primary>ul>li>a:hover,
		.header-08.header-light .menu--primary>ul>li>a:focus,
		.header-08.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-08.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-08.header-light .search-field {
			color: #696969;
			border-color: #fff;
			background: #fff;
		}

		.header-08.header-light .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-08.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-08.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-08.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-08.header-light .header-button:after {
			background: #fff;
		}

		.header-08.header-light .header-social-networks a {
			color: #fff;
		}

		.header-08.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-09 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-09 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-09 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-09.header-dark .page-header-inner {
			background: #fff;
			background-color: #fff;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			border-color: #eee;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-09.header-dark .header-icon,
		.header-09.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-09.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-09.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-09.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-09.header-dark .menu--primary>ul>li>a {
			color: #333;
		}

		.header-09.header-dark .menu--primary>ul>li:hover>a,
		.header-09.header-dark .menu--primary>ul>li>a:hover,
		.header-09.header-dark .menu--primary>ul>li>a:focus,
		.header-09.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-09.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-09.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-09.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-09.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-09.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-09.header-dark .header-social-networks a {
			color: #333;
		}

		.header-09.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-09.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-09.header-light .header-icon,
		.header-09.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-09.header-light .header-icon:hover {
			color: #fff;
		}

		.header-09.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-09.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-09.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-09.header-light .menu--primary>ul>li:hover>a,
		.header-09.header-light .menu--primary>ul>li>a:hover,
		.header-09.header-light .menu--primary>ul>li>a:focus,
		.header-09.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-09.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-09.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-09.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-09.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-09.header-light .header-button:after {
			background: #fff;
		}

		.header-09.header-light .header-social-networks a {
			color: #fff;
		}

		.header-09.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-10 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-10 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-10 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-10.header-dark .page-header-inner {
			border-color: #eee;
		}

		.header-10.header-dark .header-icon,
		.header-10.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-10.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-10.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-10.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-10.header-dark .menu--primary>ul>li>a {
			color: #3F3A64;
		}

		.header-10.header-dark .menu--primary>ul>li:hover>a,
		.header-10.header-dark .menu--primary>ul>li>a:hover,
		.header-10.header-dark .menu--primary>ul>li>a:focus,
		.header-10.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-10.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-10.header-dark .search-field {
			color: #696969;
			border-color: #f5f5f5;
			background: #f5f5f5;
		}

		.header-10.header-dark .search-field:focus {
			color: #3F3A64;
			border-color: #20AD96;
			background: #fff;
		}

		.header-10.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-10.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-10.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-10.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-10.header-dark .header-social-networks a {
			color: #333;
		}

		.header-10.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-10.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
		}

		.header-10.header-light .header-icon,
		.header-10.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-10.header-light .header-icon:hover {
			color: #fff;
		}

		.header-10.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-10.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-10.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-10.header-light .menu--primary>ul>li:hover>a,
		.header-10.header-light .menu--primary>ul>li>a:hover,
		.header-10.header-light .menu--primary>ul>li>a:focus,
		.header-10.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-10.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-10.header-light .search-field {
			color: #696969;
			border-color: #fff;
			background: #fff;
		}

		.header-10.header-light .search-field:focus {
			color: #333;
			border-color: #20AD96;
			background: #fff;
		}

		.header-10.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-10.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-10.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-10.header-light .header-button:after {
			background: #fff;
		}

		.header-10.header-light .header-social-networks a {
			color: #fff;
		}

		.header-10.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-11 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-11 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-11 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-11.header-dark .page-header-inner {
			border-color: #eee;
		}

		.header-11.header-dark .header-icon,
		.header-11.header-dark .wpml-ls-item-toggle {
			color: #696969;
		}

		.header-11.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-11.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-11.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-11.header-dark .menu--primary>ul>li>a {
			color: #333;
		}

		.header-11.header-dark .menu--primary>ul>li:hover>a,
		.header-11.header-dark .menu--primary>ul>li>a:hover,
		.header-11.header-dark .menu--primary>ul>li>a:focus,
		.header-11.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-11.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-11.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-11.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-11.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-11.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-11.header-dark .header-social-networks a {
			color: #696969;
		}

		.header-11.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-11.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
		}

		.header-11.header-light .header-icon,
		.header-11.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-11.header-light .header-icon:hover {
			color: #fff;
		}

		.header-11.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-11.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-11.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-11.header-light .menu--primary>ul>li:hover>a,
		.header-11.header-light .menu--primary>ul>li>a:hover,
		.header-11.header-light .menu--primary>ul>li>a:focus,
		.header-11.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-11.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-11.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-11.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-11.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-11.header-light .header-button:after {
			background: #fff;
		}

		.header-11.header-light .header-social-networks a {
			color: #fff;
		}

		.header-11.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-12 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-12 .menu--primary>ul>li>a {
			font-size: 16px;
			font-weight: 500;
			line-height: 1.4;
		}

		.desktop-menu .header-12 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-12.header-dark .page-header-inner {
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			border-color: #eee;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.header-12.header-dark .header-icon,
		.header-12.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-12.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-12.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-12.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-12.header-dark .menu--primary>ul>li>a {
			color: #3F3A64;
		}

		.header-12.header-dark .menu--primary>ul>li:hover>a,
		.header-12.header-dark .menu--primary>ul>li>a:hover,
		.header-12.header-dark .menu--primary>ul>li>a:focus,
		.header-12.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-12.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-12.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-12.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-12.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-12.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-12.header-dark .header-social-networks a {
			color: #333;
		}

		.header-12.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-12.header-light .page-header-inner {
			background: #4641A1;
			background-color: #4641A1;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			border-color: rgba(255, 255, 255, 0.2);
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.header-12.header-light .header-icon,
		.header-12.header-light .wpml-ls-item-toggle {
			color: rgba(255, 255, 255, 0.7);
		}

		.header-12.header-light .header-icon:hover {
			color: #fff;
		}

		.header-12.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-12.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-12.header-light .menu--primary>ul>li>a {
			color: rgba(255, 255, 255, 0.7);
		}

		.header-12.header-light .menu--primary>ul>li:hover>a,
		.header-12.header-light .menu--primary>ul>li>a:hover,
		.header-12.header-light .menu--primary>ul>li>a:focus,
		.header-12.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-12.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-12.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-12.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-12.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-12.header-light .header-button:after {
			background: #fff;
		}

		.header-12.header-light .header-social-networks a {
			color: #fff;
		}

		.header-12.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-13 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-13 .menu--primary>ul>li>a {
			font-size: 14px;
			font-weight: 500;
			letter-spacing: 1px;
			line-height: 1.4;
			text-transform: uppercase;
		}

		.desktop-menu .header-13 .menu--primary>ul>li>a {
			padding-top: 29px;
			padding-bottom: 29px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-13.header-dark .page-header-inner {
			background: #fff;
			background-color: #fff;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			border-color: #eee;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.05);
		}

		.header-13.header-dark .header-icon,
		.header-13.header-dark .wpml-ls-item-toggle {
			color: #333;
		}

		.header-13.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-13.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-13.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-13.header-dark .menu--primary>ul>li>a {
			color: #333;
		}

		.header-13.header-dark .menu--primary>ul>li:hover>a,
		.header-13.header-dark .menu--primary>ul>li>a:hover,
		.header-13.header-dark .menu--primary>ul>li>a:focus,
		.header-13.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-13.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-13.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-13.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-13.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-13.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-13.header-dark .header-social-networks a {
			color: #333;
		}

		.header-13.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-13.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
		}

		.header-13.header-light .header-icon,
		.header-13.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-13.header-light .header-icon:hover {
			color: #fff;
		}

		.header-13.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-13.header-light .mini-cart .mini-cart-icon:after {
			color: #111;
			background-color: #fff;
		}

		.header-13.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-13.header-light .menu--primary>ul>li:hover>a,
		.header-13.header-light .menu--primary>ul>li>a:hover,
		.header-13.header-light .menu--primary>ul>li>a:focus,
		.header-13.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-13.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-13.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-13.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-13.header-light .header-button:hover {
			color: #111;
			border-color: #fff;
		}

		.header-13.header-light .header-button:after {
			background: #fff;
		}

		.header-13.header-light .header-social-networks a {
			color: #fff;
		}

		.header-13.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.header-14 .page-header-inner {
			border-bottom-width: 0px;
		}

		.header-14 .menu--primary>ul>li>a {
			font-size: 14px;
			font-weight: 500;
			letter-spacing: 1px;
			line-height: 1.43;
			text-transform: uppercase;
		}

		.desktop-menu .header-14 .menu--primary>ul>li>a {
			padding-top: 30px;
			padding-bottom: 30px;
			padding-left: 18px;
			padding-right: 18px;
		}

		.header-14.header-dark .page-header-inner {
			border-color: #eee;
		}

		.header-14.header-dark .header-icon,
		.header-14.header-dark .wpml-ls-item-toggle {
			color: #696969;
		}

		.header-14.header-dark .header-icon:hover {
			color: #20AD96;
		}

		.header-14.header-dark .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #20AD96;
		}

		.header-14.header-dark .mini-cart .mini-cart-icon:after {
			color: #fff;
			background-color: #20AD96;
		}

		.header-14.header-dark .menu--primary>ul>li>a {
			color: #333;
		}

		.header-14.header-dark .menu--primary>ul>li:hover>a,
		.header-14.header-dark .menu--primary>ul>li>a:hover,
		.header-14.header-dark .menu--primary>ul>li>a:focus,
		.header-14.header-dark .menu--primary>ul>.current-menu-ancestor>a,
		.header-14.header-dark .menu--primary>ul>.current-menu-item>a {
			color: #20AD96;
		}

		.header-14.header-dark .header-button {
			color: #fff;
			border-color: #20AD96;
		}

		.header-14.header-dark .header-button:before {
			background: #20AD96;
		}

		.header-14.header-dark .header-button:hover {
			color: #20AD96;
			border-color: #20AD96;
		}

		.header-14.header-dark .header-button:after {
			background: rgba(0, 0, 0, 0);
		}

		.header-14.header-dark .header-social-networks a {
			color: #696969;
		}

		.header-14.header-dark .header-social-networks a:hover {
			color: #20AD96;
		}

		.header-14.header-light .page-header-inner {
			border-color: rgba(255, 255, 255, 0.2);
		}

		.header-14.header-light .header-icon,
		.header-14.header-light .wpml-ls-item-toggle {
			color: #fff;
		}

		.header-14.header-light .header-icon:hover {
			color: #fff;
		}

		.header-14.header-light .wpml-ls-slot-shortcode_actions:hover>.js-wpml-ls-item-toggle {
			color: #fff;
		}

		.header-14.header-light .mini-cart .mini-cart-icon:after {
			color: #141;
			background-color: #fff;
		}

		.header-14.header-light .menu--primary>ul>li>a {
			color: #fff;
		}

		.header-14.header-light .menu--primary>ul>li:hover>a,
		.header-14.header-light .menu--primary>ul>li>a:hover,
		.header-14.header-light .menu--primary>ul>li>a:focus,
		.header-14.header-light .menu--primary>ul>.current-menu-ancestor>a,
		.header-14.header-light .menu--primary>ul>.current-menu-item>a {
			color: #fff;
		}

		.header-14.header-light .header-button {
			color: #fff;
			border-color: rgba(255, 255, 255, 0.3);
		}

		.header-14.header-light .header-button:before {
			background: rgba(255, 255, 255, 0);
		}

		.header-14.header-light .header-button:hover {
			color: #141;
			border-color: #fff;
		}

		.header-14.header-light .header-button:after {
			background: #fff;
		}

		.header-14.header-light .header-social-networks a {
			color: #fff;
		}

		.header-14.header-light .header-social-networks a:hover {
			color: #fff;
		}

		.page-navigation .children>li>a,
		.page-navigation .children>li>a .menu-item-title {
			font-weight: 400;
			letter-spacing: 0em;
			line-height: 1.38;
			text-transform: none;
		}

		.page-navigation .children>li>a {
			font-size: 16px;
			color: #777;
		}

		.page-navigation .children,
		.primary-menu-sub-visual {
			background-color: #fff;
			-webkit-box-shadow: 0 2px 29px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 2px 29px rgba(0, 0, 0, 0.05);
			box-shadow: 0 2px 29px rgba(0, 0, 0, 0.05);
		}

		.desktop-menu .page-navigation .children:after,
		.primary-menu-sub-visual:after {
			background-color: #20AD96;
		}

		.page-navigation .children>li:hover>a,
		.page-navigation .children>li.current-menu-item>a,
		.page-navigation .children>li.current-menu-ancestor>a {
			color: #111;
		}

		.page-navigation .children>li.current-menu-ancestor>a,
		.page-navigation .children>li.current-menu-item>a,
		.page-navigation .children>li:hover>a {
			background-color: rgba(255, 255, 255, 0);
		}

		.popup-canvas-menu {
			background: #fff;
			background-color: #fff;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.page-close-main-menu:before,
		.page-close-main-menu:after {
			background-color: #111;
		}

		.popup-canvas-menu .menu__container>li>a {
			font-weight: 500;
			line-height: 1.5;
			color: #111;
		}

		.popup-canvas-menu .menu__container>li>a:hover,
		.popup-canvas-menu .menu__container>li>a:focus {
			color: #20AD96;
		}

		.popup-canvas-menu .menu__container .children a {
			color: #777;
		}

		.popup-canvas-menu .menu__container .children a:hover {
			color: #20AD96;
		}

		.page-mobile-menu-header {
			background: #fff;
		}

		.page-close-mobile-menu {
			color: #111;
		}

		.page-close-mobile-menu:hover {
			color: #111;
		}

		.page-mobile-main-menu>.inner {
			/* background-image: url("../images/mobile-bg.jpg"); */
			background-color: #3f3a64;
			background-repeat: no-repeat;
			background-position: top center;
			background-attachment: scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.page-mobile-main-menu>.inner:before {
			background-color: rgba(63, 58, 100, 0.9);
		}

		.page-mobile-main-menu .menu__container>li>a {
			padding-top: 19px;
			padding-bottom: 19px;
			padding-left: 0;
			padding-right: 0;
			font-weight: 500;
			line-height: 1.5;
			font-size: 16px;
			color: #fff;
		}

		.page-mobile-main-menu .menu__container>li>a:hover,
		.page-mobile-main-menu .menu__container>li.opened>a {
			color: #fff;
		}

		.page-mobile-main-menu .menu__container>li+li>a,
		.page-mobile-main-menu .menu__container>li.opened>a {
			border-color: rgba(255, 255, 255, 0.15);
		}

		.page-mobile-main-menu .children>li>a,
		.page-mobile-main-menu .simple-menu>li>a {
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 0;
			padding-right: 0;
		}

		.page-mobile-main-menu .simple-menu>li>a,
		.page-mobile-main-menu .children>li>a {
			font-weight: 500;
			line-height: 1.5;
		}

		.page-mobile-main-menu .children>li>a {
			font-size: 15px;
		}

		.page-mobile-main-menu .children>li>a,
		.page-mobile-main-menu .maxcoach-list .link {
			color: rgba(255, 255, 255, 0.7);
		}

		.page-mobile-main-menu .children a:hover,
		.page-mobile-main-menu .children .opened>a,
		.page-mobile-main-menu .current-menu-item>a {
			color: #fff;
		}

		.page-mobile-main-menu .toggle-sub-menu {
			color: #fff;
			background: rgba(255, 255, 255, 0);
		}

		.page-mobile-main-menu .toggle-sub-menu:hover {
			color: #fff;
			background: rgba(255, 255, 255, 0.2);
		}

		.page-title-bar-01 .page-title-bar-bg {
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.page-title-bar-01 .page-title-bar-bg:before {
			background-color: rgba(0, 0, 0, 0);
		}

		.page-title-bar-01 .page-title-bar-inner {
			border-bottom-width: 0px;
			border-bottom-color: rgba(0, 0, 0, 0);
			padding-top: 103px;
			padding-bottom: 81px;
		}

		.page-title-bar-01 .heading {
			font-size: 48px;
			font-weight: 700;
			line-height: 1.17;
			color: #333;
		}

		.page-title-bar-01 .insight_core_breadcrumb li,
		.page-title-bar-01 .insight_core_breadcrumb li a {
			font-size: 14px;
			font-weight: 400;
			line-height: 1.67;
		}

		.page-title-bar-01 .insight_core_breadcrumb li {
			color: #333;
		}

		.page-title-bar-01 .insight_core_breadcrumb a {
			color: #696969;
		}

		.page-title-bar-01 .insight_core_breadcrumb a:hover {
			color: #333;
		}

		.page-title-bar-01 .insight_core_breadcrumb li+li:before {
			color: #696969;
		}

		.page-title-bar-02 .page-title-bar-bg {
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.page-title-bar-02 .page-title-bar-bg:before {
			background-color: rgba(0, 0, 0, 0);
		}

		.page-title-bar-02 .page-title-bar-inner {
			border-bottom-width: 0px;
			border-bottom-color: rgba(0, 0, 0, 0);
			padding-top: 12px;
			padding-bottom: 12px;
		}

		.page-title-bar-02 {
			margin-bottom: 74px;
		}

		.page-title-bar-02 .insight_core_breadcrumb li,
		.page-title-bar-02 .insight_core_breadcrumb li a {
			font-size: 14px;
			font-weight: 400;
			line-height: 1.67;
		}

		.page-title-bar-02 .insight_core_breadcrumb li {
			color: #333;
		}

		.page-title-bar-02 .insight_core_breadcrumb a {
			color: #696969;
		}

		.page-title-bar-02 .insight_core_breadcrumb a:hover {
			color: #333;
		}

		.page-title-bar-02 .insight_core_breadcrumb li+li:before {
			color: #696969;
		}

		.page-title-bar-03 .page-title-bar-bg:before {
			background-color: rgba(0, 0, 0, 0.4);
		}

		.page-title-bar-03 .page-title-bar-inner {
			border-bottom-width: 0px;
			border-bottom-color: rgba(0, 0, 0, 0);
			padding-top: 124px;
			padding-bottom: 101px;
		}

		.page-title-bar-03 {
			margin-bottom: 57px;
		}

		.page-title-bar-03 .heading {
			font-size: 48px;
			font-weight: 700;
			line-height: 1.17;
			color: #fff;
		}

		.page-title-bar-03 .page-title-bar-meta {
			font-size: 14px;
			font-weight: 400;
			line-height: 1.67;
			text-transform: capitalize;
			color: #fff;
		}

		.page-title-bar-03 .page-title-bar-meta a {
			color: #fff;
		}

		.page-title-bar-03 .page-title-bar-meta a:hover {
			color: #fff;
		}

		.page-title-bar-03 .insight_core_breadcrumb li,
		.page-title-bar-03 .insight_core_breadcrumb li a {
			font-size: 14px;
			font-weight: 400;
			line-height: 1.67;
		}

		.page-title-bar-03 .insight_core_breadcrumb li {
			color: #333;
		}

		.page-title-bar-03 .insight_core_breadcrumb a {
			color: #696969;
		}

		.page-title-bar-03 .insight_core_breadcrumb a:hover {
			color: #333;
		}

		.page-title-bar-03 .insight_core_breadcrumb li+li:before {
			color: #696969;
		}

		.page-loading {
			background-color: #fff;
		}

		.page-loading .sk-wrap {
			color: #20AD96;
		}

		.error404 {
			background: #111;
			background-color: #111;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		body {
			background: #ffffff;
			background-color: #ffffff;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.branding__logo img,
		.error404--header .branding__logo img {
			width: 158px;
		}

		.branding__logo img {
			padding-top: 15px;
			padding-right: 0px;
			padding-bottom: 15px;
			padding-left: 0px;
		}

		.header-sticky-both .headroom.headroom--not-top .branding img,
		.header-sticky-up .headroom.headroom--not-top.headroom--pinned .branding img,
		.header-sticky-down .headroom.headroom--not-top.headroom--unpinned .branding img {
			width: 158px;
		}

		.headroom--not-top .branding__logo .sticky-logo {
			padding-top: 0;
			padding-right: 0;
			padding-bottom: 0;
			padding-left: 0;
		}

		.page-mobile-popup-logo img {
			width: 158px;
		}

		.woocommerce .product-badges .new {
			color: #fff;
			background-color: #E5B35D;
		}

		.woocommerce .product-badges .hot {
			color: #fff;
			background-color: #D0021B;
		}

		.woocommerce .product-badges .onsale {
			color: #fff;
			background-color: #20AD96;
		}

		.price,
		.amount,
		.tr-price,
		.woosw-content-item--price {
			color: #8C89A2;
		}

		.price del,
		del .amount,
		.tr-price del,
		.woosw-content-item--price del {
			color: #8C89A2;
		}

		ins .amount {
			color: #20AD96;
		}

		.page-search-popup {
			background: #fff;
		}

		.page-search-popup .search-form,
		.page-search-popup .search-field:focus {
			color: #111;
		}

		.page-search-popup .search-field:-webkit-autofill {
			-webkit-text-fill-color: #111 !important;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		th,
		[class*="hint--"]:after,
		.heading,
		.heading-typography,
		.answer-options .answer-option .option-title .option-title-content,
		.elementor-accordion .elementor-tab-title a,
		.elementor-counter .elementor-counter-title,
		.entry-event-info .meta-label,
		.entry-course-info .meta-label {
			font-weight: 700;
			letter-spacing: 0em;
			line-height: 1.3;
		}

		h1 {
			font-size: 38px;
		}

		h2 {
			font-size: 34px;
		}

		h3 {
			font-size: 30px;
		}

		h4 {
			font-size: 26px;
		}

		h5 {
			font-size: 22px;
		}

		h6 {
			font-size: 18px;
		}

		b,
		strong {
			font-weight: 700;
		}

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.wp-block-button__link,
		.rev-btn,
		.tm-button,
		.button,
		.elementor-button,
		.pmpro_btn,
		.pmpro_btn:link,
		.pmpro_content_message a,
		.pmpro_content_message a:link,
		.event_auth_button,
		.dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn {
			font-family: inherit;
			font-size: 14px;
			font-weight: 700;
			letter-spacing: 0em;
			text-transform: none;
		}

		@media (max-width: 1199px) {
			.page-title-bar-01 .page-title-bar-inner .heading {
				font-size: 42px;
			}

			.page-title-bar-03 .page-title-bar-inner .heading {
				font-size: 42px;
			}
		}

		@media (max-width: 991px) {
			.page-title-bar-01 .page-title-bar-inner .heading {
				font-size: 36px;
			}

			.page-title-bar-03 .page-title-bar-inner .heading {
				font-size: 36px;
			}
		}

		@media (max-width: 767px) {
			.page-title-bar-01 .page-title-bar-inner .heading {
				font-size: 30px;
			}

			.page-title-bar-03 .page-title-bar-inner .heading {
				font-size: 30px;
			}
		}
	</style>
</head>

<body class="page-template-default page page-id-786 wp-embed-responsive theme-maxcoach pmpro-body-has-access woocommerce-no-js desktop desktop-menu mobile-menu-push-to-left woocommerce header-sticky-both wide page-has-no-sidebar title-bar-none elementor-default elementor-kit-1867 elementor-page elementor-page-786" data-site-width="1200px" data-content-width="1200" data-font="Gilroy Helvetica, Arial, sans-serif" data-header-sticky-height="80">



	<div id="page" class="site">
		<div class="content-wrapper">
			<header id="page-header" class="page-header header-03 header-layout-fixed  nav-links-hover-style-01 header-light  header-sticky-dark-logo">
				<div class="page-header-place-holder"></div>
				<div id="page-header-inner" class="page-header-inner" data-sticky="1">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="header-wrap">
									<div class="branding">
										<div class="branding__logo">
											<a href="../../index.php" rel="home">
												<img src="<?= urlOf('assets/images/light-logo.png') ?>" alt="MaxCoach" class="light-logo">
												<img src="<?= urlOf('assets/images/dark-logo.png') ?>" alt="MaxCoach" class="dark-logo">
											</a>
										</div>
									</div>
									<div id="page-navigation" class="navigation page-navigation">
										<nav id="menu" class="menu menu--primary">
											<ul id="menu-primary" class="menu__container sm sm-simple">
												<li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14 level-1 has-mega-menu">
													<a href="../../index.php">
														<div class="menu-item-wrap"><span class="menu-item-title">Home</span><span class="toggle-sub-menu"> </span></div>
													</a>
													<ul class="sub-menu children mega-menu">
														<li id="menu-item-3355" class="menu-item menu-item-type-post_type menu-item-object-ic_mega_menu menu-item-3355">
															<div class="mega-menu-content">
																<div class="container">
																	<div class="row">
																		<div class="col-xs-12">
																			<div data-elementor-type="wp-post" data-elementor-id="3350" class="elementor elementor-3350" data-elementor-settings="[]">
																				<div class="elementor-inner">
																					<div class="elementor-section-wrap">
																						<section class="elementor-section elementor-top-section elementor-element elementor-element-a92da7b elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="a92da7b" data-element_type="section">
																							<div class="elementor-container elementor-column-gap-extended">
																								<div class="elementor-row">
																									<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8c25b3e" data-id="8c25b3e" data-element_type="column">
																										<div class="elementor-column-wrap elementor-element-populated">
																											<div class="elementor-widget-wrap">
																												<div class="elementor-element elementor-element-5cd7035 maxcoach-list-layout-block elementor-widget elementor-widget-tm-list" data-id="5cd7035" data-element_type="widget" data-widget_type="tm-list.default">
																													<div class="elementor-widget-container">
																														<div class="maxcoach-list">
																															<div class="item">
																																<a class="link" href="#data">
																																	<div class="list-header">
																																		<div class="text-wrap">
																																			<div class="text">
																																				Data
																																			</div>
																																		</div>
																																	</div>
																																</a>
																															</div>
																															<div class="item">
																																<a class="link" href="#policy">
																																	<div class="list-header">
																																		<div class="text-wrap">
																																			<div class="text">
																																				Policy
																																			</div>
																																		</div>
																																	</div>
																																</a>
																															</div>
																															<div class="item">
																																<a class="link" href="#colleges">
																																	<div class="list-header">
																																		<div class="text-wrap">
																																			<div class="text">
																																				Top Colleges
																																			</div>
																																		</div>
																																	</div>
																																</a>
																															</div>
																															<div class="item">
																																<a class="link" href="#qoutes">
																																	<div class="list-header">
																																		<div class="text-wrap">
																																			<div class="text">
																																				Qoutes
																																			</div>
																																		</div>
																																	</div>
																																</a>
																															</div>
																															<div class="item">
																																<a class="link" href="#universities">
																																	<div class="list-header">
																																		<div class="text-wrap">
																																			<div class="text">
																																				Top Universities
																																			</div>
																																		</div>
																																	</div>
																																</a>
																															</div>
																															<div class="item">
																																<a class="link" href="#courses">
																																	<div class="list-header">
																																		<div class="text-wrap">
																																			<div class="text">
																																				Courses after 12th
																																			</div>
																																		</div>
																																	</div>
																																</a>
																															</div>
																															<div class="item">

																																<a class="link" href="#register">
																																	<div class="list-header">

																																		<div class="text-wrap">
																																			<div class="text">
																																				Register University
																																			</div>
																																		</div>

																																	</div>

																																</a>
																															</div>

																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																									<!-- <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1b6e747"
																										data-id="1b6e747"
																										data-element_type="column">
																										<div
																											class="elementor-column-wrap elementor-element-populated">
																											<div
																												class="elementor-widget-wrap">
																												<div class="elementor-element elementor-element-22b6a56 maxcoach-list-layout-block elementor-widget elementor-widget-tm-list"
																													data-id="22b6a56"
																													data-element_type="widget"
																													data-widget_type="tm-list.default">
																													<div
																														class="elementor-widget-container">
																														<div
																															class="maxcoach-list">
																															<div
																																class="item">

																																<a class="link"
																																	href="../artist/index.html">
																																	<div
																																		class="list-header">

																																		<div
																																			class="text-wrap">
																																			<div
																																				class="text">
																																				Artist
																																			</div>
																																		</div>

																																	</div>

																																</a>
																															</div>
																															<div
																																class="item">

																																<a class="link"
																																	href="../kitchen-coach/index.html">
																																	<div
																																		class="list-header">

																																		<div
																																			class="text-wrap">
																																			<div
																																				class="text">
																																				Kitchen
																																				Coach
																																			</div>
																																		</div>

																																	</div>

																																</a>
																															</div>
																															<div
																																class="item">

																																<a class="link"
																																	href="../motivation/index.html">
																																	<div
																																		class="list-header">

																																		<div
																																			class="text-wrap">
																																			<div
																																				class="text">
																																				Motivation
																																			</div>
																																		</div>

																																	</div>

																																</a>
																															</div>
																															<div
																																class="item">

																																<a class="link"
																																	href="../dancing/index.html">
																																	<div
																																		class="list-header">

																																		<div
																																			class="text-wrap">
																																			<div
																																				class="text">
																																				Dancing
																																			</div>
																																		</div>

																																		<div
																																			class="badge">
																																			New
																																		</div>
																																	</div>

																																</a>
																															</div>
																															<div
																																class="item">

																																<a class="link"
																																	href="../guitar/index.html">
																																	<div
																																		class="list-header">

																																		<div
																																			class="text-wrap">
																																			<div
																																				class="text">
																																				Guitar
																																			</div>
																																		</div>

																																		<div
																																			class="badge">
																																			New
																																		</div>
																																	</div>

																																</a>
																															</div>
																															<div
																																class="item">

																																<a class="link"
																																	href="../yoga/index.html">
																																	<div
																																		class="list-header">

																																		<div
																																			class="text-wrap">
																																			<div
																																				class="text">
																																				Yoga
																																			</div>
																																		</div>

																																		<div
																																			class="badge">
																																			New
																																		</div>
																																	</div>

																																</a>
																															</div>
																															<div
																																class="item">

																																<a class="link"
																																	href="../photography/index.html">
																																	<div
																																		class="list-header">

																																		<div
																																			class="text-wrap">
																																			<div
																																				class="text">
																																				Photography
																																			</div>
																																		</div>

																																		<div
																																			class="badge">
																																			New
																																		</div>
																																	</div>

																																</a>
																															</div>
																															<div
																																class="item">

																																<a class="link"
																																	href="../personal-finance/index.html">
																																	<div
																																		class="list-header">

																																		<div
																																			class="text-wrap">
																																			<div
																																				class="text">
																																				Personal
																																				Finance
																																			</div>
																																		</div>

																																		<div
																																			class="badge">
																																			New
																																		</div>
																																	</div>

																																</a>
																															</div>
																														</div>
																													</div>
																													</div>
																											</div>
																										</div>
																									</div> -->
																									<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ea019ef" data-id="ea019ef" data-element_type="column">
																										<div class="elementor-column-wrap elementor-element-populated">
																											<div class="elementor-widget-wrap">
																												<div class="elementor-element elementor-element-a6b31d3 elementor-widget elementor-widget-image" data-id="a6b31d3" data-element_type="widget" data-widget_type="image.default">
																													<div class="elementor-widget-container">
																														<div class="elementor-image">
																															<a href="../../index.php" target="_blank" rel="nofollow">
																																<img width="600" height="257" src="<?= urlOf('assets/images/Seal_of_Gujarat.jpg') ?>" class="attachment-full size-full" alt="" loading="lazy" srcset="<?= urlOf('assets/images/Seal_of_Gujarat.jpg') ?> 600w, <?= urlOf('assets/images/Seal_of_Gujarat.jpg') ?> 300w" sizes="(max-width: 600px) 100vw, 600px" />
																															</a>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</section>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-20 level-1">
													<?php if (isset($_SESSION["user_type"])) { ?>
														<?php if ($_SESSION['user_type'] == 'Government Panel' || $_SESSION["user_type"] == 'Edu-Department Panel' || $_SESSION["user_type"] == 'Employee Panel' || $_SESSION["user_type"] == 'School Panel' || $_SESSION["user_type"] == 'College Panel') { ?>
															<a href="#">
																<div class="menu-item-wrap"><span class="menu-item-title">Features</span><span class="toggle-sub-menu"></span></span></div>
															</a>
															<ul class="sub-menu children simple-menu">
																<!-- <li id="menu-item-1852" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1852">
															<a href="<?= urlOf('assets/includes/login.php') ?>">
																<div class="menu-item-wrap"><span class="menu-item-title">Login</span></div>
															</a>
														</li> -->
																<?php if ($_SESSION["user_type"] == 'Government Panel') { ?>
																	<li id="menu-item-424" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-424">
																		<a href="<?= urlOf('assets/includes/all_emp_request.php') ?>">
																			<div class="menu-item-wrap"><span class="menu-item-title">Access Requests &nbsp;&nbsp;&nbsp;<span style="background-color:grey; border-radius:50%; padding:6px; color:white;"><?= $result_emp_all['EmpCount'] ?></span></span></div>
																		</a>
																	</li>
																<?php } ?>
																<?php if ($_SESSION["user_type"] == 'Government Panel') { ?>
																	<li id="menu-item-424" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-424">
																		<a href="#">
																			<div class="menu-item-wrap"><span class="menu-item-title">College Requests</span></div>
																		</a>
																	</li>
																<?php } ?>
																<?php if ($_SESSION["user_type"] == 'Government Panel') { ?>
																	<li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423">
																		<a href="#">
																			<div class="menu-item-wrap"><span class="menu-item-title">School Requests</span></div>
																		</a>
																	</li>
																<?php } ?>
																<?php if ($_SESSION["user_type"] == 'Government Panel' || $_SESSION["user_type"] == 'Edu-Department Panel' || $_SESSION["user_type"] == 'Employee Panel') { ?>
																	<li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423">
																		<a href="<?= urlOf('assets/includes/all_student_request.php') ?>">
																			<div class="menu-item-wrap"><span class="menu-item-title">Student Requests &nbsp;&nbsp;&nbsp;<span style="background-color:grey; border-radius:50%; padding:6px; color:white;"><?= $result_all['StudentCount'] ?></span></span></div>
																		</a>
																	</li>
																<?php } ?>
																<?php if ($_SESSION["user_type"] == 'Government Panel') { ?>
																	<li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423">
																		<a href="<?= urlOf('assets/includes/show_policy.php') ?>">
																			<div class="menu-item-wrap"><span class="menu-item-title">Edit Policy</span></div>
																		</a>
																	</li>
																<?php } ?>
																<?php if ($_SESSION["user_type"] == 'Edu-Department Panel') { ?>
																	<li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423">
																		<a href="<?= urlOf('assets/includes/add_emp.php') ?>">
																		<div class="menu-item-wrap"><span class="menu-item-title">Add Employee</span></div>
																		</a>
																	</li>
																<?php } ?>
																<?php if ($_SESSION["user_type"] == 'School Panel' || $_SESSION["user_type"] == 'College Panel') { ?>
																	<li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423">
																		<a href="<?= urlOf('assets/includes/all_remark_student.php') ?>">
																			<div class="menu-item-wrap"><span class="menu-item-title">Remarked Students &nbsp;&nbsp;&nbsp;<span style="background-color:grey; border-radius:50%; padding:6px; color:white;"><?= $result_all_remarked['RemarkedCount'] ?></span></span></span></div>
																		</a>
																	</li>
																<?php } ?>
																<!-- <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-421">
															<a href="../contact-us/index.html">
																<div class="menu-item-wrap"><span class="menu-item-title">Contact us</span></div>
															</a>
														</li> -->
															</ul>
														<?php } ?>
													<?php } ?>
												</li>
												<li id="menu-item-3338" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3338 level-1">
													<a href="<?= urlOf('assets/includes/all_universities.php') ?>">
														<div class="menu-item-wrap"><span class="menu-item-title">Universities</span></div>
													</a>
												</li>
												<li id="menu-item-3338" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3338 level-1">
													<a href="<?= urlOf('assets/includes/all_colleges.php') ?>">
														<div class="menu-item-wrap"><span class="menu-item-title">Colleges</span></div>
													</a>
												</li>
												<li id="menu-item-1652" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1652 level-1">
													<a href="<?= urlOf('assets/includes/all_schools.php') ?>">
														<div class="menu-item-wrap"><span class="menu-item-title">Schools</span></div>
													</a>
												</li>
											</ul>
										</nav>
									</div>
									<div class="header-right">
										<div id="header-right-inner 	d-none d-lg-block d-xl-none" class="header-right-inner">

											<?php if (!isset($_SESSION['user_type'])) { ?>

												<a href="<?= urlOf('assets/includes/login.php?panel=' . 'Government Panel') ?>" class="header-icon header-login-link">
													<div class="button-content-wrapper">
														<span class="button-text"><i class="far fa-user-circle"></i></span>
													</div>
												</a>
											<?php } ?>


											<?php if (isset($_SESSION['user_type'])) { ?>
												<a href="<?= urlOf('assets/codes/logout.php') ?>" class="header-icon btn header-login-link">
													<div class="button-content-wrapper">
														<span class="button-text" style="font-size:20px"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
													</div>
												</a>
											<?php } ?>

										</div>

										<div id="page-open-mobile-menu" class="header-icon page-open-mobile-menu">
											<div class="burger-icon">
												<span class="burger-icon-top"></span>
												<span class="burger-icon-bottom"></span>
											</div>
										</div>

										<div id="page-open-components" class="header-icon page-open-components">
											<div class="inner">
												<div class="circle circle-one"></div>
												<div class="circle circle-two"></div>
												<div class="circle circle-three"></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</header>