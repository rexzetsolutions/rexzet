<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//

// display featured post thumbnails in WordPress feeds
function wcs_post_thumbnails_in_feeds( $content ) {
    global $post;
    if( has_post_thumbnail( $post->ID ) ) {
        $content = '<p>' . get_the_post_thumbnail( $post->ID ) . '</p>' . $content;
    }
    return $content;
}
add_filter( 'the_excerpt_rss', 'wcs_post_thumbnails_in_feeds' );
add_filter( 'the_content_feed', 'wcs_post_thumbnails_in_feeds' );


//Day time
function displaydate(){
    return date('l jS, F');
}
add_shortcode( 'date', 'displaydate' );


update_option( 'siteurl', 'https://orientaltimes.co' );
update_option( 'home', 'https://orientaltimes.co' );


function wpdocs_theme_name_scripts() {
    wp_enqueue_script( 'newchildjs', get_stylesheet_directory_uri() . '/newchild.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar2', 'theme-slug' ),
        'id' => 'sidebar2',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h1 class="widgettitle">',
	'after_title'   => '</h1>',
    ) );
}


/* infinite scroll */

/**
 * Load javascripts used by the theme
 */

function custom_theme_js(){
	wp_register_script( 'infinite_scroll',  get_stylesheet_directory_uri() . '/jquery.infinitescroll.min.js', array('jQuery'),null,true );
	//if( ! is_singular() ) {
		//wp_enqueue_script('infinite_scroll');
	//}
}
add_action('wp_enqueue_scripts', 'custom_theme_js');

/**
 * Infinite Scroll
 */
function custom_infinite_scroll_js() {
	if( ! is_singular() ) { ?>
	<script>
	var infinite_scroll = {
		loading: {
			img: "<?php echo get_template_directory_uri(); ?>/img/ajax-loader.gif",
			msgText: "<?php _e( 'Loading the next set of posts...', 'custom' ); ?>",
			finishedMsg: "<?php _e( 'All posts loaded.', 'custom' ); ?>"
		},
		"nextSelector":"a.page-number",
		"navSelector":".nav-pagination",
		"itemSelector":"#post-list",
		"contentSelector":".article-inner "
	};
	jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll );
	</script>
	<?php
	}
}
add_action( 'wp_footer', 'custom_infinite_scroll_js',100 );
