<?php

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>
<li <?php wc_product_class( '', $product ); ?>>

	
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	
   
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
	// the_excerpt();
    

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	

	do_action( 'woocommerce_after_shop_loop_item_title' );
	
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	
	do_action( 'woocommerce_after_shop_loop_item' );
	

	?>
	<div id="single-customsp">
		<div class="tensp-custom">
			<?php global $product;
				$tensp_custom=$product->get_name();
				$url = get_permalink( $product_id );
				echo "<a href='$url'>".$tensp_custom."</a>";
			?>
		</div>
		<div class="giasp-custom">

			<?php global $product;
				
				if( $product->is_type('simple') || $product->is_type('external') || $product->is_type('grouped') ) {
					$giasp_regular=$product->get_regular_price();
					$giasp_sale=$product->get_sale_price();
					if($giasp_regular && $giasp_sale){
						echo "<span class='giasp-thuong'>"."<strike>".number_format($giasp_regular)."</strike>"."<sup>đ</sup></span>";
						echo "<span class='giasp-sale'>".number_format($giasp_sale)."<sup>đ</sup></span>";
					}
					else if($giasp_regular && !$giasp_sale){
						echo "<span class='giasp-thuong'>".number_format($giasp_regular)."<sup>đ</sup></span>";
					}
					
				} else
				if($product->is_type('variable')){
					$price_varibles = array();

			        // Get all variation prices
			        $prices = $product->get_variation_prices();
			         foreach( $prices['price'] as $key => $price ){
		            // Only on sale variations
			            if( $prices['regular_price'][$key] !== $price ){
			                // Calculate and set in the array the percentage for each variation on sale
			                $price_varibles[] = $prices['sale_price'][$key];
			            }
			        }
			        // We keep the highest value
			        $max_variable = max($price_varibles);
			        $min_variable= min($price_varibles);
			        echo "<span class='giasp-minvariable'>".number_format($min_variable)."<sup>đ</sup></span>";
			        echo " - ";
			        echo "<span class='giasp-maxvariable'>".number_format($max_variable)."<sup>đ</sup></span>";

				}

				
			?>
		</div>
		
		<div class="sp-action">
			
				
			
				<button class="them_cart"><i class="fa fa-shopping-cart"></i></button>
				<button class="xem-truocsp"><i class="fa fa-search-plus"></i></button>
			
			
				<a class="buynow-archive mua-ngay" href="/checkout/?add-to-cart=<?php echo get_the_ID(); ?>">
                   Mua ngay
                </a>
			
		</div>
		
	</div>
</li>


