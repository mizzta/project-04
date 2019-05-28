<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}



add_filter( 'body_class', 'inhabitent_body_classes' );
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );



function inhabitent_login_logo() {
	echo '<style type="text/css">                                                                   
		h1 a { background-image:url('.get_stylesheet_directory_uri().'/assets/images/logos/inhabitent-logo-text-dark.svg) !important; 
		background-size: contain !important; height: 60px !important; width: 330px !important; margin-left: -40px; }                            
	</style>';
}
add_action('login_head', 'inhabitent_login_logo');


function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );


function inhabitent_body_class_for_pages( $classes ) {
    if ( is_singular( 'page' ) ) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'inhabitent_body_class_for_pages' );



if ( is_post_type_archive( 'product' ) ) {
	$query->set( 'posts_per_page', 16 );
	return;
}


function hwl_home_pagesize( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;


	if ( is_post_type_archive( 'product' ) ) {
		$query->set( 'posts_per_page', 16 );
		return;
	
    }
}
add_action( 'pre_get_posts', 'hwl_home_pagesize' );


function shop_archive_title($title)
{
   if (is_post_type_archive('product')) {
       $title = 'Shop Stuff';
   }
   return $title;
}
add_filter('get_the_archive_title', 'shop_archive_title');