<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="google-site-verification" content="<?php echo _opt('google_verification'); ?>" />
	<title><?php is_front_page() ? _e('Trang chủ') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<?php wp_head(); ?>
	<?php get_template_part('zkw_dynamic_css'); ?>
</head>

<body <?php body_class('woocommerce'); ?>>

	<header id="header">
		<div class="wrapper">
			<div class="inner">
				<div class="flex header-top">
					<div class="flex header-top-left">
						<a href="tel:0385157444"><i class="fa fa-phone"></i><span><?php echo _opt("header_phone"); ?></span></a>
						<a href="mailto:hotro@keyweb.vn"><i class="fa fa-envelope-o"></i><span><?php echo _opt("header_email"); ?></span></a>
						<a href="javascript:void(0);"><i class="fa fa-clock-o"></i><span><?php echo _opt("header_times"); ?></span></a>
						
					</div>
					<div class="flex header-top-right">
						<a href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>" class="hd-login"><span>Đăng nhập</span></a>
						<a href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>?register_s=1" class="hd-register"><span>Đăng kí</span></a>
						<div class="header_cart">
	                        <?php global $woocommerce; ?>
	                        <a class="header-cart" >
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
					</div>
			</div><!--end header-top-->
			<div class="line"></div>
			<div class="logo-menu ">
				<div class="wrapper">
					<div class=" ">
						
						<div class="main-menu">
							<div class="header-logo">
								<?php if(_opt('logo')){
									$src_logo = _opt('logo');
								}else{
									$src_logo = get_template_directory_uri().'/css/images/no-logo.png';
								} ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(bloginfo('name')); ?>">
									<img class="site-logo" src="<?php echo $src_logo; ?>" title="<?php echo esc_attr(bloginfo('name')); ?>" alt="<?php echo esc_attr(bloginfo('name')); ?>" />
								</a>
							</div><!--end header-logo-->
							<div class="menu-search">
								<?php wp_nav_menu( array( 'theme_location' => 'organic_menu' ) ); ?>
								<div class="header-search">
							<a id="show_search_smart" href="javascript:void(0)">
								<svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
									<path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
								</svg><!-- <i class="fa fa-search" aria-hidden="true"></i> -->
							</a>
							<div class="search-form-wrapper">
								<form role="search" method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
									<input id="search-form" type="text" value="" name="s"  autocomplete="off" class="app_search search-field" placeholder="<?php echo __('Gõ từ khóa cần tìm'); ?>" />
									<input type="hidden" name="post_type" value="product">
									<button type="submit" class="search-submit" value=""><i class="fa fa-search" aria-hidden="true"></i></button>

								</form>
								<div class="search_ajax">
									<div class="loading_search">
											<i class="fa fa-spinner" aria-hidden="true"></i>
									</div>
								

									<div class="title_search_ajax"></div>
									<div class="content_search_ajax"></div>
									<!-- <a href="#show_kq_searh" title="" class="show_kq_seacrh_all"></a> -->
								</div>
							</div><!--end search form-->
							
						</div><!--end header search-->
							</div>
							
							
						</div>
						
					</div>
				</div>
			

			</div> <!--end logo-menu-->
				
			</div> <!--end inner-->
			
		</div><!-- end wrapper-->
	</header>
	<div class="mobile-menu"> <!--start mobile-menu-->
					<div class="wrapper">
						<div class="inner">
							<div class="m-logo">
						<?php if(_opt('logo')){
								$src_logo = _opt('logo');
							}else{
								$src_logo = get_template_directory_uri().'/css/images/no-logo.png';
							} ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(bloginfo('name')); ?>">
								<img class="site-logo" src="<?php echo $src_logo; ?>" title="<?php echo esc_attr(bloginfo('name')); ?>" alt="<?php echo esc_attr(bloginfo('name')); ?>" />
							</a>
					</div>
					<div class="m-menu-right flex">
							
						<div class="m-cart-menu">
							 <a class="cart-contents" 
	 								title="<?php _e('View your shopping cart', 'woothemes'); ?>">
	                                 <?php
	                                 
	                                  echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);
	                                 
	                              ?>
	                              
	                        </a>  
	                        <svg class="svg-inline--fa fa-shopping-bag fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="shopping-bag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z"></path></svg>
							   
						</div>
						<div class="micon-menu">
							<span>Menu</span>
							<i class="fa fa-bars" aria-hidden="true"></i>

						</div>
						<div class="m-overlay"></div>
						<div class="m-menu">

								<div class="m-close">
									<i class="fa fa-times"></i>
								</div>
								<div class="search-form-wrapper">
									<form role="search" method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
										<input id="search-form" type="text" value="" name="s"  autocomplete="off" class="app_search search-field" placeholder="<?php echo __('Gõ từ khóa cần tìm'); ?>" />
										<input type="hidden" name="post_type" value="product">
										<button type="submit" class="search-submit" value=""><i class="fa fa-search" aria-hidden="true"></i></button>

									</form>
									<div class="search_ajax">
										<div class="loading_search">
												<i class="fa fa-spinner" aria-hidden="true"></i>
										</div>
									

										<div class="title_search_ajax"></div>
										<div class="content_search_ajax"></div>
										<!-- <a href="#show_kq_searh" title="" class="show_kq_seacrh_all"></a> -->
									</div>
								</div>
								<div class="m-organic">
										<?php wp_nav_menu( array( 'theme_location' => 'organic_menu' ) ); ?>	
								</div>
								
							
							
						</div>
	
						</div><!--end m-menu-right-->
						<div id="m-minicart-display">
	                        	 <?php woocommerce_mini_cart();?>
	                     </div> 
	                     <script>
	                     	jQuery(document).ready(function($) {
	                     		$('.m-cart-menu').click(function(event) {

	                     			$(this).closest('.mobile-menu').find('#m-minicart-display').toggle();

	                     		});
	                     	});
	                     </script>
						</div>
					</div>
					
					
				</div> <!--end mobile-menu-->
	


<script type='text/javascript'>
jQuery(document).ready(function($) {
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop()>50) {
			
			jQuery('#header').addClass('sticky-menu');
			$('.header-top').css('display', 'none');;
			$('.line').css('display', 'none');;
			$('.logo-menu ').css('margin-top', '0px');
			$('.header-logo a img ').css('width', '100px');
			
		} else {
			jQuery('#header').removeClass('sticky-menu');
			$('.header-top').css('display', 'flex');
			$('.line').css('display', 'block');
			$('.logo-menu ').css('margin-top', '30px');
		}
	});
});
</script>
				
	
		
			
			
 




