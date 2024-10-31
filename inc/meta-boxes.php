<?php
/*
 *	Contains metaboxes for service, portfolio, 
 *	team member & testimonial custom post types.
 *
 *	@version 1.0
 *	@since rexly-toolbox 1.0
 *
 * 	@package  Demo_CMB2
 * 	@license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * 	@link     https://github.com/WebDevStudios/CMB2
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 	Rexly metaboxes
 *
 *	@since rexly-toolbox 1.0
 */
function rexly_metaboxes() {

	/*
	 *	set prefix
	 */
	$prefix = '_rexly_';

	/*********************************
	 *	Service metabox
	 *
	 *	@since rexly-toolbox 1.0
	 **********************************/
	$rexly_service_metabox 	= new_cmb2_box( array(
		'id'            => $prefix . 'service_icons',
		'title'         => __( 'Service Icon', 'rexly-toolbox' ),
		'object_types'  => array( 'rexly-service' ), // Post type
		'show_names' 	=> true, // Show field names on the left
		'closed'     	=> false, // true to keep the metabox closed by default
	) );

	// font-awesome icons
	$rexly_service_metabox->add_field( array(
	    'name'             => __( 'Select Icon', 'rexly-toolbox' ),
	    'id'               => $prefix . 'service_fa_icon',
	    'type'             => 'select',
	    'show_option_none' => true,
	    'default'          => 'fa-500px',
	    'options'          => rexly_toolbox_font_awesome(),
	) );

	/**********************************
	 *	Portfolio metabox
	 *
	 *	@since rexly-toolbox 1.0
	 **********************************/
	$rexly_portfolio_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'portfolio_info',
		'title'         => __( 'Portfolio Informations', 'rexly-toolbox' ),
		'object_types'  => array( 'rexly-portfolio' ), // Post type
		'show_names' 	=> true, // Show field names on the left
		'closed'     	=> true, // true to keep the metabox closed by default
	) );
	// metabox description
	$rexly_portfolio_metabox->add_field( array(
		'desc' 			=> __( 'Show some informations about this project.', 'rexly-pro' ),
		'id'   			=> $prefix . 'portfolio_info_title',
		'type' 			=> 'title',
	) );	

	// label ex:client
	$rexly_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Client lebel', 'rexly-toolbox' ),
		'desc'       	=> __( 'Put a lebel. Ex: Client', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'portfolio_client_lebel',
		'type'       	=> 'text',
	) );
	// client name 
	$rexly_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Client name', 'rexly-toolbox' ),
		'desc'       	=> __( 'Put client name. Ex: Jon olsson', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'portfolio_client_name',
		'type'       	=> 'text',
	) );
	
	// label ex: date
	$rexly_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Date lebel', 'rexly-toolbox' ),
		'desc'       	=> __( 'Put a lebel for date. Ex: Date', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'portfolio_date_lebel',
		'type'       	=> 'text',
	) );
	// date
	$rexly_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Date', 'rexly-toolbox' ),
		'desc'       	=> __( 'Put this project completion date. Ex: January 1, 2016', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'portfolio_complete_date',
		'type'       	=> 'text',
	) );
	
	// Label ex:Skill
	$rexly_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Skill lebel', 'rexly-toolbox' ),
		'desc'       	=> __( 'Put a lebel for skill or whatever you like to display. Ex: Skills', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'portfolio_skill_lebel',
		'type'       	=> 'text',
	) );
	// skills
	$rexly_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Skill names', 'rexly-toolbox' ),
		'desc'       	=> __( 'Put skills that used to complete this project or whatever you like to display. Ex: Design, development', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'portfolio_skill_names',
		'type'       	=> 'text',
	) );
	
	// button
	$rexly_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Button text', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'portfolio_button_text',
		'type'       	=> 'text',
	) );
	
	// button url
	$rexly_portfolio_metabox->add_field( array(
		'name'       	=> __( 'Button url', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'portfolio_button_url',
		'type'       	=> 'text_url',
	) );
	
	// button target
	$rexly_portfolio_metabox->add_field( array(
	    'name' 			=> __( 'Button target', 'rexly-toolbox' ),
	    'desc' 			=> __( 'Check to open in a new tab', 'rexly-toolbox' ),
	    'id'   			=> $prefix . 'portfolio_button_target',
	    'type' 			=> 'checkbox',
	) );

	/**********************************
	 *	Testimonial metabox
	 *
	 *	@since rexly-toolbox 1.0
	 **********************************/
	$rexly_testimonials_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'testimonial_info',
		'title'         => __( 'Position', 'rexly-toolbox' ),
		'object_types'  => array( 'rexly-testimonial' ), // Post type
		'show_names' 	=> true, // Show field names on the left
		'closed'     	=> true, // true to keep the metabox closed by default
	) );	
	// position
	$rexly_testimonials_metabox->add_field( array(
		'name'       	=> __( 'Designation', 'rexly-toolbox' ),
		'desc'       	=> __( 'Include position or whatever you like to display. Ex: CEO, Company', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'testimonial_position',
		'type'       	=> 'text',
	) );

	/**********************************
	 *	Team Members metabox
	 *
	 *	@since rexly-toolbox 1.0
	 **********************************/
	$rexly_team_members_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'team_member_info',
		'title'         => __( 'Member Info', 'rexly-toolbox' ),
		'object_types'  => array( 'rexly-team-member' ), // Post type
		'show_names' 	=> true, // Show field names on the left
		'closed'     	=> true, // true to keep the metabox closed by default
	) );	
	// position
	$rexly_team_members_metabox->add_field( array(
		'name'       	=> __( 'Designation', 'rexly-toolbox' ),
		'desc'       	=> __( 'Include position or whatever you like to display. Ex: Founder', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'team_member_position',
		'type'       	=> 'text',
	) );
	// facebook url
	$rexly_team_members_metabox->add_field( array(
		'name'       	=> __( 'Facebook url', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'member_fb_url',
		'type'       	=> 'text_url',
	) );
	// twitter url
	$rexly_team_members_metabox->add_field( array(
		'name'       	=> __( 'Twitter url', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'member_twitter_url',
		'type'       	=> 'text_url',
	) );
	// Google+ url
	$rexly_team_members_metabox->add_field( array(
		'name'       	=> __( 'Google+ url', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'member_gplus_url',
		'type'       	=> 'text_url',
	) );
	// LinkedIn url
	$rexly_team_members_metabox->add_field( array(
		'name'       	=> __( 'LinkedIn url', 'rexly-toolbox' ),
		'id'         	=> $prefix . 'member_linkedin_url',
		'type'       	=> 'text_url',
	) );
	// link target
	$rexly_team_members_metabox->add_field( array(
	    'name' 			=> __( 'URL target', 'rexly-toolbox' ),
	    'desc' 			=> __( 'Check to open in a new tab', 'rexly-toolbox' ),
	    'id'   			=> $prefix . 'member_button_target',
	    'type' 			=> 'checkbox',
	) );
}
if( defined( 'CMB2_LOADED' ) ) {
  add_action( 'cmb2_admin_init', 'rexly_metaboxes' );
}