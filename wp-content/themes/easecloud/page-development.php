<?php
/**
 * The template for displaying pages
 *
 * 软件开发页面
 *
 * @package EaseCloud
 * @subpackage EaseCloud
 * @since EaseCloud 1.0
 */

get_header(); ?>

<div class="banner">

</div>

<div class="wrapper">

    <section id="develop-summary">
        <h2><span class="dashicons dashicons-admin-site"></span> 服务简介</h2>
        <div class="section-content">
            <p>逸云科技专注于最前沿的计算机与互联网技术，专业为。</p>
        </div>
    </section>

    <section id="develop-summary">
        <h2><span class="dashicons dashicons-awards"></span> 专注领域</h2>

    </section>

    <section id="technology-stack">
        <h2><span class="dashicons dashicons-clipboard"></span> 技术栈</h2>
        <ul class="tech-items">
            <?php for($i = 0; $i < 20; $i++) {?>
            <li>
                <a href="javascript:;">
                    <img src="<?php echo get_template_directory_uri().'/';?>images/logo-django.svg" />
                    <div class="tech-summary">
                        <p>Django 是 Python 语言的第一大 MVC 框架。</p>
                    </div>
                </a>
            </li>
            <?php }?>
        </ul>
    </section>
</div>

<?php get_footer(); ?>