<style type="text/css">



<?php if(_opt('css_fixed_menu')===true){ ?>

@media only screen and (min-width: 1100px) {

.full-header {

	position: sticky;

	top: 0;

}

}

<?php } ?>

/* Màu chính */

<?php if(_opt('css_main_color')!=''){ ?>

.full-footer-bottom, 

.full-header-top, 

.search-submit, 

.heading_box, 

#menu-sidebar a:hover, 

.woocommerce .widget_price_filter .price_slider_amount .button,

.woocommerce ul.products li.product a.button.product_type_simple,

.divider,

input.wpcf7-form-control.wpcf7-submit,

.woocommerce.widget_shopping_cart .buttons a.checkout

{

	background: <?php echo _opt('css_main_color'); ?> !important;

}

#menu-sidebar a, 

h3.home_slogan, 

.home-box-category h3, 

.home-box-category p.view-all a, 

.home-box-du-an h3, 

.home-box-du-an-right h4 span, 

.home-box-du-an .swiper-slide h3,

.woocommerce ul.products li.product-category .woocommerce-loop-category__title, .woocommerce ul.products li.product-category .woocommerce-loop-product__title, .woocommerce ul.products li.product-category h3,

.home-box-tin-tuc h3, 

.home-box-tin-tuc h4, 

.home-box-kh-danhgia h3, 

.kh-danhgia-content, 

.tagcloud a, 

.block-sidebar .item-detail h4.title, 

.block-sidebar .item-detail .item-date,

.heading_filter, 

ul.yith-wcan-list li a, 

ul.yith-wcan-list li::before, 

h1.woocommerce-products-header__title.page-title, 

.woocommerce .woocommerce-breadcrumb a,

.woocommerce ul.products li.type-product .woocommerce-loop-category__title, .woocommerce ul.products li.type-product .woocommerce-loop-product__title, .woocommerce ul.products li.type-product h3,

.woocommerce div.product .product_title,

section.related.products h2,

.woocommerce .content-wrap .woocommerce-breadcrumb a,

.lien-he-left h3, .lien-he-right h3,

.content-lienhe h4,

h4.archive-heading,

.item_post h4,

.woocommerce ul.cart_list li a span, .woocommerce ul.product_list_widget li a span,

.woocommerce .woocommerce-mini-cart-item.mini_cart_item a

{

	color: <?php echo _opt('css_main_color'); ?> !important;

}

.woocommerce ul.products li.product-category:hover, .woocommerce-page ul.products li.product-category:hover,

#menu-sidebar a,

.block-filter,

.block-sidebar .item-post,

.woocommerce ul.products li.type-product, .woocommerce-page ul.products li.type-product,

.woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li img,

.woocommerce .woocommerce-breadcrumb,

.block-sidebar .item-images,

.woocommerce ul.cart_list li, .woocommerce ul.product_list_widget li,

.control-sidebar

{

	border-color: <?php echo hex2rgba(_opt('css_main_color'), 0.6); ?> !important;

}

<?php } ?>

/* Màu thứ cấp */

<?php if(_opt('css_sub_color')!=''){ ?>

.full-footer,

.woocommerce ul.products li.product-category:hover .woocommerce-loop-category__title, .woocommerce ul.products li.product-category:hover .woocommerce-loop-product__title, .woocommerce ul.products li.product-category:hover h3,

.home-box-du-an .swiper-slide a:hover h3

{

	background: <?php echo _opt('css_sub_color'); ?> !important;

}

<?php } ?>

/* Màu tương phản */

<?php if(_opt('css_rev_color')!=''){ ?>

.heading_box

{

	border-color: <?php echo _opt('css_rev_color'); ?> !important;

}

.home-box-kh-thanthiet h3,

.home-box-category p.view-all,

h3.home_slogan,

.kh-thanthiet-img

{

	border-color: <?php echo hex2rgba(_opt('css_rev_color'), 0.6); ?> !important;

}

<?php } ?>

</style>



