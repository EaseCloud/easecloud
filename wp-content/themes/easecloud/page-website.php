<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package EaseCloud
 * @subpackage EaseCloud
 * @since EaseCloud 1.0
 */
get_header()?>

    <div id="page-website">
        <div class="outer-wrapper">
            <div class="field-title">
                <div class="background-mask"><img class="background" src="<?php bloginfo('template_url'); ?>/images/website-header-background.png"></div>
                <img class="device" src="<?php bloginfo('template_url'); ?>/images/website-header-pic.png">
            </div>
            <div class="field-service inner-wrapper">
                <p class="title"><img class="title-icon" src="<?php bloginfo('template_url'); ?>/images/website-service-icon.png">服务流程</p>
                <div class="divider"></div>
                <ul class="works">
                    <li class="col-1">
                        <a href="javascript:;">
                            <img class="circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-1-1.png">
                            <img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-1.png">
                        </a>
                    </li>
                    <li class="col-2">
                        <a href="javascript:;">
                            <img class="circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-1-2.png">
                            <img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-2.png">
                        </a>
                    </li>
                    <li class="col-3">
                        <a href="javascript:;">
                            <img class="circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-1-3.png">
                            <img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-3.png">
                        </a>
                    </li>
                    <li class="col-4">
                        <a href="javascript:;">
                            <img class="circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-1-4.png">
                            <img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-4.png">
                        </a>
                    </li>
                    <li class="col-5">
                        <a href="javascript:;">
                            <img class="circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-1-5.png">
                            <img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/website-service-pic-5.png">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="field-price">
                <p class="title inner-wrapper"><img class="title-icon" src="<?php bloginfo('template_url'); ?>/images/website-service-icon.png">套餐价格</p>
                <div class="block-price">
                    <ul class="price inner-wrapper">
                    </ul>
                </div>
            </div>
            <div class="field-works-show inner-wrapper">
                <p class="title"><img class="title-icon" src="<?php bloginfo('template_url'); ?>/images/website-service-icon.png">案例展示</p>
                <div class="block-works-show">
                    <ul class="works col-1">
                        <li>
                            <a href="javascript:;"><img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/index-works-pic-2.png"></a>
                        </li>
                        <li>
                            <a href="javascript:;"><img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/index-works-pic-2.png"></a>
                        </li>
                        <li>
                            <a href="javascript:;"><img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/index-works-pic-2.png"></a>
                        </li>
                    </ul>
                    <ul class="works col-2">
                        <li>
                            <a href="javascript:;"><img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/index-works-pic-2.png"></a>
                        </li>
                        <li>
                            <a href="javascript:;"><img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/index-works-pic-2.png"></a>
                        </li>
                        <li>
                            <a href="javascript:;"><img class="sub-circle" src="<?php bloginfo('template_url'); ?>/images/index-works-pic-2.png"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();