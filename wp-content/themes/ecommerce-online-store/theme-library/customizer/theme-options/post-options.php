<?php

/**
 * Post Options
 *
 * @package ecommerce_online_store
 */

$wp_customize->add_section(
	'ecommerce_online_store_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'ecommerce-online-store' ),
		'panel' => 'ecommerce_online_store_theme_options',
	)
);

// Post Options - Hide Feature Image.
$wp_customize->add_setting(
	'ecommerce_online_store_post_hide_feature_image',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_post_hide_feature_image',
		array(
			'label'   => esc_html__( 'Hide Featured Image', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_post_options',
		)
	)
);

// Post Options - Hide Post Heading.
$wp_customize->add_setting(
	'ecommerce_online_store_post_hide_post_heading',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_post_hide_post_heading',
		array(
			'label'   => esc_html__( 'Hide Post Heading', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_post_options',
		)
	)
);

// Post Options - Hide Post Content.
$wp_customize->add_setting(
	'ecommerce_online_store_post_hide_post_content',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_post_hide_post_content',
		array(
			'label'   => esc_html__( 'Hide Post Content', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_post_options',
		)
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'ecommerce_online_store_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'ecommerce_online_store_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'ecommerce_online_store_post_hide_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'ecommerce_online_store_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'ecommerce-online-store' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'ecommerce-online-store' ),
		'section'  => 'ecommerce_online_store_post_options',
		'settings' => 'ecommerce_online_store_post_related_post_label',
		'type'     => 'text',
	)
);

// Post Options - Hide Related Posts.
$wp_customize->add_setting(
	'ecommerce_online_store_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Hide Related Posts', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_post_options',
		)
	)
);
