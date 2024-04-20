<?php include('../includes/init.php'); ?>
<?php include(pathOf('assets/includes/header.php')); ?>
<?php
pathOf('assets/includes/connection');
$select_colleges = "SELECT count(*) as College FROM colleges";
$query_colleges = $connection->query($select_colleges);
$result_college = $query_colleges->fetch(PDO::FETCH_ASSOC);

$select_schools = "SELECT count(*) as School FROM schools";
$query_schools = $connection->query($select_schools);
$result_school = $query_schools->fetch(PDO::FETCH_ASSOC);

$select_students = "SELECT count(*) as Student FROM students";
$query_students = $connection->query($select_students);
$result_student = $query_students->fetch(PDO::FETCH_ASSOC);

$select_policy = "SELECT * FROM policy";
$query_policy = $connection->query($select_policy);
$result_policy = $query_policy->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="page-content" class="page-content">
    <div class="container">
        <div class="row">
            <div id="page-main-content" class="page-main-content">
                <article id="post-786" class="post-786 page type-page status-publish hentry pmpro-has-access post-no-thumbnail">
                    <h2 class="screen-reader-text">SLMS</h2>
                    <div data-elementor-type="wp-page" data-elementor-id="786" class="elementor elementor-786" data-elementor-settings="[]">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-f14cf9b elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="f14cf9b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;mountains&quot;}">
                                    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                            <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z" />
                                            <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z" />
                                            <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z" />
                                        </svg>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4fd134c" data-id="4fd134c" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-ad5d0c8 elementor-invisible elementor-widget elementor-widget-tm-heading" data-id="ad5d0c8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-heading.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-modern-heading">
                                                                    <div class="heading-primary-wrap">
                                                                        <h2 class="heading-primary elementor-heading-title">
                                                                            Student Management System</h2>
                                                                    </div>
                                                                    <div class="heading-description-wrap">
                                                                        <div class="heading-description">
                                                                            <p>Students , The Future of
                                                                                INDIA.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-234ab29 elementor-align-center elementor-invisible elementor-widget elementor-widget-tm-button" data-id="234ab29" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-button-wrapper">
                                                                    <a href="<?= urlOf('assets/includes/student_login.php') ?>" class="tm-button-link tm-button style-flat tm-button-nm" role="button">
                                                                        <div class="button-content-wrapper">
                                                                            <span class="button-text">See your Profile</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-82d0df6 elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="82d0df6" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-extended">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8587ca3" data-id="8587ca3" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-443ea4f elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="443ea4f" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:50,&quot;end&quot;:100}},&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img width="410" height="504" src="<?= urlOf('assets/images/home-6-hero-left-person.png') ?>" class="attachment-full size-full" alt="" loading="lazy" srcset="https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/home-6-hero-left-person.png 410w, https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/home-6-hero-left-person-244x300.png 244w" sizes="(max-width: 410px) 100vw, 410px" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-49ba00f elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="49ba00f" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img width="230" height="353" src="<?= urlOf('assets/images/home-6-hero-right-person.png') ?>" class="attachment-full size-full" alt="" loading="lazy" srcset="https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/home-6-hero-right-person.png 230w, https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/home-6-hero-right-person-244x300.png 195w" sizes="(max-width: 230px) 100vw, 230px" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-07365d3 maxcoach-animation-zoom-in elementor-align-center elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-tm-popup-video" data-id="07365d3" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-popup-video.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="tm-popup-video type-poster tm-popup-video-image-play">
                                                                                            <a class="video-link maxcoach-box link-secret" href="https://www.youtube.com/watch?v=qyP3Y_QbT30">
                                                                                                <div class="video-poster">
                                                                                                    <div class="maxcoach-image">
                                                                                                        <img src="<?= urlOf('assets/images/Seal_of_Gujarat.jpg') ?>" alt="Seal_of_Gujarat.jpg" />
                                                                                                    </div>

                                                                                                    <div class="video-overlay"></div>

                                                                                                    <div class="video-button">
                                                                                                        <div class="video-play video-play-image">
                                                                                                            <img src="<?= urlOf('assets/images/icon-youtube-play.png') ?>" alt="icon-youtube-play" />
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
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-3ed1e2e elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="3ed1e2e" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c56b2a8" data-id="c56b2a8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-aafcaf4 maxcoach-shape-border-circle elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-tm-shapes" data-id="aafcaf4" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-555668e maxcoach-shape-border-circle elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-tm-shapes" data-id="555668e" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-dd57cf0 elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-invisible elementor-widget elementor-widget-tm-shapes" data-id="dd57cf0" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7ad6702 elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-invisible elementor-widget elementor-widget-tm-shapes" data-id="7ad6702" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ea23029 elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-invisible elementor-widget elementor-widget-tm-shapes" data-id="ea23029" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-a2cb419 elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-invisible elementor-widget elementor-widget-tm-shapes" data-id="a2cb419" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2639734 elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-invisible elementor-widget elementor-widget-tm-shapes" data-id="2639734" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c1032b6 elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-invisible elementor-widget elementor-widget-tm-shapes" data-id="c1032b6" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-5293f39 elementor-section-gap-beside-no elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="5293f39" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-extended">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-11de9a2 elementor-invisible" data-id="11de9a2" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;maxcoachFadeInUp&quot;}">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-01416ba layout-image-stacked image-position-below maxcoach-testimonial-cite-layout-block align-center bullets-v-align-below elementor-widget elementor-widget-tm-testimonial" data-id="01416ba" data-element_type="widget" data-widget_type="tm-testimonial.default">
                                                                                    <div class="elementor-widget-container">

                                                                                        <div class="tm-swiper tm-slider-widget" data-lg-items="1" data-md-items="1" data-sm-items="1" data-lg-gutter="30" data-md-gutter="" data-sm-gutter="" data-loop="1" data-simulate-touch="1" data-speed="1000" data-effect="slide">
                                                                                            <div class="swiper-inner">
                                                                                                <div class="swiper-container">
                                                                                                    <div class="swiper-wrapper">
                                                                                                        <div class="swiper-slide elementor-repeater-item-ad194c8">
                                                                                                            <div class="testimonial-item">
                                                                                                                <div class="testimonial-main-content">
                                                                                                                    <div class="content-wrap" id="data">
                                                                                                                        <div class="content">
                                                                                                                            <div class="text">
                                                                                                                                Education shows us the importance of hard work and, at the same time, helps us grow and develop.
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="info">
                                                                                                                            <div class="cite">
                                                                                                                                <h6 class="name">
                                                                                                                                    Shri Bhupendra Rajnikant Patel
                                                                                                                                </h6>
                                                                                                                                <span class="position">/Chief Minister</span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section> -->
                                                        <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-e71126b elementor-section-gap-beside-no elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="e71126b" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-extended">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-aa4bda9" data-id="aa4bda9" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-58c6fe2 elementor-invisible elementor-widget elementor-widget-counter" data-id="58c6fe2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="counter.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-counter">
                                                                                            <div class="elementor-counter-number-wrapper">
                                                                                                <span class="elementor-counter-number-prefix"></span>
                                                                                                <span class="elementor-counter-number" data-to-value="65" data-from-value="0"></span>
                                                                                                <span class="elementor-counter-number-suffix"></span>
                                                                                            </div>
                                                                                            <div class="elementor-counter-title">
                                                                                                Total Universities Joined</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-98b8bad" data-id="98b8bad" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-09ea099 elementor-invisible elementor-widget elementor-widget-counter" data-id="09ea099" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="counter.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-counter">
                                                                                            <div class="elementor-counter-number-wrapper">
                                                                                                <span class="elementor-counter-number-prefix"></span>
                                                                                                <span class="elementor-counter-number" data-to-value="<?= $result_school['School'] ?>" data-from-value="0"></span>
                                                                                                <span class="elementor-counter-number-suffix"></span>
                                                                                            </div>
                                                                                            <div class="elementor-counter-title">
                                                                                                Total Schools Joined</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-57804b8" data-id="57804b8" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-38b836c elementor-invisible elementor-widget elementor-widget-counter" data-id="38b836c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="counter.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-counter">
                                                                                            <div class="elementor-counter-number-wrapper">
                                                                                                <span class="elementor-counter-number-prefix"></span>
                                                                                                <span class="elementor-counter-number" data-to-value="<?= $result_college['College'] ?>" data-from-value="0"></span>
                                                                                                <span class="elementor-counter-number-suffix"></span>
                                                                                            </div>
                                                                                            <div class="elementor-counter-title">
                                                                                                Total Colleges Joined</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e2be531" data-id="e2be531" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-20277bf elementor-invisible elementor-widget elementor-widget-counter" data-id="20277bf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="counter.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-counter">
                                                                                            <div class="elementor-counter-number-wrapper">
                                                                                                <span class="elementor-counter-number-prefix"></span>
                                                                                                <span class="elementor-counter-number" data-to-value="<?= $result_student['Student'] ?>" data-from-value="0"></span>
                                                                                                <span class="elementor-counter-number-suffix"></span>
                                                                                            </div>
                                                                                            <div class="elementor-counter-title">
                                                                                                Total Students
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section> -->
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-db6fc03 elementor-section-gap-beside-no elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="db6fc03" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-extended" id="policy">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7631f48" data-id="7631f48" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <a href="<?= $result_policy[0]['website'] ?>" target="_blank">
                                                                                    <div class="elementor-element elementor-element-f3a5c12 elementor-invisible elementor-widget elementor-widget-tm-heading" data-id="f3a5c12" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-heading.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="tm-modern-heading">

                                                                                                <div class="heading-primary-wrap">
                                                                                                    <h2 class="heading-primary elementor-heading-title">
                                                                                                        <?= $result_policy[0]['heading'] ?>
                                                                                                    </h2>
                                                                                                </div>


                                                                                                <div class="heading-description-wrap">
                                                                                                    <div class="heading-description">
                                                                                                        <p><?= $result_policy[0]['description'] ?></p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                                <a href="<?= $result_policy[1]['website'] ?>" target="_blank">
                                                                                    <div class="elementor-element elementor-element-8f4f708 elementor-invisible elementor-widget elementor-widget-tm-heading" data-id="8f4f708" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-heading.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="tm-modern-heading">

                                                                                                <div class="heading-primary-wrap">
                                                                                                    <h2 class="heading-primary elementor-heading-title">
                                                                                                        <?= $result_policy[1]['heading'] ?>
                                                                                                    </h2>
                                                                                                </div>


                                                                                                <div class="heading-description-wrap">
                                                                                                    <div class="heading-description">
                                                                                                        <p><?= $result_policy[1]['description'] ?></p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7c58623" data-id="7c58623" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <a href="<?= $result_policy[2]['website'] ?>" target="_blank">
                                                                                    <div class="elementor-element elementor-element-3a0f825 elementor-invisible elementor-widget elementor-widget-tm-heading" data-id="3a0f825" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-heading.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="tm-modern-heading">

                                                                                                <div class="heading-primary-wrap">
                                                                                                    <h2 class="heading-primary elementor-heading-title">
                                                                                                        <?= $result_policy[2]['heading'] ?>
                                                                                                    </h2>
                                                                                                </div>


                                                                                                <div class="heading-description-wrap">
                                                                                                    <div class="heading-description">
                                                                                                        <p><?= $result_policy[2]['description'] ?></p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                                <a href="<?= $result_policy[3]['website'] ?>" target="_blank">
                                                                                    <div class="elementor-element elementor-element-9a6c77e elementor-invisible elementor-widget elementor-widget-tm-heading" data-id="9a6c77e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-heading.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="tm-modern-heading">

                                                                                                <div class="heading-primary-wrap">
                                                                                                    <h2 class="heading-primary elementor-heading-title">
                                                                                                        <?= $result_policy[3]['heading'] ?>
                                                                                                    </h2>
                                                                                                </div>
                                                                                                <div class="heading-description-wrap">
                                                                                                    <div class="heading-description">
                                                                                                        <p><?= $result_policy[3]['description'] ?></p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
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
                                </section>
                                <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-0f39c9c elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="0f39c9c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <br><br><br>
                                    <div class="elementor-container elementor-column-gap-extended" id="colleges">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-477b591" data-id="477b591" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-7d65315 elementor-invisible elementor-widget elementor-widget-tm-heading" data-id="7d65315" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-heading.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-modern-heading">
                                                                    <div class="heading-secondary-wrap">
                                                                        <h3 class="heading-secondary elementor-heading-title">
                                                                            Government of Gujarat
                                                                        </h3>
                                                                    </div>

                                                                    <div class="heading-primary-wrap">
                                                                        <h2 class="heading-primary elementor-heading-title">
                                                                            Some Top <mark>Colleges</mark>
                                                                        </h2>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-45576ba course-caption-style-03 course-caption-meta-icon-yes elementor-widget elementor-widget-tm-course" data-id="45576ba" data-element_type="widget" data-widget_type="tm-course.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-grid-wrapper maxcoach-course style-grid filter-style-01" data-grid="{&quot;type&quot;:&quot;grid&quot;,&quot;columns&quot;:2,&quot;columnsTablet&quot;:1,&quot;columnsMobile&quot;:1,&quot;gutter&quot;:30}">
                                                                    <input type="hidden" class="maxcoach-query-input" value="{&quot;source&quot;:&quot;custom_query&quot;,&quot;action&quot;:&quot;lp_course_infinite_load&quot;,&quot;max_num_pages&quot;:11,&quot;found_posts&quot;:63,&quot;count&quot;:6,&quot;query_vars&quot;:{&quot;post_type&quot;:&quot;lp_course&quot;,&quot;posts_per_page&quot;:6,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;paged&quot;:1},&quot;settings&quot;:{&quot;show_caption&quot;:&quot;yes&quot;,&quot;caption_style&quot;:&quot;03&quot;,&quot;grid_columns&quot;:2,&quot;grid_metro_layout&quot;:null,&quot;grid_columns_tablet&quot;:1,&quot;course_title_color&quot;:&quot;#3F3A64&quot;,&quot;caption_meta_color&quot;:&quot;#8C89A2&quot;,&quot;query_number&quot;:6,&quot;layout&quot;:&quot;grid&quot;,&quot;zigzag_height&quot;:null,&quot;zigzag_height_tablet&quot;:null,&quot;zigzag_height_mobile&quot;:null,&quot;zigzag_reversed&quot;:null,&quot;hover_effect&quot;:&quot;&quot;,&quot;show_caption_instructor&quot;:&quot;&quot;,&quot;show_caption_date&quot;:&quot;&quot;,&quot;show_caption_meta&quot;:[&quot;lessons&quot;,&quot;students&quot;],&quot;show_caption_meta_icon&quot;:&quot;yes&quot;,&quot;show_caption_excerpt&quot;:&quot;&quot;,&quot;excerpt_length&quot;:null,&quot;show_caption_buttons&quot;:&quot;&quot;,&quot;purchase_button_text&quot;:null,&quot;metro_image_size_width&quot;:null,&quot;metro_image_ratio&quot;:null,&quot;thumbnail_default_size&quot;:&quot;1&quot;,&quot;thumbnail_size&quot;:null,&quot;thumbnail_custom_dimension&quot;:null,&quot;grid_columns_mobile&quot;:1,&quot;grid_gutter&quot;:30,&quot;grid_gutter_tablet&quot;:&quot;&quot;,&quot;grid_gutter_mobile&quot;:&quot;&quot;,&quot;filter_enable&quot;:&quot;&quot;,&quot;filter_style&quot;:&quot;01&quot;,&quot;filter_counter&quot;:&quot;&quot;,&quot;filter_in_grid&quot;:&quot;&quot;,&quot;pagination_type&quot;:&quot;&quot;,&quot;pagination_custom_button_id&quot;:null,&quot;show_result_count&quot;:&quot;&quot;,&quot;show_ordering&quot;:&quot;&quot;,&quot;box_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;box_background_background&quot;:&quot;&quot;,&quot;box_background_color&quot;:null,&quot;box_background_color_stop&quot;:null,&quot;box_background_color_b&quot;:null,&quot;box_background_color_b_stop&quot;:null,&quot;box_background_gradient_type&quot;:null,&quot;box_background_gradient_angle&quot;:null,&quot;box_background_gradient_position&quot;:null,&quot;box_background_image&quot;:null,&quot;box_background_image_tablet&quot;:null,&quot;box_background_image_mobile&quot;:null,&quot;box_background_position&quot;:null,&quot;box_background_position_tablet&quot;:null,&quot;box_background_position_mobile&quot;:null,&quot;box_background_xpos&quot;:null,&quot;box_background_xpos_tablet&quot;:null,&quot;box_background_xpos_mobile&quot;:null,&quot;box_background_ypos&quot;:null,&quot;box_background_ypos_tablet&quot;:null,&quot;box_background_ypos_mobile&quot;:null,&quot;box_background_attachment&quot;:null,&quot;box_background_repeat&quot;:null,&quot;box_background_repeat_tablet&quot;:null,&quot;box_background_repeat_mobile&quot;:null,&quot;box_background_size&quot;:null,&quot;box_background_size_tablet&quot;:null,&quot;box_background_size_mobile&quot;:null,&quot;box_background_bg_width&quot;:null,&quot;box_background_bg_width_tablet&quot;:null,&quot;box_background_bg_width_mobile&quot;:null,&quot;box_background_video_link&quot;:null,&quot;box_background_video_start&quot;:null,&quot;box_background_video_end&quot;:null,&quot;box_background_play_once&quot;:null,&quot;box_background_play_on_mobile&quot;:null,&quot;box_background_privacy_mode&quot;:null,&quot;box_background_video_fallback&quot;:null,&quot;box_background_slideshow_gallery&quot;:null,&quot;box_background_slideshow_loop&quot;:null,&quot;box_background_slideshow_slide_duration&quot;:null,&quot;box_background_slideshow_slide_transition&quot;:null,&quot;box_background_slideshow_transition_duration&quot;:null,&quot;box_background_slideshow_background_size&quot;:null,&quot;box_background_slideshow_background_size_tablet&quot;:null,&quot;box_background_slideshow_background_size_mobile&quot;:null,&quot;box_background_slideshow_background_position&quot;:null,&quot;box_background_slideshow_background_position_tablet&quot;:null,&quot;box_background_slideshow_background_position_mobile&quot;:null,&quot;box_background_slideshow_ken_burns&quot;:null,&quot;box_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;box_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;box_box_shadow_box_shadow&quot;:null,&quot;box_box_shadow_box_shadow_position&quot;:null,&quot;box_hover_background_background&quot;:&quot;&quot;,&quot;box_hover_background_color&quot;:null,&quot;box_hover_background_color_stop&quot;:null,&quot;box_hover_background_color_b&quot;:null,&quot;box_hover_background_color_b_stop&quot;:null,&quot;box_hover_background_gradient_type&quot;:null,&quot;box_hover_background_gradient_angle&quot;:null,&quot;box_hover_background_gradient_position&quot;:null,&quot;box_hover_background_image&quot;:null,&quot;box_hover_background_image_tablet&quot;:null,&quot;box_hover_background_image_mobile&quot;:null,&quot;box_hover_background_position&quot;:null,&quot;box_hover_background_position_tablet&quot;:null,&quot;box_hover_background_position_mobile&quot;:null,&quot;box_hover_background_xpos&quot;:null,&quot;box_hover_background_xpos_tablet&quot;:null,&quot;box_hover_background_xpos_mobile&quot;:null,&quot;box_hover_background_ypos&quot;:null,&quot;box_hover_background_ypos_tablet&quot;:null,&quot;box_hover_background_ypos_mobile&quot;:null,&quot;box_hover_background_attachment&quot;:null,&quot;box_hover_background_repeat&quot;:null,&quot;box_hover_background_repeat_tablet&quot;:null,&quot;box_hover_background_repeat_mobile&quot;:null,&quot;box_hover_background_size&quot;:null,&quot;box_hover_background_size_tablet&quot;:null,&quot;box_hover_background_size_mobile&quot;:null,&quot;box_hover_background_bg_width&quot;:null,&quot;box_hover_background_bg_width_tablet&quot;:null,&quot;box_hover_background_bg_width_mobile&quot;:null,&quot;box_hover_background_video_link&quot;:null,&quot;box_hover_background_video_start&quot;:null,&quot;box_hover_background_video_end&quot;:null,&quot;box_hover_background_play_once&quot;:null,&quot;box_hover_background_play_on_mobile&quot;:null,&quot;box_hover_background_privacy_mode&quot;:null,&quot;box_hover_background_video_fallback&quot;:null,&quot;box_hover_background_slideshow_gallery&quot;:null,&quot;box_hover_background_slideshow_loop&quot;:null,&quot;box_hover_background_slideshow_slide_duration&quot;:null,&quot;box_hover_background_slideshow_slide_transition&quot;:null,&quot;box_hover_background_slideshow_transition_duration&quot;:null,&quot;box_hover_background_slideshow_background_size&quot;:null,&quot;box_hover_background_slideshow_background_size_tablet&quot;:null,&quot;box_hover_background_slideshow_background_size_mobile&quot;:null,&quot;box_hover_background_slideshow_background_position&quot;:null,&quot;box_hover_background_slideshow_background_position_tablet&quot;:null,&quot;box_hover_background_slideshow_background_position_mobile&quot;:null,&quot;box_hover_background_slideshow_ken_burns&quot;:null,&quot;box_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;box_hover_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;box_hover_box_shadow_box_shadow&quot;:null,&quot;box_hover_box_shadow_box_shadow_position&quot;:null,&quot;thumbnail_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;thumbnail_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;thumbnail_box_shadow_box_shadow&quot;:null,&quot;thumbnail_box_shadow_box_shadow_position&quot;:null,&quot;css_filters_css_filter&quot;:&quot;&quot;,&quot;css_filters_blur&quot;:null,&quot;css_filters_brightness&quot;:null,&quot;css_filters_contrast&quot;:null,&quot;css_filters_saturate&quot;:null,&quot;css_filters_hue&quot;:null,&quot;thumbnail_opacity&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;thumbnail_box_shadow_hover_box_shadow_type&quot;:&quot;&quot;,&quot;thumbnail_box_shadow_hover_box_shadow&quot;:null,&quot;thumbnail_box_shadow_hover_box_shadow_position&quot;:null,&quot;css_filters_hover_css_filter&quot;:&quot;&quot;,&quot;css_filters_hover_blur&quot;:null,&quot;css_filters_hover_brightness&quot;:null,&quot;css_filters_hover_contrast&quot;:null,&quot;css_filters_hover_saturate&quot;:null,&quot;css_filters_hover_hue&quot;:null,&quot;thumbnail_opacity_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_text_align&quot;:&quot;&quot;,&quot;caption_text_align_tablet&quot;:&quot;&quot;,&quot;caption_text_align_mobile&quot;:&quot;&quot;,&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;course_title_typography_typography&quot;:&quot;&quot;,&quot;course_title_typography_font_family&quot;:null,&quot;course_title_typography_font_size&quot;:null,&quot;course_title_typography_font_size_tablet&quot;:null,&quot;course_title_typography_font_size_mobile&quot;:null,&quot;course_title_typography_font_weight&quot;:null,&quot;course_title_typography_text_transform&quot;:null,&quot;course_title_typography_font_style&quot;:null,&quot;course_title_typography_text_decoration&quot;:null,&quot;course_title_typography_line_height&quot;:null,&quot;course_title_typography_line_height_tablet&quot;:null,&quot;course_title_typography_line_height_mobile&quot;:null,&quot;course_title_typography_letter_spacing&quot;:null,&quot;course_title_typography_letter_spacing_tablet&quot;:null,&quot;course_title_typography_letter_spacing_mobile&quot;:null,&quot;course_date_typography_typography&quot;:null,&quot;course_date_typography_font_family&quot;:null,&quot;course_date_typography_font_size&quot;:null,&quot;course_date_typography_font_size_tablet&quot;:null,&quot;course_date_typography_font_size_mobile&quot;:null,&quot;course_date_typography_font_weight&quot;:null,&quot;course_date_typography_text_transform&quot;:null,&quot;course_date_typography_font_style&quot;:null,&quot;course_date_typography_text_decoration&quot;:null,&quot;course_date_typography_line_height&quot;:null,&quot;course_date_typography_line_height_tablet&quot;:null,&quot;course_date_typography_line_height_mobile&quot;:null,&quot;course_date_typography_letter_spacing&quot;:null,&quot;course_date_typography_letter_spacing_tablet&quot;:null,&quot;course_date_typography_letter_spacing_mobile&quot;:null,&quot;course_date_margin&quot;:null,&quot;course_date_margin_tablet&quot;:null,&quot;course_date_margin_mobile&quot;:null,&quot;course_meta_typography_typography&quot;:&quot;&quot;,&quot;course_meta_typography_font_family&quot;:null,&quot;course_meta_typography_font_size&quot;:null,&quot;course_meta_typography_font_size_tablet&quot;:null,&quot;course_meta_typography_font_size_mobile&quot;:null,&quot;course_meta_typography_font_weight&quot;:null,&quot;course_meta_typography_text_transform&quot;:null,&quot;course_meta_typography_font_style&quot;:null,&quot;course_meta_typography_text_decoration&quot;:null,&quot;course_meta_typography_line_height&quot;:null,&quot;course_meta_typography_line_height_tablet&quot;:null,&quot;course_meta_typography_line_height_mobile&quot;:null,&quot;course_meta_typography_letter_spacing&quot;:null,&quot;course_meta_typography_letter_spacing_tablet&quot;:null,&quot;course_meta_typography_letter_spacing_mobile&quot;:null,&quot;course_meta_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;course_meta_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;course_meta_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;course_instructor_typography_typography&quot;:null,&quot;course_instructor_typography_font_family&quot;:null,&quot;course_instructor_typography_font_size&quot;:null,&quot;course_instructor_typography_font_size_tablet&quot;:null,&quot;course_instructor_typography_font_size_mobile&quot;:null,&quot;course_instructor_typography_font_weight&quot;:null,&quot;course_instructor_typography_text_transform&quot;:null,&quot;course_instructor_typography_font_style&quot;:null,&quot;course_instructor_typography_text_decoration&quot;:null,&quot;course_instructor_typography_line_height&quot;:null,&quot;course_instructor_typography_line_height_tablet&quot;:null,&quot;course_instructor_typography_line_height_mobile&quot;:null,&quot;course_instructor_typography_letter_spacing&quot;:null,&quot;course_instructor_typography_letter_spacing_tablet&quot;:null,&quot;course_instructor_typography_letter_spacing_mobile&quot;:null,&quot;course_instructor_margin&quot;:null,&quot;course_instructor_margin_tablet&quot;:null,&quot;course_instructor_margin_mobile&quot;:null,&quot;course_price_typography_typography&quot;:&quot;&quot;,&quot;course_price_typography_font_family&quot;:null,&quot;course_price_typography_font_size&quot;:null,&quot;course_price_typography_font_size_tablet&quot;:null,&quot;course_price_typography_font_size_mobile&quot;:null,&quot;course_price_typography_font_weight&quot;:null,&quot;course_price_typography_text_transform&quot;:null,&quot;course_price_typography_font_style&quot;:null,&quot;course_price_typography_text_decoration&quot;:null,&quot;course_price_typography_line_height&quot;:null,&quot;course_price_typography_line_height_tablet&quot;:null,&quot;course_price_typography_line_height_mobile&quot;:null,&quot;course_price_typography_letter_spacing&quot;:null,&quot;course_price_typography_letter_spacing_tablet&quot;:null,&quot;course_price_typography_letter_spacing_mobile&quot;:null,&quot;course_price_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;course_price_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;course_price_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;course_excerpt_typography_typography&quot;:null,&quot;course_excerpt_typography_font_family&quot;:null,&quot;course_excerpt_typography_font_size&quot;:null,&quot;course_excerpt_typography_font_size_tablet&quot;:null,&quot;course_excerpt_typography_font_size_mobile&quot;:null,&quot;course_excerpt_typography_font_weight&quot;:null,&quot;course_excerpt_typography_text_transform&quot;:null,&quot;course_excerpt_typography_font_style&quot;:null,&quot;course_excerpt_typography_text_decoration&quot;:null,&quot;course_excerpt_typography_line_height&quot;:null,&quot;course_excerpt_typography_line_height_tablet&quot;:null,&quot;course_excerpt_typography_line_height_mobile&quot;:null,&quot;course_excerpt_typography_letter_spacing&quot;:null,&quot;course_excerpt_typography_letter_spacing_tablet&quot;:null,&quot;course_excerpt_typography_letter_spacing_mobile&quot;:null,&quot;course_excerpt_margin&quot;:null,&quot;course_excerpt_margin_tablet&quot;:null,&quot;course_excerpt_margin_mobile&quot;:null,&quot;caption_date_color&quot;:null,&quot;caption_instructor_color&quot;:null,&quot;caption_price_color&quot;:&quot;&quot;,&quot;caption_excerpt_color&quot;:null,&quot;box_caption_line_background&quot;:null,&quot;box_caption_line_color&quot;:null,&quot;box_caption_line_color_stop&quot;:null,&quot;box_caption_line_color_b&quot;:null,&quot;box_caption_line_color_b_stop&quot;:null,&quot;box_caption_line_gradient_type&quot;:null,&quot;box_caption_line_gradient_angle&quot;:null,&quot;box_caption_line_gradient_position&quot;:null,&quot;box_caption_line_image&quot;:null,&quot;box_caption_line_image_tablet&quot;:null,&quot;box_caption_line_image_mobile&quot;:null,&quot;box_caption_line_position&quot;:null,&quot;box_caption_line_position_tablet&quot;:null,&quot;box_caption_line_position_mobile&quot;:null,&quot;box_caption_line_xpos&quot;:null,&quot;box_caption_line_xpos_tablet&quot;:null,&quot;box_caption_line_xpos_mobile&quot;:null,&quot;box_caption_line_ypos&quot;:null,&quot;box_caption_line_ypos_tablet&quot;:null,&quot;box_caption_line_ypos_mobile&quot;:null,&quot;box_caption_line_attachment&quot;:null,&quot;box_caption_line_repeat&quot;:null,&quot;box_caption_line_repeat_tablet&quot;:null,&quot;box_caption_line_repeat_mobile&quot;:null,&quot;box_caption_line_size&quot;:null,&quot;box_caption_line_size_tablet&quot;:null,&quot;box_caption_line_size_mobile&quot;:null,&quot;box_caption_line_bg_width&quot;:null,&quot;box_caption_line_bg_width_tablet&quot;:null,&quot;box_caption_line_bg_width_mobile&quot;:null,&quot;box_caption_line_video_link&quot;:null,&quot;box_caption_line_video_start&quot;:null,&quot;box_caption_line_video_end&quot;:null,&quot;box_caption_line_play_once&quot;:null,&quot;box_caption_line_play_on_mobile&quot;:null,&quot;box_caption_line_privacy_mode&quot;:null,&quot;box_caption_line_video_fallback&quot;:null,&quot;box_caption_line_slideshow_gallery&quot;:null,&quot;box_caption_line_slideshow_loop&quot;:null,&quot;box_caption_line_slideshow_slide_duration&quot;:null,&quot;box_caption_line_slideshow_slide_transition&quot;:null,&quot;box_caption_line_slideshow_transition_duration&quot;:null,&quot;box_caption_line_slideshow_background_size&quot;:null,&quot;box_caption_line_slideshow_background_size_tablet&quot;:null,&quot;box_caption_line_slideshow_background_size_mobile&quot;:null,&quot;box_caption_line_slideshow_background_position&quot;:null,&quot;box_caption_line_slideshow_background_position_tablet&quot;:null,&quot;box_caption_line_slideshow_background_position_mobile&quot;:null,&quot;box_caption_line_slideshow_ken_burns&quot;:null,&quot;box_caption_line_slideshow_ken_burns_zoom_direction&quot;:null,&quot;course_title_hover_color&quot;:&quot;&quot;,&quot;course_date_hover_color&quot;:null,&quot;course_meta_hover_color&quot;:&quot;&quot;,&quot;course_instructor_hover_color&quot;:null,&quot;course_price_hover_color&quot;:&quot;&quot;,&quot;caption_excerpt_hover_color&quot;:null,&quot;filter_spacing&quot;:null,&quot;filter_spacing_tablet&quot;:null,&quot;filter_spacing_mobile&quot;:null,&quot;filter_alignment&quot;:null,&quot;filter_alignment_tablet&quot;:null,&quot;filter_alignment_mobile&quot;:null,&quot;filter_link_typography_typography&quot;:null,&quot;filter_link_typography_font_family&quot;:null,&quot;filter_link_typography_font_size&quot;:null,&quot;filter_link_typography_font_size_tablet&quot;:null,&quot;filter_link_typography_font_size_mobile&quot;:null,&quot;filter_link_typography_font_weight&quot;:null,&quot;filter_link_typography_text_transform&quot;:null,&quot;filter_link_typography_font_style&quot;:null,&quot;filter_link_typography_text_decoration&quot;:null,&quot;filter_link_typography_line_height&quot;:null,&quot;filter_link_typography_line_height_tablet&quot;:null,&quot;filter_link_typography_line_height_mobile&quot;:null,&quot;filter_link_typography_letter_spacing&quot;:null,&quot;filter_link_typography_letter_spacing_tablet&quot;:null,&quot;filter_link_typography_letter_spacing_mobile&quot;:null,&quot;filter_link_color&quot;:null,&quot;filter_link_hover_color&quot;:null,&quot;filter_counter_text_color&quot;:null,&quot;filter_counter_background_color&quot;:null,&quot;pagination_alignment&quot;:null,&quot;pagination_alignment_tablet&quot;:null,&quot;pagination_alignment_mobile&quot;:null,&quot;pagination_spacing&quot;:null,&quot;pagination_spacing_tablet&quot;:null,&quot;pagination_spacing_mobile&quot;:null,&quot;pagination_typography_typography&quot;:null,&quot;pagination_typography_font_family&quot;:null,&quot;pagination_typography_font_size&quot;:null,&quot;pagination_typography_font_size_tablet&quot;:null,&quot;pagination_typography_font_size_mobile&quot;:null,&quot;pagination_typography_font_weight&quot;:null,&quot;pagination_typography_text_transform&quot;:null,&quot;pagination_typography_font_style&quot;:null,&quot;pagination_typography_text_decoration&quot;:null,&quot;pagination_typography_line_height&quot;:null,&quot;pagination_typography_line_height_tablet&quot;:null,&quot;pagination_typography_line_height_mobile&quot;:null,&quot;pagination_typography_letter_spacing&quot;:null,&quot;pagination_typography_letter_spacing_tablet&quot;:null,&quot;pagination_typography_letter_spacing_mobile&quot;:null,&quot;pagination_link_color&quot;:null,&quot;pagination_link_hover_color&quot;:null,&quot;pagination_loading_color&quot;:&quot;&quot;,&quot;query_source&quot;:&quot;custom_query&quot;,&quot;query_include&quot;:&quot;&quot;,&quot;query_include_term_ids&quot;:null,&quot;query_include_authors&quot;:null,&quot;query_exclude&quot;:&quot;&quot;,&quot;query_exclude_term_ids&quot;:null,&quot;query_exclude_authors&quot;:null,&quot;query_orderby&quot;:&quot;date&quot;,&quot;query_sort_meta_key&quot;:null,&quot;query_order&quot;:&quot;DESC&quot;,&quot;_title&quot;:&quot;&quot;,&quot;_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_z_index&quot;:&quot;&quot;,&quot;_z_index_tablet&quot;:&quot;&quot;,&quot;_z_index_mobile&quot;:&quot;&quot;,&quot;_element_id&quot;:&quot;&quot;,&quot;_css_classes&quot;:&quot;&quot;,&quot;pmpro_require_membership&quot;:&quot;&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;&quot;,&quot;motion_fx_translateY_effect&quot;:null,&quot;motion_fx_translateY_direction&quot;:null,&quot;motion_fx_translateY_speed&quot;:null,&quot;motion_fx_translateY_affectedRange&quot;:null,&quot;motion_fx_translateX_effect&quot;:null,&quot;motion_fx_translateX_direction&quot;:null,&quot;motion_fx_translateX_speed&quot;:null,&quot;motion_fx_translateX_affectedRange&quot;:null,&quot;motion_fx_opacity_effect&quot;:null,&quot;motion_fx_opacity_direction&quot;:null,&quot;motion_fx_opacity_level&quot;:null,&quot;motion_fx_opacity_range&quot;:null,&quot;motion_fx_blur_effect&quot;:null,&quot;motion_fx_blur_direction&quot;:null,&quot;motion_fx_blur_level&quot;:null,&quot;motion_fx_blur_range&quot;:null,&quot;motion_fx_rotateZ_effect&quot;:null,&quot;motion_fx_rotateZ_direction&quot;:null,&quot;motion_fx_rotateZ_speed&quot;:null,&quot;motion_fx_rotateZ_affectedRange&quot;:null,&quot;motion_fx_scale_effect&quot;:null,&quot;motion_fx_scale_direction&quot;:null,&quot;motion_fx_scale_speed&quot;:null,&quot;motion_fx_scale_range&quot;:null,&quot;motion_fx_transform_origin_x&quot;:null,&quot;motion_fx_transform_origin_y&quot;:null,&quot;motion_fx_devices&quot;:null,&quot;motion_fx_range&quot;:null,&quot;motion_fx_motion_fx_mouse&quot;:&quot;&quot;,&quot;motion_fx_mouseTrack_effect&quot;:null,&quot;motion_fx_mouseTrack_direction&quot;:null,&quot;motion_fx_mouseTrack_speed&quot;:null,&quot;motion_fx_tilt_effect&quot;:null,&quot;motion_fx_tilt_direction&quot;:null,&quot;motion_fx_tilt_speed&quot;:null,&quot;sticky&quot;:&quot;&quot;,&quot;sticky_on&quot;:null,&quot;sticky_offset&quot;:null,&quot;sticky_effects_offset&quot;:null,&quot;sticky_parent&quot;:null,&quot;_animation&quot;:&quot;&quot;,&quot;_animation_tablet&quot;:&quot;&quot;,&quot;_animation_mobile&quot;:&quot;&quot;,&quot;animation_duration&quot;:null,&quot;_animation_delay&quot;:null,&quot;_background_background&quot;:&quot;&quot;,&quot;_background_color&quot;:null,&quot;_background_color_stop&quot;:null,&quot;_background_color_b&quot;:null,&quot;_background_color_b_stop&quot;:null,&quot;_background_gradient_type&quot;:null,&quot;_background_gradient_angle&quot;:null,&quot;_background_gradient_position&quot;:null,&quot;_background_image&quot;:null,&quot;_background_image_tablet&quot;:null,&quot;_background_image_mobile&quot;:null,&quot;_background_position&quot;:null,&quot;_background_position_tablet&quot;:null,&quot;_background_position_mobile&quot;:null,&quot;_background_xpos&quot;:null,&quot;_background_xpos_tablet&quot;:null,&quot;_background_xpos_mobile&quot;:null,&quot;_background_ypos&quot;:null,&quot;_background_ypos_tablet&quot;:null,&quot;_background_ypos_mobile&quot;:null,&quot;_background_attachment&quot;:null,&quot;_background_repeat&quot;:null,&quot;_background_repeat_tablet&quot;:null,&quot;_background_repeat_mobile&quot;:null,&quot;_background_size&quot;:null,&quot;_background_size_tablet&quot;:null,&quot;_background_size_mobile&quot;:null,&quot;_background_bg_width&quot;:null,&quot;_background_bg_width_tablet&quot;:null,&quot;_background_bg_width_mobile&quot;:null,&quot;_background_video_link&quot;:null,&quot;_background_video_start&quot;:null,&quot;_background_video_end&quot;:null,&quot;_background_play_once&quot;:null,&quot;_background_play_on_mobile&quot;:null,&quot;_background_privacy_mode&quot;:null,&quot;_background_video_fallback&quot;:null,&quot;_background_slideshow_gallery&quot;:null,&quot;_background_slideshow_loop&quot;:null,&quot;_background_slideshow_slide_duration&quot;:null,&quot;_background_slideshow_slide_transition&quot;:null,&quot;_background_slideshow_transition_duration&quot;:null,&quot;_background_slideshow_background_size&quot;:null,&quot;_background_slideshow_background_size_tablet&quot;:null,&quot;_background_slideshow_background_size_mobile&quot;:null,&quot;_background_slideshow_background_position&quot;:null,&quot;_background_slideshow_background_position_tablet&quot;:null,&quot;_background_slideshow_background_position_mobile&quot;:null,&quot;_background_slideshow_ken_burns&quot;:null,&quot;_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;_background_hover_background&quot;:&quot;&quot;,&quot;_background_hover_color&quot;:null,&quot;_background_hover_color_stop&quot;:null,&quot;_background_hover_color_b&quot;:null,&quot;_background_hover_color_b_stop&quot;:null,&quot;_background_hover_gradient_type&quot;:null,&quot;_background_hover_gradient_angle&quot;:null,&quot;_background_hover_gradient_position&quot;:null,&quot;_background_hover_image&quot;:null,&quot;_background_hover_image_tablet&quot;:null,&quot;_background_hover_image_mobile&quot;:null,&quot;_background_hover_position&quot;:null,&quot;_background_hover_position_tablet&quot;:null,&quot;_background_hover_position_mobile&quot;:null,&quot;_background_hover_xpos&quot;:null,&quot;_background_hover_xpos_tablet&quot;:null,&quot;_background_hover_xpos_mobile&quot;:null,&quot;_background_hover_ypos&quot;:null,&quot;_background_hover_ypos_tablet&quot;:null,&quot;_background_hover_ypos_mobile&quot;:null,&quot;_background_hover_attachment&quot;:null,&quot;_background_hover_repeat&quot;:null,&quot;_background_hover_repeat_tablet&quot;:null,&quot;_background_hover_repeat_mobile&quot;:null,&quot;_background_hover_size&quot;:null,&quot;_background_hover_size_tablet&quot;:null,&quot;_background_hover_size_mobile&quot;:null,&quot;_background_hover_bg_width&quot;:null,&quot;_background_hover_bg_width_tablet&quot;:null,&quot;_background_hover_bg_width_mobile&quot;:null,&quot;_background_hover_video_link&quot;:null,&quot;_background_hover_video_start&quot;:null,&quot;_background_hover_video_end&quot;:null,&quot;_background_hover_play_once&quot;:null,&quot;_background_hover_play_on_mobile&quot;:null,&quot;_background_hover_privacy_mode&quot;:null,&quot;_background_hover_video_fallback&quot;:null,&quot;_background_hover_slideshow_gallery&quot;:null,&quot;_background_hover_slideshow_loop&quot;:null,&quot;_background_hover_slideshow_slide_duration&quot;:null,&quot;_background_hover_slideshow_slide_transition&quot;:null,&quot;_background_hover_slideshow_transition_duration&quot;:null,&quot;_background_hover_slideshow_background_size&quot;:null,&quot;_background_hover_slideshow_background_size_tablet&quot;:null,&quot;_background_hover_slideshow_background_size_mobile&quot;:null,&quot;_background_hover_slideshow_background_position&quot;:null,&quot;_background_hover_slideshow_background_position_tablet&quot;:null,&quot;_background_hover_slideshow_background_position_mobile&quot;:null,&quot;_background_hover_slideshow_ken_burns&quot;:null,&quot;_background_hover_slideshow_ken_burns_zoom_direction&quot;:null,&quot;_background_hover_transition&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_border_border&quot;:&quot;&quot;,&quot;_border_width&quot;:null,&quot;_border_width_tablet&quot;:null,&quot;_border_width_mobile&quot;:null,&quot;_border_color&quot;:null,&quot;_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;_box_shadow_box_shadow&quot;:null,&quot;_box_shadow_box_shadow_position&quot;:null,&quot;_border_hover_border&quot;:&quot;&quot;,&quot;_border_hover_width&quot;:null,&quot;_border_hover_width_tablet&quot;:null,&quot;_border_hover_width_mobile&quot;:null,&quot;_border_hover_color&quot;:null,&quot;_border_radius_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_box_shadow_hover_box_shadow_type&quot;:&quot;&quot;,&quot;_box_shadow_hover_box_shadow&quot;:null,&quot;_box_shadow_hover_box_shadow_position&quot;:null,&quot;_border_hover_transition&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_mask_switch&quot;:&quot;&quot;,&quot;_mask_shape&quot;:null,&quot;_mask_image&quot;:null,&quot;_mask_notice&quot;:null,&quot;_mask_size&quot;:null,&quot;_mask_size_tablet&quot;:null,&quot;_mask_size_mobile&quot;:null,&quot;_mask_size_scale&quot;:null,&quot;_mask_size_scale_tablet&quot;:null,&quot;_mask_size_scale_mobile&quot;:null,&quot;_mask_position&quot;:null,&quot;_mask_position_tablet&quot;:null,&quot;_mask_position_mobile&quot;:null,&quot;_mask_position_x&quot;:null,&quot;_mask_position_x_tablet&quot;:null,&quot;_mask_position_x_mobile&quot;:null,&quot;_mask_position_y&quot;:null,&quot;_mask_position_y_tablet&quot;:null,&quot;_mask_position_y_mobile&quot;:null,&quot;_mask_repeat&quot;:null,&quot;_mask_repeat_tablet&quot;:null,&quot;_mask_repeat_mobile&quot;:null,&quot;_element_width&quot;:&quot;&quot;,&quot;_element_width_tablet&quot;:&quot;&quot;,&quot;_element_width_mobile&quot;:&quot;&quot;,&quot;_element_custom_width&quot;:null,&quot;_element_custom_width_tablet&quot;:null,&quot;_element_custom_width_mobile&quot;:null,&quot;_element_vertical_align&quot;:null,&quot;_element_vertical_align_tablet&quot;:null,&quot;_element_vertical_align_mobile&quot;:null,&quot;_position&quot;:&quot;&quot;,&quot;_offset_orientation_h&quot;:null,&quot;_offset_x&quot;:null,&quot;_offset_x_tablet&quot;:null,&quot;_offset_x_mobile&quot;:null,&quot;_offset_x_end&quot;:null,&quot;_offset_x_end_tablet&quot;:null,&quot;_offset_x_end_mobile&quot;:null,&quot;_offset_orientation_v&quot;:null,&quot;_offset_y&quot;:null,&quot;_offset_y_tablet&quot;:null,&quot;_offset_y_mobile&quot;:null,&quot;_offset_y_end&quot;:null,&quot;_offset_y_end_tablet&quot;:null,&quot;_offset_y_end_mobile&quot;:null,&quot;hide_desktop&quot;:&quot;&quot;,&quot;hide_tablet&quot;:&quot;&quot;,&quot;hide_mobile&quot;:&quot;&quot;,&quot;_attributes&quot;:&quot;&quot;,&quot;custom_css&quot;:&quot;&quot;}}" />
                                                                    <div class="maxcoach-grid lazy-grid">
                                                                        <div class="maxcoach-grid-loader">
                                                                            <div class="sk-wrap sk-circle">
                                                                                <div class="sk-circle1 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle2 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle3 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle4 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle5 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle6 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle7 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle8 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle9 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle10 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle11 sk-child">
                                                                                </div>
                                                                                <div class="sk-circle12 sk-child">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="grid-sizer"></div>

                                                                        <div class="course-item grid-item post-5154 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-finance course_tag-finance pmpro-has-access course">
                                                                            <div class="course-wrapper maxcoach-box">
                                                                                <div class="course-thumbnail-wrapper maxcoach-image">
                                                                                    <a href="#" class="course-permalink link-secret">
                                                                                        <div class="course-thumbnail">
                                                                                            <img src="<?= urlOf('assets/images/iimlogo.png') ?>" alt="finance-course-thumbnail-04" width="480" />
                                                                                            <div class="course-overlay-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="course-info">

                                                                                    <div class="course-price course-free">

                                                                                        <span class="price">I I M A</span>
                                                                                    </div>


                                                                                    <h3 class="course-title">
                                                                                        <a href="#">AHMEDABAD, GUJARAT | UGC APPROVED</a>
                                                                                    </h3>
                                                                                    <div class="course-meta">
                                                                                        <div class="meta-item course-lesson">
                                                                                            <span class="meta-icon far fa-light fa-star"></span>
                                                                                            <span class="meta-value">9 . 1 / 1 0 </span>
                                                                                        </div>
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="course-item grid-item post-209 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-language-learning course_tag-general course_tag-language pmpro-has-access course">
                                                                            <div class="course-wrapper maxcoach-box">
                                                                                <div class="course-thumbnail-wrapper maxcoach-image">
                                                                                    <a href="#" class="course-permalink link-secret">
                                                                                        <div class="course-thumbnail">
                                                                                            <img src="<?= urlOf('assets/images/pdpias.png') ?>" alt="course-02" width="480" />
                                                                                            <div class="course-overlay-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="course-info">

                                                                                    <div class="course-price">

                                                                                        <span class="price">P D P I A S</span></span>
                                                                                    </div>


                                                                                    <h3 class="course-title">
                                                                                        <a href="#">ANAND, GUJARAT | AICTE APPROVED</a>
                                                                                    </h3>

                                                                                    <div class="course-meta">
                                                                                        <div class="meta-item course-lesson">
                                                                                            <span class="meta-icon far fa-light fa-star"></span>
                                                                                            <span class="meta-value"> 9 / 1 0</span>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="course-item grid-item post-132 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-information-technology course_tag-general course_tag-info-tech pmpro-has-access course">
                                                                            <div class="course-wrapper maxcoach-box">
                                                                                <div class="course-thumbnail-wrapper maxcoach-image">
                                                                                    <a href="#" class="course-permalink link-secret">
                                                                                        <div class="course-thumbnail">
                                                                                            <img src="<?= urlOf('assets/images/parul.jpg') ?>" alt="stock-full-hd-03" width="480" />
                                                                                            <div class="course-overlay-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="course-info">

                                                                                    <div class="course-price course-free">

                                                                                        <span class="price">PARUL UNIVERSITY</span>
                                                                                    </div>


                                                                                    <h3 class="course-title">
                                                                                        <a href="#">VADODARA, GUJARAT | COA, PCI, INC, GNC, MCI APPROVED</a>
                                                                                    </h3>
                                                                                    <div class="course-meta">
                                                                                        <div class="meta-item course-lesson">
                                                                                            <span class="meta-icon far fa-light fa-star"></span>
                                                                                            <span class="meta-value"> 8 . 1 / 1 0 </span>
                                                                                        </div>
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="course-item grid-item post-12 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course_tag-general course_tag-programming pmpro-has-access course">
                                                                            <div class="course-wrapper maxcoach-box">
                                                                                <div class="course-thumbnail-wrapper maxcoach-image">
                                                                                    <a href="#" class="course-permalink link-secret">
                                                                                        <div class="course-thumbnail">
                                                                                            <img src="<?= urlOf('assets/images/xavier.png') ?>" alt="stock-full-hd-04" width="480" />
                                                                                            <div class="course-overlay-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="course-info">

                                                                                    <div class="course-price">

                                                                                        <span class="price">ST XAVIER'S COLLEGE</span>
                                                                                    </div>


                                                                                    <h3 class="course-title">
                                                                                        <a href="#">AHMEDABAD, GUJARAT | UGC APPROVED</a>
                                                                                    </h3>
                                                                                    <div class="course-meta">
                                                                                        <div class="meta-item course-lesson">
                                                                                            <span class="meta-icon far fa-light fa-star"></span>
                                                                                            <span class="meta-value"> 8 . 2 / 1 0 </span>
                                                                                        </div>
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="course-item grid-item post-200 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-personal-development course_tag-development course_tag-general pmpro-has-access course">
                                                                            <div class="course-wrapper maxcoach-box">
                                                                                <div class="course-thumbnail-wrapper maxcoach-image">
                                                                                    <a href="#" class="course-permalink link-secret">
                                                                                        <div class="course-thumbnail">
                                                                                            <img src="<?= urlOf('assets/images/patel.png') ?>" alt="stock-full-hd-06" width="480" />
                                                                                            <div class="course-overlay-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="course-info">

                                                                                    <div class="course-price">

                                                                                        <span class="price">SANKALCHAND PATEL UNIVERSITY - [SPU]</span>
                                                                                    </div>


                                                                                    <h3 class="course-title">
                                                                                        <a href="#">VISNAGAR, GUJARAT | UGC APPROVED</a>
                                                                                    </h3>
                                                                                    <div class="course-meta">
                                                                                        <div class="meta-item course-lesson">
                                                                                            <span class="meta-icon far fa-light fa-star"></span>
                                                                                            <span class="meta-value"> 8 / 1 0 </span>
                                                                                        </div>
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="course-item grid-item post-117 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course_tag-general course_tag-jquery pmpro-has-access course">
                                                                            <div class="course-wrapper maxcoach-box">
                                                                                <div class="course-thumbnail-wrapper maxcoach-image">
                                                                                    <a href="#" class="course-permalink link-secret">
                                                                                        <div class="course-thumbnail">
                                                                                            <img src="<?= urlOf('assets/images/NIFT_official_logo.png') ?>" alt="course-featured-image-01" width="480" />
                                                                                            <div class="course-overlay-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="course-info">

                                                                                    <div class="course-price">

                                                                                        <span class="price">NATIONAL INSTITUTE OF FASHION TECHNOLOGY - [NIFT]</span>
                                                                                    </div>


                                                                                    <h3 class="course-title">
                                                                                        <a href="#">GANDHINAGAR, GUJARAT</a>
                                                                                    </h3>

                                                                                    <div class="course-meta">
                                                                                        <div class="meta-item course-lesson">
                                                                                            <span class="meta-icon far fa-light fa-star"></span>
                                                                                            <span class="meta-value"> 8 . 7 / 1 0 </span>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-fa462ad elementor-align-center elementor-invisible elementor-widget elementor-widget-tm-button" data-id="fa462ad" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-button-wrapper">
                                                                    <a href="./assets/includes/all_colleges.php" class="tm-button-link tm-button style-flat tm-button-nm icon-right" role="button">
                                                                        <div class="button-content-wrapper">

                                                                            <span class="button-text">View all Colleges</span>

                                                                            <span class="button-icon">
                                                                                <i class="far fa-long-arrow-right"></i>
                                                                            </span>
                                                                        </div>

                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                                <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-6d09358 elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="6d09358" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4040d2a" data-id="4040d2a" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-051c14a elementor-invisible elementor-widget elementor-widget-tm-heading" data-id="051c14a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-heading.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-modern-heading" id="qoutes">
                                                                    <div class="heading-primary-wrap">
                                                                        <h2 class="heading-primary elementor-heading-title">Why People Talk About <mark>Education</mark>?</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-649b942 elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-content-align-center elementor-section-column-vertical-align-stretch" data-id="649b942" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-extended">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3a18688 elementor-invisible" data-id="3a18688" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;maxcoachFadeInUp&quot;}">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-126af5f maxcoach-shape-distortion elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-tm-shapes" data-id="126af5f" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="maxcoach-shape">
                                                                                            <div class="shape">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="202px" viewBox="0 0 200 202">
                                                                                                    <path class="elementor-shape-fill" d="M139.374493,198.087515 C155.702187,206.99353 190.724846,197.001323 197.677982,159.049528 C204.827153,120.027728 184.496324,118.997566 188.045232,104.801934 C202.287755,83.6528313 204.827153,56.662651 190.073179,40.4146034 C153.570125,2.39058926 144.444362,48.0194062 114.025151,20.1351292 C101.727304,7.83728238 83.0989526,-6.73517414 56.2286492,3.40456297 C18.2385839,17.7404371 27.3303985,47.659333 27.3303985,69.3128542 C27.3303985,76.9370868 3.11408002,91.2696589 0.460095291,110.885776 C-2.88628833,135.619549 12.6277797,168.175291 27.3303985,179.329002 C50.6517938,205.692318 86.6478605,199.608476 102.87144,190.482713 C116.802125,182.646702 128.220783,192.003673 139.374493,198.087515 Z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-48c67bd elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image" data-id="48c67bd" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img width="178" height="178" src="<?= urlOf('assets/images/maxcoach-shape-05.png') ?>" class="attachment-full size-full" alt="" loading="lazy" srcset="https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/maxcoach-shape-05.png 178w, https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/maxcoach-shape-05-100x100.png 100w, https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/maxcoach-shape-05-150x150.png 150w" sizes="(max-width: 178px) 100vw, 178px" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-ecee751 maxcoach-testimonial-style-05 layout-image-left maxcoach-testimonial-cite-layout-block bullets-v-align-below elementor-invisible elementor-widget elementor-widget-tm-testimonial" data-id="ecee751" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-testimonial.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="tm-swiper tm-slider-widget v-stretch" data-lg-items="1" data-md-items="1" data-sm-items="1" data-lg-gutter="30" data-md-gutter="" data-sm-gutter="" data-loop="1" data-simulate-touch="1" data-speed="1000" data-effect="fade">
                                                                                            <div class="swiper-inner">
                                                                                                <div class="swiper-container">
                                                                                                    <div class="swiper-wrapper">
                                                                                                        <div class="swiper-slide elementor-repeater-item-c881191">
                                                                                                            <div class="testimonial-item">
                                                                                                                <div class="image">
                                                                                                                    <img src="<?= urlOf('assets/images/testimonial-avata-02.jpg') ?>" alt="testimonial-avata-02" />
                                                                                                                </div>
                                                                                                                <div class="testimonial-main-content">
                                                                                                                    <div class="content-wrap">
                                                                                                                        <div class="content">
                                                                                                                            <div class="text">
                                                                                                                                I am free to learn at my own pace, follow my own schedule and choose the subject I like. Great study portal for people like me.
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="info">
                                                                                                                            <div class="cite">
                                                                                                                                <h6 class="name"> Mina Hollace
                                                                                                                                </h6><span class="position">/ Freelancer</span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="swiper-slide elementor-repeater-item-376fa79">
                                                                                                            <div class="testimonial-item">
                                                                                                                <div class="image">
                                                                                                                    <img src="<?= urlOf('assets/images/testimonial-avata-04.jpg') ?>" alt="testimonial-avata-04" />
                                                                                                                </div>
                                                                                                                <div class="testimonial-main-content">
                                                                                                                    <div class="content-wrap">
                                                                                                                        <div class="content">
                                                                                                                            <div class="text">
                                                                                                                                MaxCoach is my best choice. Their tutors are smart and professional when dealing with students.
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="info">
                                                                                                                            <div class="cite">
                                                                                                                                <h6 class="name"> Madley Pondor</h6>
                                                                                                                                <span class="position">/ IT Specialist</span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="swiper-slide elementor-repeater-item-81707f3">
                                                                                                            <div class="testimonial-item">
                                                                                                                <div class="image">
                                                                                                                    <img src="<?= urlOf('assets/images/testimonial-avata-01.jpg') ?>" alt="testimonial-avata-01" />
                                                                                                                </div>
                                                                                                                <div class="testimonial-main-content">
                                                                                                                    <div class="content-wrap">
                                                                                                                        <div class="content">
                                                                                                                            <div class="text">
                                                                                                                                MaxCoach is my best choice. Their tutors are smart and professional when dealing with students.
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="info">
                                                                                                                            <div class="cite">
                                                                                                                                <h6 class="name"> Luvic Dubble </h6>
                                                                                                                                <span class="position">/ Private Tutor</span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="swiper-slide elementor-repeater-item-d405dac">
                                                                                                            <div class="testimonial-item">
                                                                                                                <div class="image">
                                                                                                                    <img src="<?= urlOf('assets/images/testimonial-avata-03.jpg') ?>" alt="testimonial-avata-03" />
                                                                                                                </div>
                                                                                                                <div class="testimonial-main-content">
                                                                                                                    <div class="content-wrap">
                                                                                                                        <div class="content">
                                                                                                                            <div class="text">
                                                                                                                                I'm a very strict person so I require everything to be organized and neat. MaxCoach guys just got me. </div>
                                                                                                                        </div>
                                                                                                                        <div class="info">
                                                                                                                            <div class="cite">
                                                                                                                                <h6 class="name"> Florence Themes</h6>
                                                                                                                                <span class="position">/ Multimedia Admin</span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
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
                                <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-f33241a elementor-section-stretched elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="f33241a" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3dc77b4" data-id="3dc77b4" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-4f8a8b0 elementor-invisible elementor-widget elementor-widget-tm-heading" data-id="4f8a8b0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-heading.default" id="universities">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-modern-heading">
                                                                    <div class="heading-secondary-wrap">
                                                                        <h3 class="heading-secondary elementor-heading-title">Government of Gujarat</h3>
                                                                    </div>
                                                                    <div class="heading-primary-wrap">
                                                                        <h2 class="heading-primary elementor-heading-title">Some Top
                                                                            <mark>Universities</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-0f5e62f maxcoach-animation-zoom-in elementor-widget elementor-widget-tm-blog" data-id="0f5e62f" data-element_type="widget" data-widget_type="tm-blog.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-grid-wrapper maxcoach-blog maxcoach-blog-grid maxcoach-blog-caption-style-01" data-grid="{&quot;type&quot;:&quot;grid&quot;,&quot;columns&quot;:3,&quot;columnsTablet&quot;:2,&quot;columnsMobile&quot;:1,&quot;gutter&quot;:30}">
                                                                    <input type="hidden" class="maxcoach-query-input" value="{&quot;source&quot;:&quot;custom_query&quot;,&quot;action&quot;:&quot;post_infinite_load&quot;,&quot;max_num_pages&quot;:9,&quot;found_posts&quot;:27,&quot;count&quot;:3,&quot;query_vars&quot;:{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:3,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;paged&quot;:1},&quot;settings&quot;:{&quot;show_caption&quot;:&quot;yes&quot;,&quot;read_more_text&quot;:null,&quot;meta_data&quot;:[{&quot;meta&quot;:&quot;date&quot;,&quot;_id&quot;:&quot;e08e8cf&quot;},{&quot;meta&quot;:&quot;author&quot;,&quot;_id&quot;:&quot;d2d8134&quot;}],&quot;grid_metro_layout&quot;:null,&quot;hover_effect&quot;:&quot;zoom-in&quot;,&quot;show_caption_excerpt&quot;:&quot;&quot;,&quot;show_caption_read_more&quot;:&quot;&quot;,&quot;query_number&quot;:3,&quot;layout&quot;:&quot;grid&quot;,&quot;show_thumbnail&quot;:null,&quot;caption_style&quot;:&quot;01&quot;,&quot;show_caption_category&quot;:&quot;yes&quot;,&quot;excerpt_length&quot;:null,&quot;show_caption_share&quot;:&quot;&quot;,&quot;show_caption_meta&quot;:[&quot;date&quot;,&quot;views&quot;],&quot;show_overlay&quot;:&quot;&quot;,&quot;overlay_style&quot;:&quot;float&quot;,&quot;show_overlay_category&quot;:&quot;yes&quot;,&quot;show_overlay_title&quot;:&quot;&quot;,&quot;overlay_meta_data&quot;:[],&quot;metro_image_size_width&quot;:null,&quot;metro_image_ratio&quot;:null,&quot;thumbnail_default_size&quot;:&quot;1&quot;,&quot;thumbnail_size&quot;:null,&quot;thumbnail_custom_dimension&quot;:null,&quot;banners&quot;:null,&quot;grid_columns&quot;:3,&quot;grid_columns_tablet&quot;:2,&quot;grid_columns_mobile&quot;:1,&quot;grid_gutter&quot;:30,&quot;grid_gutter_tablet&quot;:&quot;&quot;,&quot;grid_gutter_mobile&quot;:&quot;&quot;,&quot;pagination_type&quot;:&quot;&quot;,&quot;pagination_custom_button_id&quot;:null,&quot;box_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;box_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;box_box_shadow_box_shadow&quot;:null,&quot;box_box_shadow_box_shadow_position&quot;:null,&quot;box_box_shadow_hover_box_shadow_type&quot;:&quot;&quot;,&quot;box_box_shadow_hover_box_shadow&quot;:null,&quot;box_box_shadow_hover_box_shadow_position&quot;:null,&quot;thumbnail_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;thumbnail_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;thumbnail_box_shadow_box_shadow&quot;:null,&quot;thumbnail_box_shadow_box_shadow_position&quot;:null,&quot;css_filters_css_filter&quot;:&quot;&quot;,&quot;css_filters_blur&quot;:null,&quot;css_filters_brightness&quot;:null,&quot;css_filters_contrast&quot;:null,&quot;css_filters_saturate&quot;:null,&quot;css_filters_hue&quot;:null,&quot;thumbnail_opacity&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;thumbnail_box_shadow_hover_box_shadow_type&quot;:&quot;&quot;,&quot;thumbnail_box_shadow_hover_box_shadow&quot;:null,&quot;thumbnail_box_shadow_hover_box_shadow_position&quot;:null,&quot;css_filters_hover_css_filter&quot;:&quot;&quot;,&quot;css_filters_hover_blur&quot;:null,&quot;css_filters_hover_brightness&quot;:null,&quot;css_filters_hover_contrast&quot;:null,&quot;css_filters_hover_saturate&quot;:null,&quot;css_filters_hover_hue&quot;:null,&quot;thumbnail_opacity_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;text_align&quot;:&quot;&quot;,&quot;text_align_tablet&quot;:&quot;&quot;,&quot;text_align_mobile&quot;:&quot;&quot;,&quot;caption_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_meta_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_meta_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_meta_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_meta_typography_typography&quot;:&quot;&quot;,&quot;caption_meta_typography_font_family&quot;:null,&quot;caption_meta_typography_font_size&quot;:null,&quot;caption_meta_typography_font_size_tablet&quot;:null,&quot;caption_meta_typography_font_size_mobile&quot;:null,&quot;caption_meta_typography_font_weight&quot;:null,&quot;caption_meta_typography_text_transform&quot;:null,&quot;caption_meta_typography_font_style&quot;:null,&quot;caption_meta_typography_text_decoration&quot;:null,&quot;caption_meta_typography_line_height&quot;:null,&quot;caption_meta_typography_line_height_tablet&quot;:null,&quot;caption_meta_typography_line_height_mobile&quot;:null,&quot;caption_meta_typography_letter_spacing&quot;:null,&quot;caption_meta_typography_letter_spacing_tablet&quot;:null,&quot;caption_meta_typography_letter_spacing_mobile&quot;:null,&quot;caption_meta_text_color&quot;:&quot;&quot;,&quot;caption_meta_link_color&quot;:&quot;&quot;,&quot;caption_meta_link_hover_color&quot;:&quot;&quot;,&quot;caption_category_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_category_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_category_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_category_typography_typography&quot;:&quot;&quot;,&quot;caption_category_typography_font_family&quot;:null,&quot;caption_category_typography_font_size&quot;:null,&quot;caption_category_typography_font_size_tablet&quot;:null,&quot;caption_category_typography_font_size_mobile&quot;:null,&quot;caption_category_typography_font_weight&quot;:null,&quot;caption_category_typography_text_transform&quot;:null,&quot;caption_category_typography_font_style&quot;:null,&quot;caption_category_typography_text_decoration&quot;:null,&quot;caption_category_typography_line_height&quot;:null,&quot;caption_category_typography_line_height_tablet&quot;:null,&quot;caption_category_typography_line_height_mobile&quot;:null,&quot;caption_category_typography_letter_spacing&quot;:null,&quot;caption_category_typography_letter_spacing_tablet&quot;:null,&quot;caption_category_typography_letter_spacing_mobile&quot;:null,&quot;caption_category_color&quot;:&quot;&quot;,&quot;caption_category_bg_background&quot;:&quot;&quot;,&quot;caption_category_bg_color&quot;:null,&quot;caption_category_bg_color_stop&quot;:null,&quot;caption_category_bg_color_b&quot;:null,&quot;caption_category_bg_color_b_stop&quot;:null,&quot;caption_category_bg_gradient_type&quot;:null,&quot;caption_category_bg_gradient_angle&quot;:null,&quot;caption_category_bg_gradient_position&quot;:null,&quot;caption_category_bg_image&quot;:null,&quot;caption_category_bg_image_tablet&quot;:null,&quot;caption_category_bg_image_mobile&quot;:null,&quot;caption_category_bg_position&quot;:null,&quot;caption_category_bg_position_tablet&quot;:null,&quot;caption_category_bg_position_mobile&quot;:null,&quot;caption_category_bg_xpos&quot;:null,&quot;caption_category_bg_xpos_tablet&quot;:null,&quot;caption_category_bg_xpos_mobile&quot;:null,&quot;caption_category_bg_ypos&quot;:null,&quot;caption_category_bg_ypos_tablet&quot;:null,&quot;caption_category_bg_ypos_mobile&quot;:null,&quot;caption_category_bg_attachment&quot;:null,&quot;caption_category_bg_repeat&quot;:null,&quot;caption_category_bg_repeat_tablet&quot;:null,&quot;caption_category_bg_repeat_mobile&quot;:null,&quot;caption_category_bg_size&quot;:null,&quot;caption_category_bg_size_tablet&quot;:null,&quot;caption_category_bg_size_mobile&quot;:null,&quot;caption_category_bg_bg_width&quot;:null,&quot;caption_category_bg_bg_width_tablet&quot;:null,&quot;caption_category_bg_bg_width_mobile&quot;:null,&quot;caption_category_bg_video_link&quot;:null,&quot;caption_category_bg_video_start&quot;:null,&quot;caption_category_bg_video_end&quot;:null,&quot;caption_category_bg_play_once&quot;:null,&quot;caption_category_bg_play_on_mobile&quot;:null,&quot;caption_category_bg_privacy_mode&quot;:null,&quot;caption_category_bg_video_fallback&quot;:null,&quot;caption_category_bg_slideshow_gallery&quot;:null,&quot;caption_category_bg_slideshow_loop&quot;:null,&quot;caption_category_bg_slideshow_slide_duration&quot;:null,&quot;caption_category_bg_slideshow_slide_transition&quot;:null,&quot;caption_category_bg_slideshow_transition_duration&quot;:null,&quot;caption_category_bg_slideshow_background_size&quot;:null,&quot;caption_category_bg_slideshow_background_size_tablet&quot;:null,&quot;caption_category_bg_slideshow_background_size_mobile&quot;:null,&quot;caption_category_bg_slideshow_background_position&quot;:null,&quot;caption_category_bg_slideshow_background_position_tablet&quot;:null,&quot;caption_category_bg_slideshow_background_position_mobile&quot;:null,&quot;caption_category_bg_slideshow_ken_burns&quot;:null,&quot;caption_category_bg_slideshow_ken_burns_zoom_direction&quot;:null,&quot;caption_category_hover_color&quot;:&quot;&quot;,&quot;caption_category_hover_bg_background&quot;:&quot;&quot;,&quot;caption_category_hover_bg_color&quot;:null,&quot;caption_category_hover_bg_color_stop&quot;:null,&quot;caption_category_hover_bg_color_b&quot;:null,&quot;caption_category_hover_bg_color_b_stop&quot;:null,&quot;caption_category_hover_bg_gradient_type&quot;:null,&quot;caption_category_hover_bg_gradient_angle&quot;:null,&quot;caption_category_hover_bg_gradient_position&quot;:null,&quot;caption_category_hover_bg_image&quot;:null,&quot;caption_category_hover_bg_image_tablet&quot;:null,&quot;caption_category_hover_bg_image_mobile&quot;:null,&quot;caption_category_hover_bg_position&quot;:null,&quot;caption_category_hover_bg_position_tablet&quot;:null,&quot;caption_category_hover_bg_position_mobile&quot;:null,&quot;caption_category_hover_bg_xpos&quot;:null,&quot;caption_category_hover_bg_xpos_tablet&quot;:null,&quot;caption_category_hover_bg_xpos_mobile&quot;:null,&quot;caption_category_hover_bg_ypos&quot;:null,&quot;caption_category_hover_bg_ypos_tablet&quot;:null,&quot;caption_category_hover_bg_ypos_mobile&quot;:null,&quot;caption_category_hover_bg_attachment&quot;:null,&quot;caption_category_hover_bg_repeat&quot;:null,&quot;caption_category_hover_bg_repeat_tablet&quot;:null,&quot;caption_category_hover_bg_repeat_mobile&quot;:null,&quot;caption_category_hover_bg_size&quot;:null,&quot;caption_category_hover_bg_size_tablet&quot;:null,&quot;caption_category_hover_bg_size_mobile&quot;:null,&quot;caption_category_hover_bg_bg_width&quot;:null,&quot;caption_category_hover_bg_bg_width_tablet&quot;:null,&quot;caption_category_hover_bg_bg_width_mobile&quot;:null,&quot;caption_category_hover_bg_video_link&quot;:null,&quot;caption_category_hover_bg_video_start&quot;:null,&quot;caption_category_hover_bg_video_end&quot;:null,&quot;caption_category_hover_bg_play_once&quot;:null,&quot;caption_category_hover_bg_play_on_mobile&quot;:null,&quot;caption_category_hover_bg_privacy_mode&quot;:null,&quot;caption_category_hover_bg_video_fallback&quot;:null,&quot;caption_category_hover_bg_slideshow_gallery&quot;:null,&quot;caption_category_hover_bg_slideshow_loop&quot;:null,&quot;caption_category_hover_bg_slideshow_slide_duration&quot;:null,&quot;caption_category_hover_bg_slideshow_slide_transition&quot;:null,&quot;caption_category_hover_bg_slideshow_transition_duration&quot;:null,&quot;caption_category_hover_bg_slideshow_background_size&quot;:null,&quot;caption_category_hover_bg_slideshow_background_size_tablet&quot;:null,&quot;caption_category_hover_bg_slideshow_background_size_mobile&quot;:null,&quot;caption_category_hover_bg_slideshow_background_position&quot;:null,&quot;caption_category_hover_bg_slideshow_background_position_tablet&quot;:null,&quot;caption_category_hover_bg_slideshow_background_position_mobile&quot;:null,&quot;caption_category_hover_bg_slideshow_ken_burns&quot;:null,&quot;caption_category_hover_bg_slideshow_ken_burns_zoom_direction&quot;:null,&quot;caption_title_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_title_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_title_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_title_typography_typography&quot;:&quot;&quot;,&quot;caption_title_typography_font_family&quot;:null,&quot;caption_title_typography_font_size&quot;:null,&quot;caption_title_typography_font_size_tablet&quot;:null,&quot;caption_title_typography_font_size_mobile&quot;:null,&quot;caption_title_typography_font_weight&quot;:null,&quot;caption_title_typography_text_transform&quot;:null,&quot;caption_title_typography_font_style&quot;:null,&quot;caption_title_typography_text_decoration&quot;:null,&quot;caption_title_typography_line_height&quot;:null,&quot;caption_title_typography_line_height_tablet&quot;:null,&quot;caption_title_typography_line_height_mobile&quot;:null,&quot;caption_title_typography_letter_spacing&quot;:null,&quot;caption_title_typography_letter_spacing_tablet&quot;:null,&quot;caption_title_typography_letter_spacing_mobile&quot;:null,&quot;caption_title_color&quot;:&quot;&quot;,&quot;caption_title_hover_color&quot;:&quot;&quot;,&quot;caption_excerpt_margin&quot;:null,&quot;caption_excerpt_margin_tablet&quot;:null,&quot;caption_excerpt_margin_mobile&quot;:null,&quot;caption_excerpt_typography_typography&quot;:null,&quot;caption_excerpt_typography_font_family&quot;:null,&quot;caption_excerpt_typography_font_size&quot;:null,&quot;caption_excerpt_typography_font_size_tablet&quot;:null,&quot;caption_excerpt_typography_font_size_mobile&quot;:null,&quot;caption_excerpt_typography_font_weight&quot;:null,&quot;caption_excerpt_typography_text_transform&quot;:null,&quot;caption_excerpt_typography_font_style&quot;:null,&quot;caption_excerpt_typography_text_decoration&quot;:null,&quot;caption_excerpt_typography_line_height&quot;:null,&quot;caption_excerpt_typography_line_height_tablet&quot;:null,&quot;caption_excerpt_typography_line_height_mobile&quot;:null,&quot;caption_excerpt_typography_letter_spacing&quot;:null,&quot;caption_excerpt_typography_letter_spacing_tablet&quot;:null,&quot;caption_excerpt_typography_letter_spacing_mobile&quot;:null,&quot;caption_excerpt_color&quot;:null,&quot;caption_read_more_margin&quot;:null,&quot;caption_read_more_margin_tablet&quot;:null,&quot;caption_read_more_margin_mobile&quot;:null,&quot;button_text_color&quot;:null,&quot;button_background_color&quot;:null,&quot;button_border_color&quot;:null,&quot;button_hover_text_color&quot;:null,&quot;button_hover_background_color&quot;:null,&quot;button_hover_border_color&quot;:null,&quot;overlay_category_typography_typography&quot;:null,&quot;overlay_category_typography_font_family&quot;:null,&quot;overlay_category_typography_font_size&quot;:null,&quot;overlay_category_typography_font_size_tablet&quot;:null,&quot;overlay_category_typography_font_size_mobile&quot;:null,&quot;overlay_category_typography_font_weight&quot;:null,&quot;overlay_category_typography_text_transform&quot;:null,&quot;overlay_category_typography_font_style&quot;:null,&quot;overlay_category_typography_text_decoration&quot;:null,&quot;overlay_category_typography_line_height&quot;:null,&quot;overlay_category_typography_line_height_tablet&quot;:null,&quot;overlay_category_typography_line_height_mobile&quot;:null,&quot;overlay_category_typography_letter_spacing&quot;:null,&quot;overlay_category_typography_letter_spacing_tablet&quot;:null,&quot;overlay_category_typography_letter_spacing_mobile&quot;:null,&quot;overlay_category_color&quot;:null,&quot;overlay_category_bg_color&quot;:null,&quot;overlay_category_hover_color&quot;:null,&quot;overlay_category_hover_bg_color&quot;:null,&quot;pagination_alignment&quot;:null,&quot;pagination_alignment_tablet&quot;:null,&quot;pagination_alignment_mobile&quot;:null,&quot;pagination_spacing&quot;:null,&quot;pagination_spacing_tablet&quot;:null,&quot;pagination_spacing_mobile&quot;:null,&quot;pagination_typography_typography&quot;:null,&quot;pagination_typography_font_family&quot;:null,&quot;pagination_typography_font_size&quot;:null,&quot;pagination_typography_font_size_tablet&quot;:null,&quot;pagination_typography_font_size_mobile&quot;:null,&quot;pagination_typography_font_weight&quot;:null,&quot;pagination_typography_text_transform&quot;:null,&quot;pagination_typography_font_style&quot;:null,&quot;pagination_typography_text_decoration&quot;:null,&quot;pagination_typography_line_height&quot;:null,&quot;pagination_typography_line_height_tablet&quot;:null,&quot;pagination_typography_line_height_mobile&quot;:null,&quot;pagination_typography_letter_spacing&quot;:null,&quot;pagination_typography_letter_spacing_tablet&quot;:null,&quot;pagination_typography_letter_spacing_mobile&quot;:null,&quot;pagination_link_color&quot;:null,&quot;pagination_link_hover_color&quot;:null,&quot;pagination_loading_color&quot;:&quot;&quot;,&quot;query_source&quot;:&quot;custom_query&quot;,&quot;query_include&quot;:&quot;&quot;,&quot;query_include_term_ids&quot;:null,&quot;query_include_authors&quot;:null,&quot;query_exclude&quot;:&quot;&quot;,&quot;query_exclude_term_ids&quot;:null,&quot;query_exclude_authors&quot;:null,&quot;query_orderby&quot;:&quot;date&quot;,&quot;query_sort_meta_key&quot;:null,&quot;query_order&quot;:&quot;DESC&quot;,&quot;_title&quot;:&quot;&quot;,&quot;_margin&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_margin_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_margin_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_z_index&quot;:&quot;&quot;,&quot;_z_index_tablet&quot;:&quot;&quot;,&quot;_z_index_mobile&quot;:&quot;&quot;,&quot;_element_id&quot;:&quot;&quot;,&quot;_css_classes&quot;:&quot;&quot;,&quot;pmpro_require_membership&quot;:&quot;&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;&quot;,&quot;motion_fx_translateY_effect&quot;:null,&quot;motion_fx_translateY_direction&quot;:null,&quot;motion_fx_translateY_speed&quot;:null,&quot;motion_fx_translateY_affectedRange&quot;:null,&quot;motion_fx_translateX_effect&quot;:null,&quot;motion_fx_translateX_direction&quot;:null,&quot;motion_fx_translateX_speed&quot;:null,&quot;motion_fx_translateX_affectedRange&quot;:null,&quot;motion_fx_opacity_effect&quot;:null,&quot;motion_fx_opacity_direction&quot;:null,&quot;motion_fx_opacity_level&quot;:null,&quot;motion_fx_opacity_range&quot;:null,&quot;motion_fx_blur_effect&quot;:null,&quot;motion_fx_blur_direction&quot;:null,&quot;motion_fx_blur_level&quot;:null,&quot;motion_fx_blur_range&quot;:null,&quot;motion_fx_rotateZ_effect&quot;:null,&quot;motion_fx_rotateZ_direction&quot;:null,&quot;motion_fx_rotateZ_speed&quot;:null,&quot;motion_fx_rotateZ_affectedRange&quot;:null,&quot;motion_fx_scale_effect&quot;:null,&quot;motion_fx_scale_direction&quot;:null,&quot;motion_fx_scale_speed&quot;:null,&quot;motion_fx_scale_range&quot;:null,&quot;motion_fx_transform_origin_x&quot;:null,&quot;motion_fx_transform_origin_y&quot;:null,&quot;motion_fx_devices&quot;:null,&quot;motion_fx_range&quot;:null,&quot;motion_fx_motion_fx_mouse&quot;:&quot;&quot;,&quot;motion_fx_mouseTrack_effect&quot;:null,&quot;motion_fx_mouseTrack_direction&quot;:null,&quot;motion_fx_mouseTrack_speed&quot;:null,&quot;motion_fx_tilt_effect&quot;:null,&quot;motion_fx_tilt_direction&quot;:null,&quot;motion_fx_tilt_speed&quot;:null,&quot;sticky&quot;:&quot;&quot;,&quot;sticky_on&quot;:null,&quot;sticky_offset&quot;:null,&quot;sticky_effects_offset&quot;:null,&quot;sticky_parent&quot;:null,&quot;_animation&quot;:&quot;&quot;,&quot;_animation_tablet&quot;:&quot;&quot;,&quot;_animation_mobile&quot;:&quot;&quot;,&quot;animation_duration&quot;:null,&quot;_animation_delay&quot;:null,&quot;_background_background&quot;:&quot;&quot;,&quot;_background_color&quot;:null,&quot;_background_color_stop&quot;:null,&quot;_background_color_b&quot;:null,&quot;_background_color_b_stop&quot;:null,&quot;_background_gradient_type&quot;:null,&quot;_background_gradient_angle&quot;:null,&quot;_background_gradient_position&quot;:null,&quot;_background_image&quot;:null,&quot;_background_image_tablet&quot;:null,&quot;_background_image_mobile&quot;:null,&quot;_background_position&quot;:null,&quot;_background_position_tablet&quot;:null,&quot;_background_position_mobile&quot;:null,&quot;_background_xpos&quot;:null,&quot;_background_xpos_tablet&quot;:null,&quot;_background_xpos_mobile&quot;:null,&quot;_background_ypos&quot;:null,&quot;_background_ypos_tablet&quot;:null,&quot;_background_ypos_mobile&quot;:null,&quot;_background_attachment&quot;:null,&quot;_background_repeat&quot;:null,&quot;_background_repeat_tablet&quot;:null,&quot;_background_repeat_mobile&quot;:null,&quot;_background_size&quot;:null,&quot;_background_size_tablet&quot;:null,&quot;_background_size_mobile&quot;:null,&quot;_background_bg_width&quot;:null,&quot;_background_bg_width_tablet&quot;:null,&quot;_background_bg_width_mobile&quot;:null,&quot;_background_video_link&quot;:null,&quot;_background_video_start&quot;:null,&quot;_background_video_end&quot;:null,&quot;_background_play_once&quot;:null,&quot;_background_play_on_mobile&quot;:null,&quot;_background_privacy_mode&quot;:null,&quot;_background_video_fallback&quot;:null,&quot;_background_slideshow_gallery&quot;:null,&quot;_background_slideshow_loop&quot;:null,&quot;_background_slideshow_slide_duration&quot;:null,&quot;_background_slideshow_slide_transition&quot;:null,&quot;_background_slideshow_transition_duration&quot;:null,&quot;_background_slideshow_background_size&quot;:null,&quot;_background_slideshow_background_size_tablet&quot;:null,&quot;_background_slideshow_background_size_mobile&quot;:null,&quot;_background_slideshow_background_position&quot;:null,&quot;_background_slideshow_background_position_tablet&quot;:null,&quot;_background_slideshow_background_position_mobile&quot;:null,&quot;_background_slideshow_ken_burns&quot;:null,&quot;_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;_background_hover_background&quot;:&quot;&quot;,&quot;_background_hover_color&quot;:null,&quot;_background_hover_color_stop&quot;:null,&quot;_background_hover_color_b&quot;:null,&quot;_background_hover_color_b_stop&quot;:null,&quot;_background_hover_gradient_type&quot;:null,&quot;_background_hover_gradient_angle&quot;:null,&quot;_background_hover_gradient_position&quot;:null,&quot;_background_hover_image&quot;:null,&quot;_background_hover_image_tablet&quot;:null,&quot;_background_hover_image_mobile&quot;:null,&quot;_background_hover_position&quot;:null,&quot;_background_hover_position_tablet&quot;:null,&quot;_background_hover_position_mobile&quot;:null,&quot;_background_hover_xpos&quot;:null,&quot;_background_hover_xpos_tablet&quot;:null,&quot;_background_hover_xpos_mobile&quot;:null,&quot;_background_hover_ypos&quot;:null,&quot;_background_hover_ypos_tablet&quot;:null,&quot;_background_hover_ypos_mobile&quot;:null,&quot;_background_hover_attachment&quot;:null,&quot;_background_hover_repeat&quot;:null,&quot;_background_hover_repeat_tablet&quot;:null,&quot;_background_hover_repeat_mobile&quot;:null,&quot;_background_hover_size&quot;:null,&quot;_background_hover_size_tablet&quot;:null,&quot;_background_hover_size_mobile&quot;:null,&quot;_background_hover_bg_width&quot;:null,&quot;_background_hover_bg_width_tablet&quot;:null,&quot;_background_hover_bg_width_mobile&quot;:null,&quot;_background_hover_video_link&quot;:null,&quot;_background_hover_video_start&quot;:null,&quot;_background_hover_video_end&quot;:null,&quot;_background_hover_play_once&quot;:null,&quot;_background_hover_play_on_mobile&quot;:null,&quot;_background_hover_privacy_mode&quot;:null,&quot;_background_hover_video_fallback&quot;:null,&quot;_background_hover_slideshow_gallery&quot;:null,&quot;_background_hover_slideshow_loop&quot;:null,&quot;_background_hover_slideshow_slide_duration&quot;:null,&quot;_background_hover_slideshow_slide_transition&quot;:null,&quot;_background_hover_slideshow_transition_duration&quot;:null,&quot;_background_hover_slideshow_background_size&quot;:null,&quot;_background_hover_slideshow_background_size_tablet&quot;:null,&quot;_background_hover_slideshow_background_size_mobile&quot;:null,&quot;_background_hover_slideshow_background_position&quot;:null,&quot;_background_hover_slideshow_background_position_tablet&quot;:null,&quot;_background_hover_slideshow_background_position_mobile&quot;:null,&quot;_background_hover_slideshow_ken_burns&quot;:null,&quot;_background_hover_slideshow_ken_burns_zoom_direction&quot;:null,&quot;_background_hover_transition&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_border_border&quot;:&quot;&quot;,&quot;_border_width&quot;:null,&quot;_border_width_tablet&quot;:null,&quot;_border_width_mobile&quot;:null,&quot;_border_color&quot;:null,&quot;_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_box_shadow_box_shadow_type&quot;:&quot;&quot;,&quot;_box_shadow_box_shadow&quot;:null,&quot;_box_shadow_box_shadow_position&quot;:null,&quot;_border_hover_border&quot;:&quot;&quot;,&quot;_border_hover_width&quot;:null,&quot;_border_hover_width_tablet&quot;:null,&quot;_border_hover_width_mobile&quot;:null,&quot;_border_hover_color&quot;:null,&quot;_border_radius_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_border_radius_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;_box_shadow_hover_box_shadow_type&quot;:&quot;&quot;,&quot;_box_shadow_hover_box_shadow&quot;:null,&quot;_box_shadow_hover_box_shadow_position&quot;:null,&quot;_border_hover_transition&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_mask_switch&quot;:&quot;&quot;,&quot;_mask_shape&quot;:null,&quot;_mask_image&quot;:null,&quot;_mask_notice&quot;:null,&quot;_mask_size&quot;:null,&quot;_mask_size_tablet&quot;:null,&quot;_mask_size_mobile&quot;:null,&quot;_mask_size_scale&quot;:null,&quot;_mask_size_scale_tablet&quot;:null,&quot;_mask_size_scale_mobile&quot;:null,&quot;_mask_position&quot;:null,&quot;_mask_position_tablet&quot;:null,&quot;_mask_position_mobile&quot;:null,&quot;_mask_position_x&quot;:null,&quot;_mask_position_x_tablet&quot;:null,&quot;_mask_position_x_mobile&quot;:null,&quot;_mask_position_y&quot;:null,&quot;_mask_position_y_tablet&quot;:null,&quot;_mask_position_y_mobile&quot;:null,&quot;_mask_repeat&quot;:null,&quot;_mask_repeat_tablet&quot;:null,&quot;_mask_repeat_mobile&quot;:null,&quot;_element_width&quot;:&quot;&quot;,&quot;_element_width_tablet&quot;:&quot;&quot;,&quot;_element_width_mobile&quot;:&quot;&quot;,&quot;_element_custom_width&quot;:null,&quot;_element_custom_width_tablet&quot;:null,&quot;_element_custom_width_mobile&quot;:null,&quot;_element_vertical_align&quot;:null,&quot;_element_vertical_align_tablet&quot;:null,&quot;_element_vertical_align_mobile&quot;:null,&quot;_position&quot;:&quot;&quot;,&quot;_offset_orientation_h&quot;:null,&quot;_offset_x&quot;:null,&quot;_offset_x_tablet&quot;:null,&quot;_offset_x_mobile&quot;:null,&quot;_offset_x_end&quot;:null,&quot;_offset_x_end_tablet&quot;:null,&quot;_offset_x_end_mobile&quot;:null,&quot;_offset_orientation_v&quot;:null,&quot;_offset_y&quot;:null,&quot;_offset_y_tablet&quot;:null,&quot;_offset_y_mobile&quot;:null,&quot;_offset_y_end&quot;:null,&quot;_offset_y_end_tablet&quot;:null,&quot;_offset_y_end_mobile&quot;:null,&quot;hide_desktop&quot;:&quot;&quot;,&quot;hide_tablet&quot;:&quot;&quot;,&quot;hide_mobile&quot;:&quot;&quot;,&quot;_attributes&quot;:&quot;&quot;,&quot;custom_css&quot;:&quot;&quot;}}" />
                                                                    <div class="maxcoach-grid lazy-grid">
                                                                        <div class="grid-sizer"></div>
                                                                        <div class="grid-item post-item post-5168 post type-post status-publish format-video has-post-thumbnail hentry category-business tag-finance post_format-post-format-video pmpro-has-access">
                                                                            <div class="post-wrapper maxcoach-box">
                                                                                <div class="post-feature post-thumbnail maxcoach-image collage-image">
                                                                                    <a href="../ten-benefits-of-rentals-that-may-change-your-perspective/index.html">
                                                                                        <img src="<?= urlOf('assets/images/maharaja.jpg') ?>" alt="home-personal-finance-blog-03" />
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-caption">
                                                                                    <div class="post-categories">
                                                                                        <a href="#" rel="category tag"><span>Country Rank : 37</span></a>
                                                                                    </div>
                                                                                    <h3 class="post-title">
                                                                                        <a href="#">The Maharaja Sayajirao University of Baroda</a>
                                                                                    </h3>
                                                                                    <div class="post-meta">
                                                                                        <div class="inner">
                                                                                            <div class="post-date">
                                                                                                <span class="meta-icon"><i class="far fa-calendar"></i></span>
                                                                                                Founded 1949
                                                                                            </div>
                                                                                            <div class="post-view">
                                                                                                <span class="meta-icon">
                                                                                                    <i class="far fa-light fa-globe"></i>
                                                                                                </span>
                                                                                                Vadodara
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid-item post-item post-5165 post type-post status-publish format-video has-post-thumbnail hentry category-business tag-finance post_format-post-format-video pmpro-has-access">
                                                                            <div class="post-wrapper maxcoach-box">
                                                                                <div class="post-feature post-thumbnail maxcoach-image collage-image">
                                                                                    <a href="../10-things-successful-mompreneurs-do-different/index.html">
                                                                                        <img src="<?= urlOf('assets/images/820131-gujarat-university.jpg') ?>" alt="home-personal-finance-blog-02" />
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-caption">
                                                                                    <div class="post-categories">
                                                                                        <a href="" rel="category tag"><span>Country Rank : 38</span></a>
                                                                                    </div>
                                                                                    <h3 class="post-title">
                                                                                        <a href="">Gujarat University</a>
                                                                                    </h3>
                                                                                    <div class="post-meta">
                                                                                        <div class="inner">
                                                                                            <div class="post-date">
                                                                                                <span class="meta-icon"><i class="far fa-calendar"></i></span>
                                                                                                Founded 1949
                                                                                            </div>
                                                                                            <div class="post-view">
                                                                                                <span class="meta-icon">
                                                                                                    <i class="far fa-light fa-globe"></i>
                                                                                                </span>
                                                                                                Ahmedabad
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid-item post-item post-5162 post type-post status-publish format-video has-post-thumbnail hentry category-business tag-finance post_format-post-format-video pmpro-has-access">
                                                                            <div class="post-wrapper maxcoach-box">
                                                                                <div class="post-feature post-thumbnail maxcoach-image collage-image">
                                                                                    <a href="../how-stay-calm-from-the-first-time/index.html">
                                                                                        <img src="<?= urlOf('assets/images/indian-institute-of-technology-iit-gandhinagar.jpg') ?>" alt="home-personal-finance-blog-01" />
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-caption">
                                                                                    <div class="post-categories">
                                                                                        <a href="../category/business/index.html" rel="category tag"><span>Country Rank : 48</span></a>
                                                                                    </div>
                                                                                    <h3 class="post-title">
                                                                                        <a href="../how-stay-calm-from-the-first-time/index.html">Indian Institute of Technology Gandhinagar</a>
                                                                                    </h3>
                                                                                    <div class="post-meta">
                                                                                        <div class="inner">
                                                                                            <div class="post-date">
                                                                                                <span class="meta-icon"><i class="far fa-calendar"></i></span>
                                                                                                Founded 2008
                                                                                            </div>
                                                                                            <div class="post-view">
                                                                                                <span class="meta-icon">
                                                                                                    <i class="far fa-light fa-globe"></i>
                                                                                                </span>
                                                                                                Gandhinagar
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                                <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-325ad47 elementor-section-stretched elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="325ad47" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d558a13" data-id="d558a13" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-d190643 elementor-invisible elementor-widget elementor-widget-tm-heading" data-id="d190643" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-heading.default" id="courses">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-modern-heading">
                                                                    <div class="heading-secondary-wrap">
                                                                        <h3 class="heading-secondary elementor-heading-title">Government of Gujarat</h3>
                                                                    </div>
                                                                    <div class="heading-primary-wrap">
                                                                        <h2 class="heading-primary elementor-heading-title">Top <mark>Courses
                                                                            </mark>after 12th.</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-433dc0d elementor-section-gap-beside-no elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="433dc0d" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-custom">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d1057ed elementor-invisible" data-id="d1057ed" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;maxcoachFadeInUp&quot;}">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-11d52d9 maxcoach-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-tm-icon-box" data-id="11d52d9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-icon-box.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <a class="tm-icon-box maxcoach-box link-secret" data-vivus="{&quot;enable&quot;:&quot;yes&quot;,&quot;type&quot;:&quot;delayed&quot;,&quot;duration&quot;:120,&quot;play_on_hover&quot;:&quot;yes&quot;}" href="#">
                                                                                            <div class="icon-box-wrapper">
                                                                                                <div class="maxcoach-icon-wrap">
                                                                                                    <div class="maxcoach-icon-view first">
                                                                                                        <div class="maxcoach-icon-view-inner">
                                                                                                            <div class="maxcoach-icon icon maxcoach-svg-icon maxcoach-solid-icon">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" xml:space="preserve">
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165bfef7-line)" stroke-width="2" stroke-miterlimit="10" x1="7" y1="0" x2="7" y2="64"></line>
                                                                                                                    <polyline fill="none" stroke="url(#svg-gradient632e9165bfef7)" stroke-width="2" stroke-miterlimit="10" points="32.062,6 26,11 26,35 57,35 51,23 57,11   26,11 ">
                                                                                                                    </polyline>
                                                                                                                    <polyline fill="none" stroke="url(#svg-gradient632e9165bfef7)" stroke-width="2" stroke-miterlimit="10" points="26,30 7,30 7,6 32,6 32,11 ">
                                                                                                                    </polyline>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="icon-box-content">
                                                                                                    <div class="heading-wrap">
                                                                                                        <h3 class="heading">Idea Discussion</h3>
                                                                                                    </div>
                                                                                                    <div class="description-wrap">
                                                                                                        <div class="description">
                                                                                                            Get teamed up with the specialists who work and teach coding for years at famous universities. </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-69d4187 elementor-invisible" data-id="69d4187" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;maxcoachFadeInUp&quot;}">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-86c3e88 maxcoach-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-tm-icon-box" data-id="86c3e88" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-icon-box.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <a class="tm-icon-box maxcoach-box link-secret" data-vivus="{&quot;enable&quot;:&quot;yes&quot;,&quot;type&quot;:&quot;delayed&quot;,&quot;duration&quot;:120,&quot;play_on_hover&quot;:&quot;yes&quot;}" href="#">
                                                                                            <div class="icon-box-wrapper">
                                                                                                <div class="maxcoach-icon-wrap">
                                                                                                    <div class="maxcoach-icon-view first">
                                                                                                        <div class="maxcoach-icon-view-inner">
                                                                                                            <div class="maxcoach-icon icon maxcoach-svg-icon maxcoach-solid-icon">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" xml:space="preserve">
                                                                                                                    <g>
                                                                                                                        <polygon fill="none" stroke="url(#svg-gradient632e9165c31f7)" stroke-width="2" stroke-miterlimit="10" points="32,1 26,1 26,10 20,12 14,6 6,14 12,20    10,26 1,26 1,38 10,38 12,44 6,50 14,58 20,52 26,54 26,63 32,63 38,63 38,54 44,52 50,58 58,50 52,44 54,38 63,38 63,26 54,26    52,20 58,14 50,6 44,12 38,10 38,1  ">
                                                                                                                        </polygon>
                                                                                                                        <circle fill="none" stroke="url(#svg-gradient632e9165c31f7)" stroke-width="2" stroke-miterlimit="10" cx="32" cy="32" r="6"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="icon-box-content">
                                                                                                    <div class="heading-wrap">
                                                                                                        <h3 class="heading">Web Development</h3>
                                                                                                    </div>
                                                                                                    <div class="description-wrap">
                                                                                                        <div class="description">
                                                                                                            Learn to start building a webpage from scratch. You decide your own pace, course and speed. </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8aab592 elementor-invisible" data-id="8aab592" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;maxcoachFadeInUp&quot;}">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-ce42df5 maxcoach-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-tm-icon-box" data-id="ce42df5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-icon-box.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <a class="tm-icon-box maxcoach-box link-secret" data-vivus="{&quot;enable&quot;:&quot;yes&quot;,&quot;type&quot;:&quot;delayed&quot;,&quot;duration&quot;:120,&quot;play_on_hover&quot;:&quot;yes&quot;}" href="#">
                                                                                            <div class="icon-box-wrapper">
                                                                                                <div class="maxcoach-icon-wrap">
                                                                                                    <div class="maxcoach-icon-view first">
                                                                                                        <div class="maxcoach-icon-view-inner">
                                                                                                            <div class="maxcoach-icon icon maxcoach-svg-icon maxcoach-solid-icon">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" xml:space="preserve">
                                                                                                                    <circle fill="none" stroke="url(#svg-gradient632e9165c5b0b)" stroke-width="2" stroke-miterlimit="10" cx="32" cy="32" r="31">
                                                                                                                    </circle>
                                                                                                                    <circle fill="none" stroke="url(#svg-gradient632e9165c5b0b)" stroke-width="2" stroke-miterlimit="10" cx="32" cy="32" r="15">
                                                                                                                    </circle>
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165c5b0b-line)" stroke-width="2" stroke-miterlimit="10" x1="26" y1="18" x2="26" y2="1"></line>
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165c5b0b-line)" stroke-width="2" stroke-miterlimit="10" x1="38" y1="18" x2="38" y2="1"></line>
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165c5b0b-line)" stroke-width="2" stroke-miterlimit="10" x1="26" y1="63" x2="26" y2="46"></line>
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165c5b0b-line)" stroke-width="2" stroke-miterlimit="10" x1="38" y1="63" x2="38" y2="46"></line>
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165c5b0b-line)" stroke-width="2" stroke-miterlimit="10" x1="46" y1="26" x2="63" y2="26"></line>
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165c5b0b-line)" stroke-width="2" stroke-miterlimit="10" x1="46" y1="38" x2="63" y2="38"></line>
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165c5b0b-line)" stroke-width="2" stroke-miterlimit="10" x1="1" y1="26" x2="18" y2="26"></line>
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165c5b0b-line)" stroke-width="2" stroke-miterlimit="10" x1="1" y1="38" x2="18" y2="38"></line>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="icon-box-content">
                                                                                                    <div class="heading-wrap">
                                                                                                        <h3 class="heading">System Administration</h3>
                                                                                                    </div>
                                                                                                    <div class="description-wrap">
                                                                                                        <div class="description">
                                                                                                            Learners are encouraged to study the
                                                                                                            mechanism and structure of system
                                                                                                            administration. </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1903250 elementor-invisible" data-id="1903250" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;maxcoachFadeInUp&quot;}">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-550ad8c maxcoach-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-tm-icon-box" data-id="550ad8c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="tm-icon-box.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <a class="tm-icon-box maxcoach-box link-secret" data-vivus="{&quot;enable&quot;:&quot;yes&quot;,&quot;type&quot;:&quot;delayed&quot;,&quot;duration&quot;:120,&quot;play_on_hover&quot;:&quot;yes&quot;}" href="#">
                                                                                            <div class="icon-box-wrapper">
                                                                                                <div class="maxcoach-icon-wrap">
                                                                                                    <div class="maxcoach-icon-view first">
                                                                                                        <div class="maxcoach-icon-view-inner">
                                                                                                            <div class="maxcoach-icon icon maxcoach-svg-icon maxcoach-solid-icon">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" xml:space="preserve">
                                                                                                                    <g>
                                                                                                                        <rect x="1" y="10" fill="none" stroke="url(#svg-gradient632e9165c780b)" stroke-width="2" stroke-miterlimit="10" width="62" height="41"></rect>
                                                                                                                        <line fill="none" stroke="url(#svg-gradient632e9165c780b-line)" stroke-width="2" stroke-miterlimit="10" x1="22" y1="63" x2="42" y2="63">
                                                                                                                        </line>
                                                                                                                        <line fill="none" stroke="url(#svg-gradient632e9165c780b-line)" stroke-width="2" stroke-miterlimit="10" x1="32" y1="63" x2="32" y2="51">
                                                                                                                        </line>
                                                                                                                    </g>
                                                                                                                    <line fill="none" stroke="url(#svg-gradient632e9165c780b-line)" stroke-width="2" stroke-miterlimit="10" x1="1" y1="43" x2="64" y2="43"></line>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="icon-box-content">
                                                                                                    <div class="heading-wrap">
                                                                                                        <h3 class="heading">Graphic Design</h3>
                                                                                                    </div>
                                                                                                    <div class="description-wrap">
                                                                                                        <div class="description">
                                                                                                            Have a passion for graphics and arts? Show your talents with confidence and self-assertiveness.
                                                                                                        </div>
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
                                                        </section>
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-7f5cf3c elementor-section-gap-beside-no elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="7f5cf3c" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-extended">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2a4d15a" data-id="2a4d15a" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-ec11297 elementor-widget__width-auto maxcoach-shape-border-circle elementor-widget elementor-widget-tm-shapes" data-id="ec11297" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                                            <div class="shape"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-0a8f3f6 elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-widget elementor-widget-tm-shapes" data-id="0a8f3f6" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                                            <div class="shape"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-f064336 elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-widget elementor-widget-tm-shapes" data-id="f064336" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                                            <div class="shape"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-d8555d2 elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-widget elementor-widget-tm-shapes" data-id="d8555d2" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                                            <div class="shape"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-7dc6b55 elementor-invisible elementor-widget elementor-widget-image" data-id="7dc6b55" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;maxcoachFadeInUp&quot;}" data-widget_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img width="1118" height="449" src="<?= urlOf('assets/images/home-6-services-image.png') ?>" class="attachment-full size-full" alt="" loading="lazy" srcset="https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/home-6-services-image.png 1118w, https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/home-6-services-image-600x241.png 600w, https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/home-6-services-image-300x120.png 300w, https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/home-6-services-image-1024x411.png 1024w, https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/home-6-services-image-768x308.png 768w" sizes="(max-width: 1118px) 100vw, 1118px" />
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
                                <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-0248dc8 elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="0248dc8" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a89e0c" data-id="6a89e0c" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-31440bd elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-widget elementor-widget-tm-shapes" data-id="31440bd" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="register" class="elementor-element elementor-element-8117e1e elementor-widget__width-auto elementor-absolute maxcoach-shape-circle elementor-widget elementor-widget-tm-shapes" data-id="8117e1e" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="tm-shapes.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="maxcoach-shape maxcoach-shape-1-1">
                                                                    <div class="shape"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c71105a elementor-widget elementor-widget-tm-heading" data-id="c71105a" data-element_type="widget" data-widget_type="tm-heading.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-modern-heading">
                                                                    <div class="heading-primary-wrap">
                                                                        <h3 class="heading-primary elementor-heading-title"><mark>Government of Gujarat</mark></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f942e53 elementor-widget elementor-widget-tm-heading" data-id="f942e53" data-element_type="widget" data-widget_type="tm-heading.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-modern-heading">
                                                                    <div class="heading-primary-wrap">
                                                                        <h2 class="heading-primary elementor-heading-title">Want to Register your University ?</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-24f2c43 elementor-align-center elementor-widget elementor-widget-tm-button" data-id="24f2c43" data-element_type="widget" data-widget_type="tm-button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="tm-button-wrapper">
                                                                    <a href="<?= urlOf('assets/includes/university.php') ?>" class="tm-button-link tm-button style-flat tm-button-nm" role="button">
                                                                        <div class="button-content-wrapper">
                                                                            <span class="button-text">Register now</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.content-wrapper -->
<!-- <div id="page-footer-wrapper" class="page-footer-wrapper">
    <div class="page-footer elementor-footer" id="page-footer">
        <div data-elementor-type="footer" data-elementor-id="230" class="elementor elementor-230 elementor-location-footer" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-5f5a865 elementor-section-stretched elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="5f5a865" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-extended">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d838944" data-id="d838944" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-ffa4729 elementor-section-gap-beside-no elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="ffa4729" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ef58139" data-id="ef58139" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-ebb9667 elementor-widget elementor-widget-tm-heading" data-id="ebb9667" data-element_type="widget" data-widget_type="tm-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="tm-modern-heading">
                                                                            <div class="heading-primary-wrap">
                                                                                <h2 class="heading-primary elementor-heading-title"> Address</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-d949456 maxcoach-list-layout-block elementor-widget elementor-widget-tm-list" data-id="d949456" data-element_type="widget" data-widget_type="tm-list.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="maxcoach-list">
                                                                            <div class="item">
                                                                                <div class="link">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text">382 NE 191st St # 87394 Miami, FL 33179-3899
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="link">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text">+1 (305) 547-9909 (9am - 5pm EST, Monday - Friday)</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <a class="link" href="mailto:support@maxcoach.com">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text">
                                                                                                support@maxcoach.com
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-951635d elementor-widget elementor-widget-tm-social-networks" data-id="951635d" data-element_type="widget" data-widget_type="tm-social-networks.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="tm-social-networks style-large-icons layout-inline">
                                                                            <ul class="list">
                                                                                <li class="item">
                                                                                    <a class="link" aria-label="Facebook" href="#" target="_blank" rel="nofollow">
                                                                                        <i class="link-icon fab fa-facebook-square"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="item">
                                                                                    <a class="link" aria-label="Twitter" href="#" target="_blank" rel="nofollow">
                                                                                        <i class="link-icon fab fa-twitter"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="item">
                                                                                    <a class="link" aria-label="Instagram" href="#" target="_blank" rel="nofollow">
                                                                                        <i class="link-icon fab fa-instagram"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="item">
                                                                                    <a class="link" aria-label="Linkedin" href="#" target="_blank" rel="nofollow">
                                                                                        <i class="link-icon fab fa-linkedin"></i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-6834396 elementor-widget elementor-widget-spacer" data-id="6834396" data-element_type="widget" data-widget_type="spacer.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-spacer">
                                                                            <div class="elementor-spacer-inner">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-98c0950" data-id="98c0950" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-f280b51 elementor-widget elementor-widget-tm-heading" data-id="f280b51" data-element_type="widget" data-widget_type="tm-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="tm-modern-heading">
                                                                            <div class="heading-primary-wrap">
                                                                                <h2 class="heading-primary elementor-heading-title">
                                                                                    Explore</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-8a70cc5 maxcoach-list-layout-columns elementor-widget elementor-widget-tm-list" data-id="8a70cc5" data-element_type="widget" data-widget_type="tm-list.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="maxcoach-list">
                                                                            <div class="item">
                                                                                <a class="link" href="../start-here/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text">Start here</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="item">
                                                                                <a class="link" href="../success-story/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text">
                                                                                                Success story</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="item">
                                                                                <a class="link" href="../blog/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text">Blog
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="item">
                                                                                <a class="link" href="../courses/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text">
                                                                                                Courses</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="item">
                                                                                <a class="link" href="../about-us-01/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text">About us</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="item">
                                                                                <a class="link" href="../contact-us/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text"> Contact us</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-b3a42ee elementor-widget elementor-widget-spacer" data-id="b3a42ee" data-element_type="widget" data-widget_type="spacer.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-spacer">
                                                                            <div class="elementor-spacer-inner">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f1c275c" data-id="f1c275c" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-23c6898 elementor-widget elementor-widget-tm-heading" data-id="23c6898" data-element_type="widget" data-widget_type="tm-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="tm-modern-heading">
                                                                            <div class="heading-primary-wrap">
                                                                                <h2 class="heading-primary elementor-heading-title"> Information</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-a142cf1 maxcoach-list-layout-block elementor-widget elementor-widget-tm-list" data-id="a142cf1" data-element_type="widget" data-widget_type="tm-list.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="maxcoach-list">
                                                                            <div class="item">
                                                                                <a class="link" href="../membership-account/membership-levels/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text"> Membership</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="item">
                                                                                <a class="link" href="../purchase-guide/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text"> Purchase guide</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="item">
                                                                                <a class="link" href="../privacy-policy/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text"> Privacy policy</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="item">
                                                                                <a class="link" href="../terms-of-service/index.html">
                                                                                    <div class="list-header">
                                                                                        <div class="text-wrap">
                                                                                            <div class="text">Terms of services</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-6075580 elementor-widget elementor-widget-spacer" data-id="6075580" data-element_type="widget" data-widget_type="spacer.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-spacer">
                                                                            <div class="elementor-spacer-inner">
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
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-6b06bc0 elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default elementor-section-column-vertical-align-stretch" data-id="6b06bc0" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-407cef6" data-id="407cef6" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-43415b1 elementor-widget elementor-widget-tm-heading" data-id="43415b1" data-element_type="widget" data-widget_type="tm-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="tm-modern-heading">
                                                                            <div class="heading-description-wrap">
                                                                                <div class="heading-description"> &copy; 2021 CZMGC. All Rights Reserved </div>
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
                </section>
            </div>
        </div>
    </div>
</div> -->
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
<div id="woosw-area" class="woosw-area">
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
</div>
<!-- <div class="tm-demo-options-wrapper">
		<div class="tm-demo-options-toolbar">
			<a href="#" class="hint--bounce hint--left hint--black" id="toggle-quick-options" aria-label="Select Demo">
				<i class="far fa-ruler-triangle"></i>
			</a>
			<a href="https://thememove.ticksy.com/" target="_blank" rel="nofollow"
				class="hint--bounce hint--left hint--black" aria-label="Support Channel">
				<i class="far fa-life-ring"></i>
			</a>
			<a href="https://document.thememove.com/maxcoach/" target="_blank" rel="nofollow"
				class="hint--bounce hint--left hint--black" aria-label="Documentation">
				<i class="far fa-book"></i>
			</a>
			<a href="https://themeforest.net/item/maxcoach-online-courses-education-wp-theme/26051639" target="_blank"
				rel="nofollow" class="hint--bounce hint--left hint--black" aria-label="Purchase Maxcoach">
				<i class="far fa-shopping-cart"></i>
			</a>
		</div>
		<div id="tm-demo-panel" class="tm-demo-panel">
			<div class="tm-demo-panel-header">
				<h5 class="demo-option-title">
					MaxCoach - Online Learning and Education WordPress Theme </h5>


				<a class="tm-button style-flat tm-button-sm tm-button-primary tm-btn-purchase has-icon icon-left"
					href="https://themeforest.net/item/maxcoach-online-courses-education-wp-theme/26051639"
					target="_blank">
					<span class="button-icon">
						<i class="far fa-shopping-cart"></i>
					</span>
					<span class="button-text">
						Buy Now </span>
				</a>
			</div>

			<div class="quick-option-list">
				<a href="https://maxcoach.thememove.com/" class="hint--bounce hint--top" aria-label="Landing Page">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/landing-preview.jpg"
						alt="Landing Page" width="150" height="180">
				</a>
				<a href="../index.html" class="hint--bounce hint--top" aria-label="MaxCoach Education">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-01-preview.jpg"
						alt="MaxCoach Education" width="150" height="180">
				</a>
				<a href="../course-portal/index.html" class="hint--bounce hint--top" aria-label="Course Portal">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-02-preview.jpg"
						alt="Course Portal" width="150" height="180">
				</a>
				<a href="../distant-learning/index.html" class="hint--bounce hint--top" aria-label="Distant Learning">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-03-preview.jpg"
						alt="Distant Learning" width="150" height="180">
				</a>
				<a href="../multimedia-pedagogy/index.html" class="hint--bounce hint--top"
					aria-label="Multimedia Pedagogy">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-04-preview.jpg"
						alt="Multimedia Pedagogy" width="150" height="180">
				</a>
				<a href="../modern-schooling/index.html" class="hint--bounce hint--top" aria-label="Modern Schooling">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-05-preview.jpg"
						alt="Modern Schooling" width="150" height="180">
				</a>
				<a href="index.html" class="hint--bounce hint--top" aria-label="Remote Training">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-06-preview.jpg"
						alt="Remote Training" width="150" height="180">
				</a>
				<a href="../health-coaching/index.html" class="hint--bounce hint--top" aria-label="Health Coaching">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-health-coaching-preview.jpg"
						alt="Health Coaching" width="150" height="180">
				</a>
				<a href="../gym-coaching/index.html" class="hint--bounce hint--top" aria-label="Gym Coaching">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-gym-coaching-preview.jpg"
						alt="Gym Coaching" width="150" height="180">
				</a>
				<a href="../business/index.html" class="hint--bounce hint--top" aria-label="Business">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-business-preview.jpg"
						alt="Business" width="150" height="180">
				</a>
				<a href="../kitchen-coach/index.html" class="hint--bounce hint--top" aria-label="Kitchen Coach">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-kitchen-coach-preview.jpg"
						alt="Kitchen Coach" width="150" height="180">
				</a>
				<a href="../artist/index.html" class="hint--bounce hint--top" aria-label="Artist">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-artist-preview.jpg"
						alt="Artist" width="150" height="180">
				</a>
				<a href="../motivation/index.html" class="hint--bounce hint--top" aria-label="Motivation">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-motivation-preview.jpg"
						alt="Motivation" width="150" height="180">
				</a>
				<a href="../yoga/index.html" class="hint--bounce hint--top" aria-label="Yoga">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-yoga-preview.jpg" alt="Yoga"
						width="150" height="180">
				</a>
				<a href="../photography/index.html" class="hint--bounce hint--top" aria-label="Photography">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-photography-preview.jpg"
						alt="Photography" width="150" height="180">
				</a>
				<a href="../personal-finance/index.html" class="hint--bounce hint--top" aria-label="Personal Finance">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-personal-finance-preview.jpg"
						alt="Personal Finance" width="150" height="180">
				</a>
				<a href="../dancing/index.html" class="hint--bounce hint--top" aria-label="Dancing">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-dancing-preview.jpg"
						alt="Dancing" width="150" height="180">
				</a>
				<a href="../guitar/index.html" class="hint--bounce hint--top" aria-label="Guitar">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/home-guitar-preview.jpg"
						alt="Guitar" width="150" height="180">
				</a>
				<a href="https://maxcoach.thememove.com/rtl" class="hint--bounce hint--top" aria-label="RTL Demo">
					<img src="../wp-content/themes/maxcoach-child-demo/assets/images/rtl-demo-preview.jpg"
						alt="RTL Demo" width="150" height="180">
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
<!-- <div id="popup-try-live-demo" class="popup-try-live-demo hidden">
	<span id="popup-try-live-demo-close" class="popup-try-live-demo-close"><i class="far fa-times"></i></span>
	<h4 class="popup-try-live-demo-heading">Login &amp; For Admin</h4>
	<p class="popup-try-live-demo-description">sign up any accounts as admin</p>
	<form method="post" class="try-live-demo-form">
		<input type="hidden" id="maxcoach_live_login_nonce" name="maxcoach_live_login_nonce" value="19bb8bcc9c" /><input type="hidden" name="_wp_http_referer" value="/main/remote-training/" />
		<input type="hidden" name="action" value="maxcoach_live_login">
		<input type="hidden" name="type" value="student">
	</form>
	<div class="tm-button-wrapper">
		<a class="tm-button style-flat tm-button-nm login-as-student ajax-login" id="maxcoach-live-login-as-student" href="../profile/login.html">
			<div class="button-content-wrapper">
				<span class="button-text">Login as Admin</span>
			</div>
		</a>
	</div>
</div> -->
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
                    <img src="<?= urlOf('assets/images/dark-logo.png') ?>" alt="MaxCoach" width="158" />
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
<!-- <div data-elementor-type="popup" data-elementor-id="642" class="elementor elementor-642 elementor-location-popup"
		data-elementor-settings="{&quot;entrance_animation&quot;:&quot;maxcoachFadeInUp&quot;,&quot;exit_animation&quot;:&quot;fadeInDown&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;0.5&quot;,&quot;sizes&quot;:[]},&quot;triggers&quot;:{&quot;page_load_delay&quot;:1,&quot;page_load&quot;:&quot;yes&quot;},&quot;timing&quot;:{&quot;times&quot;:&quot;yes&quot;,&quot;times_times&quot;:3}}">
		<div class="elementor-section-wrap">
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-78f203a elementor-section-column-vertical-align-middle elementor-section-boxed elementor-section-gap-beside-yes elementor-section-height-default elementor-section-height-default"
				data-id="78f203a" data-element_type="section">
				<div class="elementor-container elementor-column-gap-extended">
					<div class="elementor-row">
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-79cf1d9 elementor-hidden-phone"
							data-id="79cf1d9" data-element_type="column">
							<div class="elementor-column-wrap elementor-element-populated">
								<div class="elementor-widget-wrap">
									<div class="elementor-element elementor-element-6822e46 elementor-widget elementor-widget-image"
										data-id="6822e46" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<div class="elementor-image">
												<img width="293" height="392"
													src="../wp-content/uploads/sites/1/2019/12/popup-free-course.png"
													class="attachment-full size-full" alt="" loading="lazy"
													srcset="https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/popup-free-course.png 293w, https://maxcoach.thememove.com/main/wp-content/uploads/sites/1/2019/12/popup-free-course-224x300.png 224w"
													sizes="(max-width: 293px) 100vw, 293px" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-34d7d21"
							data-id="34d7d21" data-element_type="column">
							<div class="elementor-column-wrap elementor-element-populated">
								<div class="elementor-widget-wrap">
									<div class="elementor-element elementor-element-fe69327 elementor-widget elementor-widget-tm-heading"
										data-id="fe69327" data-element_type="widget"
										data-widget_type="tm-heading.default">
										<div class="elementor-widget-container">
											<div class="tm-modern-heading">
												<div class="heading-secondary-wrap">
													<h3 class="heading-secondary elementor-heading-title">Get Our Course
														free</h3>
												</div>

												<div class="heading-primary-wrap">
													<h2 class="heading-primary elementor-heading-title">Awesome for
														Website</h2>
												</div>


											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-561cf44 elementor-mobile-button-align-start elementor-button-align-stretch elementor-widget elementor-widget-form"
										data-id="561cf44" data-element_type="widget"
										data-settings="{&quot;button_width_mobile&quot;:&quot;100&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
										data-widget_type="form.default">
										<div class="elementor-widget-container">
											<form class="elementor-form" method="post" name="Free Course Form">
												<input type="hidden" name="post_id" value="642" />
												<input type="hidden" name="form_id" value="561cf44" />
												<input type="hidden" name="referer_title" value="Remote Training" />

												<input type="hidden" name="queried_id" value="786" />

												<div class="elementor-form-fields-wrapper elementor-labels-">
													<div
														class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-pgfc_email elementor-col-fit">
														<label for="form-field-pgfc_email"
															class="elementor-field-label elementor-screen-only">Email</label><input
															size="1" type="text" name="form_fields[pgfc_email]"
															id="form-field-pgfc_email"
															class="elementor-field elementor-size-md  elementor-field-textual"
															placeholder="Your E-mail">
													</div>
													<div
														class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons elementor-sm-100">
														<button type="submit"
															class="elementor-button elementor-size-md">
															<span>
																<span class=" elementor-button-icon">
																</span>
																<span class="elementor-button-text">Download now</span>
															</span>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="elementor-element elementor-element-a22358f elementor-widget elementor-widget-tm-heading"
										data-id="a22358f" data-element_type="widget"
										data-widget_type="tm-heading.default">
										<div class="elementor-widget-container">
											<div class="tm-modern-heading">

												<div class="heading-primary-wrap">
													<div class="heading-primary elementor-heading-title"><span
															class="fal fa-lock-alt" style="margin-right: 4px;"></span>
														Your infomation will never be shared with any third party</div>
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
	</div> -->
<script>
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<link rel='stylesheet' id='elementor-post-3350-css' href='<?= urlOf('assets/css/post-3350.css') ?>' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css' href='<?= urlOf('assets/css/rs6.css') ?>' media='all' />
<style id='rs-plugin-settings-inline-css'>
    #rs-demo-id {}
</style>
<script src='<?= urlOf('assets/script/intersection-observer.min.js') ?>' id='intersection-observer-js'></script>
<script id='crisp-js-before'>
    window.$crisp = [];
    CRISP_RUNTIME_CONFIG = {
        locale: 'en'
    };
    CRISP_WEBSITE_ID = '3fce0e1c-47c5-4a97-86e3-240784452e73';
</script>
<script src='<?= urlOf('assets/script/l.js') ?>' id='crisp-js'></script>
<script src='<?= urlOf('assets/script/jquery.blockUI.min.js') ?>' id='jquery-blockui-js'></script>
<script id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "<?= urlOf('assets/ajax/admin-ajaxf809.html') ?>",
        "wc_ajax_url": "\/main\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/maxcoach.thememove.com\/main\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script src='<?= urlOf('assets/script/add-to-cart.min.js') ?>' id='wc-add-to-cart-js'></script>
<script src='<?= urlOf('assets/script/js.cookie.min.js') ?>' id='js-cookie-js'></script>
<script id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "<?= urlOf('assets/ajax/admin-ajaxf809.html') ?>",
        "wc_ajax_url": "\/main\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script src='<?= urlOf('assets/script/woocommerce.min.js') ?>' id='woocommerce-js'></script>
<script id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "<?= urlOf('assets/ajax/admin-ajaxf809.html') ?>",
        "wc_ajax_url": "\/main\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_174082dbe78158f5057202efb9e69314",
        "fragment_name": "wc_fragments_174082dbe78158f5057202efb9e69314",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script src='<?= urlOf('assets/script/cart-fragments.min.js') ?>' id='wc-cart-fragments-js'></script>
<script src='<?= urlOf('assets/script/core.min.js') ?>' id='jquery-ui-core-js'></script>
<script src='<?= urlOf('assets/script/underscore.min.js') ?>' id='underscore-js'></script>
<script id='wp-util-js-extra'>
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "<?= urlOf('assets/ajax/admin-ajaxf809.html') ?>"
        }
    };
    /* ]]> */
</script>
<script src='<?= urlOf('assets/script/wp-util.min.js') ?>' id='wp-util-js'></script>
<script src='<?= urlOf('assets/script/backbone.min.js') ?>' id='backbone-js'></script>
<script src='<?= urlOf('assets/script/jquery.plugin.min.js') ?>' id='wpems-countdown-plugin-js-js'></script>
<script id='wpems-countdown-js-js-extra'>
    /* <![CDATA[ */
    var WPEMS = {
        "gmt_offset": "0",
        "current_time": "Sep 24, 2022 05:11:00 +0000",
        "l18n": {
            "labels": ["Years", "Months", "Weeks", "Days", "Hours", "Minutes", "Seconds"],
            "labels1": ["Year", "Month", "Week", "Day", "Hour", "Minute", "Second"]
        },
        "ajaxurl": "<?= urlOf('assets/ajax/admin-ajaxf809.html') ?>",
        "something_wrong": "Something went wrong",
        "register_button": "15a3deacab"
    };
    /* ]]> */
</script>
<script src='<?= urlOf('assets/script/jquery.countdown.min.js') ?>' id='wpems-countdown-js-js'></script>
<script src='<?= urlOf('assets/script/events.js') ?>' id='wpems-frontend-js-js'></script>
<script src='<?= urlOf('assets/script/table-head-fixer.js') ?>' id='table-head-fixer-js'></script>
<script src='<?= urlOf('assets/script/perfect-scrollbar.jquery.min.js') ?>' id='perfect-scrollbar-js'></script>
<script src='<?= urlOf('assets/script/mouse.min.js') ?>' id='jquery-ui-mouse-js'></script>
<script src='<?= urlOf('assets/script/sortable.min.js') ?>' id='jquery-ui-sortable-js'></script>
<script id='woosc-frontend-js-extra'>
    /* <![CDATA[ */
    var woosc_vars = {
        "ajaxurl": "<?= urlOf('assets/ajax/admin-ajaxf809.html') ?>",
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
<script src='<?= urlOf('assets/script/ffrontend.js') ?>' id='woosc-frontend-js'></script>
<script id='woosw-frontend-js-extra'>
    /* <![CDATA[ */
    var woosw_vars = {
        "ajax_url": "<?= urlOf('assets/ajax/admin-ajaxf809.html') ?>",
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
<script src='<?= urlOf('assets/script/frontend.js') ?>' id='woosw-frontend-js'></script>
<script src='<?= urlOf('assets/script/headroom.min.js') ?>' id='headroom-js'></script>
<script src='<?= urlOf('assets/script/SmoothScroll.min.js') ?>' id='smooth-scroll-js'></script>
<script src='<?= urlOf('assets/script/lightgallery-all.min.js') ?>' id='lightgallery-js'></script>
<script src='<?= urlOf('assets/script/waypoints.min.js') ?>' id='elementor-waypoints-js'></script>
<script src='<?= urlOf('assets/script/jquery.smooth-scroll.min.js') ?>' id='jquery-smooth-scroll-js'></script>
<script src='<?= urlOf('assets/script/imagesloaded.min.js') ?>' id='imagesloaded-js'></script>
<script src='<?= urlOf('assets/script/swiper.min.js') ?>' id='swiper-js'></script>
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
<script src='<?= urlOf('assets/script/swiper-wrapper.js') ?>' id='maxcoach-swiper-wrapper-js'></script>
<script src='<?= urlOf('assets/script/jquery.matchHeight-min.js') ?>' id='matchheight-js'></script>
<script src='<?= urlOf('assets/script/isotope.pkgd.js') ?>' id='isotope-masonry-js'></script>
<script src='<?= urlOf('assets/script/packery-mode.pkgd.js') ?>' id='isotope-packery-js'></script>
<script src='<?= urlOf('assets/script/grid-layout.js') ?>' id='maxcoach-grid-layout-js'></script>
<script src='<?= urlOf('assets/script/jquery.smartmenus.min.js') ?>' id='smartmenus-js'></script>
<script src='<?= urlOf('assets/script/jquery.magnific-popup.js') ?>' id='magnific-popup-js'></script>
<script src='<?= urlOf('assets/script/nice-select.js') ?>' id='maxcoach-nice-select-js'></script>
<script id='maxcoach-script-js-extra'>
    /* <![CDATA[ */
    var $maxcoach = {
        "ajaxurl": "<?= urlOf('assets/ajax/admin-ajaxf809.html') ?>",
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
<script src='<?= urlOf('assets/script/main.js') ?>' id='maxcoach-script-js'></script>
<script src='<?= urlOf('assets/script/quantity-button.js') ?>' id='maxcoach-quantity-button-js'></script>
<script src='<?= urlOf('assets/script/woo.js') ?>' id='maxcoach-woo-js'></script>
<script src='<?= urlOf('assets/script/group-widget-carousel.js') ?>' id='maxcoach-group-widget-carousel-js'></script>
<script src='<?= urlOf('assets/script/jquery-numerator.min.js') ?>' id='jquery-numerator-js'></script>
<script src='<?= urlOf('assets/script/grid-query.js') ?>' id='maxcoach-grid-query-js'></script>
<script src='<?= urlOf('assets/script/widget-grid-post.js') ?>' id='maxcoach-widget-grid-post-js'></script>
<script src='<?= urlOf('assets/script/vivus.js') ?>' id='vivus-js'></script>
<script src='<?= urlOf('assets/script/widget-icon-box.js') ?>' id='maxcoach-widget-icon-box-js'></script>
<script src='<?= urlOf('assets/script/webpack-pro.runtime.min.js') ?>' id='elementor-pro-webpack-runtime-js'></script>
<script src='<?= urlOf('assets/script/webpack.runtime.min.js') ?>' id='elementor-webpack-runtime-js'></script>
<script src='<?= urlOf('assets/script/frontend-modules.min.js') ?>' id='elementor-frontend-modules-js'></script>
<script src='<?= urlOf('assets/script/jquery.sticky.min.js') ?>' id='elementor-sticky-js'></script>
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
<script src='<?= urlOf('assets/script/frontend.min.js') ?>' id='elementor-pro-frontend-js'></script>
<script src='<?= urlOf('assets/script/share-link.min.js') ?>' id='share-link-js'></script>
<script src='<?= urlOf('assets/script/dialog.min.js') ?>' id='elementor-dialog-js'></script>
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
            "id": 786,
            "title": "Remote%20Training%20%E2%80%93%20MaxCoach",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<script src='<?= urlOf('assets/script/ffrontend.min.js') ?>' id='elementor-frontend-js'></script>
<script src='<?= urlOf('assets/script/preloaded-elements-handlers.min.js') ?>' id='pro-preloaded-elements-handlers-js'></script>
<script src='<?= urlOf('assets/script/preloaded-modules.min.js') ?>' id='preloaded-modules-js'></script>
</body>

<!-- Mirrored from maxcoach.thememove.com/main/remote-training/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2022 05:14:10 GMT -->

</html>