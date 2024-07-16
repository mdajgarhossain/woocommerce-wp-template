<?php

/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce_online_store
 */
$ecommerce_online_store_menu_text_transform = get_theme_mod( 'menu_text_transform', 'capitalize' );
$ecommerce_online_store_menu_text_transform_css = ( $ecommerce_online_store_menu_text_transform !== 'capitalize' ) ? 'text-transform: ' . $ecommerce_online_store_menu_text_transform . ';' : '';
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site asterthemes-site-wrapper">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecommerce-online-store' ); ?></a>
    <?php if ( get_theme_mod( 'ecommerce_online_store_enable_preloader', false ) === true ) { ?>
		<div id="loader">
			<div class="loader-container">
				<div id="preloader">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/resource/loader.gif' ); ?>">
				</div>
			</div>
		</div>
    <?php } ?>
<header id="masthead" class="site-header">
	
        <div class="header-main-wrapper">
        <?php if ( get_theme_mod( 'ecommerce_online_store_enable_topbar', false ) === true ) {
            $ecommerce_online_store_discount_topbar_text = get_theme_mod( 'ecommerce_online_store_discount_topbar_text', '' );
            ?>
            <div class="top-header-part">
                <div class="asterthemes-wrapper">
                    <?php if ( ! empty( $ecommerce_online_store_discount_topbar_text ) ) { ?>
                        <div class="header-contact-inner">
                            <p><?php echo esc_html( $ecommerce_online_store_discount_topbar_text ); ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <div class="bottom-header-outer-wrapper">
            <div class="bottom-header-part">
                <div class="asterthemes-wrapper">
                    <div class="bottom-header-part-wrapper hello <?php echo esc_attr( get_theme_mod( 'ecommerce_online_store_enable_sticky_header', false ) ? 'sticky-header' : '' ); ?>">
                        <div class="bottom-header-left-part">
                            <div class="site-branding">
                                <?php if ( has_custom_logo() ) { ?>
                                <div class="site-logo">
                                    <?php the_custom_logo(); ?>
                                </div>
                                <?php } ?>
                                <div class="site-identity">
                                    <?php
                                    $ecommerce_online_store_site_title_size = get_theme_mod( 'ecommerce_online_store_site_title_size', 40 ); // Get the site title size setting value, defaulting to 32 pixels

                                    if ( get_theme_mod( 'ecommerce_online_store_enable_site_title_setting', true ) ) {
                                        if ( is_front_page() && is_home() ) :
                                            ?>
                                            <h1 class="site-title" style="font-size: <?php echo esc_attr( $ecommerce_online_store_site_title_size ); ?>px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                            <?php
                                        else :
                                            ?>
                                            <p class="site-title" style="font-size: <?php echo esc_attr( $ecommerce_online_store_site_title_size ); ?>px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                            <?php
                                        endif;
                                    }

                                    if ( get_theme_mod( 'ecommerce_online_store_enable_tagline_setting', false ) ) :
                                        $ecommerce_online_store_description = get_bloginfo( 'description', 'display' );

                                        if ( $ecommerce_online_store_description || is_customize_preview() ) :
                                            ?>
                                            <p class="site-description">
                                                <?php
                                                echo esc_html( $ecommerce_online_store_description ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                ?>
                                            </p>
                                            <?php
                                        endif;
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-header-middle-part">
                            <div class="navigation-menus">
                                <div class="asterthemes-wrapper">
                                    <div class="navigation-part">
                                        <nav id="site-navigation" class="main-navigation">
                                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </button>
                                            <div class="main-navigation-links" style="<?php echo esc_attr( $ecommerce_online_store_menu_text_transform_css ); ?>">
                                                <?php
                                                    wp_nav_menu(
                                                        array(
                                                            'theme_location' => 'primary',
                                                        )
                                                    );
                                                ?>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ( get_theme_mod( 'ecommerce_online_store_enable_search', false ) === true ) { ?>
                            <div class="bottom-header-right-part">
                                <?php if(class_exists('woocommerce')){ ?>
                                    <div class="woo-seach-form">
                                        <form method="get" class="woocommerce-product-search woo-pro-search" action="<?php echo esc_url(home_url('/')); ?>">
                                            <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'ecommerce-online-store'); ?></label>
                                            <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_attr('Search Here','ecommerce-online-store'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
                                            <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                                            <input type="hidden" name="post_type" value="product"/>
                                        </form>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                        <div class="bottom-header-right-part">
                            <?php if(class_exists('woocommerce')){ ?>
                                <div class="user-account">
                                    <?php if ( is_user_logged_in() ) { ?>
                                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','ecommerce-online-store'); ?>"><i class="<?php echo esc_attr(get_theme_mod('ecommerce_online_store_logout_icon', 'fas fa-sign-out-alt')); ?>"></i></a>
                                    <?php } ?>
                                </div>
                            <?php }?>
                            <?php if ( class_exists( 'woocommerce' ) ) {?>
                                <a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','ecommerce-online-store' ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ecommerce_online_store_shopping_cart_icon', 'fas fa-shopping-basket')); ?>"></i> <span class="cart-item-box">( <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?> )</span></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</header>
<?php
if ( ! is_front_page() || is_home() ) {

	if ( is_front_page() ) {

		require get_template_directory() . '/sections/sections.php';
		ecommerce_online_store_homepage_sections();

	}

	?>

	<div id="content" class="site-content">
		<div class="asterthemes-wrapper">
			<div class="asterthemes-page">
			<?php } ?>
