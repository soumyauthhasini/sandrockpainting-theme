<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Creative Theme
 */

/**
 *  Creative Theme only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
  require get_template_directory() . '/inc/back-compat.php';
  return;
}

if ( ! function_exists( 'cretive_theme_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function cretive_theme_setup() {



    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1568, 9999 );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(
      array(
        'menu-1' => __( 'Primary', 'creative_atsotaro' ),
        'footer' => __( 'Footer Menu', 'creative_atsotaro' ),
        'social' => __( 'Social Links Menu', 'creative_atsotaro' ),
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
        'script',
        'style',
        'navigation-widgets',
      )
    );

  }
endif;

// Woo Support Hook
  // if ( class_exists( 'WooCommerce' ) ){
  //   add_theme_support( 'woocommerce' );
  //   add_theme_support( 'wc-product-gallery-zoom' );
  //   add_theme_support( 'wc-product-gallery-lightbox' );
  //   add_theme_support( 'wc-product-gallery-slider' );
  // }




add_action( 'after_setup_theme', 'cretive_theme_setup' );

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
if( get_theme_mod('custom_field_checkbox') == 1){
  require get_template_directory() . '/acf.php';
}
// require get_template_directory() . '/inc/creative-customizer.php';
// require get_template_directory() . '/inc/enque-style-script.php';
// require get_template_directory() . '/inc/add_meta_hook.php';
// require get_template_directory() . '/inc/woo-mail-function.php';
// if( get_theme_mod('custom_creative_plugin') != 1){
//   require get_template_directory() . '/inc/require-plugin.php';
// }






// function creative_theme_widgets_init() {

//   register_sidebar(
//     array(
//       'name'          => __( 'Footer', 'creative_atsotaro' ),
//       'id'            => 'sidebar-1',
//       'description'   => __( 'Add widgets here to appear in your footer.', 'creative_atsotaro' ),
//       'before_widget' => '<section id="%1$s" class="widget %2$s">',
//       'after_widget'  => '</section>',
//       'before_title'  => '<h2 class="widget-title">',
//       'after_title'   => '</h2>',
//     )
//   );

//   register_sidebar(
//     array(
//       'name'          => __( 'Shop Sidebar', 'creative_atsotaro' ),
//       'id'            => 'sidebar-shop-archiv',
//       'description'   => __( 'Add widgets here to appear in your footer.', 'creative_atsotaro' ),
//       'before_widget' => '<section id="%1$s" class="widget %2$s">',
//       'after_widget'  => '</section>',
//       'before_title'  => '<h2 class="widget-title">',
//       'after_title'   => '</h2>',
//     )
//   );

// }
// add_action( 'widgets_init', 'creative_theme_widgets_init' );




// add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
//   function jk_related_products_args( $args ) {
//   $args['posts_per_page'] = 8; // 4 related products
//   $args['columns'] = 4; // arranged in 2 columns
//   return $args;
// }


// function pippin_get_image_alt($image_url) {
//   global $wpdb;
//   $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url ));  
//   $alt = get_post_meta ( $attachment[0], '_wp_attachment_image_alt', true );
//    return $alt;
// }


// // Disables the block editor from managing widgets in the Gutenberg plugin.
// add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// // Disables the block editor from managing widgets.
// add_filter( 'use_widgets_block_editor', '__return_false' );


//   // CopyRight Year Shortcode
  
//    function custom_current_year () {
//     $year = date_i18n ('Y');
//     return $year;
//   }
//   add_shortcode ('copyright_year', 'custom_current_year');

//   // Shortcode Support on Mail message box

//   add_filter( 'wpcf7_mail_components', function( $components ){
//     $components['body'] = do_shortcode( $components['body'] );
//     return $components;
//   } );
  
  function add_custom_taxonomies_and_post_types() {
  	// Register the theme settings page
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page([
			'page_title'  => 'Theme Global Settings',
			'menu_title'  => 'Theme Settings',
			'menu_slug'   => 'theme-global-settings',
			'capability'  => 'edit_posts',
			'redirect'    => false
		]);
	}
  }
  add_action('init', 'add_custom_taxonomies_and_post_types', 0);


// function custom_nav_menu_li_class($classes, $item, $args) {
//     if (isset($args->li_class)) {
//         $classes[] = $args->li_class;
//     }
//     return $classes;
// }
// add_filter('nav_menu_css_class', 'custom_nav_menu_li_class', 10, 3);

// function custom_nav_menu_link_class($atts, $item, $args) {
//     if (isset($args->link_class)) {
//         $atts['class'] = $args->link_class;
//     }
//     return $atts;
// }
// add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_class', 10, 3);

function custom_nav_menu_li_class($classes, $item, $args) {

    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    // Parent menu with children
    if (in_array('menu-item-has-children', $classes)) {
        $classes[] = 'dropdown';
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'custom_nav_menu_li_class', 10, 3);

function custom_nav_menu_link_class($atts, $item, $args) {

    $classes = $item->classes;

    // Parent dropdown
    if (in_array('menu-item-has-children', $classes)) {
        $atts['class'] = 'nav-link dropdown-toggle';
        $atts['data-bs-toggle'] = 'dropdown';
        $atts['aria-expanded'] = 'false';
        $atts['role'] = 'button';
    }
    // Submenu link
    elseif ($item->menu_item_parent) {
        $atts['class'] = 'dropdown-item';
    }
    // Normal menu
    else {
        $atts['class'] = 'nav-link';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_class', 10, 3);

function bootstrap_submenu_class($classes, $args, $depth) {
    $classes = ['dropdown-menu'];
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'bootstrap_submenu_class', 10, 3);


// ------------------------------------- Custom Function Soumya -------------------------------

function customCta($ctaArgs, $class) {
    if($ctaArgs['url'] != ''){
        $cta = '<a href="'.$ctaArgs['url'].'" target="'.$ctaArgs['target'].'" class="'.$class.'">'.$ctaArgs['title'].'</a>';
    }
    return $cta;
}
