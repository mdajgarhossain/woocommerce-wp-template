<?php

/**
 * Color Option
 *
 * @package ecommerce_online_store
 */

// Primary Color.
$wp_customize->add_setting(
	'primary_color',
	array(
		'default'           => '#5c8dff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'primary_color',
		array(
			'label'    => __( 'Primary Color', 'ecommerce-online-store' ),
			'section'  => 'colors',
			'priority' => 5,
		)
	)
);
