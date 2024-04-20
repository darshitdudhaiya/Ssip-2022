<?php include('../includes/init.php');  ?>
<?php

// $name = $_POST['view'];
$user = $_SESSION['user'];
$select;
$query;
$result;
if ($_SESSION["user_type"] == 'School Panel') {
    $select = "SELECT * FROM pstudr WHERE status = 'remarked' and sc_name = '$user' ";
    $query = $connection->query($select);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
} 
 if ($_SESSION["user_type"] == 'College Panel') {
    $select = "SELECT * FROM pstudr WHERE status = 'remarked' and c_name = '$user' ";
    $query = $connection->query($select);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
}
// $select = "SELECT * FROM pstudr WHERE status = 'remarked' and c_name = '$user' ";
//     $query = $connection->query($select);
//     $result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from maxcoach.thememove.com/main/profile/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2022 05:27:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Student &rarr; SLMS</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://client.crisp.chat/' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="alternate" type="application/rss+xml" title="MaxCoach &raquo; Feed" href="../feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="MaxCoach &raquo; Comments Feed" href="../comments/feed/index.html" />
    <link rel='stylesheet' id='course-review-css' href='../css/course-review.css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='../css/style.min.css' media='all' />
    <link rel='stylesheet' id='wp-block-library-theme-css' href='../css/theme.min.css' media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='../css/wc-blocks-vendors-style.css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css' href='../css/wc-blocks-style.css' media='all' />
    <link rel='stylesheet' id='pmpro_frontend-css' href='../css/frontend.css' media='screen' />
    <link rel='stylesheet' id='pmpro_print-css' href='../css/print.css' media='print' />
    <link rel="stylesheet" href="../style/bootstrap.min.css">

    <link rel='stylesheet' href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wpems-countdown-css-css' href='../css/jquery.countdown.css' media='all' />
    <link rel='stylesheet' id='wpems-fronted-css-css' href='../css/events.css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-css' href='../css/perfect-scrollbar.min.css' media='all' />
    <link rel='stylesheet' id='woosw-frontend-css' href='../css/frontend.css' media='all' />
    <style id='woosw-frontend-inline-css'>
        .woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-notice {
            background-color: #5fbd74;
        }

        .woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-page a:hover,
        .woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-continue:hover {
            color: #5fbd74;
        }
    </style>
    <link rel='stylesheet' id='font-gilroy-css' href='../css/font-gilroy.css' media='all' />
    <link rel='stylesheet' id='font-awesome-pro-css' href='../css/fontawesome-all.min.css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='../css/swiper.min.css' media='all' />
    <link rel='stylesheet' id='lightgallery-css' href='../css/lightgallery.min.css' media='all' />
    <link rel='stylesheet' id='maxcoach-style-css' href='../css/style.css' media='all' />
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
    <link rel='stylesheet' id='maxcoach-woocommerce-css' href='../css/woocommerce.css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-woosw-css' href='../css/custom-theme.css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css' href='../css/magnific-popup.css' media='all' />
    <link rel='stylesheet' id='maxcoach-zoom-meetings-css' href='../css/video-conferencing-zoom.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='../css/elementor-icons.min.css' media='all' />
    <link rel='stylesheet' id='elementor-animations-css' href='../css/animations.min.css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css' href='../css/frontend-legacy.min.css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='../css/frontend.min.css' media='all' />
    <style id='elementor-frontend-inline-css'>
        @font-face {
            font-family: eicons;
            src: url(../wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons0b93.eot?5.10.0);
            src: url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(https://maxcoach.thememove.com/main/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
            font-weight: 400;
            font-style: normal
        }
    </style>
    <link rel='stylesheet' id='elementor-post-1867-css' href='../css/post-1867.css' media='all' />
    <link rel='stylesheet' id='elementor-pro-css' href='../css/frontend.min.css' media='all' />
    <link rel='stylesheet' id='elementor-post-230-css' href='../css/post-230.css' media='all' />
    <link rel='stylesheet' id='elementor-post-623-css' href='../css/post-623.css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='../css/dashicons.min.css' media='all' />
    <link rel='stylesheet' id='maxcoach-child-demo-style-css' href='../css/style.css' media='all' />
    <link rel='stylesheet' id='video-conferencing-with-zoom-api-css' href='../css/style.min.css' media='all' />
    <link rel='stylesheet' id='learnpress-css' href='../css/learnpress.css' media='all' />
    <link rel='stylesheet' id='learnpress-widgets-css' href='../css/widgets.css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto' media='all' />
    <script src='../script/jquery.min.js' id='jquery-core-js'></script>
    <script src='../script/jquery-migrate.min.js' id='jquery-migrate-js'></script>
    <script src='../script/rbtools.min.js' async id='tp-tools-js'></script>
    <script src='../script/rs6.min.js' async id='revmin-js'></script>
    <script src='../script/underscore.min.js' id='underscore-js'></script>
    <script id='utils-js-extra'>
        /* <![CDATA[ */
        var userSettings = {
            "url": "\/",
            "uid": "0",
            "time": "1663996289",
            "secure": "1"
        };
        /* ]]> */
    </script>
    <script src='../script/utils.min.js' id='utils-js'></script>
    <script id='lp-global-js-extra'>
        /* <![CDATA[ */
        var lpGlobalSettings = {
            "url": "https:\/\/maxcoach.thememove.com\/main\/profile\/",
            "siteurl": "https:\/\/maxcoach.thememove.com\/main",
            "ajax": "https:\/\/maxcoach.thememove.com\/main\/wp-admin\/admin-ajax.php",
            "courses_url": "https:\/\/maxcoach.thememove.com\/main\/courses\/",
            "post_id": 90,
            "user_id": 0,
            "theme": "maxcoach-child-demo",
            "localize": {
                "button_ok": "OK",
                "button_cancel": "Cancel",
                "button_yes": "Yes",
                "button_no": "No"
            },
            "lp_rest_url": "https:\/\/maxcoach.thememove.com\/main\/wp-json\/",
            "nonce": "4b0706cea3",
            "option_enable_popup_confirm_finish": "yes"
        };
        /* ]]> */
    </script>
    <script src='../script/global.min.js' id='lp-global-js'></script>
    <script src='../script/utils.min.js' id='lp-utils-js'></script>
    <script src='../script/moxie.min.js' id='moxiejs-js'></script>
    <script src='../script/plupload.min.js' id='plupload-js'></script>
    <link rel="https://api.w.org/" href="../wp-json/index.html" />
    <link rel="alternate" type="application/json" href="../json/90.json" />
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
    <link rel="icon" href="../images/indian-government-logo.png" sizes="32x32">
    <link rel="icon" href="../images/indian-government-logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="../images/indian-government-logo.png">
    <meta name="msapplication-TileImage" content="https://maxcoach.thememove.com/main/wp-content/themes/maxcoach-child-demo/assets/images/favicon/favicon-270x270.png">
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
            background-image: url("../images/mobile-bg.jpg");
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

<body class="page-template-default page page-id-90 wp-embed-responsive theme-maxcoach learnpress-profile profile maxcoach-child-demo learnpress learnpress-page pmpro-body-has-access woocommerce-no-js desktop desktop-menu mobile-menu-push-to-left woocommerce header-sticky-both wide page-has-no-sidebar title-bar-02 elementor-default elementor-kit-1867" data-site-width="1200px" data-content-width="1200" data-font="Gilroy Helvetica, Arial, sans-serif" data-header-sticky-height="80">



    <div id="page" class="site">
        <div class="content-wrapper">
            <?php include('../includes/header2.php');  ?>


            <div id="page-title-bar" class="page-title-bar page-title-bar-01">
                <div class="page-title-bar-inner">
                    <div class="page-title-bar-bg"></div>

                    <div class="container">
                        <div class="row row-xs-center">
                            <div class="col-md-12">

                                <div class="page-title-bar-heading">
                                    <h1 class="heading"> Remarked Students </h1>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div id="page-breadcrumb" class="page-breadcrumb">
                        <div class="page-breadcrumb-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="insight_core_breadcrumb">
                                            <li class="level-1 top"><a href="../../index.php">Home</a></li>
                                            <li class="level-2 sub tail current"><span>Remarked Students</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="page-content" class="page-content">
                <div class="container">
                    <div class="row">


                        <div id="page-main-content" class="page-main-content">


                            <div class="rich-snippet display-none">
                                <h1 class="entry-title">Blog Grid</h1> <span class="published">Dec 11, 2019</span>
                                <span class="updated" data-time="2019-12-12 4:10">2019-12-12 4:10</span>
                            </div>


                            <!-- <article id="post-831" class="post-831 page type-page status-publish hentry pmpro-has-access post-no-thumbnail">
								<h2 class="screen-reader-text">All Student</h2>
								<div data-elementor-type="wp-page" data-elementor-id="831" class="elementor elementor-831" data-elementor-settings="[]">
									<div class="elementor-inner">
										<div class="elementor-section-wrap">
											<section class="elementor-section elementor-top-section elementor-element elementor-element-0f92f76 elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="0f92f76" data-element_type="section">
												<div class="elementor-container elementor-column-gap-extended">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a3a4268" data-id="a3a4268" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-37cc7b3 maxcoach-animation-zoom-in elementor-widget elementor-widget-tm-blog" data-id="37cc7b3" data-element_type="widget" data-widget_type="tm-blog.default">
																		<div class="elementor-widget-container">
																			<div class="maxcoach-grid-wrapper maxcoach-blog maxcoach-blog-grid maxcoach-blog-caption-style-01" data-grid="{&quot;type&quot;:&quot;grid&quot;,&quot;columns&quot;:3,&quot;columnsTablet&quot;:2,&quot;columnsMobile&quot;:1,&quot;gutter&quot;:30}" data-pagination="numbers">

																				<input type="hidden" class="maxcoach-query-input" value="{&quot;source&quot;:&quot;custom_query&quot;,&quot;action&quot;:&quot;post_infinite_load&quot;,&quot;max_num_pages&quot;:3,&quot;found_posts&quot;:27,&quot;count&quot;:9,&quot;query_vars&quot;:{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:9,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;paged&quot;:1},&quot;settings&quot;:{&quot;show_caption&quot;:&quot;yes&quot;,&quot;read_more_text&quot;:null,&quot;meta_data&quot;:[{&quot;meta&quot;:&quot;date&quot;,&quot;_id&quot;:&quot;a813be7&quot;},{&quot;meta&quot;:&quot;author&quot;,&quot;_id&quot;:&quot;ebb8cae&quot;}],&quot;grid_metro_layout&quot;:null,&quot;excerpt_length&quot;:null,&quot;hover_effect&quot;:&quot;zoom-in&quot;,&quot;show_caption_excerpt&quot;:&quot;&quot;,&quot;show_caption_read_more&quot;:&quot;&quot;,&quot;pagination_type&quot;:&quot;numbers&quot;,&quot;query_number&quot;:9,&quot;layout&quot;:&quot;grid&quot;,&quot;show_thumbnail&quot;:null,&quot;caption_style&quot;:&quot;01&quot;,&quot;show_caption_category&quot;:&quot;yes&quot;,&quot;show_caption_share&quot;:&quot;&quot;,&quot;show_caption_meta&quot;:[&quot;date&quot;,&quot;views&quot;],&quot;show_overlay&quot;:&quot;&quot;,&quot;overlay_style&quot;:&quot;float&quot;,&quot;show_overlay_category&quot;:&quot;yes&quot;,&quot;show_overlay_title&quot;:&quot;&quot;,&quot;overlay_meta_data&quot;:[],&quot;metro_image_size_width&quot;:null,&quot;metro_image_ratio&quot;:null,&quot;thumbnail_default_size&quot;:&quot;1&quot;,&quot;thumbnail_size&quot;:null,&quot;thumbnail_custom_dimension&quot;:null,&quot;banners&quot;:null,&quot;grid_columns&quot;:3,&quot;grid_columns_tablet&quot;:2,&quot;grid_columns_mobile&quot;:1,&quot;grid_gutter&quot;:30,&quot;grid_gutter_tablet&quot;:&quot;&quot;,&quot;grid_gutter_mobile&quot;:&quot;&quot;,&quot;pagination_custom_button_id&quot;:null,&quot;box_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;box_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;box_box_shadow_box_shadow&quot;:null,&quot;box_box_shadow_box_shadow_position&quot;:null,&quot;box_box_shadow_hover_box_shadow_type&quot;:&quot;&quot;,&quot;box_box_shadow_hover_box_shadow&quot;:null,&quot;box_box_shadow_hover_box_shadow_position&quot;:null,&quot;thumbnail_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;thumbnail_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;thumbnail_box_shadow_box_shadow&quot;:null,&quot;thumbnail_box_shadow_box_shadow_position&quot;:null,&quot;css_filters_css_filter&quot;:&quot;&quot;,&quot;css_filters_blur&quot;:null,&quot;css_filters_brightness&quot;:null,&quot;css_filters_contrast&quot;:null,&quot;css_filters_saturate&quot;:null,&quot;css_filters_hue&quot;:null,&quot;thumbnail_opacity&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;thumbnail_box_shadow_hover_box_shadow_type&quot;:&quot;&quot;,&quot;thumbnail_box_shadow_hover_box_shadow&quot;:null,&quot;thumbnail_box_shadow_hover_box_shadow_position&quot;:null,&quot;css_filters_hover_css_filter&quot;:&quot;&quot;,&quot;css_filters_hover_blur&quot;:null,&quot;css_filters_hover_brightness&quot;:null,&quot;css_filters_hover_contrast&quot;:null,&quot;css_filters_hover_saturate&quot;:null,&quot;css_filters_hover_hue&quot;:null,&quot;thumbnail_opacity_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;text_align&quot;:&quot;&quot;,&quot;text_align_tablet&quot;:&quot;&quot;,&quot;text_align_mobile&quot;:&quot;&quot;,&quot;caption_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_meta_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_meta_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_meta_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_meta_typography_typography&quot;:&quot;&quot;,&quot;caption_meta_typography_font_family&quot;:null,&quot;caption_meta_typography_font_size&quot;:null,&quot;caption_meta_typography_font_size_tablet&quot;:null,&quot;caption_meta_typography_font_size_mobile&quot;:null,&quot;caption_meta_typography_font_weight&quot;:null,&quot;caption_meta_typography_text_transform&quot;:null,&quot;caption_meta_typography_font_style&quot;:null,&quot;caption_meta_typography_text_decoration&quot;:null,&quot;caption_meta_typography_line_height&quot;:null,&quot;caption_meta_typography_line_height_tablet&quot;:null,&quot;caption_meta_typography_line_height_mobile&quot;:null,&quot;caption_meta_typography_letter_spacing&quot;:null,&quot;caption_meta_typography_letter_spacing_tablet&quot;:null,&quot;caption_meta_typography_letter_spacing_mobile&quot;:null,&quot;caption_meta_text_color&quot;:&quot;&quot;,&quot;caption_meta_link_color&quot;:&quot;&quot;,&quot;caption_meta_link_hover_color&quot;:&quot;&quot;,&quot;caption_category_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_category_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_category_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_category_typography_typography&quot;:&quot;&quot;,&quot;caption_category_typography_font_family&quot;:null,&quot;caption_category_typography_font_size&quot;:null,&quot;caption_category_typography_font_size_tablet&quot;:null,&quot;caption_category_typography_font_size_mobile&quot;:null,&quot;caption_category_typography_font_weight&quot;:null,&quot;caption_category_typography_text_transform&quot;:null,&quot;caption_category_typography_font_style&quot;:null,&quot;caption_category_typography_text_decoration&quot;:null,&quot;caption_category_typography_line_height&quot;:null,&quot;caption_category_typography_line_height_tablet&quot;:null,&quot;caption_category_typography_line_height_mobile&quot;:null,&quot;caption_category_typography_letter_spacing&quot;:null,&quot;caption_category_typography_letter_spacing_tablet&quot;:null,&quot;caption_category_typography_letter_spacing_mobile&quot;:null,&quot;caption_category_color&quot;:&quot;&quot;,&quot;caption_category_bg_background&quot;:&quot;&quot;,&quot;caption_category_bg_color&quot;:null,&quot;caption_category_bg_color_stop&quot;:null,&quot;caption_category_bg_color_b&quot;:null,&quot;caption_category_bg_color_b_stop&quot;:null,&quot;caption_category_bg_gradient_type&quot;:null,&quot;caption_category_bg_gradient_angle&quot;:null,&quot;caption_category_bg_gradient_position&quot;:null,&quot;caption_category_bg_image&quot;:null,&quot;caption_category_bg_image_tablet&quot;:null,&quot;caption_category_bg_image_mobile&quot;:null,&quot;caption_category_bg_position&quot;:null,&quot;caption_category_bg_position_tablet&quot;:null,&quot;caption_category_bg_position_mobile&quot;:null,&quot;caption_category_bg_xpos&quot;:null,&quot;caption_category_bg_xpos_tablet&quot;:null,&quot;caption_category_bg_xpos_mobile&quot;:null,&quot;caption_category_bg_ypos&quot;:null,&quot;caption_category_bg_ypos_tablet&quot;:null,&quot;caption_category_bg_ypos_mobile&quot;:null,&quot;caption_category_bg_attachment&quot;:null,&quot;caption_category_bg_repeat&quot;:null,&quot;caption_category_bg_repeat_tablet&quot;:null,&quot;caption_category_bg_repeat_mobile&quot;:null,&quot;caption_category_bg_size&quot;:null,&quot;caption_category_bg_size_tablet&quot;:null,&quot;caption_category_bg_size_mobile&quot;:null,&quot;caption_category_bg_bg_width&quot;:null,&quot;caption_category_bg_bg_width_tablet&quot;:null,&quot;caption_category_bg_bg_width_mobile&quot;:null,&quot;caption_category_bg_video_link&quot;:null,&quot;caption_category_bg_video_start&quot;:null,&quot;caption_category_bg_video_end&quot;:null,&quot;caption_category_bg_play_once&quot;:null,&quot;caption_category_bg_play_on_mobile&quot;:null,&quot;caption_category_bg_privacy_mode&quot;:null,&quot;caption_category_bg_video_fallback&quot;:null,&quot;caption_category_bg_slideshow_gallery&quot;:null,&quot;caption_category_bg_slideshow_loop&quot;:null,&quot;caption_category_bg_slideshow_slide_duration&quot;:null,&quot;caption_category_bg_slideshow_slide_transition&quot;:null,&quot;caption_category_bg_slideshow_transition_duration&quot;:null,&quot;caption_category_bg_slideshow_background_size&quot;:null,&quot;caption_category_bg_slideshow_background_size_tablet&quot;:null,&quot;caption_category_bg_slideshow_background_size_mobile&quot;:null,&quot;caption_category_bg_slideshow_background_position&quot;:null,&quot;caption_category_bg_slideshow_background_position_tablet&quot;:null,&quot;caption_category_bg_slideshow_background_position_mobile&quot;:null,&quot;caption_category_bg_slideshow_ken_burns&quot;:null,&quot;caption_category_bg_slideshow_ken_burns_zoom_direction&quot;:null,&quot;caption_category_hover_color&quot;:&quot;&quot;,&quot;caption_category_hover_bg_background&quot;:&quot;&quot;,&quot;caption_category_hover_bg_color&quot;:null,&quot;caption_category_hover_bg_color_stop&quot;:null,&quot;caption_category_hover_bg_color_b&quot;:null,&quot;caption_category_hover_bg_color_b_stop&quot;:null,&quot;caption_category_hover_bg_gradient_type&quot;:null,&quot;caption_category_hover_bg_gradient_angle&quot;:null,&quot;caption_category_hover_bg_gradient_position&quot;:null,&quot;caption_category_hover_bg_image&quot;:null,&quot;caption_category_hover_bg_image_tablet&quot;:null,&quot;caption_category_hover_bg_image_mobile&quot;:null,&quot;caption_category_hover_bg_position&quot;:null,&quot;caption_category_hover_bg_position_tablet&quot;:null,&quot;caption_category_hover_bg_position_mobile&quot;:null,&quot;caption_category_hover_bg_xpos&quot;:null,&quot;caption_category_hover_bg_xpos_tablet&quot;:null,&quot;caption_category_hover_bg_xpos_mobile&quot;:null,&quot;caption_category_hover_bg_ypos&quot;:null,&quot;caption_category_hover_bg_ypos_tablet&quot;:null,&quot;caption_category_hover_bg_ypos_mobile&quot;:null,&quot;caption_category_hover_bg_attachment&quot;:null,&quot;caption_category_hover_bg_repeat&quot;:null,&quot;caption_category_hover_bg_repeat_tablet&quot;:null,&quot;caption_category_hover_bg_repeat_mobile&quot;:null,&quot;caption_category_hover_bg_size&quot;:null,&quot;caption_category_hover_bg_size_tablet&quot;:null,&quot;caption_category_hover_bg_size_mobile&quot;:null,&quot;caption_category_hover_bg_bg_width&quot;:null,&quot;caption_category_hover_bg_bg_width_tablet&quot;:null,&quot;caption_category_hover_bg_bg_width_mobile&quot;:null,&quot;caption_category_hover_bg_video_link&quot;:null,&quot;caption_category_hover_bg_video_start&quot;:null,&quot;caption_category_hover_bg_video_end&quot;:null,&quot;caption_category_hover_bg_play_once&quot;:null,&quot;caption_category_hover_bg_play_on_mobile&quot;:null,&quot;caption_category_hover_bg_privacy_mode&quot;:null,&quot;caption_category_hover_bg_video_fallback&quot;:null,&quot;caption_category_hover_bg_slideshow_gallery&quot;:null,&quot;caption_category_hover_bg_slideshow_loop&quot;:null,&quot;caption_category_hover_bg_slideshow_slide_duration&quot;:null,&quot;caption_category_hover_bg_slideshow_slide_transition&quot;:null,&quot;caption_category_hover_bg_slideshow_transition_duration&quot;:null,&quot;caption_category_hover_bg_slideshow_background_size&quot;:null,&quot;caption_category_hover_bg_slideshow_background_size_tablet&quot;:null,&quot;caption_category_hover_bg_slideshow_background_size_mobile&quot;:null,&quot;caption_category_hover_bg_slideshow_background_position&quot;:null,&quot;caption_category_hover_bg_slideshow_background_position_tablet&quot;:null,&quot;caption_category_hover_bg_slideshow_background_position_mobile&quot;:null,&quot;caption_category_hover_bg_slideshow_ken_burns&quot;:null,&quot;caption_category_hover_bg_slideshow_ken_burns_zoom_direction&quot;:null,&quot;caption_title_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_title_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_title_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_title_typography_typography&quot;:&quot;&quot;,&quot;caption_title_typography_font_family&quot;:null,&quot;caption_title_typography_font_size&quot;:null,&quot;caption_title_typography_font_size_tablet&quot;:null,&quot;caption_title_typography_font_size_mobile&quot;:null,&quot;caption_title_typography_font_weight&quot;:null,&quot;caption_title_typography_text_transform&quot;:null,&quot;caption_title_typography_font_style&quot;:null,&quot;caption_title_typography_text_decoration&quot;:null,&quot;caption_title_typography_line_height&quot;:null,&quot;caption_title_typography_line_height_tablet&quot;:null,&quot;caption_title_typography_line_height_mobile&quot;:null,&quot;caption_title_typography_letter_spacing&quot;:null,&quot;caption_title_typography_letter_spacing_tablet&quot;:null,&quot;caption_title_typography_letter_spacing_mobile&quot;:null,&quot;caption_title_color&quot;:&quot;&quot;,&quot;caption_title_hover_color&quot;:&quot;&quot;,&quot;caption_excerpt_margin&quot;:null,&quot;caption_excerpt_margin_tablet&quot;:null,&quot;caption_excerpt_margin_mobile&quot;:null,&quot;caption_excerpt_typography_typography&quot;:null,&quot;caption_excerpt_typography_font_family&quot;:null,&quot;caption_excerpt_typography_font_size&quot;:null,&quot;caption_excerpt_typography_font_size_tablet&quot;:null,&quot;caption_excerpt_typography_font_size_mobile&quot;:null,&quot;caption_excerpt_typography_font_weight&quot;:null,&quot;caption_excerpt_typography_text_transform&quot;:null,&quot;caption_excerpt_typography_font_style&quot;:null,&quot;caption_excerpt_typography_text_decoration&quot;:null,&quot;caption_excerpt_typography_line_height&quot;:null,&quot;caption_excerpt_typography_line_height_tablet&quot;:null,&quot;caption_excerpt_typography_line_height_mobile&quot;:null,&quot;caption_excerpt_typography_letter_spacing&quot;:null,&quot;caption_excerpt_typography_letter_spacing_tablet&quot;:null,&quot;caption_excerpt_typography_letter_spacing_mobile&quot;:null,&quot;caption_excerpt_color&quot;:null,&quot;caption_read_more_margin&quot;:null,&quot;caption_read_more_margin_tablet&quot;:null,&quot;caption_read_more_margin_mobile&quot;:null,&quot;button_text_color&quot;:null,&quot;button_background_color&quot;:null,&quot;button_border_color&quot;:null,&quot;button_hover_text_color&quot;:null,&quot;button_hover_background_color&quot;:null,&quot;button_hover_border_color&quot;:null,&quot;overlay_category_typography_typography&quot;:null,&quot;overlay_category_typography_font_family&quot;:null,&quot;overlay_category_typography_font_size&quot;:null,&quot;overlay_category_typography_font_size_tablet&quot;:null,&quot;overlay_category_typography_font_size_mobile&quot;:null,&quot;overlay_category_typography_font_weight&quot;:null,&quot;overlay_category_typography_text_transform&quot;:null,&quot;overlay_category_typography_font_style&quot;:null,&quot;overlay_category_typography_text_decoration&quot;:null,&quot;overlay_category_typography_line_height&quot;:null,&quot;overlay_category_typography_line_height_tablet&quot;:null,&quot;overlay_category_typography_line_height_mobile&quot;:null,&quot;overlay_category_typography_letter_spacing&quot;:null,&quot;overlay_category_typography_letter_spacing_tablet&quot;:null,&quot;overlay_category_typography_letter_spacing_mobile&quot;:null,&quot;overlay_category_color&quot;:null,&quot;overlay_category_bg_color&quot;:null,&quot;overlay_category_hover_color&quot;:null,&quot;overlay_category_hover_bg_color&quot;:null,&quot;pagination_alignment&quot;:&quot;center&quot;,&quot;pagination_alignment_tablet&quot;:&quot;&quot;,&quot;pagination_alignment_mobile&quot;:&quot;&quot;,&quot;pagination_spacing&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pagination_spacing_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pagination_spacing_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pagination_typography_typography&quot;:null,&quot;pagination_typography_font_family&quot;:null,&quot;pagination_typography_font_size&quot;:null,&quot;pagination_typography_font_size_tablet&quot;:null,&quot;pagination_typography_font_size_mobile&quot;:null,&quot;pagination_typography_font_weight&quot;:null,&quot;pagination_typography_text_transform&quot;:null,&quot;pagination_typography_font_style&quot;:null,&quot;pagination_typography_text_decoration&quot;:null,&quot;pagination_typography_line_height&quot;:null,&quot;pagination_typography_line_height_tablet&quot;:null,&quot;pagination_typography_line_height_mobile&quot;:null,&quot;pagination_typography_letter_spacing&quot;:null,&quot;pagination_typography_letter_spacing_tablet&quot;:null,&quot;pagination_typography_letter_spacing_mobile&quot;:null,&quot;pagination_link_color&quot;:&quot;&quot;,&quot;pagination_link_hover_color&quot;:&quot;&quot;,&quot;pagination_loading_color&quot;:null,&quot;query_source&quot;:&quot;custom_query&quot;,&quot;query_include&quot;:&quot;&quot;,&quot;query_include_term_ids&quot;:null,&quot;query_include_authors&quot;:null,&quot;query_exclude&quot;:&quot;&quot;,&quot;query_exclude_term_ids&quot;:null,&quot;query_exclude_authors&quot;:null,&quot;query_orderby&quot;:&quot;date&quot;,&quot;query_sort_meta_key&quot;:null,&quot;query_order&quot;:&quot;DESC&quot;,&quot;_title&quot;:&quot;&quot;,&quot;_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_z_index&quot;:&quot;&quot;,&quot;_z_index_tablet&quot;:&quot;&quot;,&quot;_z_index_mobile&quot;:&quot;&quot;,&quot;_element_id&quot;:&quot;&quot;,&quot;_css_classes&quot;:&quot;&quot;,&quot;pmpro_require_membership&quot;:&quot;&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;&quot;,&quot;motion_fx_translateY_effect&quot;:null,&quot;motion_fx_translateY_direction&quot;:null,&quot;motion_fx_translateY_speed&quot;:null,&quot;motion_fx_translateY_affectedRange&quot;:null,&quot;motion_fx_translateX_effect&quot;:null,&quot;motion_fx_translateX_direction&quot;:null,&quot;motion_fx_translateX_speed&quot;:null,&quot;motion_fx_translateX_affectedRange&quot;:null,&quot;motion_fx_opacity_effect&quot;:null,&quot;motion_fx_opacity_direction&quot;:null,&quot;motion_fx_opacity_level&quot;:null,&quot;motion_fx_opacity_range&quot;:null,&quot;motion_fx_blur_effect&quot;:null,&quot;motion_fx_blur_direction&quot;:null,&quot;motion_fx_blur_level&quot;:null,&quot;motion_fx_blur_range&quot;:null,&quot;motion_fx_rotateZ_effect&quot;:null,&quot;motion_fx_rotateZ_direction&quot;:null,&quot;motion_fx_rotateZ_speed&quot;:null,&quot;motion_fx_rotateZ_affectedRange&quot;:null,&quot;motion_fx_scale_effect&quot;:null,&quot;motion_fx_scale_direction&quot;:null,&quot;motion_fx_scale_speed&quot;:null,&quot;motion_fx_scale_range&quot;:null,&quot;motion_fx_transform_origin_x&quot;:null,&quot;motion_fx_transform_origin_y&quot;:null,&quot;motion_fx_devices&quot;:null,&quot;motion_fx_range&quot;:null,&quot;motion_fx_motion_fx_mouse&quot;:&quot;&quot;,&quot;motion_fx_mouseTrack_effect&quot;:null,&quot;motion_fx_mouseTrack_direction&quot;:null,&quot;motion_fx_mouseTrack_speed&quot;:null,&quot;motion_fx_tilt_effect&quot;:null,&quot;motion_fx_tilt_direction&quot;:null,&quot;motion_fx_tilt_speed&quot;:null,&quot;sticky&quot;:&quot;&quot;,&quot;sticky_on&quot;:null,&quot;sticky_offset&quot;:null,&quot;sticky_effects_offset&quot;:null,&quot;sticky_parent&quot;:null,&quot;_animation&quot;:&quot;&quot;,&quot;_animation_tablet&quot;:&quot;&quot;,&quot;_animation_mobile&quot;:&quot;&quot;,&quot;animation_duration&quot;:null,&quot;_animation_delay&quot;:null,&quot;_background_background&quot;:&quot;&quot;,&quot;_background_color&quot;:null,&quot;_background_color_stop&quot;:null,&quot;_background_color_b&quot;:null,&quot;_background_color_b_stop&quot;:null,&quot;_background_gradient_type&quot;:null,&quot;_background_gradient_angle&quot;:null,&quot;_background_gradient_position&quot;:null,&quot;_background_image&quot;:null,&quot;_background_image_tablet&quot;:null,&quot;_background_image_mobile&quot;:null,&quot;_background_position&quot;:null,&quot;_background_position_tablet&quot;:null,&quot;_background_position_mobile&quot;:null,&quot;_background_xpos&quot;:null,&quot;_background_xpos_tablet&quot;:null,&quot;_background_xpos_mobile&quot;:null,&quot;_background_ypos&quot;:null,&quot;_background_ypos_tablet&quot;:null,&quot;_background_ypos_mobile&quot;:null,&quot;_background_attachment&quot;:null,&quot;_background_repeat&quot;:null,&quot;_background_repeat_tablet&quot;:null,&quot;_background_repeat_mobile&quot;:null,&quot;_background_size&quot;:null,&quot;_background_size_tablet&quot;:null,&quot;_background_size_mobile&quot;:null,&quot;_background_bg_width&quot;:null,&quot;_background_bg_width_tablet&quot;:null,&quot;_background_bg_width_mobile&quot;:null,&quot;_background_video_link&quot;:null,&quot;_background_video_start&quot;:null,&quot;_background_video_end&quot;:null,&quot;_background_play_once&quot;:null,&quot;_background_play_on_mobile&quot;:null,&quot;_background_privacy_mode&quot;:null,&quot;_background_video_fallback&quot;:null,&quot;_background_slideshow_gallery&quot;:null,&quot;_background_slideshow_loop&quot;:null,&quot;_background_slideshow_slide_duration&quot;:null,&quot;_background_slideshow_slide_transition&quot;:null,&quot;_background_slideshow_transition_duration&quot;:null,&quot;_background_slideshow_background_size&quot;:null,&quot;_background_slideshow_background_size_tablet&quot;:null,&quot;_background_slideshow_background_size_mobile&quot;:null,&quot;_background_slideshow_background_position&quot;:null,&quot;_background_slideshow_background_position_tablet&quot;:null,&quot;_background_slideshow_background_position_mobile&quot;:null,&quot;_background_slideshow_ken_burns&quot;:null,&quot;_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;_background_hover_background&quot;:&quot;&quot;,&quot;_background_hover_color&quot;:null,&quot;_background_hover_color_stop&quot;:null,&quot;_background_hover_color_b&quot;:null,&quot;_background_hover_color_b_stop&quot;:null,&quot;_background_hover_gradient_type&quot;:null,&quot;_background_hover_gradient_angle&quot;:null,&quot;_background_hover_gradient_position&quot;:null,&quot;_background_hover_image&quot;:null,&quot;_background_hover_image_tablet&quot;:null,&quot;_background_hover_image_mobile&quot;:null,&quot;_background_hover_position&quot;:null,&quot;_background_hover_position_tablet&quot;:null,&quot;_background_hover_position_mobile&quot;:null,&quot;_background_hover_xpos&quot;:null,&quot;_background_hover_xpos_tablet&quot;:null,&quot;_background_hover_xpos_mobile&quot;:null,&quot;_background_hover_ypos&quot;:null,&quot;_background_hover_ypos_tablet&quot;:null,&quot;_background_hover_ypos_mobile&quot;:null,&quot;_background_hover_attachment&quot;:null,&quot;_background_hover_repeat&quot;:null,&quot;_background_hover_repeat_tablet&quot;:null,&quot;_background_hover_repeat_mobile&quot;:null,&quot;_background_hover_size&quot;:null,&quot;_background_hover_size_tablet&quot;:null,&quot;_background_hover_size_mobile&quot;:null,&quot;_background_hover_bg_width&quot;:null,&quot;_background_hover_bg_width_tablet&quot;:null,&quot;_background_hover_bg_width_mobile&quot;:null,&quot;_background_hover_video_link&quot;:null,&quot;_background_hover_video_start&quot;:null,&quot;_background_hover_video_end&quot;:null,&quot;_background_hover_play_once&quot;:null,&quot;_background_hover_play_on_mobile&quot;:null,&quot;_background_hover_privacy_mode&quot;:null,&quot;_background_hover_video_fallback&quot;:null,&quot;_background_hover_slideshow_gallery&quot;:null,&quot;_background_hover_slideshow_loop&quot;:null,&quot;_background_hover_slideshow_slide_duration&quot;:null,&quot;_background_hover_slideshow_slide_transition&quot;:null,&quot;_background_hover_slideshow_transition_duration&quot;:null,&quot;_background_hover_slideshow_background_size&quot;:null,&quot;_background_hover_slideshow_background_size_tablet&quot;:null,&quot;_background_hover_slideshow_background_size_mobile&quot;:null,&quot;_background_hover_slideshow_background_position&quot;:null,&quot;_background_hover_slideshow_background_position_tablet&quot;:null,&quot;_background_hover_slideshow_background_position_mobile&quot;:null,&quot;_background_hover_slideshow_ken_burns&quot;:null,&quot;_background_hover_slideshow_ken_burns_zoom_direction&quot;:null,&quot;_background_hover_transition&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_border_border&quot;:&quot;&quot;,&quot;_border_width&quot;:null,&quot;_border_width_tablet&quot;:null,&quot;_border_width_mobile&quot;:null,&quot;_border_color&quot;:null,&quot;_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;_box_shadow_box_shadow&quot;:null,&quot;_box_shadow_box_shadow_position&quot;:null,&quot;_border_hover_border&quot;:&quot;&quot;,&quot;_border_hover_width&quot;:null,&quot;_border_hover_width_tablet&quot;:null,&quot;_border_hover_width_mobile&quot;:null,&quot;_border_hover_color&quot;:null,&quot;_border_radius_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_box_shadow_hover_box_shadow_type&quot;:&quot;&quot;,&quot;_box_shadow_hover_box_shadow&quot;:null,&quot;_box_shadow_hover_box_shadow_position&quot;:null,&quot;_border_hover_transition&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_mask_switch&quot;:&quot;&quot;,&quot;_mask_shape&quot;:null,&quot;_mask_image&quot;:null,&quot;_mask_notice&quot;:null,&quot;_mask_size&quot;:null,&quot;_mask_size_tablet&quot;:null,&quot;_mask_size_mobile&quot;:null,&quot;_mask_size_scale&quot;:null,&quot;_mask_size_scale_tablet&quot;:null,&quot;_mask_size_scale_mobile&quot;:null,&quot;_mask_position&quot;:null,&quot;_mask_position_tablet&quot;:null,&quot;_mask_position_mobile&quot;:null,&quot;_mask_position_x&quot;:null,&quot;_mask_position_x_tablet&quot;:null,&quot;_mask_position_x_mobile&quot;:null,&quot;_mask_position_y&quot;:null,&quot;_mask_position_y_tablet&quot;:null,&quot;_mask_position_y_mobile&quot;:null,&quot;_mask_repeat&quot;:null,&quot;_mask_repeat_tablet&quot;:null,&quot;_mask_repeat_mobile&quot;:null,&quot;_element_width&quot;:&quot;&quot;,&quot;_element_width_tablet&quot;:&quot;&quot;,&quot;_element_width_mobile&quot;:&quot;&quot;,&quot;_element_custom_width&quot;:null,&quot;_element_custom_width_tablet&quot;:null,&quot;_element_custom_width_mobile&quot;:null,&quot;_element_vertical_align&quot;:null,&quot;_element_vertical_align_tablet&quot;:null,&quot;_element_vertical_align_mobile&quot;:null,&quot;_position&quot;:&quot;&quot;,&quot;_offset_orientation_h&quot;:null,&quot;_offset_x&quot;:null,&quot;_offset_x_tablet&quot;:null,&quot;_offset_x_mobile&quot;:null,&quot;_offset_x_end&quot;:null,&quot;_offset_x_end_tablet&quot;:null,&quot;_offset_x_end_mobile&quot;:null,&quot;_offset_orientation_v&quot;:null,&quot;_offset_y&quot;:null,&quot;_offset_y_tablet&quot;:null,&quot;_offset_y_mobile&quot;:null,&quot;_offset_y_end&quot;:null,&quot;_offset_y_end_tablet&quot;:null,&quot;_offset_y_end_mobile&quot;:null,&quot;hide_desktop&quot;:&quot;&quot;,&quot;hide_tablet&quot;:&quot;&quot;,&quot;hide_mobile&quot;:&quot;&quot;,&quot;_attributes&quot;:&quot;&quot;,&quot;custom_css&quot;:&quot;&quot;}}" />
																				<div class="maxcoach-grid lazy-grid">
																					<div class="grid-sizer"></div>

																					<div class="grid-item post-item post-5165 post type-post status-publish format-video has-post-thumbnail hentry category-business tag-finance post_format-post-format-video pmpro-has-access">
																					<?php foreach ($result as $ans) { ?>
																						<?php $orgDate = $ans['dob'];
                                                                                        $newDate = date("d-m-Y", strtotime($orgDate)); ?>
																						<div class="post-wrapper maxcoach-box">
																							<div class="post-feature post-thumbnail maxcoach-image">
																								<a href="#">
																									<img src="<?= $ans['image'] ?>" alt="home-personal-finance-blog-03" width="480" /> </a>
																							</div>
																							<div class="post-caption">
																								<div class="post-categories">
																									<a href="#" rel="category tag"><span><?= $ans['sc_name'] ?></span></a>
																								</div>
																								<h3 class="post-title">
																									<a href="../includes/view_student.php?id=<?= $ans['id'] ?>"><?= $ans['stud_name'] ?></a>
																								</h3>
																								<div class="post-meta">
																									<div class="inner">
																										<div class="post-date">
																											<span class="meta-icon"><i class="far fa-calendar"></i></span>
																											<?= $orgDate ?>
																										</div>
																										<div class="post-view">
																											<span class="meta-icon">
																												<i class="far fa-eye"></i>
																											</span>
																											<?= $ans['class'] ?>
																										</div>

																									</div>
																								</div>
																							</div>
																						</div>
																					<?php } ?>

																					</div>
																				</div>
																				<div class="maxcoach-grid-pagination">
																					<div class="pagination-wrapper">

																						<ul class="page-pagination">
																							<li><span aria-current="page" class="page-numbers current">1</span></li>
																							<li><a class="page-numbers" href="#">2</a></li>
																							<li><a class="page-numbers" href="#">3</a></li>
																							<li><a class="next page-numbers" href="#">Next</a></li>
																						</ul>
																					</div>
																				</div>
																				<div class="maxcoach-grid-messages" style="display: none;">
																					All items displayed. </div>

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
							</article> -->

                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Adhar-Card Number</th>
                                        <th scope="col">Remark</th>
                                        <th scope="col">Birth Certificate</th>
                                        <th scope="col">Fathers Adhar-Card</th>
                                        <th scope="col">Mothers Adhar-Card</th>
                                        <th scope="col">Submit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $user = $_SESSION['user'];
                                    if ($_SESSION["user_type"] == 'School Panel') {
                                        $select = "SELECT * FROM pstudr WHERE status = 'remarked' and sc_name = '$user' ";
                                        $query = $connection->query($select);
                                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                                    } 
                                     if ($_SESSION["user_type"] == 'College Panel') {
                                        $select = "SELECT * FROM pstudr WHERE status = 'remarked' and c_name = '$user' ";
                                        $query = $connection->query($select);
                                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                                    }
                                   
                                    $row = count($result);
                                    foreach ($result as $data) { ?>
                                        <tr>
                                            <td><?= $data['stud_name'] ?></td>
                                            <td><?= $data['adhar'] ?></a></td>
                                            <td><?= $data['remark'] ?></td>
                                            <form action="../codes/remark_back.php" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                <td>
                                                    <?php if ($data['birth_certificate_check'] == 'on') { ?>
                                                        <span style="color: green; font-size:25px">✓</span>
                                                        <input type="hidden" name="birthcertificate" value="<?= $data['birth_certificate'] ?>">
                                                    <?php } ?>
                                                    <?php if ($data['birth_certificate_check'] != 'on') { ?>
                                                        <div class="form-field ">
                                                            <input type="file" id="file_input" class="input-group-text" name="birth_certificate" style="width:250px;">
                                                        </div>

                                                    <?php } ?>
                                                </td>
                                                <td class="">
                                                    <?php if ($data['f_adhar_check'] == 'on') { ?>
                                                        <span style="color: green; font-size:25px">✓</span>
                                                        <input type="hidden" name="fadhar" value="<?= $data['f_adhar'] ?>">
                                                    <?php } ?>
                                                    <?php if ($data['f_adhar_check'] != 'on') { ?>
                                                        <input type="file" id="file_input" class="input-group-text" name="f_adhar" style="width:250px;">

                                                    <?php } ?>
                                                </td>
                                                <td class="">
                                                    <?php if ($data['m_adhar_check'] == 'on') { ?>
                                                        <span style="color: green; font-size:25px">✓</span>
                                                        <input type="hidden" name="madhar" value="<?= $data['m_adhar'] ?>">
                                                    <?php } ?>
                                                    <?php if ($data['m_adhar_check'] != 'on') { ?>
                                                        <input type="file" id="file_input" class="input-group-text" name="m_adhar" style="width:250px;">

                                                    <?php } ?>
                                                </td>
                                                <td><button type="submit">Submit</button></td>
                                            </form>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.content-wrapper -->


        <?php include('../includes/footer.php');  ?>



    </div><!-- /.site -->


    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = false;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <!-- Memberships powered by Paid Memberships Pro v2.7.2.
 -->
    <div class="woosc-popup woosc-search">
        <div class="woosc-popup-inner">
            <div class="woosc-popup-content">
                <div class="woosc-popup-content-inner">
                    <div class="woosc-popup-close"></div>
                    <div class="woosc-search-input">
                        <input type="search" id="woosc_search_input" placeholder="Type any keyword to search..." />
                    </div>
                    <div class="woosc-search-result"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="woosc-popup woosc-settings">
        <div class="woosc-popup-inner">
            <div class="woosc-popup-content">
                <div class="woosc-popup-content-inner">
                    <div class="woosc-popup-close"></div>
                    Select the fields to be shown. Others will be hidden. Drag and drop to rearrange the order. <ul class="woosc-settings-fields">
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="image" checked /><span class="label">Image</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="sku" checked /><span class="label">SKU</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="rating" checked /><span class="label">Rating</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="price" checked /><span class="label">Price</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="stock" checked /><span class="label">Stock</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="availability" checked /><span class="label">Availability</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="add_to_cart" checked /><span class="label">Add to cart</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="description" checked /><span class="label">Description</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="content" checked /><span class="label">Content</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="weight" checked /><span class="label">Weight</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="dimensions" checked /><span class="label">Dimensions</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="additional" checked /><span class="label">Additional information</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="attributes" checked /><span class="label">Attributes</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="custom_attributes" checked /><span class="label">Custom attributes</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field" value="custom_fields" checked /><span class="label">Custom fields</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="woosc-area" class="woosc-area woosc-bar-bottom woosc-bar-right woosc-bar-click-outside-yes woosc-hide-checkout" data-bg-color="#292a30" data-btn-color="#20AD96">
        <div class="woosc-inner">
            <div class="woosc-table">
                <div class="woosc-table-inner">
                    <a href="javascript:void(0);" id="woosc-table-close" class="woosc-table-close hint--left" aria-label="Close"><span class="woosc-table-close-icon"></span></a>
                    <div class="woosc-table-items"></div>
                </div>
            </div>
            <div class="woosc-bar ">
                <div class="woosc-bar-notice">
                    Click outside to hide the compare bar </div>
                <a href="javascript:void(0);" class="woosc-bar-settings hint--top" aria-label="Select fields"></a>
                <a href="javascript:void(0);" class="woosc-bar-search hint--top" aria-label="Add product"></a>
                <div class="woosc-bar-items"></div>
                <div class="woosc-bar-btn woosc-bar-btn-text">
                    <div class="woosc-bar-btn-icon-wrapper">
                        <div class="woosc-bar-btn-icon-inner"><span></span><span></span><span></span>
                        </div>
                    </div>
                    Compare
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="woosw-area" class="woosw-area">
		<div class="woosw-inner">
			<div class="woosw-content">
				<div class="woosw-content-top">
					Wishlist <span class="woosw-count">0</span>
					<span class="woosw-close"></span>
				</div>
				<div class="woosw-content-mid"></div>
				<div class="woosw-content-bot">
					<div class="woosw-content-bot-inner">
						<a class="woosw-page" href="../wishlist/index.html">
							Open wishlist page </a>
						<span class="woosw-continue" data-url="">
							Continue shopping </span>
					</div>
					<div class="woosw-notice"></div>
				</div>
			</div>
		</div>
	</div> -->
    <!-- <div class="tm-demo-options-wrapper">
		<div class="tm-demo-options-toolbar">
			<a href="#" class="hint--bounce hint--left hint--black" id="toggle-quick-options" aria-label="Select Demo">
				<i class="far fa-ruler-triangle"></i>
			</a>
			<a href="https://thememove.ticksy.com/" target="_blank" rel="nofollow" class="hint--bounce hint--left hint--black" aria-label="Support Channel">
				<i class="far fa-life-ring"></i>
			</a>
			<a href="https://document.thememove.com/maxcoach/" target="_blank" rel="nofollow" class="hint--bounce hint--left hint--black" aria-label="Documentation">
				<i class="far fa-book"></i>
			</a>
			<a href="https://themeforest.net/item/maxcoach-online-courses-education-wp-theme/26051639" target="_blank" rel="nofollow" class="hint--bounce hint--left hint--black" aria-label="Purchase Maxcoach">
				<i class="far fa-shopping-cart"></i>
			</a>
		</div>
		<div id="tm-demo-panel" class="tm-demo-panel">
			<div class="tm-demo-panel-header">
				<h5 class="demo-option-title">
					MaxCoach - Online Learning and Education WordPress Theme </h5>


				<a class="tm-button style-flat tm-button-sm tm-button-primary tm-btn-purchase has-icon icon-left" href="https://themeforest.net/item/maxcoach-online-courses-education-wp-theme/26051639" target="_blank">
					<span class="button-icon">
						<i class="far fa-shopping-cart"></i>
					</span>
					<span class="button-text">
						Buy Now </span>
				</a>
			</div>

			<div class="quick-option-list">
				<a href="https://maxcoach.thememove.com/" class="hint--bounce hint--top" aria-label="Landing Page">
					<img src="../images/landing-preview.jpg" alt="Landing Page" width="150" height="180">
				</a>
				<a href="../index.html" class="hint--bounce hint--top" aria-label="MaxCoach Education">
					<img src="../images/home-01-preview.jpg" alt="MaxCoach Education" width="150" height="180">
				</a>
				<a href="../course-portal/index.html" class="hint--bounce hint--top" aria-label="Course Portal">
					<img src="../images/home-02-preview.jpg" alt="Course Portal" width="150" height="180">
				</a>
				<a href="../distant-learning/index.html" class="hint--bounce hint--top" aria-label="Distant Learning">
					<img src="../images/home-03-preview.jpg" alt="Distant Learning" width="150" height="180">
				</a>
				<a href="../multimedia-pedagogy/index.html" class="hint--bounce hint--top" aria-label="Multimedia Pedagogy">
					<img src="../images/home-04-preview.jpg" alt="Multimedia Pedagogy" width="150" height="180">
				</a>
				<a href="../modern-schooling/index.html" class="hint--bounce hint--top" aria-label="Modern Schooling">
					<img src="../images/home-05-preview.jpg" alt="Modern Schooling" width="150" height="180">
				</a>
				<a href="../remote-training/index.html" class="hint--bounce hint--top" aria-label="Remote Training">
					<img src="../images/home-06-preview.jpg" alt="Remote Training" width="150" height="180">
				</a>
				<a href="../health-coaching/index.html" class="hint--bounce hint--top" aria-label="Health Coaching">
					<img src="../images/home-health-coaching-preview.jpg" alt="Health Coaching" width="150" height="180">
				</a>
				<a href="../gym-coaching/index.html" class="hint--bounce hint--top" aria-label="Gym Coaching">
					<img src="../images/home-gym-coaching-preview.jpg" alt="Gym Coaching" width="150" height="180">
				</a>
				<a href="../business/index.html" class="hint--bounce hint--top" aria-label="Business">
					<img src="../images/home-business-preview.jpg" alt="Business" width="150" height="180">
				</a>
				<a href="../kitchen-coach/index.html" class="hint--bounce hint--top" aria-label="Kitchen Coach">
					<img src="../images/home-kitchen-coach-preview.jpg" alt="Kitchen Coach" width="150" height="180">
				</a>
				<a href="../artist/index.html" class="hint--bounce hint--top" aria-label="Artist">
					<img src="../images/home-artist-preview.jpg" alt="Artist" width="150" height="180">
				</a>
				<a href="../motivation/index.html" class="hint--bounce hint--top" aria-label="Motivation">
					<img src="../images/home-motivation-preview.jpg" alt="Motivation" width="150" height="180">
				</a>
				<a href="../yoga/index.html" class="hint--bounce hint--top" aria-label="Yoga">
					<img src="../images/home-yoga-preview.jpg" alt="Yoga" width="150" height="180">
				</a>
				<a href="../photography/index.html" class="hint--bounce hint--top" aria-label="Photography">
					<img src="../images/home-photography-preview.jpg" alt="Photography" width="150" height="180">
				</a>
				<a href="../personal-finance/index.html" class="hint--bounce hint--top" aria-label="Personal Finance">
					<img src="../images/home-personal-finance-preview.jpg" alt="Personal Finance" width="150" height="180">
				</a>
				<a href="../dancing/index.html" class="hint--bounce hint--top" aria-label="Dancing">
					<img src="../images/home-dancing-preview.jpg" alt="Dancing" width="150" height="180">
				</a>
				<a href="../guitar/index.html" class="hint--bounce hint--top" aria-label="Guitar">
					<img src="../images/home-guitar-preview.jpg" alt="Guitar" width="150" height="180">
				</a>
				<a href="https://maxcoach.thememove.com/rtl" class="hint--bounce hint--top" aria-label="RTL Demo">
					<img src="../images/rtl-demo-preview.jpg" alt="RTL Demo" width="150" height="180">
				</a>
			</div>
		</div>
	</div> -->
    <script>
        jQuery(document).ready(function($) {
            'use strict';
            $('#toggle-quick-options').on('click', function(e) {
                e.preventDefault();
                $(this).parents('.tm-demo-options-wrapper').toggleClass('open');
            });
        });
    </script>

    <script>
        jQuery(document).ready(function($) {
            'use strict';

            // Retrieve.
            var popupOn = true;
            var $popupTryLiveDemo = $('#popup-try-live-demo');
            var $form = $popupTryLiveDemo.children('form');

            $popupTryLiveDemo.children('.login-as-student').addClass('tm-button-bounce');
            /*setTimeout( function() {
            	$popupTryLiveDemo.children( '.login-as-instructor' ).addClass( 'tm-button-bounce' );
            }, 2000 );*/

            $popupTryLiveDemo.on('click', '.tm-button', function(e) {
                var $button = $(this);

                if ($button.hasClass('ajax-login')) {
                    e.preventDefault();
                    e.stopPropagation();

                    if ($button.hasClass('login-as-instructor')) {
                        $form.children('input[name=type]').val('instructor');
                    } else {
                        $form.children('input[name=type]').val('student');
                    }

                    $.ajax({
                        url: $maxcoach.ajaxurl,
                        type: 'POST',
                        dataType: 'json',
                        data: $form.serialize(),
                        success: function(response) {
                            if ('' !== response.redirect_url) {
                                window.location.href = response.redirect_url;
                            }
                        },
                    });
                }
            });

            if (typeof(
                    Storage
                ) !== "undefined" && sessionStorage.getItem('popup_try_live_demo_disabled') === '1') {
                popupOn = false;
            }

            if (popupOn === true) {
                $popupTryLiveDemo.removeClass('hidden')
            }

            $('#popup-try-live-demo-close').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                if (typeof(
                        Storage
                    ) !== "undefined") {
                    sessionStorage.setItem('popup_try_live_demo_disabled', '1');
                }

                $popupTryLiveDemo.addClass('hidden');
            });
        });
    </script>
    <a class="page-scroll-up" id="page-scroll-up">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <div id="page-mobile-main-menu" class="page-mobile-main-menu">
        <div class="inner">
            <div class="page-mobile-menu-header">
                <div class="page-mobile-popup-logo page-mobile-menu-logo">
                    <a href="../index.html" rel="home">
                        <img src="../images/dark-logo.png" alt="MaxCoach" width="158" />
                    </a>
                </div>
                <div id="page-close-mobile-menu" class="page-close-mobile-menu">
                    <div class="burger-icon burger-icon-close">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div data-elementor-type="popup" data-elementor-id="623" class="elementor elementor-623 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;exit_animation&quot;:&quot;fadeInDown&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;0.5&quot;,&quot;sizes&quot;:[]},&quot;close_button_delay&quot;:&quot;1&quot;,&quot;triggers&quot;:{&quot;page_load_delay&quot;:1,&quot;page_load&quot;:&quot;yes&quot;},&quot;timing&quot;:{&quot;times&quot;:&quot;yes&quot;,&quot;times_times&quot;:3}}">
        <div class="elementor-section-wrap">
            <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-232fb41 elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="232fb41" data-element_type="section">
				<div class="elementor-container elementor-column-gap-extended">
					<div class="elementor-row">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a700cd2" data-id="a700cd2" data-element_type="column">
							<div class="elementor-column-wrap elementor-element-populated">
								<div class="elementor-widget-wrap">
									<div class="elementor-element elementor-element-1eaa261 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="1eaa261" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<div class="elementor-image">
												<img width="131" height="36" src="../images/maxcoach-shape-01.png" class="attachment-full size-full" alt="" loading="lazy" />
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-06839ac elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image" data-id="06839ac" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<div class="elementor-image">
												<img width="127" height="123" src="../images/maxcoach-shape-02.png" class="attachment-full size-full" alt="" loading="lazy" />
											</div>
										</div>
									</div>
									<section class="elementor-section elementor-inner-section elementor-element elementor-element-46b623f elementor-section-gap-beside-no elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section-content-align-center elementor-section-column-vertical-align-stretch" data-id="46b623f" data-element_type="section">
										<div class="elementor-container elementor-column-gap-extended">
											<div class="elementor-row">
												<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-22f8df9" data-id="22f8df9" data-element_type="column">
													<div class="elementor-column-wrap elementor-element-populated">
														<div class="elementor-widget-wrap">
															<div class="elementor-element elementor-element-dd21472 maxcoach-shape-border-circle elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-tm-shapes" data-id="dd21472" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
																<div class="elementor-widget-container">
																	<div class="maxcoach-shape maxcoach-shape-1-1">
																		<div class="shape"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-31cf816 elementor-widget elementor-widget-tm-heading" data-id="31cf816" data-element_type="widget" data-widget_type="tm-heading.default">
																<div class="elementor-widget-container">
																	<div class="tm-modern-heading">
																		<div class="heading-secondary-wrap">
																			<h3 class="heading-secondary elementor-heading-title">Free 10 Days</h3>
																		</div>

																		<div class="heading-primary-wrap">
																			<h2 class="heading-primary elementor-heading-title">Master Course Invest On Self Now</h2>
																		</div>


																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-ca50ddd elementor-widget elementor-widget-tm-heading" data-id="ca50ddd" data-element_type="widget" data-widget_type="tm-heading.default">
																<div class="elementor-widget-container">
																	<div class="tm-modern-heading">

																		<div class="heading-primary-wrap">
																			<h5 class="heading-primary elementor-heading-title">Subscribe & Get Your Bonus!</h5>
																		</div>


																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-a8a4cd1 elementor-mobile-button-align-start elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="a8a4cd1" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;custom&quot;,&quot;button_width_mobile&quot;:&quot;100&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
																<div class="elementor-widget-container">
																	<form class="elementor-form" method="post" name="Subscribe Form">
																		<input type="hidden" name="post_id" value="623" />
																		<input type="hidden" name="form_id" value="a8a4cd1" />
																		<input type="hidden" name="referer_title" value="Blog Grid" />

																		<input type="hidden" name="queried_id" value="831" />

																		<div class="elementor-form-fields-wrapper elementor-labels-">
																			<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-fit">
																				<label for="form-field-name" class="elementor-field-label elementor-screen-only">Email</label><input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Enter your email">
																			</div>
																			<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-custom e-form__buttons elementor-sm-100">
																				<button type="submit" class="elementor-button elementor-size-md">
																					<span>
																						<span class=" elementor-button-icon">
																						</span>
																						<span class="elementor-button-text">Subscribe</span>
																					</span>
																				</button>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
															<div class="elementor-element elementor-element-a3372ed elementor-widget elementor-widget-tm-heading" data-id="a3372ed" data-element_type="widget" data-widget_type="tm-heading.default">
																<div class="elementor-widget-container">
																	<div class="tm-modern-heading">

																		<div class="heading-primary-wrap">
																			<div class="heading-primary elementor-heading-title"><span class="fal fa-lock-alt" style="margin-right: 4px;"></span> Your infomation will never be shared with any third party</div>
																		</div>


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
			</section> -->
        </div>
    </div>
    <script>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='elementor-post-3350-css' href='../css/post-3350.css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='../css/rs6.css' media='all' />
    <style id='rs-plugin-settings-inline-css'>
        #rs-demo-id {}
    </style>
    <script src='../script/intersection-observer.min.js' id='intersection-observer-js'></script>
    <script id='crisp-js-before'>
        window.$crisp = [];
        CRISP_RUNTIME_CONFIG = {
            locale: 'en'
        };
        CRISP_WEBSITE_ID = '3fce0e1c-47c5-4a97-86e3-240784452e73';
    </script>
    <script src='../script/l.js' id='crisp-js'></script>
    <script src='../script/jquery.blockUI.min.js' id='jquery-blockui-js'></script>
    <script id='wc-add-to-cart-js-extra'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/main\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/main\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/maxcoach.thememove.com\/main\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script src='../script/add-to-cart.min.js' id='wc-add-to-cart-js'></script>
    <script src='../script/js.cookie.min.js' id='js-cookie-js'></script>
    <script id='woocommerce-js-extra'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/main\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/main\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script src='../script/woocommerce.min.js' id='woocommerce-js'></script>
    <script id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/main\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/main\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_174082dbe78158f5057202efb9e69314",
            "fragment_name": "wc_fragments_174082dbe78158f5057202efb9e69314",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script src='../script/cart-fragments.min.js' id='wc-cart-fragments-js'></script>
    <script src='../script/ccore.min.js' id='jquery-ui-core-js'></script>
    <script src='../script/underscore.min.js' id='underscore-js'></script>
    <script id='wp-util-js-extra'>
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/main\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script src='../script/wp-util.min.js' id='wp-util-js'></script>
    <script src='../script/backbone.min.js' id='backbone-js'></script>
    <script src='../script/jquery.plugin.min.js' id='wpems-countdown-plugin-js-js'></script>
    <script id='wpems-countdown-js-js-extra'>
        /* <![CDATA[ */
        var WPEMS = {
            "gmt_offset": "0",
            "current_time": "Sep 24, 2022 05:11:00 +0000",
            "l18n": {
                "labels": ["Years", "Months", "Weeks", "Days", "Hours", "Minutes", "Seconds"],
                "labels1": ["Year", "Month", "Week", "Day", "Hour", "Minute", "Second"]
            },
            "ajaxurl": "https:\/\/maxcoach.thememove.com\/main\/wp-admin\/admin-ajax.php",
            "something_wrong": "Something went wrong",
            "register_button": "15a3deacab"
        };
        /* ]]> */
    </script>
    <script src='../script/jquery.countdown.min.js' id='wpems-countdown-js-js'></script>
    <script src='../script/events.js' id='wpems-frontend-js-js'></script>
    <script src='../script/table-head-fixer.js' id='table-head-fixer-js'></script>
    <script src='../script/perfect-scrollbar.jquery.min.js' id='perfect-scrollbar-js'></script>
    <script src='../script/mouse.min.js' id='jquery-ui-mouse-js'></script>
    <script src='../script/sortable.min.js' id='jquery-ui-sortable-js'></script>
    <script id='woosc-frontend-js-extra'>
        /* <![CDATA[ */
        var woosc_vars = {
            "ajaxurl": "https:\/\/maxcoach.thememove.com\/main\/wp-admin\/admin-ajax.php",
            "user_id": "0cdb64fab32a05bd393b20c8c351de9f",
            "page_url": "#",
            "open_button": "",
            "open_button_action": "open_popup",
            "menu_action": "open_popup",
            "open_table": "yes",
            "open_bar": "no",
            "bar_bubble": "no",
            "click_again": "no",
            "hide_empty": "no",
            "click_outside": "yes",
            "freeze_column": "yes",
            "freeze_row": "yes",
            "scrollbar": "yes",
            "limit": "100",
            "button_text_change": "yes",
            "remove_all": "Do you want to remove all products from the compare?",
            "limit_notice": "You can add a maximum of {limit} products to the compare table.",
            "button_text": "Compare",
            "button_text_added": "Compare",
            "nonce": "309118d445"
        };
        /* ]]> */
    </script>
    <script src='../script/frontend.js' id='woosc-frontend-js'></script>
    <script id='woosw-frontend-js-extra'>
        /* <![CDATA[ */
        var woosw_vars = {
            "ajax_url": "https:\/\/maxcoach.thememove.com\/main\/wp-admin\/admin-ajax.php",
            "menu_action": "open_page",
            "perfect_scrollbar": "yes",
            "wishlist_url": "https:\/\/maxcoach.thememove.com\/main\/wishlist\/",
            "button_action": "list",
            "button_action_added": "popup",
            "empty_confirm": "Are you sure? This cannot be undone.",
            "copied_text": "Copied the wishlist link:",
            "menu_text": "Wishlist",
            "button_text": "Add to wishlist",
            "button_text_added": "Browse wishlist"
        };
        /* ]]> */
    </script>
    <script src='../script/frontend.js' id='woosw-frontend-js'></script>
    <script src='../script/headroom.min.js' id='headroom-js'></script>
    <script src='../script/SmoothScroll.min.js' id='smooth-scroll-js'></script>
    <script src='../script/lightgallery-all.min.js' id='lightgallery-js'></script>
    <script src='../script/waypoints.min.js' id='elementor-waypoints-js'></script>
    <script src='../script/jquery.smooth-scroll.min.js' id='jquery-smooth-scroll-js'></script>
    <script src='../script/imagesloaded.min.js' id='imagesloaded-js'></script>
    <script src='../script/swiper.min.js' id='swiper-js'></script>
    <script id='maxcoach-swiper-wrapper-js-extra'>
        /* <![CDATA[ */
        var $maxcoachSwiper = {
            "prevText": "Prev",
            "nextText": "Next"
        };
        var $maxcoachSwiper = {
            "prevText": "Prev",
            "nextText": "Next"
        };
        var $maxcoachSwiper = {
            "prevText": "Prev",
            "nextText": "Next"
        };
        /* ]]> */
    </script>
    <script src='../script/swiper-wrapper.js' id='maxcoach-swiper-wrapper-js'></script>
    <script src='../script/jquery.matchHeight-min.js' id='matchheight-js'></script>
    <script src='../script/isotope.pkgd.js' id='isotope-masonry-js'></script>
    <script src='../script/packery-mode.pkgd.js' id='isotope-packery-js'></script>
    <script src='../script/grid-layout.js' id='maxcoach-grid-layout-js'></script>
    <script src='../script/jquery.smartmenus.min.js' id='smartmenus-js'></script>
    <script src='../script/jquery.magnific-popup.js' id='magnific-popup-js'></script>
    <script src='../script/nice-select.js' id='maxcoach-nice-select-js'></script>
    <script id='maxcoach-script-js-extra'>
        /* <![CDATA[ */
        var $maxcoach = {
            "ajaxurl": "https:\/\/maxcoach.thememove.com\/main\/wp-admin\/admin-ajax.php",
            "header_sticky_enable": "1",
            "header_sticky_height": "80",
            "scroll_top_enable": "1",
            "light_gallery_auto_play": "0",
            "light_gallery_download": "1",
            "light_gallery_full_screen": "1",
            "light_gallery_zoom": "1",
            "light_gallery_thumbnail": "1",
            "light_gallery_share": "1",
            "mobile_menu_breakpoint": "1199",
            "isProduct": "",
            "productFeatureStyle": "slider",
            "noticeCookieEnable": "0",
            "noticeCookieConfirm": "no",
            "noticeCookieMessages": "We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.<a id=\"tm-button-cookie-notice-ok\" class=\"tm-button tm-button-xs tm-button-full-wide style-flat\">Ok, got it!<\/a>"
        };
        /* ]]> */
    </script>
    <script src='../script/main.js' id='maxcoach-script-js'></script>
    <script src='../script/quantity-button.js' id='maxcoach-quantity-button-js'></script>
    <script src='../script/woo.js' id='maxcoach-woo-js'></script>
    <script src='../script/grid-query.js' id='maxcoach-grid-query-js'></script>
    <script src='../script/widget-grid-post.js' id='maxcoach-widget-grid-post-js'></script>
    <script src='../script/webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script>
    <script src='../script/webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
    <script src='../script/frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
    <script src='../script/jquery.sticky.min.js' id='elementor-sticky-js'></script>
    <script id='elementor-pro-frontend-js-before'>
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/maxcoach.thememove.com\/main\/wp-admin\/admin-ajax.php",
            "nonce": "87b2f8ff60",
            "urls": {
                "assets": "https:\/\/maxcoach.thememove.com\/main\/wp-content\/plugins\/elementor-pro\/assets\/"
            },
            "i18n": {
                "toc_no_headings_found": "No headings were found on this page."
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "google": {
                    "title": "Google+",
                    "has_counter": true
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                }
            },
            "menu_cart": {
                "cart_page_url": "https:\/\/maxcoach.thememove.com\/main\/cart\/",
                "checkout_page_url": "https:\/\/maxcoach.thememove.com\/main\/woo-checkout\/"
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/maxcoach.thememove.com\/main\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script src='../script/frontend.min.js' id='elementor-pro-frontend-js'></script>
    <script src='../script/share-link.min.js' id='share-link-js'></script>
    <script src='../script/dialog.min.js' id='elementor-dialog-js'></script>
    <script id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1365,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1620,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.2.4",
            "is_static": false,
            "experimentalFeatures": {
                "form-submissions": true
            },
            "urls": {
                "assets": "https:\/\/maxcoach.thememove.com\/main\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "global_image_lightbox": "yes",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 831,
                "title": "Blog%20Grid%20%E2%80%93%20MaxCoach",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src='../script/frontend.min.js' id='elementor-frontend-js'></script>
    <script src='../script/preloaded-elements-handlers.min.js' id='pro-preloaded-elements-handlers-js'></script>
    <script src='../script/preloaded-modules.min.js' id='preloaded-modules-js'></script>
    <script src='../js/bootstrap.bundle.js'></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../script/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $("#exampleModalCenter").hide();

        function model_show() {
            $("#exampleModalCenter").show();
        }
    </script>
</body>

<!-- Mirrored from maxcoach.thememove.com/main/blog-grid/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2022 05:24:10 GMT -->

</html>