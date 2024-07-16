<?php

/**
 * Menu Options
 *
 * @package ecommerce_online_store
 */

// Menu Options
$wp_customize->add_section(
	'ecommerce_online_store_Menu_options',
	array(
		'panel' => 'ecommerce_online_store_theme_options',
		'title' => esc_html__( 'Menu Options', 'ecommerce-online-store' ),
	)
);

$wp_customize->add_setting( 'menu_text_transform', array(
    'default'           => 'none', // Default value for text transform
    'sanitize_callback' => 'sanitize_text_field',
) );

// Add control for menu text transform
$wp_customize->add_control( 'menu_text_transform', array(
    'type'     => 'select',
    'section'  => 'ecommerce_online_store_Menu_options', // Adjust the section as needed
    'label'    => __( 'Menu Text Transform', 'ecommerce-online-store' ),
    'choices'  => array(
        'none'       => __( 'None', 'ecommerce-online-store' ),
        'capitalize' => __( 'Capitalize', 'ecommerce-online-store' ),
        'uppercase'  => __( 'Uppercase', 'ecommerce-online-store' ),
        'lowercase'  => __( 'Lowercase', 'ecommerce-online-store' ),
    ),
) );
