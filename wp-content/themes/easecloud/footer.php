<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package EaseCloud
 * @subpackage EaseCloud
 * @since EaseCloud 1.0
 */
?>

</div><!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-footer' ) ); ?>
        <p>Copyright &copy; 2014 - 2015 All Rights Reserved. <a href="/" alt="佛山市逸云计算机科技有限公司 | Foshan Easecloud Computer Technology Co., Ltd.">逸云科技</a> &copy; 版权所有</p>
        <p><a href="http://www.miitbeian.gov.cn"><img class="footer-logo-miit" src="<?php echo get_template_directory_uri();?>/images/miit.jpg" alt="工信部备案号" /> 粤ICP备14056574号-1</a> &raquo; http://www.easecloud.cn</p>
    </div><!-- .site-info -->
</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
