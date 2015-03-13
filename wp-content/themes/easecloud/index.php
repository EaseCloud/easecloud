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

<div class="banner">
    <div class="layer cloud"></div>
    <div class="layer stripe"></div>
    <div class="layer devices"></div>
    <div class="wrapper">
        <img class="slogan-1" src="<?php echo get_template_directory_uri().'/'; ?>images/slogan-1.png" />
        <img class="slogan-2" src="<?php echo get_template_directory_uri().'/'; ?>images/slogan-2.png" />
        <img class="cloud-icon" src="<?php echo get_template_directory_uri().'/'; ?>images/cloud-icon.png" />
    </div>
</div>
<section class="index-about">

    <img class="logo-background" src="<?php echo get_template_directory_uri().'/'; ?>images/logo-512.png" />

    <h1>
        <span class="dashicons dashicons-groups"></span>
        关于我们
    </h1>

    <div class="about-content">

        <h2>佛山市逸云计算机科技有限公司</h2>
        <p>
            逸云科技立足技术前沿，致力于计算机和互联网领域的开发创新，
            以专业的技术团队为广大企业及个人提供多层次的技术支持服务。
        </p>

        <h3>卓尔不凡·悠逸云端</h3>

        <p>
            逸云科技坚持不懈创新，置身于最先进的技术潮流，携您进入互联网时代的云端，
            为您提供更轻松的工作环境和更优质的生活体验。
        </p>

    </div>
</section>
<!--<div class="business-field">-->
<!--    <a href="javascript:;" class="out-round col-1"></a>-->
<!--    <a href="javascript:;" class="out-round col-2"></a>-->
<!--    <a href="javascript:;" class="out-round col-3"></a>-->
<!--    <a href="javascript:;" class="out-round col-4"></a>-->
<!--    <div class="divider"></div>-->
<!--</div>-->
<!--<div class="works-field inner-wrapper">-->
<!--    <p class="title">案例亮点</p>-->
<!--    <img src="--><?php //bloginfo('template_url'); ?><!--/images/index-divider.png">-->
<!--    <p class="subtitle">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>-->
<!--    <ul class="works">-->
<!--        <li>-->
<!--            <a href="javascript:;"><div class="works-pic works-1"></div></a>-->
<!--            <div class="works-text">-->
<!--                <p class="works-title">经典案例</p>-->
<!--                <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="javascript:;"><div class="works-pic works-2"></div></a>-->
<!--            <div class="works-text">-->
<!--                <p class="works-title">经典案例</p>-->
<!--                <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="javascript:;"><div class="works-pic works-3"></div></a>-->
<!--            <div class="works-text">-->
<!--                <p class="works-title">经典案例</p>-->
<!--                <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="javascript:;"><div class="works-pic works-4"></div></a>-->
<!--            <div class="works-text">-->
<!--                <p class="works-title">经典案例</p>-->
<!--                <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>-->
<!--            </div>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <ul class="works">-->
<!--        <li>-->
<!--            <a href="javascript:;"><div class="works-pic works-5"></div></a>-->
<!--            <div class="works-text">-->
<!--                <p class="works-title">经典案例</p>-->
<!--                <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="javascript:;"><div class="works-pic works-6"></div></a>-->
<!--            <div class="works-text">-->
<!--                <p class="works-title">经典案例</p>-->
<!--                <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="javascript:;"><div class="works-pic works-7"></div></a>-->
<!--            <div class="works-text">-->
<!--                <p class="works-title">经典案例</p>-->
<!--                <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="javascript:;"><div class="works-pic works-8"></div></a>-->
<!--            <div class="works-text">-->
<!--                <p class="works-title">经典案例</p>-->
<!--                <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>-->
<!--            </div>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <p><a href="javascript:;" class="btn">更多例子</a></p>-->
<!--</div>-->
<!--<div class="info-field">-->
<!--    <ul class="title-block">-->
<!--        <li class="left">-->
<!--            <img class="logo" src="--><?php //bloginfo('template_url'); ?><!--/images/index-info-logo.png">-->
<!--            <p>相关资讯</p>-->
<!--            <a href="javascript:;" class="go-btn"><img src="--><?php //bloginfo('template_url'); ?><!--/images/index-info-btn.png"></a>-->
<!--        </li>-->
<!--        <li class="right">-->
<!--            <img class="logo" src="--><?php //bloginfo('template_url'); ?><!--/images/index-info-logo.png">-->
<!--            <p>热门推荐</p>-->
<!--            <a href="javascript:;" class="go-btn"><img src="--><?php //bloginfo('template_url'); ?><!--/images/index-info-btn.png"></a>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <div class="info-block">-->
<!--        <ul>-->
<!--            <li class="left">-->
<!--                <p class="title">网络建设</p>-->
<!--                <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>-->
<!--            </li>-->
<!--            <li class="right">-->
<!--                <p class="title">网络建设</p>-->
<!--                <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <ul>-->
<!--            <li class="left">-->
<!--                <p class="title">网络建设</p>-->
<!--                <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>-->
<!--            </li>-->
<!--            <li class="right">-->
<!--                <p class="title">网络建设</p>-->
<!--                <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <ul>-->
<!--            <li class="left">-->
<!--                <p class="title">网络建设</p>-->
<!--                <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>-->
<!--            </li>-->
<!--            <li class="right">-->
<!--                <p class="title">网络建设</p>-->
<!--                <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <ul>-->
<!--            <li class="left">-->
<!--                <p class="title">网络建设</p>-->
<!--                <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>-->
<!--            </li>-->
<!--            <li class="right">-->
<!--                <p class="title">网络建设</p>-->
<!--                <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="contacts-field">-->
<!--    <a href="javascript:;"><img class="text" src="--><?php //bloginfo('template_url'); ?><!--/images/index-contacts-pic.png"></a>-->
<!--</div>-->

<script>
jQuery(function($) {
    $(window).scroll(function() {
        var $banner_devices = $('.banner .devices');
        var $banner_stripe = $('.banner .stripe');
        $banner_devices.css('top', pageYOffset * 0.3).css('opacity', Math.max(0, (480 - pageYOffset) / 400));
        $banner_stripe.css('top', -pageYOffset * 0.25);
    });
});
</script>

<?php get_footer();