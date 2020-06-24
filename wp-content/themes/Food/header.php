<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <link
         rel="stylesheet"  type="text/css"
         href="<?php bloginfo("template_directory")?>/css/Font-Awesome-4.7.0/css/font-awesome.min.css"
      />
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/header.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/common.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/footer.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/swiper.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/swiper.min.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/home.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/archive.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/sidebar1.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/cart.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/w-common.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/gioi-thieu.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/quantity.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/prod-single.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/form-checkout.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory")?>/css/order.css">
    <!--   <link rel="stylesheet" type="text/css" href="<?php //bloginfo("template_directory")?>/css/bootstrap4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php //bloginfo("template_directory")?>/css/bootstrap4/js/bootstrap.min.js"> -->

      <?php wp_head();?>
   </head>
   
   <body <?php body_class('woocommerce');?>>
      <section id="header" class="flex">
         <div class="logo">
               <a href="<?php echo home_url(); ?>">
                  <img src="<?php bloginfo("template_directory")?>/img/logo.png" alt="">
               </a>
            
         </div>
         <div class="main-menu-wrapper flex">
            <div class="main-menu">
               <?php wp_nav_menu(
                   array(
                     'theme_location'  => 'menu',
            
               ) ); ?>
            </div>
            <div class="main-cart">
               <?php global $woocommerce; ?>
                           <a class="header-cart" href="<?php echo wc_get_cart_url(); ?>">
                              <svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" data-prefix="fa" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg>
                           </a>
                           <a class="cart-contents" 
                           title="<?php _e('View your shopping cart', 'woothemes'); ?>">
                                    <?php
                                    
                                     echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);
                                    
                                 ?>
                                 
                           </a>                  
                          <!--  <div id="mini-cart-display">
                               <?php //woocommerce_mini_cart();?>
                           </div>  -->                      

            </div>
         </div>
         
      </section>
<div class="clearfix"></div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?php bloginfo("template_directory") ?>/js/swiper.min.js"></script>
<script src="<?php bloginfo("template_directory") ?>/js/main.js"></script>
<script src="<?php bloginfo("template_directory") ?>/js/quantity.js"></script>