<?php

function bst_enqueues() {

	/* Styles */

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');

  	wp_register_style('bst-css', get_template_directory_uri() . '/css/bst.css', false, null);
	wp_enqueue_style('bst-css');

	wp_register_style('slick-css', get_template_directory_uri() . '/css/vendors/slick.css', false, null);
	wp_enqueue_style('slick-css');

	wp_register_style('slick-theme-css', get_template_directory_uri() . '/css/vendors/slick-theme.css', false, null);
	wp_enqueue_style('slick-theme-css');

	wp_register_style('animate-css', get_template_directory_uri() . '/css/vendors/animate.css', false, null);
	wp_enqueue_style('animate-css');

	wp_register_style('scroll-css', get_template_directory_uri() . '/css/vendors/jquery.mCustomScrollbar.min.css', false, null);
	wp_enqueue_style('scroll-css');

	wp_register_style('styles-css', get_template_directory_uri() . '/css/styles.css', false, null);
	wp_enqueue_style('styles-css');

	wp_register_style('blog-css', get_template_directory_uri() . '/css/blog.css', false, null);
	wp_enqueue_style('blog-css');

	/* Scripts */

	wp_enqueue_script( 'jquery' );
	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, true);
	wp_enqueue_script('modernizr');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('slick-js', get_template_directory_uri() . '/js/vendors/slick.min.js', false, null, true);
	wp_enqueue_script('slick-js');

	wp_register_script('wow-js', get_template_directory_uri() . '/js/vendors/wow.js', false, null, true);
	wp_enqueue_script('wow-js');

	wp_register_script('scroller-js', get_template_directory_uri() . '/js/vendors/jquery.mCustomScrollbar.min.js', false, null, true);
	wp_enqueue_script('scroller-js');

	wp_register_script('waypoints-js', get_template_directory_uri() . '/js/vendors/waypoints.js', false, null, true);
	wp_enqueue_script('waypoints-js');

	wp_register_script('bst-js', get_template_directory_uri() . '/js/bst.js', false, null, true);
	wp_enqueue_script('bst-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
