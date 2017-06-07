<?php 

// Get other template files

require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/custom-post-type.php';
require get_template_directory() . '/inc/ajax.php';




//css styles
function portfolio_theme_styles() {
	
	
	 wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

	
	 wp_enqueue_style( 'portfolio_css', get_template_directory_uri() . '/style.css' );

  
}
add_action( 'wp_enqueue_scripts', 'portfolio_theme_styles');

function portfolio_theme_js() {
	 
	wp_enqueue_script( 'portfolio', get_template_directory_uri() . '/js/portfolio.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.js', array('jquery'), '1.0.0', true );
	
  	  wp_enqueue_script( 'jquery' );
	  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'masonry' );
	wp_enqueue_script( 'masonry', '//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.2/masonry.pkgd.js' );
	
	
	
	  //wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery') );
	

}
add_action( 'wp_enqueue_scripts', 'portfolio_theme_js');


//add theme support
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('post-formats', array('aside','image','video','audio', 'quote', 'link', 'gallery',));

/// register template types


///theme menus

function portfolio_register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
    )
  );
}

add_action( 'init', 'portfolio_register_theme_menus');



///Custom Post fields


function portfolio_custom_post_type() {
	
	$labels = array(
	'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items Found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon'			=> 'dashicons-portfolio',
		'supports' => array(
			'title',
			'editor',
			'content',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio',$args);
	
	
}
add_action('init','portfolio_custom_post_type');





// Custom post type for quotes

function testimony_custom_post_type() {
	
	$labels = array(
	'name' => 'Testimony',
		'singular_name' => 'Testimony',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Testimony',
		'not_found' => 'No items Found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon'			=> 'dashicons-format-quote',
		'supports' => array(
			'title',
			'editor',
			'content',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 7,
		'exclude_from_search' => false
	);
	register_post_type('testimony',$args);
	
	
}
add_action('init','testimony_custom_post_type');

/// custom taxonomies

function portfolio_custom_taxonomies() {
	$labels = array(
		'name' => 'Fields',
		'singular_name' => 'Fields',
		'search_items'=> 'Search Fields',
		'all_items' => 'All Items',
		'parent_items' => 'Parent Fields',
		'parent_item_colon' => 'Parent Fields:',
		'edit_item' => 'Edit Fields',
		'update_item' => 'Update Fields',
		'add_new_item' => 'Add New Item',
		'new_item_name' => 'New Fields Name',
		'menu_name' => 'Fields',
		
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'Fields'),
		
	);
	
	register_taxonomy('fields', array('portfolio'), $args);
	
}

add_action('init', 'portfolio_custom_taxonomies');


/*************** Numeric post for blog*************************/

function wpbeginner_numeric_posts_nav() {



	if( is_singular() )

		return;



	global $wp_query;



	/** Stop execution if there's only 1 page */

	if( $wp_query->max_num_pages <= 1 )

		return;



	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

	$max   = intval( $wp_query->max_num_pages );



	/**	Add current page to the array */

	if ( $paged >= 1 )

		$links[] = $paged;



	/**	Add the pages around the current page to the array */

	if ( $paged >= 3 ) {

		$links[] = $paged - 1;

		$links[] = $paged - 2;

	}



	if ( ( $paged + 2 ) <= $max ) {

		$links[] = $paged + 2;

		$links[] = $paged + 1;

	}



	echo '<div class="navigation"><ul>' . "\n";



	/**	Previous Post Link */

	if ( get_previous_posts_link() )

		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );



	/**	Link to first page, plus ellipses if necessary */

	if ( ! in_array( 1, $links ) ) {

		$class = 1 == $paged ? ' class="active"' : '';



		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );



		if ( ! in_array( 2, $links ) )

			echo '<li>…</li>';

	}



	/**	Link to current page, plus 2 pages in either direction if necessary */

	sort( $links );

	foreach ( (array) $links as $link ) {

		$class = $paged == $link ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );

	}



	/**	Link to last page, plus ellipses if necessary */

	if ( ! in_array( $max, $links ) ) {

		if ( ! in_array( $max - 1, $links ) )

			echo '<li>…</li>' . "\n";



		$class = $paged == $max ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );

	}



	/**	Next Post Link */

	if ( get_next_posts_link() )

		printf( '<li>%s</li>' . "\n", get_next_posts_link() );



	echo '</ul></div>' . "\n";



}



add_action('init', 'wpbeginner_numeric_posts_nav');


/******* Register Widget Links **********/
/*function portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Sidebar widget areas for blog', 'portfolio' ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2><div class="kt-smart-divider"></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Instagram', 'portfolio' ),
		'id'            => 'footer-a',
		'description'   => esc_html__('Instagram Widget Area', 'portfolio'),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'portfolio_widgets_init' );
*/
function hedmark_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hedmark' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Sidebar widget areas for blog', 'hedmark' ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2><div class="kt-smart-divider"></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Instagram', 'hedmark' ),
		'id'            => 'footer-a',
		'description'   => esc_html__('Instagram Widget Area', 'hedmark'),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hedmark_widgets_init' );








include_once( get_template_directory() . '/widgets/kt-about-me.php' );
include_once( get_template_directory() . '/widgets/kt-social.php' );
include_once( get_template_directory() . '/widgets/kt-latest-posts.php' );
include_once( get_template_directory() . '/widgets/kt-image-banner.php' );
include_once( get_template_directory() . '/widgets/kt-code-banner.php' );
include_once( get_template_directory() . '/widgets/kt-facebook-like.php' );


include_once( get_template_directory() . '/inc/kt-user-fields.php' );
include_once( get_template_directory() . '/inc/register-scripts.php' );
include_once( get_template_directory() . '/inc/theme-options.php' );



/** 
Category 
**/


function hedmark_category(){
	
	global $hedmark_option;
	
	// Category Name
	
	echo '<span class="entry-category">'; the_category(', '); echo '</span>';
        
}

/**
===================================
  Get The First Image From a Post
 ==================================
**/
function hedmark_first_post_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	if( preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches ) ){
		$first_img = $matches[1][0];
		return $first_img;
	}
}


// Excerpt Length
function hedmark_excerpt_length( $length ) {
	global $hedmark_option;
	return $hedmark_option['hedmark_excerpt'];
}
add_filter( 'excerpt_length', 'hedmark_excerpt_length' );



/**
===================================
  Get The First Image From a Post
 ==================================
**/
function portfolio_first_post_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	if( preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches ) ){
		$first_img = $matches[1][0];
		return $first_img;
	}
}

// Excerpt Length


function portfolio_excerpt_length( $length ) {
	global $hedmark_option;
	return $hedmark_option['portfolio_excerpt'];
}
add_filter( 'excerpt_length', 'portfolio_excerpt_length' );

// Excerpt more
function portfolio_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'portfolio_excerpt_more' );








//Custom shortcodes  

function clear_content_callback_function($atts, $content, $tag){
	return '<div class="container-post">' . $content . '</div>';
}
//add the new 'clear_content' shortcode
add_shortcode('clear_content','clear_content_callback_function');


function img_portfolio($atts, $content, $tag){
	return '<div class="featured-top-blog">' . $content . '</div>';
}
//add the new 'clear_content' shortcode
add_shortcode('img_portfolio','img_portfolio');

function responsive_images_big($atts, $content, $tag){
	return '<div class="responsive-images">' . $content . '</div>';
}
//add the new 'clear_content' shortcode
add_shortcode('big_img','responsive_images_big');

function col_md_6($atts, $content, $tag){
	return '<div class="col-md-6 col-sm-12">' . $content . '</div>';
}
//add the new 'clear_content' shortcode
add_shortcode('col_md_6','col_md_6');


?>