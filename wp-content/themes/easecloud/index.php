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

<div id="page-index">
    <div class="outer-wrapper">
        <div class="header-pic">
            <img class="cloud" src="<?php bloginfo('template_url'); ?>/images/index-header-layer-cloud.png">
            <img class="yellow" src="<?php bloginfo('template_url'); ?>/images/index-header-layer-yellow.png">
            <img class="device" src="<?php bloginfo('template_url'); ?>/images/index-header-device.png">
            <img class="text" src="<?php bloginfo('template_url'); ?>/images/index-header-text.png">
        </div>
        <div class="about-field inner-wrapper">
            <p class="title">关于我们</p>
            <img src="<?php bloginfo('template_url'); ?>/images/index-divider.png">
            <p class="corporation">佛山市逸云科技信息有限公司</p>
            <p class="text">逸云科技致力于网站建设和协同办公软件开发，以专业的技术为各企业单位，个人打造快速网站建设开发平台。<br>
            操作简单快捷，模版生动多样，收费合理实惠，是您打造个性化网站的利器！逸云科技坚持做有用的网站，<br>
            持续创新，追求实现客户的使用价值，为客户带来更好的体验，更有用的服务。</p>
            <p><a href="javascript:;" class="btn">了解更多</a></p>
        </div>
        <div class="business-field">
            <a href="javascript:;" class="out-round col-1"></a>
            <a href="javascript:;" class="out-round col-2"></a>
            <a href="javascript:;" class="out-round col-3"></a>
            <a href="javascript:;" class="out-round col-4"></a>
            <div class="divider"></div>
        </div>
        <div class="works-field inner-wrapper">
            <p class="title">案例亮点</p>
            <img src="<?php bloginfo('template_url'); ?>/images/index-divider.png">
            <p class="subtitle">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>
            <ul class="works">
                <li>
                    <a href="javascript:;"><div class="works-pic works-1"></div></a>
                    <div class="works-text">
                        <p class="works-title">经典案例</p>
                        <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><div class="works-pic works-2"></div></a>
                    <div class="works-text">
                        <p class="works-title">经典案例</p>
                        <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><div class="works-pic works-3"></div></a>
                    <div class="works-text">
                        <p class="works-title">经典案例</p>
                        <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><div class="works-pic works-4"></div></a>
                    <div class="works-text">
                        <p class="works-title">经典案例</p>
                        <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>
                    </div>
                </li>
            </ul>
            <ul class="works">
                <li>
                    <a href="javascript:;"><div class="works-pic works-5"></div></a>
                    <div class="works-text">
                        <p class="works-title">经典案例</p>
                        <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><div class="works-pic works-6"></div></a>
                    <div class="works-text">
                        <p class="works-title">经典案例</p>
                        <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><div class="works-pic works-7"></div></a>
                    <div class="works-text">
                        <p class="works-title">经典案例</p>
                        <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><div class="works-pic works-8"></div></a>
                    <div class="works-text">
                        <p class="works-title">经典案例</p>
                        <p class="works-detail">我们正在努力超越，以挑战者的精神进行创新，不断深化我们的专业知识。</p>
                    </div>
                </li>
            </ul>
            <p><a href="javascript:;" class="btn">更多例子</a></p>
        </div>
        <div class="info-field">
            <ul class="title-block">
                <li class="left">
                    <img class="logo" src="<?php bloginfo('template_url'); ?>/images/index-info-logo.png">
                    <p>相关资讯</p>
                    <a href="javascript:;" class="go-btn"><img src="<?php bloginfo('template_url'); ?>/images/index-info-btn.png"></a>
                </li>
                <li class="right">
                    <img class="logo" src="<?php bloginfo('template_url'); ?>/images/index-info-logo.png">
                    <p>热门推荐</p>
                    <a href="javascript:;" class="go-btn"><img src="<?php bloginfo('template_url'); ?>/images/index-info-btn.png"></a>
                </li>
            </ul>
            <div class="info-block">
                <ul>
                    <li class="left">
                        <p class="title">网络建设</p>
                        <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>
                    </li>
                    <li class="right">
                        <p class="title">网络建设</p>
                        <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>
                    </li>
                </ul>
                <ul>
                    <li class="left">
                        <p class="title">网络建设</p>
                        <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>
                    </li>
                    <li class="right">
                        <p class="title">网络建设</p>
                        <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>
                    </li>
                </ul>
                <ul>
                    <li class="left">
                        <p class="title">网络建设</p>
                        <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>
                    </li>
                    <li class="right">
                        <p class="title">网络建设</p>
                        <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>
                    </li>
                </ul>
                <ul>
                    <li class="left">
                        <p class="title">网络建设</p>
                        <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>
                    </li>
                    <li class="right">
                        <p class="title">网络建设</p>
                        <p class="detail">网站建设是指使用标识语言（markup language），通过一系列设计，建模，和执行的过程将电子格式的信息通过互联网[1]传输，最终以图形用户界面（GUI[2]）的形式被用户所浏览[...]</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="contacts-field">
            <a href="javascript:;"><img class="text" src="<?php bloginfo('template_url'); ?>/images/index-contacts-pic.png"></a>
        </div>
    </div>
</div>
<?php get_footer();