<?php

/* ========================================
* connect css and js
* ======================================== */
function customtheme_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'customtheme_script_enqueue');

/* ========================================
* for thumbnail
* ======================================== */
add_theme_support('post-thumbnails');
add_image_size( 'thumb-img', 509,300,true);

/* ========================================
* custom post type
* ======================================== */
function create_custom_post_type() {
    register_post_type( 'blog', [ 
        'labels' => [
            'name'          => 'blog', 
            'singular_name' => 'blog',   
            'all_items' => 'All blog', 
        ],
        'supports' => [
          'title', // post title
          'editor', // post content
          'thumbnail', // featured images
          'excerpt', // post excerpt
      ],
        'public'        => true, 
        'has_archive'   => true, 
        'taxonomies' => array( 'category', 'post_tag' ),
        'rewrite' => array('slug' => 'blog'),
    ]);
}
add_action( 'init', 'create_custom_post_type' );

/* ========================================
* custom navigation
* ======================================== */
function custom_nav_menu() {
    register_nav_menus(
      array(
        'new-nav-menu' => __( 'New Nav Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'custom_nav_menu' );


/* ========================================
* custom tab filter 
* ======================================== */
  function load_custom_scripts() {
    wp_enqueue_script('jquery-ui-core');// enqueue jQuery UI Core
    wp_enqueue_script('jquery-ui-tabs');// enqueue jQuery UI Tabs
}
 
add_action( 'wp_enqueue_scripts', 'load_custom_scripts' );
  
/* ========================================
* custom pagination
* ======================================== */
function pagination() {
  $allowed_tags = [
		'span' => [
			'class' => []
		],
		'a' => [
			'class' => [],
			'href' => [],
		]
	];

	$args = [
		'before_page_number' => '<span class="btn border border-secondary mr-2 mb-2">',
		'after_page_number' => '</span>',
	];

	printf( '<nav class="pagination clearfix">%s</nav>', wp_kses( paginate_links( $args ), $allowed_tags ) );
}
?>

