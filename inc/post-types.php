<?php
/*
 *	Registers rexly theme custom post types
 *	service, portfolio, team member & testimonial.
 *
 *	@version 1.0
 *	@since rexly-toolbox 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'rexly_theme_post_types' ) ){

	function rexly_theme_post_types() {

		/*
		 *	Service post type labels
		 */
		$rexly_service_labels 		= array(
			'name' 					=> __( 'Services', 'rexly-toolbox' ),
			'singular_name' 		=> __( 'Service', 'rexly-toolbox' ),
			'add_new' 				=> __( 'Add Service', 'rexly-toolbox' ),
			'add_new_item' 			=> __( 'Add New Service', 'rexly-toolbox' ),
			'edit_item' 			=> __( 'Edit Service', 'rexly-toolbox' ),
			'new_item' 				=> __( 'New Service', 'rexly-toolbox' ),
			'view_item' 			=> __( 'View Service', 'rexly-toolbox' ),
			'search_items' 			=> __( 'Search Service', 'rexly-toolbox' ),
			'not_found' 			=> __( 'No Service found', 'rexly-toolbox' ),
			'not_found_in_trash' 	=> __( 'No Service found in Trash', 'rexly-toolbox' ),
			'parent_item_colon' 	=> __( 'Parent Service', 'rexly-toolbox' ),
			'menu_name' 			=> __( 'Services', 'rexly-toolbox' ),
		);

		/*
		 *	service post type args
		 */
		$rexly_service_args 		= array(
			'labels' 				=> $rexly_service_labels,
			'hierarchical' 			=> false,
			'description' 			=> __( 'Service post type', 'rexly-toolbox' ),
			'supports' 				=> array( 'title', 'editor' ) ,
			'public' 				=> true,
			'show_ui' 				=> true,
			'show_in_menu' 			=> true,
			'menu_icon' 			=> 'dashicons-exerpt-view',
			'show_in_nav_menus' 	=> true,
			'publicly_queryable' 	=> false,
			'exclude_from_search' 	=> true,
			'has_archive' 			=> false,
			'query_var' 			=> false,
			'can_export' 			=> true,
			'rewrite' 				=> true,
			'capability_type' 		=> 'post',
		);
		/*
		 *	Register service post type
		 *
		 *	@since rexly-toolbox 1.0
		 */
		register_post_type( 'rexly-service', $rexly_service_args );


		/*
		 *	Portfolio post type lebels
		 */
		$rexly_portfolio_labels 	= array(
			'name' 					=> __( 'Portfolios', 'rexly-toolbox' ),
			'singular_name' 		=> __( 'Portfolio', 'rexly-toolbox' ),
			'add_new' 				=> __( 'Add Portfolio', 'rexly-toolbox' ),
			'add_new_item' 			=> __( 'Add New Portfolio', 'rexly-toolbox' ),
			'edit_item' 			=> __( 'Edit Portfolio', 'rexly-toolbox' ),
			'new_item' 				=> __( 'New Portfolio', 'rexly-toolbox' ),
			'view_item' 			=> __( 'View Portfolio', 'rexly-toolbox' ),
			'search_items' 			=> __( 'Search Portfolio', 'rexly-toolbox' ),
			'not_found' 			=> __( 'No Portfolio found', 'rexly-toolbox' ),
			'not_found_in_trash' 	=> __( 'No Portfolio found in Trash', 'rexly-toolbox' ),
			'parent_item_colon' 	=> __( 'Parent Portfolio', 'rexly-toolbox' ),
			'menu_name' 			=> __( 'Portfolios', 'rexly-toolbox' ),
		);

		/*
		 *	Portfolio post type args
		 */
		$rexly_portfolio_args 		= array(
			'labels' 				=> $rexly_portfolio_labels,
			'hierarchical' 			=> false,
			'description' 			=> __( 'Portfolio post type', 'rexly-toolbox' ),
			'supports' 				=> array( 'title', 'editor', 'thumbnail' ) ,
			'public' 				=> true,
			'show_ui' 				=> true,
			'show_in_menu' 			=> true,
			'menu_icon' 			=> 'dashicons-grid-view',
			'show_in_nav_menus' 	=> true,
			'publicly_queryable' 	=> true,
			'exclude_from_search' 	=> false,
			'has_archive' 			=> false,
			'query_var' 			=> true,
			'can_export' 			=> true,
			'rewrite' 				=> true,
			'capability_type' 		=> 'post',
		);
		/*
		 *	Register portfolio post type
		 *
		 *	@since rexly-toolbox 1.0
		 */
		register_post_type( 'rexly-portfolio', $rexly_portfolio_args );


		/*
		 *	Testimonials post type lebels
		 */
		$rexly_testimonial_labels 	= array(
			'name' 					=> __( 'Testimonials', 'rexly-toolbox' ),
			'singular_name' 		=> __( 'Testimonial', 'rexly-toolbox' ),
			'add_new' 				=> __( 'Add Testimonial', 'rexly-toolbox' ),
			'add_new_item' 			=> __( 'Add New Testimonial', 'rexly-toolbox' ),
			'edit_item' 			=> __( 'Edit Testimonial', 'rexly-toolbox' ),
			'new_item' 				=> __( 'New Testimonial', 'rexly-toolbox' ),
			'view_item' 			=> __( 'View Testimonial', 'rexly-toolbox' ),
			'search_items' 			=> __( 'Search Testimonial', 'rexly-toolbox' ),
			'not_found' 			=> __( 'No Testimonial found', 'rexly-toolbox' ),
			'not_found_in_trash' 	=> __( 'No Testimonial found in Trash', 'rexly-toolbox' ),
			'parent_item_colon' 	=> __( 'Parent Testimonial', 'rexly-toolbox' ),
			'menu_name' 			=> __( 'Testimonials', 'rexly-toolbox' ),
		);

		/*
		 *	Testimonials post type args
		 */
		$rexly_testimonial_args 	= array(
			'labels' 				=> $rexly_testimonial_labels,
			'hierarchical' 			=> false,
			'description' 			=> __( 'Testimonial post type', 'rexly-toolbox' ),
			'supports' 				=> array( 'title', 'editor', 'thumbnail' ) ,
			'public' 				=> true,
			'show_ui' 				=> true,
			'show_in_menu' 			=> true,
			'menu_icon' 			=> 'dashicons-smiley',
			'show_in_nav_menus' 	=> true,
			'publicly_queryable' 	=> false,
			'exclude_from_search' 	=> true,
			'has_archive' 			=> false,
			'query_var' 			=> true,
			'can_export' 			=> true,
			'rewrite' 				=> true,
			'capability_type' 		=> 'post',
		);
		/*
		 *	Register Testimonials post type
		 *
		 *	@since rexly-toolbox 1.0
		 */
		register_post_type( 'rexly-testimonial', $rexly_testimonial_args );


		/*
		 *	Team Member post type lebels
		 */
		$rexly_team_member_labels 	= array(
			'name' 					=> __( 'Team Members', 'rexly-toolbox' ),
			'singular_name' 		=> __( 'Team Member', 'rexly-toolbox' ),
			'add_new' 				=> __( 'Add Team Member', 'rexly-toolbox' ),
			'add_new_item' 			=> __( 'Add New Team Member', 'rexly-toolbox' ),
			'edit_item' 			=> __( 'Edit Team Member', 'rexly-toolbox' ),
			'new_item' 				=> __( 'New Team Member', 'rexly-toolbox' ),
			'view_item' 			=> __( 'View Team Member', 'rexly-toolbox' ),
			'search_items' 			=> __( 'Search Team Member', 'rexly-toolbox' ),
			'not_found' 			=> __( 'No Team Member found', 'rexly-toolbox' ),
			'not_found_in_trash' 	=> __( 'No Team Member found in Trash', 'rexly-toolbox' ),
			'parent_item_colon' 	=> __( 'Parent Team Member', 'rexly-toolbox' ),
			'menu_name' 			=> __( 'Team Members', 'rexly-toolbox' ),
		);

		/*
		 *	Team Member post type args
		 */
		$rexly_team_member_args 	= array(
			'labels' 				=> $rexly_team_member_labels,
			'hierarchical' 			=> false,
			'description' 			=> __( 'Team Member post type', 'rexly-toolbox' ),
			'supports' 				=> array( 'title', 'editor', 'thumbnail' ) ,
			'public' 				=> true,
			'show_ui' 				=> true,
			'show_in_menu' 			=> true,
			'menu_icon' 			=> 'dashicons-groups',
			'show_in_nav_menus' 	=> true,
			'publicly_queryable' 	=> false,
			'exclude_from_search' 	=> true,
			'has_archive' 			=> false,
			'query_var' 			=> true,
			'can_export' 			=> true,
			'rewrite' 				=> true,
			'capability_type' 		=> 'post',
		);
		/*
		 *	Register Team Member post type
		 *
		 *	@since rexly-toolbox 1.0
		 */
		register_post_type( 'rexly-team-member', $rexly_team_member_args );

		/*
		 * Enable support for Post Thumbnails.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 *
		 *	@since rexly-toolbox 1.0
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'rexly-portfolio-img', 640, 426 );
		add_image_size( 'rexly-testimonial-img', 107, 107 );
		add_image_size( 'rexly-team-member-img', 235, 235 );

	}
	add_action( 'init', 'rexly_theme_post_types' );

}