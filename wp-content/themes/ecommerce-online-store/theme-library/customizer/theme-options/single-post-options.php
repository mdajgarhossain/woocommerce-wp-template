<?php

/**
 * Single Post Options
 *
 * @package ecommerce_online_store
 */

$wp_customize->add_section(
	'ecommerce_online_store_single_post_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'ecommerce-online-store' ),
		'panel' => 'ecommerce_online_store_theme_options',
	)
);



// Post Options - Hide Date.
$wp_customize->add_setting(
	'ecommerce_online_store_single_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_single_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_single_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'ecommerce_online_store_single_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_single_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_single_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'ecommerce_online_store_single_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_single_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_single_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'ecommerce_online_store_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_single_post_options',
		)
	)
);
