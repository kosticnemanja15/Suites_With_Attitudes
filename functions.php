<?php

/**
 * WP_Ogitive functions and definitions
 *
 * @package WP_Ogitive
 */
if (!function_exists('wpog_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wpog_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on WP_Ogitive, use a find and replace
         * to change 'wpog' to the name of your theme in all the template files
         */
        load_theme_textdomain('wpog', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support( 'post-thumbnails' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'wpog'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */

        // add_theme_support( 'post-formats', array(
        // 	'aside', 'image', 'video', 'quote', 'link',
        // ) );
        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('wpog_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

endif; // wpog_setup
add_action('after_setup_theme', 'wpog_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wpog_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'wpog'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'wpog_widgets_init');



/**
 * Enqueue scripts and styles.
 */
function wpog_scripts() {

    wp_enqueue_style('wpog-bootstrapmincss', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('wpog-fontawesomecss', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('wpog-resetcss', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('wpog-defaultcss', get_template_directory_uri() . '/default.css' );
    wp_enqueue_style('wpog-sidrcss', get_template_directory_uri() . '/css/jquery.sidr.dark.min.css');
    wp_enqueue_style('wpog-slickcss', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style('wpog-slickthemecss', get_template_directory_uri() . '/css/slick-theme.css' );
    wp_enqueue_style('wpog-style', get_stylesheet_uri());
    wp_enqueue_style('wpog-responsivecss', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('wpog-customcss', get_template_directory_uri() . '/custom.css');

// wp_enqueue_script('script-jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', array(), '1.0.0', true);
wp_enqueue_script('script-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true);
// wp_enqueue_script('script-bootstrapmin', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
wp_enqueue_script('script-slickmin', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);
wp_enqueue_script('script-slick', get_template_directory_uri() . '/js/slick.js', array(), '1.0.0', true);
wp_enqueue_script('script-sidr', get_template_directory_uri() . '/js/jquery.sidr.min.js', array(), '', true);
wp_enqueue_script('script-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
wp_enqueue_script('script-custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);



    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=XXXXXXXX', array(), '3', true);
    wp_enqueue_script('google-map-init', get_template_directory_uri() . '/gmap/gmap.js', array('google-map', 'jquery'), '0.1', true);
}

add_action('wp_enqueue_scripts', 'wpog_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Google Fonts integration
 */
function child_styles() {
    if (!is_admin()) {

        // register styles
        wp_register_style('googlefont-montserrat', '//fonts.googleapis.com/css?family=Montserrat:300,400,600,700', array(), false, 'all');
        wp_register_style('googlefont-cormorantGaramond', '//fonts.googleapis.com/css?family=Cormorant+Garamond:400,500,700', array(), false, 'all');
        // wp_register_style('googlefont-robotocon', '//fonts.googleapis.com/css?family=Roboto+Condensed:400italic,400,300,700&subset=latin,latin-ext', array(), false, 'all');
        // wp_register_style('googlefont-robotosla', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,latin-ext', array(), false, 'all');
        // wp_register_style('googlefont-scada', '//fonts.googleapis.com/css?family=Scada:400italic,400,700&subset=latin,latin-ext', array(), false, 'all');
        // enqueue styles
        wp_enqueue_style('googlefont-montserrat');
        wp_enqueue_style('googlefont-cormorantGaramond');
        // wp_enqueue_style('googlefont-robotocon');
        // wp_enqueue_style('googlefont-robotosla');
        //wp_enqueue_style('googlefont-scada');
    }
}

add_action('wp_enqueue_scripts', 'child_styles');


/**
 * Load Custom Post Types and Taxonomies
 */
require get_template_directory() . '/inc/custom_post_types.php';
require get_template_directory() . '/inc/custom_taxonomies.php';

/**
 * Aktivacija thumbnailova i velicine
 */
add_theme_support('post-thumbnails');
//add_image_size( 'cat-thumb', 300, 200, true );


/**
 *
 * Aktivacija THEME OPTIONS kroz ACF
 *
 */
if (function_exists('acf_add_options_page')) {

    $page = acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'position' => '999',
        'icon_url' => 'dashicons-index-card',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Sidebar Settings',
        'menu_title' => 'Sidebar',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));
}


/**
 *
 * Brisanje nepotrebnih stvari iz titlova arhivnih strana
 *
 */
add_filter('get_the_archive_title', function ($title) {

    if (is_category()) {

        $title = single_cat_title('', false);
    } elseif (is_tag()) {

        $title = single_tag_title('', false);
    } elseif (is_archive()) {

        $title = post_type_archive_title('', false);
    } elseif (is_author()) {

        $title = '<span class="vcard">' . get_the_author() . '</span>';
    }

    return $title;
});


remove_action('shutdown', 'wp_ob_end_flush_all', 1); // Remove error

/**
 *
 * Sklanjanje emoji koda iz headera svih strana
 *
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
 *
 * Google maps api
 *
 */
function my_acf_init() {

    acf_update_setting('google_api_key', 'XXXXXXXX');
}

add_action('acf/init', 'my_acf_init');

/**
 *
 * Aktivacija google map api
 *
 */
function my_acf_google_map_api($api) {

    $api['key'] = 'XXXXXXXX';

    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 *
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length) {
    return 30;
}

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);


function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



