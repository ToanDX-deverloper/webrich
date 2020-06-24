 <?php

// Đoạn này ko xóa---------------->

function check_plugin_keyweb() { if(!is_plugin_active('keyweb/keyweb.php')){ echo '<h1>Cần bật Plugin Keyweb để vận hành website!</h1>'; die();}} add_action( 'wp_head', 'check_plugin_keyweb', 0 ); // Kiểm tra

function mytheme_add_woocommerce_support() {add_theme_support( 'woocommerce' );} add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' ); // Bật hỗ trợ woocommerce

// Hết đoạn ko xóa----------------|



// Register Custom Post Type

function custom_post_type() {

	$labels = array(

		'name'                  => __( 'Dự án'),

		'singular_name'         => __( 'Dự án'),

		'menu_name'             => __( 'Dự án'),

	);

	$args = array(

		'label'                 => __( 'Dự án' ),

		'labels'                => $labels,

		'supports'              => array( 'title', 'editor' , 'thumbnail' , 'revisions' ),

		'public'                => true,

		'show_ui'               => true,

		'show_in_menu'          => true,

		'menu_position'         => 5,

		'show_in_admin_bar'     => true,

		'show_in_nav_menus'     => true,

		'publicly_queryable'    => true,

		'capability_type'       => 'page',

	);

	register_post_type( 'du_an', $args );

}

add_action( 'init', 'custom_post_type', 0 );

// Thay đổi văn bản số sp

remove_filter( 'woocommerce_subcategory_count_html', 'filter_woocommerce_subcategory_count_html', 10, 2 ); 

function filter_woocommerce_subcategory_count_html( $mark_class_count_category_count_mark, $category ) { 

    return ' <span class="count">' . $category->count . ' '.__('Sản phẩm').'</span>'; 

}; 

add_filter( 'woocommerce_subcategory_count_html', 'filter_woocommerce_subcategory_count_html', 10, 2 );

// widgets

function keyweb_widgets_init() {

	register_sidebar( array(

		'name'          => __( 'Filter'),

		'id'            => 'keyweb_filter',

		'before_widget' => '<div id="%1$s" class="block-filter widget %2$s">',

		'after_widget'  => '</div>',

		'before_title'  => '<div class="heading_filter">',

		'after_title'   => '</div>',

	));

	register_sidebar( array(

		'name'          => __( 'Sản phẩm đã xem'),

		'id'            => 'keyweb_product_viewed',

		'before_widget' => '<div id="%1$s" class="block-viewed widget %2$s">',

		'after_widget'  => '</div>',

	));

	register_sidebar( array(

		'name'          => __( 'Từ khóa sản phẩm'),

		'id'            => 'keyweb_product_tag',

		'before_widget' => '<div id="%1$s" class="block-tag widget %2$s">',

		'after_widget'  => '</div>',

	));

	register_sidebar( array(

		'name'          => __( 'Giỏ hàng'),

		'id'            => 'keyweb_box_cart',

		'before_widget' => '<div id="%1$s" class="block-cart widget %2$s">',

		'after_widget'  => '</div>',

	));

}

add_action( 'widgets_init', 'keyweb_widgets_init' );

// Thêm nội dung vào bên dưới content product

// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);

// function woocommerce_template_single_meta() { 

//     wc_get_template( 'single-product/meta.php' ); 

// 	global $product;

// 	$product_id = $product->get_id();

// 	if($product->get_price()>0 && $product->is_in_stock()){ // Có thể mua

// 		$urlQr='https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl='.esc_url(home_url('/')).'cart?add-to-cart='.$product_id.'&choe=UTF-8';

// 	}else{ // Ko thể mua

// 		$urlQr='https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl='.get_permalink($product_id).'&choe=UTF-8';

// 	}

//     echo '<div class="kw-box-contact">'._opt('product_contact').'</div>';

//     echo '<div class="qr-create-cart"><h4>'.__('Tạo nhanh đơn hàng trên điện thoại').':</h4> <img src="'.$urlQr.'"></div>';

// } 

// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 41);



add_action( 'after_setup_theme', 'yourtheme_setup' );

function yourtheme_setup() {

    add_theme_support( 'wc-product-gallery-zoom' );

    add_theme_support( 'wc-product-gallery-lightbox' );

    add_theme_support( 'wc-product-gallery-slider' );

}

// Cấm xóa các trang mặc định

function modify_trash_actions( $actions, $post ) {

	$arr = array(3,6,7,8,9,18,16); // lấy danh sách các mảng trang thuộc post type page cần loại bỏ phần thùng rác (xóa bỏ). 3,6,7,8,9 là các page woocommerce

	if ( $post->post_type == "page" ) // Kiểm tra post type.

		foreach ($arr as $key => $value) {

			if ($post->ID==$value) { // Kiểm tra ID page có đúng với mảng nhập vào hay không.

				unset( $actions['trash'] ); // Loại bỏ phần thùng rác hay loại  bỏ phần (xóa bỏ).

				unset($actions['delete']);

			}

		}

	return $actions; // Trả về action.

}

add_filter( 'page_row_actions', 'modify_trash_actions', 10, 2 ); // Thay đổi action thông qua filter page_row_actions

// Menu cho header location organic_menu
// =====================================
function register_menu(){
	register_nav_menu('organic_menu',__('Organic Menu'));
}
add_action('init','register_menu');

// Menu cho Hỗ trợ khách hàng là các page
// =====================================
function register_menu_htkh(){
	register_nav_menu('htkh_menu',__('Hỗ trợ khách hàng'));
}
add_action('init','register_menu_htkh');

// Menu cho liên kết nhanh footer
// ==============================
function register_menu_clone(){
	register_nav_menu('organic_menu_clone',__('Menu clone menu Organic '));
}

add_action('init','register_menu_clone');


// Hàm chung cho breadscrumb 
// =====================================
add_action('thanh_breadscrumb','get_breadscrumb');
	function get_breadscrumb(){
		?>
			<div id="breadcrumb">
				<div class="breadcrumb-overlay"></div>
				<div class="breadcrumb-content">
					<div class="breadcrumb-title text-center">
						<h2><?php the_title(); ?></h2>
					</div>
					
					 <?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		<?php
	}


// Hàm chung cho breadscrumb xóa của trang shop
// =====================================
add_action('template_redirect', 'remove_shop_breadcrumbs' );
function remove_shop_breadcrumbs(){
 
   
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
   
}

// Hàm tạo sidebar cho trang Shop
// ====================================

function widget_sidebar_shop(){
	/**
	 * Creates a sidebar
	 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	 */
	$args = array(
		'name'          => 'Thanh sidebar cho trang Shop',
		'id'            => 'sidebar-shop',
		'description'   => 'Thanh sidebar bên phải trang ',
		
	);
	
	register_sidebar( $args );
	
}
add_action( 'widgets_init', 'widget_sidebar_shop' );

//  Hàm tạo sidebar cho trang Tin tức
// ================================

function widget_sidebar_news(){
	$args = array(
		'name'          => 'Thanh sidebar cho mục Tin tức',
		'id'            => 'sidebar-news',
		'description'   => 'Thanh sidebar cho mục Tin tức bên phải ',
		
	);
	
	register_sidebar( $args );
	
}


add_action( 'widgets_init', 'widget_sidebar_news' );


// Hiển thị giảm giá theo phần trăm cho sản phẩm 
// =============================================

add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $html, $post, $product ) {
    if( $product->is_type('variable')){
        $percentages = array();

        // Get all variation prices
        $prices = $product->get_variation_prices();

        // Loop through variation prices
        foreach( $prices['price'] as $key => $price ){
            // Only on sale variations
            if( $prices['regular_price'][$key] !== $price ){
                // Calculate and set in the array the percentage for each variation on sale
                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
            }
        }
        // We keep the highest value
        $percentage = max($percentages) . '%';
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();

        $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
    }
    return '<span class="onsale_custom">' . esc_html__( '', 'woocommerce' ) . ' ' . $percentage . '</span>';
}

// Hàm giá mà bạn tiết kiệm được cho sản phẩm đơn giản
// ===================================================
function ts_you_save() {
  
  global $product;

   if( $product->is_type('simple') || $product->is_type('external') || $product->is_type('grouped') ) {
      
     	$regular_price 	= get_post_meta( $product->get_id(), '_regular_price', true ); 
        $sale_price 	= get_post_meta( $product->get_id(), '_sale_price', true );
     
     	if( !empty($sale_price) ) {
  
              $amount_saved = $regular_price - $sale_price;
            
              ?>
              <span style="font-size:16px;color:#333;margin-left: 15px;">( Bạn đã tiết kiệm được <?php echo  $amount_saved; ?> <sup>đ</sup> ) </span>				
              <?php		
        }
   }
}

add_action( 'woocommerce_single_product_summary', 'ts_you_save', 11 );



// Thêm facebook vào sau phần mô tả của sản phẩm 
// =============================================




function add_facebook_social(){
	?>  
		<div class="product-hotline">
			<span><i class="fa fa-phone"></i>Hotline hỗ trợ 24/7: <a href="tel: (+84)934 323 882"> (+84)934 323 882</a></span>
			<span class="icon-space"> | </span>
			<span class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></span>
		</div>
		
	<?php
}
add_action('woocommerce_before_single_variation','add_facebook_social');
add_action('woocommerce_before_add_to_cart_form','add_facebook_social');

// Thay đổi vị trí meta
// =================================
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

//this breaks it
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta_title', 6 );
function woocommerce_template_single_meta_title(){
	global $product;
   ?>
   
   <?php 
    global $product;
	$toan = $product->get_attribute('thuong-hieu');
	if($toan!=""){
		echo "<span>";
		echo "Thương hiệu: "."<span class='custom-brand'>".$toan."</span>";
		echo "</span>";
		echo "<span class='icon-space'>|</span>";
	}
	
    ?>
    
    <span class="product_category">
  		 <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?> 
    </span>
    <span class="icon-space">|</span>
   <span class="product_meta">
	   	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
	      <span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>
	   <?php endif; ?>
   </span>
   <div class="clear-singlepage"></div>
   <?php
}




// Thêm nút mua ngay sau Add to cart 
// Có 2 nút được thêm vào (Chưa biết nguyên nhân), đã dùng css để ẩn đi 1 nút
// ===============================================
add_action('woocommerce_after_add_to_cart_button', 'content_after_addto_cart_button' );
 function content_after_addto_cart_button(){
    global $product;
    ?>
    
    <button type="button" class="btnMore buy_now_button btnBuySingle">
        <?php _e('Mua ngay', 'devvn'); ?>
    </button>
    <input type="hidden" name="is_buy_now" class="is_buy_now" value="0" autocomplete="off"/>
    <script>
        jQuery(document).ready(function(){
            jQuery('body').on('click', '.buy_now_button', function(e){
                e.preventDefault();
                var thisParent = jQuery(this).parents('form.cart');
                if(jQuery('.single_add_to_cart_button', thisParent).hasClass('disabled')) {
                    jQuery('.single_add_to_cart_button', thisParent).trigger('click');
                    return false;
                }
                thisParent.addClass('devvn-quickbuy');
                jQuery('.is_buy_now', thisParent).val('1');
                jQuery('.single_add_to_cart_button', thisParent).trigger('click');
            });
        });
    </script>
    <?php
}
add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url) {
    if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
        $redirect_url = wc_get_checkout_url(); //or wc_get_cart_url()
    }
    return $redirect_url;
}


// Hàm tính số chênh lệch giá của sản phẩm có biến thể 
// ===================================================
//This is how you hook a function called by ajax, in WordPress

add_action("wp_ajax_ts_calc_percentage_saved", "ts_calc_percentage_saved"); // display calculation for logged in users

add_action("wp_ajax_nopriv_ts_calc_percentage_saved", "ts_calc_percentage_saved"); //display for non logged in users


//The function below is called via an ajax script in footer.php
function ts_calc_percentage_saved(){
// The $_REQUEST contains all the data sent via ajax
if ( isset($_REQUEST) ) {
$percentage=0;
$variation_id = sanitize_text_field($_REQUEST['vari_id']);
$variable_product = wc_get_product($variation_id);
$regular_price = $variable_product->get_regular_price();
$sale_price = $variable_product->get_sale_price();

if( !empty($sale_price) ) {

$amount_saved = $regular_price - $sale_price;
$currency_symbol = get_woocommerce_currency_symbol();

$percentage = round($amount_saved);
}
die($percentage);
}
}

//The below code is to shift the price

function ts_shuffle_variable_product_elements(){
if ( is_product() ) {
global $post;
$product = wc_get_product( $post->ID );
if ( $product->is_type( 'variable' ) ) {
remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
add_action( 'woocommerce_before_variations_form', 'woocommerce_single_variation', 20 );

// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
// add_action( 'woocommerce_before_variations_form', 'woocommerce_template_single_title', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_before_variations_form', 'woocommerce_template_single_excerpt', 30 );
}
}
}
add_action( 'woocommerce_before_single_product', 'ts_shuffle_variable_product_elements' );

// Thêm thẻ tag trong single page
// =====================================================================
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'show_tags_again_single_product', 40 );

function show_tags_again_single_product() {
   global $product;
   ?>
   <div class="product_meta">
   <?php echo wc_get_product_tag_list( $product->get_id(), ' ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?> 
   </div>
   <?php
}

//  Thêm tab trong phần mô tả của trang web
// =============================================================
add_filter( 'woocommerce_product_tabs', 'hoangweb_change_tabs_order' );
 
function hoangweb_change_tabs_order( $tabs ) {
    unset( $tabs['additional_information'] ); 
    unset( $tabs['reviews'] );     
	return $tabs;
 
}

/**
 * Tạo tab Xuất xứ sản phẩm
 */
add_filter( 'woocommerce_product_tabs', 'woo_new_origin_tab' );
function woo_new_origin_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['origin_tab'] = array(
		'title' 	=> __( 'Xuất xứ', 'woocommerce' ),
		'priority' 	=> 10,
		'callback' 	=> 'woo_new_origin_tab_content'
	);

	return $tabs;

}


function woo_new_origin_tab_content() {

	// The new tab content
	
    global $product;
	$toan = $product->get_attribute('thuong-hieu');
	if($toan!=""){
		echo "<span>";
		echo "Thương hiệu: "."<span class='custom-brand'>".$toan."</span>";
		echo "</span>";
	}	
}


/**
 * Tạo tab Tiêu chuẩn của sản phẩm
 */
add_filter( 'woocommerce_product_tabs', 'woo_new_standard_tab' );
function woo_new_standard_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['standard_tab'] = array(
		'title' 	=> __( 'Tiêu chuẩn', 'woocommerce' ),
		'priority' 	=> 20,
		'callback' 	=> 'woo_new_standard_tab_content'
	);

	return $tabs;

}
function woo_new_standard_tab_content(){

	// The new tab content

	?>
		<p>Tiêu chuẩn Organic quốc tế </p>
		<p>Chứng nhận an toàn thực phẩm</p>
	<?php
	
}

/**
 * Tạo tab Bình luận facebook của sản phẩm
 */
add_filter( 'woocommerce_product_tabs', 'woo_new_facebook_tab' );
function woo_new_facebook_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['facebook_tab'] = array(
		'title' 	=> __( 'Bình luận', 'woocommerce' ),
		'priority' 	=> 30,
		'callback' 	=> 'woo_new_facebook_tab_content'
	);

	return $tabs;

}
function woo_new_facebook_tab_content(){

	// The new tab content
	?><div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" data-width="" width="100%"></div>
	<?php
	
	
}

// Tính năng sản phẩm đã xem Single Product
// ========================================
add_action('san_pham_da_xem','ham_viewer_product');
function ham_viewer_product(){
	?>
	<h2 class="sp-daxem">Sản phẩm đã xem</h2>
	<div class="view-products">
		<div class="swiper-container">
            <div class="swiper-wrapper swiper-height">
    <?php

    // ================================================================
			 	if(isset($_SESSION["viewed"]) && $_SESSION["viewed"]){
					$data = $_SESSION["viewed"];
					$args = array(
						'post_type' => 'product',
						'post_status' => 'publish',
						'posts_per_page' => 6,
						'post__in'	=> $data
					);

				 $getposts = new WP_query( $args);
				 global $wp_query; $wp_query->in_the_loop = true; 
				 while ($getposts->have_posts()) : $getposts->the_post();
				 global $product; 
				 // Code html
				 // ====================================================
				?>
				<div class="view-product swiper-slide">
					<?php 
						if( $product->is_type('simple') || $product->is_type('external') || $product->is_type('grouped') ){
							 $view_regular 	= get_post_meta( $product->get_id(), '_regular_price', true ); 
			        		 $view_sale 	= get_post_meta( $product->get_id(), '_sale_price', true );
			   				 if($view_sale!=0 && $view_regular!=0){
			   				 	$view_precent=round(100 -($view_sale/$view_regular)*100).'%';
			   				 	echo "<p class='view_sale_flash'>".$view_precent."</p>";
			   				 }
			   				 
						} 
						if($product->is_type('variable')){
							 	$percentages = array();

						        // Get all variation prices
						        $prices = $product->get_variation_prices();

						        // Loop through variation prices
						        foreach( $prices['price'] as $key => $price ){
						            // Only on sale variations
						            if( $prices['regular_price'][$key] !== $price ){
						                // Calculate and set in the array the percentage for each variation on sale
						                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
						            }
						        }
						        // We keep the highest value
						        $percentage = max($percentages) . '%';
						        echo "<p class='view_sale_flash'>".$percentage."</p>";
						}


					?>
					<a href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
					</a>
					<div class="viewr-product-wrapper">
						<h4 ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="price-product"><?php echo $product->get_price_html(); ?></div>
						<a href="<?php bloginfo('url');?>?add-to-cart=<?php the_ID(); ?>" class="viewer-cart"><i class="fa fa-shopping-cart"></i></a>
					</div>
				
				</div>
	            <?php
	// code html end
	// ========================================================
	   endwhile; wp_reset_postdata(); 

	?>
		</div>
		 <div class="swiper-button-next">
		 	<svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
		 </div>
         <div class="swiper-button-prev">
         	<svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true" data-prefix="fa" data-icon="angle-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path></svg>
         </div>  
                 
    </div>
               <script>
					jQuery(document).ready(function($) {
						 var swiper_view = new Swiper('.view-products .swiper-container', {
						 	 spaceBetween: 20,
						 	  slidesPerView:4,
						 	  navigation: {
						        nextEl: '.swiper-button-next',
						        prevEl: '.swiper-button-prev',
						      },
			      			 loop:false,
			    		});
					});
				</script>
	</div>	

	<?php
} else { 
	?>
		<p>Không có sản phẩm nào đã xem!</p>
	<?php
} 

};

// Khởi tạo section trong 
// =============================================
function viewedProduct(){
	session_start();
	if(!isset($_SESSION["viewed"])){
		$_SESSION["viewed"] = array();
	}
	if(is_singular('product')){
		$_SESSION["viewed"][get_the_ID()] = get_the_ID();

	}
}
add_action('wp', 'viewedProduct');


// Thêm nút New với các sản phẩm mới thêm 
// =============================================
add_action( 'woocommerce_before_shop_loop_item_title', 'bbloomer_new_badge_shop_page', 3 );
          
function bbloomer_new_badge_shop_page() {
   global $product;
   $newness_days = 30;
   $created = strtotime( $product->get_date_created() );
   if ( ( time() - ( 60 * 60 * 24 * $newness_days ) ) < $created ) {
      echo '<span class="itsnew">' . esc_html__( 'Mới', 'woocommerce' ) . '</span>';
   }
}


// Gọi fancy box ajax
// =========================================
 add_action('wp_ajax_random', 'random_function');
 add_action('wp_ajax_nopriv_random', 'random_function');
 function random_function() {
 	?> 
	 	<div class="modal-cart-overlay">
	 	</div>
	 	
 		<div class="modal-cart">
			<div class="modal-close">
	 			<i class="fa fa-times"></i>
	 		</div>
			<div class="modal-cart-status">
				<h2>Giỏ hàng của bạn (Đang có <?php echo WC()->cart->cart_contents_count; ?> sản phẩm)</h2>
			</div>
			<div class="modal-cart-content">
				<?php  wc_get_template('cart/cart.php'); ?>
				<div class="continus-shopping">
				
					<svg class="svg-inline--fa fa-reply fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="reply" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M8.309 189.836L184.313 37.851C199.719 24.546 224 35.347 224 56.015v80.053c160.629 1.839 288 34.032 288 186.258 0 61.441-39.581 122.309-83.333 154.132-13.653 9.931-33.111-2.533-28.077-18.631 45.344-145.012-21.507-183.51-176.59-185.742V360c0 20.7-24.3 31.453-39.687 18.164l-176.004-152c-11.071-9.562-11.086-26.753 0-36.328z"></path></svg>
					<span>Tiếp tục mua hàng</span>
				
			</div>
			</div>


 			
 			
 		</div>

 	<?php
   	
die(); }

// Custom số sản phẩm tương tự trang single product
// ===============================================
add_filter( 'woocommerce_output_related_products_args', 'my_custom_related_products');
function my_custom_related_products($args){
	$args = array(
			'posts_per_page' => 8,
			'columns'        => 4,
			'orderby'        => 'rand'// @codingStandardsIgnoreLine.
		);
	return $args;
} 


// Thay đổi Nút đến thanh toán
// =================================
remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 ); 
add_action('woocommerce_proceed_to_checkout', 'sm_woo_custom_checkout_button_text',20);

function sm_woo_custom_checkout_button_text() {
    $checkout_url = WC()->cart->get_checkout_url();
  ?>
       <a href="<?php echo $checkout_url; ?>" class="nut-thanh-toan checkout-button button alt wc-forward"><?php  _e( 'Thanh toán', 'woocommerce' ); ?></a> 
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

//	Hàm khi click sẽ hiển thì minicart 
// =======================================================

if ( ! function_exists( 'kswebvn_cart_link' ) ) {
    function kswebvn_cart_link() {
        ?>
      
          <div class="header_cart">
                        <?php global $woocommerce; ?>
                        <a class="header-cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
                        	<svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" data-prefix="fa" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg>
                        </a>
                        <a class="cart-contents" 
 								title="<?php _e('View your shopping cart', 'woothemes'); ?>">
                                 <?php
                                 
                                  echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);
                                 
                              ?>
                              
                        </a>  

                        <div id="mini-cart-display">
                        	 <?php woocommerce_mini_cart();?>
                        </div>                       
                     
                  	</div>
     
                           
        <?php
    }
}

if ( ! function_exists( 'kswebvn_mini_cart' ) ) {
    function kswebvn_mini_cart() {
        ?>
         <div id="mini-cart-display">
                <?php woocommerce_mini_cart();?>
         </div> 
        <?php
    }
}
if ( ! function_exists( 'kswebvn_cart_link_fragment' ) ) {
    function kswebvn_cart_link_fragment( $fragments ) {
        global $woocommerce;
        ob_start();
        kswebvn_mini_cart();
        $fragments['#mini-cart-display'] = ob_get_clean();
        return $fragments;
    }
}
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
    add_filter( 'woocommerce_add_to_cart_fragments', 'kswebvn_cart_link_fragment' );
} else {
    add_filter( 'add_to_cart_fragments', 'kswebvn_cart_link_fragment' );
}

// Minicart cho Mobile menu
// ================================
if ( ! function_exists( 'kswebvn_mcart_link' ) ) {
    function kswebvn_mcart_link() {
        ?>     
	         <div id="m-minicart-display">
	            	 <?php woocommerce_mini_cart();?>
	         </div>                                               
        <?php
    }
}

if ( ! function_exists( 'kswebvn_mini_mcart' ) ) {
    function kswebvn_mini_mcart() {
        ?>
         <div id="m-minicart-display">
	            	 <?php woocommerce_mini_cart();?>
	         </div> 
        <?php
    }
}
if ( ! function_exists( 'kswebvn_mcart_link_fragment' ) ) {
    function kswebvn_mcart_link_fragment( $fragments ) {
        global $woocommerce;
        ob_start();
        kswebvn_mini_mcart();
        $fragments['#m-minicart-display'] = ob_get_clean();
        return $fragments;
    }
}
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
    add_filter( 'woocommerce_add_to_cart_fragments', 'kswebvn_mcart_link_fragment' );
} else {
    add_filter( 'add_to_cart_fragments', 'kswebvn_mcart_link_fragment' );
}

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


add_action('wp_ajax_search_pro', 'data_fetch');
add_action('wp_ajax_nopriv_search_pro', 'data_fetch');
 function data_fetch(){

 	echo '<ul class="products show">';
 	$list_search = new WP_Query(array(
 		'post_type'=>'product',
 		'post_status'=>'publish',
 		'posts_per_page'=>5,
 		's'=>esc_attr($_POST['val_search']),
 	));
 	while($list_search->have_posts()) : $list_search->the_post();
		 get_template_part('woocommerce/content-product');
 	endwhile;wp_reset_postdata();
 	echo '</ul>';
 }


// end
?>