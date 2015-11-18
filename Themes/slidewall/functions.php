<?php


/**  Proper way to enqueue scripts and styles **/
function slidewall_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	if (is_page('home'))
	{
	wp_enqueue_style( 'jquery.lightbox-0.5', get_template_directory_uri().'/css/jquery.lightbox-0.5.css',array(),'',true);
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri().'/css/nivo-slider.css',array(),'',true);
	wp_enqueue_style( 'templatemo_style', get_template_directory_uri().'/css/templatemo_style.css',array(),'',true);
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5.js', array(), '1.0.0', true );
	}
	if (is_page('contact'))
	{
		wp_enqueue_script( 'angular.min', get_template_directory_uri() . '/js/angular.min.js', array(), '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'slidewall_scripts' );


/*Register Menu for theme*/

register_nav_menus(
array(
'primary'=>__('Primary Menu'),
'secondary'=>__('Secondary Menu')
)
);

/* Add feature image option to post*/
add_theme_support( 'post-thumbnails');

/* widget registration */
function slidewall_widgets_registration() {

	register_sidebar( array(
		'name'          => 'Right Sidebar',
		'id'            => 'right_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'slidewall_widgets_registration' );




/*
 * 
 * Customizer additions.
 * 
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/news-custom-post.php';

require get_template_directory() . '/inc/project-post.php';

require get_template_directory() . '/inc/gallery.php';

if( get_page_by_title( 'Gallery' ) == NULL && get_page_by_title( 'News' ) == NULL && get_page_by_title( 'Blog' ) == NULL && get_page_by_title( 'Contact' ) == NULL)
{
require get_template_directory() . '/inc/pages.php';
}

/* change excerpt lenght for home Project description */
function custom_excerpt_length( $length ) {
if(is_page('home'))
 return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );