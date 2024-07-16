<?php

function ecommerce_online_store_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$ecommerce_online_store_choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $ecommerce_online_store_choices ) ? $input : $setting->default );
}

function ecommerce_online_store_sanitize_switch( $input ) {
	if ( true === $input ) {
		return true;
	} else {
		return false;
	}
}

function ecommerce_online_store_sanitize_google_fonts( $input, $setting ) {
	$ecommerce_online_store_choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $ecommerce_online_store_choices ) ? $input : $setting->default );
}
/**
 * Sanitize HTML input.
 *
 * @param string $input HTML input to sanitize.
 * @return string Sanitized HTML.
 */
function ecommerce_online_store_sanitize_html( $input ) {
    return wp_kses_post( $input );
}

/**
 * Sanitize URL input.
 *
 * @param string $input URL input to sanitize.
 * @return string Sanitized URL.
 */
function ecommerce_online_store_sanitize_url( $input ) {
    return esc_url_raw( $input );
}

// Sanitize Scroll Top Position
function ecommerce_online_store_sanitize_scroll_top_position( $input ) {
    $ecommerce_online_store_valid_positions = array( 'bottom-right', 'bottom-left', 'bottom-center' );
    if ( in_array( $input, $ecommerce_online_store_valid_positions ) ) {
        return $input;
    } else {
        return 'bottom-right'; // Default to bottom-right if invalid value
    }
}