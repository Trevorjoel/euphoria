<?php
/**
 * euphoria functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package euphoria
 */

if (! function_exists('euphoria_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
    function euphoria_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on euphoria, use a find and replace
         * to change 'euphoria' to the name of your theme in all the template files.
         */
        load_theme_textdomain('euphoria', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'euphoria'),
        ));
    /*
    * Setup navwalker bootstrap navbar integration

        /* Theme setup */
        add_action('after_setup_theme', 'wpt_setup');
        if (! function_exists('wpt_setup')) :
            function wpt_setup()
            {
                register_nav_menu('primary', __('Primary navigation', 'wptuts'));
            }
        endif;

        /* Register bootstrap and JQ
        */

        function wpt_register_js()
        {
            wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
            wp_enqueue_script('jquery.bootstrap.min');
        }
        add_action('init', 'wpt_register_js');
        function wpt_register_css()
        {
                wp_register_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
                wp_enqueue_style('bootstrap.min');
        }
        add_action('wp_enqueue_scripts', 'wpt_register_css');


        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

            // Set up the WordPress core custom background feature.
            add_theme_support('custom-background', apply_filters('euphoria_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
            )));

            // Add theme support for selective refresh for widgets.
            add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'euphoria_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function euphoria_content_width()
{
    $GLOBALS['content_width'] = apply_filters('euphoria_content_width', 640);
}
add_action('after_setup_theme', 'euphoria_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function euphoria_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'euphoria'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'euphoria'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'euphoria_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function euphoria_scripts()
{
    wp_enqueue_style('euphoria-style', get_stylesheet_uri());

    wp_enqueue_script('euphoria-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('euphoria-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'euphoria_scripts');

/* Custom image sizes */
add_image_size('news-thumbnail', 922, 468, true);


/**
 * Filter the "read more" excerpt string link to the post.
 *
 *
 */
function wpdocs_excerpt_more($more)
{
    return sprintf(
        '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink(get_the_ID()),
        __('....Read More....', 'textdomain')
    );
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
