<?php

/**
 * Footer Options
 *
 * @package ecommerce_online_store
 */

$wp_customize->add_section(
	'ecommerce_online_store_footer_options',
	array(
		'panel' => 'ecommerce_online_store_theme_options',
		'title' => esc_html__( 'Footer Options', 'ecommerce-online-store' ),
	)
);

$wp_customize->add_setting(
	'ecommerce_online_store_footer_copyright_text',
	array(
		'default'           => "",
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'ecommerce_online_store_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'ecommerce-online-store' ),
		'section'  => 'ecommerce_online_store_footer_options',
		'settings' => 'ecommerce_online_store_footer_copyright_text',
		'type'     => 'textarea',
	)
);


// column // 
$wp_customize->add_setting(
	'ecommerce_online_store_footer_widget_column',
	array(
        'default'			=> '4',
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'ecommerce_online_store_sanitize_select',
		
	)
);	

$wp_customize->add_control(
	'ecommerce_online_store_footer_widget_column',
	array(
	    'label'   		=> __('Select Widget Column','ecommerce-online-store'),
	    'section' 		=> 'ecommerce_online_store_footer_options',
		'type'			=> 'select',
		'choices'        => 
		array(
			'' => __( 'None', 'ecommerce-online-store' ),
			'1' => __( '1 Column', 'ecommerce-online-store' ),
			'2' => __( '2 Column', 'ecommerce-online-store' ),
			'3' => __( '3 Column', 'ecommerce-online-store' ),
			'4' => __( '4 Column', 'ecommerce-online-store' )
		) 
	) 
);

//  Image // 
$wp_customize->add_setting('footer_background_color_setting', array(
    'default' => '#000',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background_color_setting', array(
    'label' => __('Footer Background Color', 'ecommerce-online-store'),
    'section' => 'ecommerce_online_store_footer_options',
)));

// Footer Background Image Setting
$wp_customize->add_setting('footer_background_image_setting', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_background_image_setting', array(
    'label' => __('Footer Background Image', 'ecommerce-online-store'),
    'section' => 'ecommerce_online_store_footer_options',
)));
// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'ecommerce_online_store_scroll_top',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
		'default'           => true,
	)
);

// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'ecommerce_online_store_scroll_top',
	array(
		'sanitize_callback' => 'ecommerce_online_store_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Ecommerce_Online_Store_Toggle_Switch_Custom_Control(
		$wp_customize,
		'ecommerce_online_store_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'ecommerce-online-store' ),
			'section' => 'ecommerce_online_store_footer_options',
		)
	)
);
// icon // 
$wp_customize->add_setting(
	'ecommerce_online_store_scroll_btn_icon',
	array(
        'default' => 'fas fa-chevron-up',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
		
	)
);	

$wp_customize->add_control(new Ecommerce_Online_Store_Change_Icon_Control($wp_customize, 
	'ecommerce_online_store_scroll_btn_icon',
	array(
	    'label'   		=> __('Scroll Top Icon','ecommerce-online-store'),
	    'section' 		=> 'ecommerce_online_store_footer_options',
		'iconset' => 'fa',
	))  
);

$wp_customize->add_setting( 'ecommerce_online_store_scroll_top_position', array(
    'default'           => 'bottom-right',
    'sanitize_callback' => 'ecommerce_online_store_sanitize_scroll_top_position',
) );

// Add control for Scroll Top Button Position
$wp_customize->add_control( 'ecommerce_online_store_scroll_top_position', array(
    'label'    => __( 'Scroll Top Position', 'ecommerce-online-store' ),
    'section'  => 'ecommerce_online_store_footer_options',
    'settings' => 'ecommerce_online_store_scroll_top_position',
    'type'     => 'select',
    'choices'  => array(
        'bottom-right' => __( 'Bottom Right', 'ecommerce-online-store' ),
        'bottom-left'  => __( 'Bottom Left', 'ecommerce-online-store' ),
        'bottom-center'=> __( 'Bottom Center', 'ecommerce-online-store' ),
    ),
) );
$wp_customize->add_setting('footer_text_transform', array(
    'default' => 'none',
    'sanitize_callback' => 'sanitize_text_field',
));

// Add Footer Text Transform Control
$wp_customize->add_control('footer_text_transform', array(
    'label' => __('Footer Text Transform', 'ecommerce-online-store'),
    'section' => 'ecommerce_online_store_footer_options',
    'settings' => 'footer_text_transform',
    'type' => 'select',
    'choices' => array(
        'none' => __('None', 'ecommerce-online-store'),
        'capitalize' => __('Capitalize', 'ecommerce-online-store'),
        'uppercase' => __('Uppercase', 'ecommerce-online-store'),
        'lowercase' => __('Lowercase', 'ecommerce-online-store'),
    ),
));