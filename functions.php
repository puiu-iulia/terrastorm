<?php

  if (!isset($content_width)) {
    $content_width = 660;
  }

  function terrastorm_setup() {

    add_theme_support('automatic-fee-links');
    add_theme_support('title-tag');

  }

  // add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
  //
  // funtion enqueue_parent_styles() {
  //
  // }

  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
  register_nav_menus( array(
    'primary' => __( 'Main header menu', 'terrastormwp' ),
    'footer' => __(' Footer Menu', 'terrastormwp')
  ) );

  add_action('after_setup_theme', 'terrastorm_setup');

  function terrastorm_scripts() {

    /* add styles */
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');

    /* add scripts */

    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );

  }

  add_action('wp_enqueue_scripts', 'terrastorm_scripts');

  function new_excerpt_text() {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_text');

function featureText() {
  if( is_front_page() )  {
   the_field('header_text_front_page');
  } elseif ( is_home() || is_single()) {
    esc_html_e("TerraStorm Blog", "terrastormwp");
  } elseif( is_search() ) {
    _e("TerraStorm Blog");
    _e("<br>");
    printf(__('Search results for: %s', 'terrastormwp'), get_search_query());
  } elseif( is_404() ) {
    _e("Whoops, were a little lost<br>
    <em>Let's get back on track</em>");
  }
   else {
    _e("Fully Responsive<br> TerraStorm ThemeE<br> for Wordpress");
  }
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="py-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function add_footer_menu_class($classes, $item, $args) {
  if($args->theme_location == 'footer') {
    $classes[] = 'list-group-item';
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'add_footer_menu_class', 10, 3);
$args = array(
  'width' => 2600,
  'height' => 650,
  'default-image' => get_template_directory_uri() . '/images/lake.jpg',
  'uploads' => true
);
add_theme_support('custom-header', $args);

register_default_headers( array(
  'lake1' => array(
    'url' => get_template_directory_uri() . '/images/lake.jpg',
    'thumbnail_url' => get_template_directory_uri() . '/images/lake.jpg',
    'description' => __(' Lake 1 ')
  ),
  'lake2' => array(
    'url' => get_template_directory_uri() . '/images/lakebg2.jpg',
    'thumbnail_url' => get_template_directory_uri() . '/images/lakebg2.jpg',
    'description' => __(' Lake 2 ')
  ),
));


?>
