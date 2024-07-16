<?php

/**
 * Sidebar Position
 *
 * @package ecommerce_online_store
 */

$wp_customize->add_section(
	'ecommerce_online_store_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'ecommerce-online-store' ),
		'panel' => 'ecommerce_online_store_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'ecommerce_online_store_sidebar_position',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'ecommerce-online-store' ),
		'section' => 'ecommerce_online_store_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'ecommerce-online-store' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'ecommerce-online-store' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'ecommerce-online-store' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'ecommerce_online_store_post_sidebar_position',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'ecommerce-online-store' ),
		'section' => 'ecommerce_online_store_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'ecommerce-online-store' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'ecommerce-online-store' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'ecommerce-online-store' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'ecommerce_online_store_page_sidebar_position',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'ecommerce-online-store' ),
		'section' => 'ecommerce_online_store_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'ecommerce-online-store' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'ecommerce-online-store' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'ecommerce-online-store' ),
		),
	)
);
