<?php

/**
 * Breadcrumb
 *
 * @package ecommerce_online_store
 */

$wp_customize->add_section(
	'ecommerce_online_store_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'ecommerce-online-store' ),
		'panel' => 'ecommerce_online_store_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'ecommerce_online_store_enable_breadcrumb',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'ecommerce_online_store_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'ecommerce-online-store' ),
		'active_callback' => 'ecommerce_online_store_is_breadcrumb_enabled',
		'section'         => 'ecommerce_online_store_breadcrumb',
	)
);
