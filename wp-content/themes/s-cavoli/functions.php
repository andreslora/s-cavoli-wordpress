<?php

/**
 * S-Cavoli functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package S-Cavoli
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function s_cavoli_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on S-Cavoli, use a find and replace
		* to change 's-cavoli' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('s-cavoli', get_template_directory() . '/languages');

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 's-cavoli'),
			'menu-2' => esc_html__('Secondary', 's-cavoli'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			's_cavoli_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 's_cavoli_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function s_cavoli_content_width()
{
	$GLOBALS['content_width'] = apply_filters('s_cavoli_content_width', 640);
}
add_action('after_setup_theme', 's_cavoli_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function s_cavoli_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 's-cavoli'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 's-cavoli'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 's_cavoli_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function s_cavoli_scripts()
{
	wp_enqueue_style('s-cavoli-swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), _S_VERSION);
	wp_enqueue_style('s-cavoli-icons', get_template_directory_uri() . '/css/icons/icons.css', array(), _S_VERSION);
	wp_enqueue_style('s-cavoli-style', get_template_directory_uri() . '/css/main.css', array(), _S_VERSION);
	wp_style_add_data('s-cavoli-style', 'rtl', 'replace');



	wp_enqueue_script('s-cavoli-swiper-bundle', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('s-cavoli-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 's_cavoli_scripts');

function get_theme_image_path($image)
{
	return get_template_directory_uri() . '/img/' . $image;
}

add_filter('wpcf7_autop_or_not', '__return_false');

class Primary_Walker_Nav_Menu extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = 'item-menu';
		if (in_array('current-menu-item', $classes)) {
			$classes[] = 'active';
		}
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		$output .= '<li' . $class_names . '>';
		$attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters('the_title', strtoupper($item->title), $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}

class Second_Walker_Nav_Menu extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		$output .= '<a href="' . $item->url . '">';
		$output .= '<i' . $class_names . '></i>';
		$output .= $args->link_before . apply_filters('the_title', strtoupper($item->title), $item->ID) . $args->link_after;
		$output .= '</a>';
	}
}

function get_header_classes()
{
	$classes = 'header-secondary';
	$pages_ids = [21, 56];
	if (is_front_page() || in_array(get_the_ID(), $pages_ids)) {
		$classes = '';
	}
	return $classes;
}

function check_active_project_taxonomy($term)
{
	if (is_tax('categoria', $term->slug)) {
		return 'active';
	}
	return '';
}

function get_taxonomy_permalink_by_slug($slug, $taxonomy)
{
	// Get the term object
	$term = get_term_by('slug', $slug, $taxonomy);

	// Check if the term exists and return its permalink
	if ($term) {
		return get_term_link($term);
	}

	// Return false if the term does not exist
	return false;
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
