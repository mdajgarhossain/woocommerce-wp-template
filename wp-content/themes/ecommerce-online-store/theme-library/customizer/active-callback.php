<?php

/**
 * Active Callbacks
 *
 * @package ecommerce_online_store
 */

// Theme Options.
function ecommerce_online_store_is_pagination_enabled( $control ) {
	return ( $control->manager->get_setting( 'ecommerce_online_store_enable_pagination' )->value() );
}
function ecommerce_online_store_is_breadcrumb_enabled( $control ) {
	return ( $control->manager->get_setting( 'ecommerce_online_store_enable_breadcrumb' )->value() );
}

// Header Options.
function ecommerce_online_store_is_topbar_enabled( $control ) {
	return ( $control->manager->get_Setting( 'ecommerce_online_store_enable_topbar' )->value() );
}

// Banner Slider Section.
function ecommerce_online_store_is_banner_slider_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'ecommerce_online_store_enable_banner_section' )->value() );
}
function ecommerce_online_store_is_banner_slider_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'ecommerce_online_store_banner_slider_content_type' )->value();
	return ( ecommerce_online_store_is_banner_slider_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function ecommerce_online_store_is_banner_slider_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'ecommerce_online_store_banner_slider_content_type' )->value();
	return ( ecommerce_online_store_is_banner_slider_section_enabled( $control ) && ( 'page' === $content_type ) );
}

// Service section.
function ecommerce_online_store_is_service_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'ecommerce_online_store_enable_service_section' )->value() );
}
function ecommerce_online_store_is_service_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'ecommerce_online_store_service_content_type' )->value();
	return ( ecommerce_online_store_is_service_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function ecommerce_online_store_is_service_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'ecommerce_online_store_service_content_type' )->value();
	return ( ecommerce_online_store_is_service_section_enabled( $control ) && ( 'page' === $content_type ) );
}