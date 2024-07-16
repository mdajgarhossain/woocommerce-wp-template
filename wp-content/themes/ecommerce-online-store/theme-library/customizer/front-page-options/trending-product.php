<?php

/**
 * Service Section
 *
 * @package ecommerce_online_store
 */

$wp_customize->add_section(
	'ecommerce_online_store_product_section',
	array(
		'panel'    => 'ecommerce_online_store_front_page_options',
		'title'    => esc_html__( 'Trending Product Section', 'ecommerce-online-store' ),
		'priority' => 10,
	)
);

// Service Section - Enable Section.
$wp_customize->add_setting(
	'ecommerce_online_store_enable_service_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_enable_service_section',
		array(
			'label'    => esc_html__( 'Enable Product Section', 'ecommerce-online-store' ),
			'section'  => 'ecommerce_online_store_product_section',
			'settings' => 'ecommerce_online_store_enable_service_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'ecommerce_online_store_enable_service_section',
		array(
			'selector' => '#ecommerce_online_store_service_section .section-link',
			'settings' => 'ecommerce_online_store_enable_service_section',
		)
	);
}

// Trending Products Section
$wp_customize->add_setting(
	'ecommerce_online_store_trending_product_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_trending_product_heading',
	array(
		'label'           => esc_html__( 'Heading', 'ecommerce-online-store' ),
		'section'         => 'ecommerce_online_store_product_section',
		'settings'        => 'ecommerce_online_store_trending_product_heading',
		'type'            => 'text',
		'active_callback' => 'ecommerce_online_store_is_service_section_enabled',
	)
);

$args = array(
	'type'                     => 'product',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'term_group',
	'order'                    => 'ASC',
	'hide_empty'               => false,
	'hierarchical'             => 1,
	'number'                   => '',
	'taxonomy'                 => 'product_cat',
	'pad_counts'               => false
);
$ecommerce_online_store_categories = get_categories($args);
$cat_posts = array();
$m = 0;
$cat_posts[]='Select';
foreach($ecommerce_online_store_categories as $category){
	if($m==0){
		$default = $category->slug;
		$m++;
	}
	$cat_posts[$category->slug] = $category->name;
}

$wp_customize->add_setting('ecommerce_online_store_trending_product_category',array(
	'default'	=> 'select',
	'sanitize_callback' => 'ecommerce_online_store_sanitize_select',
));
$wp_customize->add_control('ecommerce_online_store_trending_product_category',array(
	'type'    => 'select',
	'choices' => $cat_posts,
	'label' => __('Select category to display products ','ecommerce-online-store'),
	'section' => 'ecommerce_online_store_product_section',
	'active_callback' => 'ecommerce_online_store_is_service_section_enabled',
));

// New Arrivals Section
$wp_customize->add_setting(
	'ecommerce_online_store_new_arrival_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_new_arrival_heading',
	array(
		'label'           => esc_html__( 'Heading', 'ecommerce-online-store' ),
		'section'         => 'ecommerce_online_store_product_section',
		'settings'        => 'ecommerce_online_store_new_arrival_heading',
		'type'            => 'text',
		'active_callback' => 'ecommerce_online_store_is_service_section_enabled',
	)
);

$args = array(
	'type'                     => 'product',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'term_group',
	'order'                    => 'ASC',
	'hide_empty'               => false,
	'hierarchical'             => 1,
	'number'                   => '',
	'taxonomy'                 => 'product_cat',
	'pad_counts'               => false
);
$ecommerce_online_store_categories = get_categories($args);
$cat_posts = array();
$m = 0;
$cat_posts[]='Select';
foreach($ecommerce_online_store_categories as $category){
	if($m==0){
		$default = $category->slug;
		$m++;
	}
	$cat_posts[$category->slug] = $category->name;
}

$wp_customize->add_setting('ecommerce_online_store_new_arrival_category',array(
	'default'	=> 'select',
	'sanitize_callback' => 'ecommerce_online_store_sanitize_select',
));
$wp_customize->add_control('ecommerce_online_store_new_arrival_category',array(
	'type'    => 'select',
	'choices' => $cat_posts,
	'label' => __('Select category to display products ','ecommerce-online-store'),
	'section' => 'ecommerce_online_store_product_section',
	'active_callback' => 'ecommerce_online_store_is_service_section_enabled',
));