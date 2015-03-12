<?php
/**
 * EaseCloud functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package EaseCloud
 * @subpackage EaseCloud
 * @since EaseCloud 1.0
 */

/**
 * 配置初始化
 */
if ( ! function_exists( 'template_setup' ) ) {

    function template_setup() {

        if ( ! isset( $content_width ) ) $content_width = 1000;

        // Enable support for Post Thumbnails, and declare two sizes.
        add_theme_support( 'post-thumbnails' );
        //set_post_thumbnail_size( 672, 372, true );
        //add_image_size( 'image-full-width', 1038, 576, true );
        //add_image_size('index-thumbnail', 282, 240, true);

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary'   => __( '主菜单栏', 'easecloud' ),
            'secondary' => __( '侧边菜单栏', 'easecloud' ),
            'footer' => __( '底部菜单栏', 'easecloud' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        /**
         * Enable admin bar for all users when logged in.
         * The default behavior is show only for administrators.
         */
        add_filter( 'show_admin_bar', 'is_user_logged_in' );

    }
}
add_action( 'after_setup_theme', 'template_setup' );


/**
 * 过滤优化 wp_title 的显示
 */
function theme_wp_title( $title, $sep ) {

    global $paged, $page;

    if ( is_feed() ) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo( 'name', 'display' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 ) {
        $title = "$title $sep " . sprintf('第%s页', max( $paged, $page ) );
    }

    return $title;
}
add_filter( 'wp_title', 'theme_wp_title', 10, 2 );


/**
 * 载入 script 和 stylesheet
 */
function template_scripts() {

    // Load reset stylesheet.
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/cssreset-min.css', array() );

    // Load our main stylesheet.
    wp_enqueue_style( 'template-style', get_stylesheet_uri(), array('reset'), '' );

    // Load dashicons
    wp_enqueue_style( 'dashicons-css', '/wp-includes/css/dashicons.min.css', array('template-style'), '4.1.1' );

    // Load font-awesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css', array('reset'), '4.0.3' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'template-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20140909', true );

}
add_action( 'wp_enqueue_scripts', 'template_scripts' );


/**
 * 添加浏览器标识的，在 body class 里面加入 ua-pc / ua-mobile / lang-[locale] / ua-ie-lte8 等 html class
 * @param $classes: 之前处理生成的 class 列表
 * @return array: 处理之后生成的 class 列表
 */
function add_ua_body_class($classes) {
    $classes []= wp_is_mobile() ? 'ua-mobile' : 'ua-pc';
    $classes []= 'lang-'.get_locale();
    if(preg_match('/MSIE\s[678]/', $_SERVER['HTTP_USER_AGENT'])) $classes[]= 'ua-ie-lte8';
    return $classes;
}
add_filter('body_class', 'add_ua_body_class');


/**
 * 为 body class 添加 page-[slug], single-[class] 等等 html class
 * @param $classes: 之前处理生成的 class 列表
 * @return array: 处理之后生成的 class 列表
 */
function add_page_name_body_class($classes) {
    if(is_page()) {
        global $post;
        $classes []= 'page-'.$post->post_name;
    }
    if(is_single()) {
        global $post;
        $classes []= 'single-'.$post->post_name;
    }
    if(is_category()) {

    }
    return $classes;
}
add_filter('body_class', 'add_page_name_body_class');


/**
 * 获取指定分类下的文章列表，直接输出缓冲区
 * @param $cat
 * @param int $count
 * @param bool $with_date
 * @param bool $random
 */
function post_list_by_category($cat, $count=10, $with_date=false, $random=false) {
    // 如果传入的 category 不是数字，则当它是别名来处理：
    if(is_string($cat)) $cat = get_category_by_slug($cat)->term_id;
    // 选取参数
    $args = array(
        'posts_per_page' => $count,
        'category' => $cat,
    );
    if($random == true) $args['orderby'] = 'rand';
    ?><ul class="post-list<?php echo $with_date?' with-date':''?>"><?php
    foreach(get_posts($args) as $post) {
        if(!$count--) break; // 条数限制
        ?><li>
        <?php if($with_date) {?>
            <span class="list-item-date">[<?php echo date('m-d', strtotime($post->post_date))?>]</span>
        <?php }?>
        <a href="<?php echo get_permalink($post); ?>"><?php echo $post->post_title?></a>
        </li><?php
    }
    ?></ul><?php
}


/**
 * 获取分类的 more 更多链接，链接到对应的分类目录页面（直接输出缓冲）
 * @param mixed $cat
 */
function more_tag_by_category($cat) {
    ?><a class="more" href="<?php echo home_url()?>/category/<?php echo $cat?>">更多 &raquo;</a><?php
}


/**
 * 为编辑器添加调整字号的按钮
 * @param $buttons
 * @return array
 */
function enable_more_buttons($buttons) {
    $buttons[] = 'hr'; $buttons[] = 'fontselect';
    $buttons[] = 'fontsizeselect';
    return $buttons;
}
add_filter("mce_buttons_3", "enable_more_buttons");


/**
 * 动态化 siteurl，输入什么就固定什么，不作跳转
 * @param $val
 * @return string
 */
function replace_siteurl($val) {
    return 'http://'.$_SERVER['HTTP_HOST'];
}
add_filter('option_siteurl', 'replace_siteurl');
add_filter('option_home', 'replace_siteurl');

function replace_template_uri($template_uri) {
    return get_site_url().'/wp-content/themes';
}
add_filter('theme_root_uri', 'replace_template_uri');