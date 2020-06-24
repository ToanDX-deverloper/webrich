
<?php
/*============================================================================= */
// Hàm dùng để thay đổi tiêu đề của trang
	function setup_theme(){
		add_theme_support('title-tag');
		$colors = array(
			'default-color' => '000000',
		);
		add_theme_support( 'custom-background', $colors );// tùy chỉnh màu sắc cho trang web
		add_theme_support( 'woocommerce' ); //hỗ trợ woocommerce
		add_theme_support('wc-product-gallery-zoom');// hỗ trợ chức năng zoom
		add_theme_support('wc-product-gallery-lightbox'); // hỗ trợ gallery woocommerce
		add_theme_support('wc-product-gallery-slider'); 

	}
	add_action('after_setup_theme','setup_theme');

/*============================================================================= */
// Tạo menu chính cho trang 

	function register_menu(){
		register_nav_menu('menu',__('Menu chính cho trang web'));
		
	}
	add_action('init','register_menu');

/*============================================================================= */
// Hàm thay đổi icon của breadcrum

// $args = array(
// 	'delimiter' => '',
// 	'before'=> '<span class="caret_icon"></span>'
	
// );
// $argstest = array(
// 	'delimiter' => '',
// 	'before'=> '<span class="icon1"></span>'
	
// );


// Xóa breadscrum woocomerece trong trang cửa hàng
add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
	
/*============================================================================= */
 // Thêm widget (side bar )cho trang điều khiển 
 function arphabet_widgets_init() {

	register_sidebar( array(
	  'name'          => 'Thanh sidebar',
	  'id'            => 'sidebar',
	  ));
	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );



/*============================================================================= */
 // Thêm widget (side bar )cho trang tin tức
 function arphabet_widgets_init_post() {

	register_sidebar( array(
	  'name'          => 'Thanh sidebar cho tin tức',
	  'id'            => 'sidebar-tin-tuc',
	  ));
	}
	add_action( 'widgets_init', 'arphabet_widgets_init_post' );

/*============================================================================= */
// Cài đặt số sản phẩm trên 1 hàng
// Từ khóa loop shop columns
// add_filter('loop_shop_columns', 'loop_columns');
//     if (!function_exists('loop_columns')) {
//     function loop_columns() {
//              return 3; // 3 products per row
//     }
// }

/*============================================================================= */
// Thay đổi text của sale
add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_text', 10, 3);
function woocommerce_custom_sale_text($text, $post, $_product)
{
    return '<span class="onsale1" style="">Sale</span>';
}

/*============================================================================= */
// Thay đổi vị trí của giá, nút mua giỏ hàng
 
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

 
// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 10 );
// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 30 );
remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs' , 10);

	
// *=================================================*
// Thanh breadscrumb cho trang web
add_action('thanh_breadscrumb','get_breadscrumb');
	function get_breadscrumb(){
		?>
				<div class="bread">
					<?php woocommerce_breadcrumb(); ?>	
				</div>
							
		<?php
	}


// Hàm hiển thị số lượng sản phẩm trên giỏ hàng
// =============================================
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
function woocommerce_header_add_to_cart_fragment( $fragments ) {
 global $woocommerce;
 ob_start();
 ?>
 <a class="cart-contents" 
 	title="<?php _e('View your shopping cart', 'woothemes'); ?>">
         <?php

         echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);
          ?>
 </a>
 <?php
 $fragments['a.cart-contents'] = ob_get_clean();
 return $fragments;
}


// Thêm mô tả vào trong trang woocommerce store
function woocommerce_after_shop_loop_item_title_short_description() {
	global $product;

	if ( ! $product->post->post_excerpt ) return;
	?>
	<div itemprop="description">
		<?php echo apply_filters( 'woocommerce_short_description', $product->post->post_excerpt ) ?>
	</div>
	<?php
}
add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_after_shop_loop_item_title_short_description', 5);


// Custom checkout fields
// ===============================================================
add_filter( 'woocommerce_checkout_fields' , 'my_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function my_override_checkout_fields( $fields ) {

     unset($fields['billing']['billing_company']); 
     // unset($fields['billing']['billing_first_name']); 
     unset($fields['billing']['billing_last_name']); 
     unset($fields['billing']['billing_postcode']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_address_2']);
     unset($fields['billing']['billing_state']);
    unset($fields['order']['order_comments']);
    unset($fields['shipping']['shipping_first_name']);    
    unset($fields['shipping']['shipping_last_name']);  
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);
    unset($fields['shipping']['shipping_country']);
    unset($fields['shipping']['shipping_state']);

    $fields['billing']['billing_first_name']['priority'] = 10;
    $fields['billing']['billing_first_name']['required'] = false;
    
    $fields['billing']['billing_email']['priority'] = 20;
    $fields['billing']['billing_email']['label'] ='';
  	$fields['billing']['billing_email']['placeholder'] ='Email';
  	$fields['billing']['billing_email']['required'] =false;
   


    $fields['billing']['billing_phone']['priority'] = 30;
    $fields['billing']['billing_phone']['label'] ='';
    $fields['billing']['billing_phone']['placeholder'] ='Số điện thoại';
    $fields['billing']['billing_phone']['required'] =false;
  
    $fields['billing']['billing_address_1']['priority'] = 40;
    $fields['billing']['billing_address_1']['label'] ='';
    $fields['billing']['billing_address_1']['placeholder'] ='Đia chỉ';
    $fields['billing']['billing_address_1']['required']= false;


    $fields['billing']['billing_city']['priority'] = 50;
    $fields['billing']['billing_city']['label'] ='';
    $fields['billing']['billing_city']['placeholder'] ='Thành phố';
    $fields['billing']['billing_city']['required'] =false;
     // unset($fields['billing']['billing_city']);

    
    return $fields;
}

add_filter( 'woocommerce_checkout_fields','custom_name' );
// Hook đến họ tên
function custom_name( $fields ){
	$fields['billing']['billing_first_name'] = array (
		'label' => __( '', 'woocommerce' ),
		'placeholder'   => _x('Họ và tên', 'woocommerce'),
		
		'class' =>array ('ho-va-ten')
	);

	return $fields;

}

// Thêm hình ảnh cho sản phẩm trang checkout
// ===========================================
add_filter( 'woocommerce_cart_item_name', 'ts_product_image_on_checkout', 10, 3 );
 
function ts_product_image_on_checkout( $name, $cart_item, $cart_item_key ) {
     
    /* Return if not checkout page */
    if ( ! is_checkout() ) {
        return $name;
    }
     
    /* Get product object */
    $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
 
    /* Get product thumbnail */
    $thumbnail = $_product->get_image();
 
    /* Add wrapper to image and add some css */
    $image = '<div class="ts-product-image" style="width: 64px; height: 64px; display: inline-block; padding-right: 7px; vertical-align: middle;">'
                . $thumbnail .
            '</div>'; 
 
    /* Prepend image to name and return it */
    return $image . $name;
}


// <!--end function.php-->