<?php 

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function add_theme_scripts() {
	wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css');
	wp_enqueue_style('Ubuntu-css', 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700');

	wp_enqueue_style('Roboto-css', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=vietnamese');

	wp_enqueue_style('ion-icons', get_stylesheet_directory_uri() . '/css/ionicons.min.css',WPFORGE_VERSION);

	// wp_enqueue_style('slimmenu-css', get_stylesheet_directory_uri() . '/css/slimmenu.min.css',WPFORGE_VERSION);

	wp_enqueue_script('slimmenu-js', get_stylesheet_directory_uri() . '/js/jquery.slimmenu.min.js',WPFORGE_VERSION);

	wp_enqueue_script('theme-js', get_stylesheet_directory_uri() . '/js/theme.js',WPFORGE_VERSION);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function header_number_widget() {
    register_sidebar( array(
        'name' => __( 'Header Number', 'wp-forge-child' ),
        'id' => 'header-number',
        'description' => __( 'Displays widgets in the blog area as well as pages.', 'wp-forge' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
    ) );
}
add_action( 'widgets_init', 'header_number_widget' );

if ( ! function_exists('sermon_post_type') ) {

// Register Custom Post Type
function sermon_post_type() {

	$labels = array(
		'name'                  => 'Sermons',
		'singular_name'         => 'Sermon',
		'menu_name'             => 'Sermon',
		'name_admin_bar'        => 'Sermon',
		'archives'              => 'Sermon Archives',
		'attributes'            => 'Sermon Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Sermon',
		'description'           => 'Sermons',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'sermon', $args );

}
add_action( 'init', 'sermon_post_type', 0 );

}

// Short code
require_once('shortcodes/sermon_shortcode.php');
