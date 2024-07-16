<?php

if ( ! get_theme_mod( 'ecommerce_online_store_enable_service_section', false ) ) {
	return;
}

$args = '';

ecommerce_online_store_render_service_section( $args );

/**
 * Render Service Section.
 */
function ecommerce_online_store_render_service_section( $args ) { ?>
	<section id="ecommerce_online_store_trending_section" class="asterthemes-frontpage-section trending-section trending-style-1">
		<?php
		if ( is_customize_preview() ) :
			ecommerce_online_store_section_link( 'ecommerce_online_store_service_section' );
		endif; ?>

		<div class="asterthemes-wrapper">
			<div class="row">
				<?php $ecommerce_online_store_trending_product_heading = get_theme_mod( 'ecommerce_online_store_trending_product_heading', '' );
				?>
				<div class="col-lg-8 col-md-7">
					<div class="trending-product">
						<?php if ( ! empty( $ecommerce_online_store_trending_product_heading ) ) { ?>
							<div class="header-contact-inner">
								<h3><?php echo esc_html( $ecommerce_online_store_trending_product_heading ); ?></h3>
							</div>
						<?php } ?>
						<div class="row">
							<?php $ecommerce_online_store_catData = get_theme_mod('ecommerce_online_store_trending_product_category','');
				      		if ( class_exists( 'WooCommerce' ) ) {
					        $args = array(
					          'post_type' => 'product',
					          'posts_per_page' => 100,
					          'product_cat' => $ecommerce_online_store_catData,
					          'order' => 'ASC'
					        );?>
						        <?php $loop = new WP_Query( $args );
						        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						        	<div class="col-lg-4 col-md-6">
							          	<div class="tab-product">
							            	<figure class="product-image">
								              	<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
								              	<?php if ( has_post_thumbnail() ) { ?>
								                    <?php woocommerce_show_product_sale_flash( $product ); ?>
								                <?php }?>
								                <div class="box-content intro-button">
								              		<?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
							          			</div>
							              	</figure>
						        			<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
						          			<h5 class="product-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
						        			<h6 class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></h6>
							          	</div>
							        </div>
						        <?php endwhile; wp_reset_query(); ?>
				      		<?php } ?>
				      	</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-5">
					<?php $ecommerce_online_store_new_arrival_heading = get_theme_mod( 'ecommerce_online_store_new_arrival_heading', '' );
					?>
					<div class="new-arrival">
						<?php if ( ! empty( $ecommerce_online_store_new_arrival_heading ) ) { ?>
							<div class="header-contact-inner">
								<h3><?php echo esc_html( $ecommerce_online_store_new_arrival_heading ); ?></h3>
							</div>
						<?php } ?>
						<?php $ecommerce_online_store_catData = get_theme_mod('ecommerce_online_store_new_arrival_category','');
			      		if ( class_exists( 'WooCommerce' ) ) {
					        $args = array(
					          'post_type' => 'product',
					          'posts_per_page' => 100,
					          'product_cat' => $ecommerce_online_store_catData,
					          'order' => 'ASC'
					        );?>
		        			<div class="product-box"> 
						        <?php $loop = new WP_Query( $args );
						        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?> 
							        <div class="tab-product tab-box">
							          	<div class="row">
							          		<div class="col-lg-4 col-md-4 align-self-center">
								            	<figure class="product-image">
									              	<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
									              	<?php if ( has_post_thumbnail() ) { ?>
									                    <?php woocommerce_show_product_sale_flash( $product ); ?>
									                <?php }?>
								              	</figure>
								            </div>
								            <div class="col-lg-8 col-md-8 align-self-center">
							        			<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
							          			<h5 class="product-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
							        			<h6 class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></h6>
							        		</div>
						          		</div>
						          	</div>
				        		<?php endwhile; wp_reset_query(); ?>
				      		</div>
			      		<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
}
