<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
	
	<section class="related products">
		
				<h2 class="sp-lien-quan"><?php esc_html_e( 'Sản phẩm liên quan', 'woocommerce' ); ?></h2>
				
					<?php woocommerce_product_loop_start(); ?>
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php foreach ( $related_products as $related_product ) : ?>
									<div class="swiper-slide">
										<?php
										 	$post_object = get_post( $related_product->get_id() );

											setup_postdata( $GLOBALS['post'] =& $post_object );

											wc_get_template_part( 'content', 'product' ); ?>

									</div>

								<?php endforeach; ?>
								
							</div>
							<div class="swiper-button-next">
								<svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
							</div>
							<div class="swiper-button-prev">
								<svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true" data-prefix="fa" data-icon="angle-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path></svg>
							</div>
						</div>
					<?php woocommerce_product_loop_end(); ?>
						
	</section>
	<script>
		jQuery(document).ready(function($) {
			var related_product = new Swiper('.related .swiper-container',{
				navigation:{
					nextEl: '.swiper-button-next',
					 prevEl: '.swiper-button-prev',
				},
				loop:false,
				spaceBetween:20,
				slidesPerView:4,
			})
		});
	</script>
<?php endif;

wp_reset_postdata();
