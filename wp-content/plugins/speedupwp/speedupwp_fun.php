<?php
/*
** Speedupwp Remove Css Js
**/ 
function speedupwp_remove_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
} 
add_filter( 'style_loader_src', 'speedupwp_remove_css_js', 9999 );
add_filter( 'script_loader_src', 'speedupwp_remove_css_js', 9999 );
 
/*
** Speedupwp Clean Head
**/
function speedupwp_start_cleanhead() {
  add_action('init', 'speedupwp_clean_head');
} 
function speedupwp_clean_head() {
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'index_rel_link' );
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
  remove_action('wp_head', 'rel_canonical', 10, 0 );
  remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  remove_action( 'wp_head', 'wp_generator' );
}
add_action('after_setup_theme','speedupwp_start_cleanhead');
/*
** Speedupwp Frontend Scripts 
**/
function speedupwp_frontend_scripts() {    
   wp_enqueue_script('speedupwp-frontend-custom', plugins_url( '/js/speedupwp-frontend-custom.js' , __FILE__ ), array('jquery'),null,true);
}
 add_action( 'wp_enqueue_scripts', 'speedupwp_frontend_scripts' );  
   