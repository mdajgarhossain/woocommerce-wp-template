<?php

/**
 * Pagination
 *
 * @package ecommerce_online_store
 */

$wp_customize->add_section(
	'ecommerce_online_store_pagination',
	array(
		'panel' => 'ecommerce_online_store_theme_options',
		'title' => esc_html__( 'Pagination', 'ecommerce-online-store' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'ecommerce_online_store_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'ecommerce-online-store' ),
			'section'  => 'ecommerce_online_store_pagination',
			'settings' => 'ecommerce_online_store_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'ecommerce_online_store_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'ecommerce_online_store_sanitize_select',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'ecommerce-online-store' ),
		'section'         => 'ecommerce_online_store_pagination',
		'settings'        => 'ecommerce_online_store_pagination_type',
		'active_callback' => 'ecommerce_online_store_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'ecommerce-online-store' ),
			'numeric' => __( 'Numeric', 'ecommerce-online-store' ),
		),
	)
);
