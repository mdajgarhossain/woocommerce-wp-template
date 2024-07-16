<?php

/**
 * Header Options
 *
 * @package ecommerce_online_store
 */

// General Options
$wp_customize->add_section(
	'ecommerce_online_store_general_options',
	array(
		'panel' => 'ecommerce_online_store_theme_options',
		'title' => esc_html__( 'General Options', 'ecommerce-online-store' ),
	)
);

// General Options - Enable Preloader.
$wp_customize->add_setting(
	'ecommerce_online_store_enable_preloader',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_enable_preloader',
		array(
			'label'   => esc_html__( 'Enable Preloader', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_general_options',
		)
	)
);


// Add setting for sticky header
$wp_customize->add_setting(
	'ecommerce_online_store_enable_sticky_header',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
		'default'           => false,
	)
);

// Add control for sticky header setting
$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_enable_sticky_header',
		array(
			'label'   => esc_html__( 'Enable Sticky Header', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_general_options',
		)
	)
);


// Site Title - Enable Setting.
$wp_customize->add_setting(
	'ecommerce_online_store_enable_site_title_setting',
	array(
		'default'           => true,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_enable_site_title_setting',
		array(
			'label'    => esc_html__( 'Disable Site Title', 'ecommerce-online-store' ),
			'section'  => 'title_tagline',
			'settings' => 'ecommerce_online_store_enable_site_title_setting',
		)
	)
);
$wp_customize->add_setting( 'ecommerce_online_store_site_title_size', array(
    'default'           => 40, // Default font size in pixels
    'sanitize_callback' => 'absint', // Sanitize the input as a positive integer
) );

// Add control for site title size
$wp_customize->add_control( 'ecommerce_online_store_site_title_size', array(
    'type'        => 'number',
    'section'     => 'title_tagline', // You can change this section to your preferred section
    'label'       => __( 'Site Title Font Size ', 'ecommerce-online-store' ),
    'input_attrs' => array(
        'min'  => 10,
        'max'  => 100,
        'step' => 1,
    ),
) );
// Tagline - Enable Setting.
$wp_customize->add_setting(
	'ecommerce_online_store_enable_tagline_setting',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_enable_tagline_setting',
		array(
			'label'    => esc_html__( 'Enable Tagline', 'ecommerce-online-store' ),
			'section'  => 'title_tagline',
			'settings' => 'ecommerce_online_store_enable_tagline_setting',
		)
	)
);

$wp_customize->add_section(
	'ecommerce_online_store_header_options',
	array(
		'panel' => 'ecommerce_online_store_theme_options',
		'title' => esc_html__( 'Header Options', 'ecommerce-online-store' ),
	)
);

// Header Options - Enable Topbar.
$wp_customize->add_setting(
	'ecommerce_online_store_enable_topbar',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_enable_topbar',
		array(
			'label'   => esc_html__( 'Enable Topbar', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_header_options',
		)
	)
);

// Header Options - Contact Number.
$wp_customize->add_setting(
	'ecommerce_online_store_discount_topbar_text',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_discount_topbar_text',
	array(
		'label'           => esc_html__( 'Topbar Discount Text', 'ecommerce-online-store' ),
		'section'         => 'ecommerce_online_store_header_options',
		'type'            => 'text',
		'active_callback' => 'ecommerce_online_store_is_topbar_enabled',
	)
);

// Header Options - Enable Search.
$wp_customize->add_setting(
	'ecommerce_online_store_enable_search',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_enable_search',
		array(
			'label'   => esc_html__( 'Enable Search', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_header_options',
			'active_callback' => 'ecommerce_online_store_is_topbar_enabled',
		)
	)
);

// icon // 
$wp_customize->add_setting(
	'ecommerce_online_store_logout_icon',
	array(
        'default' => 'fas fa-sign-out-alt',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
		
	)
);	

$wp_customize->add_control(new Ecommerce_Online_Store_Change_Icon_Control($wp_customize, 
	'ecommerce_online_store_logout_icon',
	array(
	    'label'   		=> __('Logout  Icon','ecommerce-online-store'),
	    'section' 		=> 'ecommerce_online_store_header_options',
		'iconset' => 'fa',
	))  
);


// icon // 
$wp_customize->add_setting(
	'ecommerce_online_store_shopping_cart_icon',
	array(
        'default' => 'fas fa-shopping-basket',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
		
	)
);	

$wp_customize->add_control(new Ecommerce_Online_Store_Change_Icon_Control($wp_customize, 
	'ecommerce_online_store_shopping_cart_icon',
	array(
	    'label'   		=> __('Shopping Cart Icon','ecommerce-online-store'),
	    'section' 		=> 'ecommerce_online_store_header_options',
		'iconset' => 'fa',
	))  
);
