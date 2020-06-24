jQuery(document).ready(function($) {


	$('.xem-truocsp').on('click',function(event) {
		
		/* Act on the event */
		$(this).closest('.product').find('.yith-wcqv-button').trigger('click');
	});

	// Danh mục sản phẩm 
	// ==================
	$('#woocommerce_product_categories-2 .widgettitle').click(function(event) {
		$(this).toggleClass('bieu-tuong');
  		$('#woocommerce_product_categories-2 .product-categories').slideToggle(400);
	});
	
	// Lọc theo giá
	//=============== 
	$('#woocommerce_price_filter-2 .widgettitle').click(function(event) {
		$(this).toggleClass('bieu-tuong');
  		$('#woocommerce_price_filter-2 .price_slider_wrapper').slideToggle(400);
	});

	// Xuất xứ
	// ===================
	$('#yith-woo-ajax-navigation-7 .widgettitle').click(function(event) {
		$(this).toggleClass('bieu-tuong');
  		$('#yith-woo-ajax-navigation-7 .yith-wcan-list').slideToggle(400);
	});
	
	// Màu sắc
	// ====================
	$('#yith-woo-ajax-navigation-6 .widgettitle').click(function(event) {
		$(this).toggleClass('bieu-tuong');
  		$('#yith-woo-ajax-navigation-6 .yith-wcan-color').slideToggle(400);
	});

    
	// Thêm thuộc tính cho phần màu sắc
	// ==================
	// $( ".yith-wcan-color li" ).each(function() {
	//   $( this ).append('<p class="mau-sacJS">'+ $(this).find('a').attr('title')+'</p>');
	// });
	$('.next').html("");
	$('.prev').html("");

	$('.header_cart').click(function(e) {
		var container =$(this).find('#mini-cart-display');
		// $(this).find('#mini-cart-display').toggleClass('show-minicartsp');
		// if (!container.is(e.target) && container.has(e.target).length === 0)
	 //    {
	 //        container.hide();
	   container.toggleClass('show-minicartsp');
	});

	$('.mini-closesp').on('click',function(event) {
		
		 // e.preventDefault();
		 $(this).closest('#mini-cart-display').hide();
		 // $(this).closest('#mini-cart-display').removeClass('show-minicartsp');
	});

	// Xử lí cho search form
	// ========================================

	// $("#search-form").keyup(function(){ // bắt sự kiện khi gõ từ khóa tìm kiếm
 //        clearTimeout(timeout); // clear time out
 //        timeout = setTimeout(function (){
 //           fetchResults(); // gọi hàm ajax

 //        }, 500);
 //    });
	
   // Thanh search phần menu
   $('#show_search_smart').click(function(event) {
   	$(this).closest('.header-search').find('.search-form-wrapper').toggle().addClass('active_search');
   });


   // Ẩn hiện review order
   // ===========================
    $('.show_order_review').click(function(){
      $('.hide_order_review').hide();
      $(this).parent().parent().find('.woocommerce-checkout-review-order-table').show();
       $('.hide_order_review').show();
       $(this).hide();
    });
    $('.hide_order_review').click(function(){
      $(this).parent().parent().find('.woocommerce-checkout-review-order-table').hide();
      $('.show_order_review').show();
      $(this).hide();


    });

    $('.update-cart-custom').click(function(event) {
    	$('.nut-update-first').trigger('click');
    });

 //    $('.single-product .flex-control-thumbs').addClass('swiper-container');
 //    $('.single-product .flex-control-thumbs li').addClass('swiper-slide');
   
 //    $('.single-product .flex-control-thumbs').append("<div class='swiper-button-next'></div>");
 //    $('.single-product .flex-control-thumbs').append("<div class='swiper-button-prev'></div>");

	//  var swiper = new Swiper('.single-product .flex-control-thumbs.swiper-container', {
	//  	 spaceBetween: 20,
	//  	 slidesPerView: 3,
	//  	  navigation: {
	//         nextEl: '.swiper-button-next',
	//         prevEl: '.swiper-button-prev',
	//       },
	// 		 loop:true,
	// 		 pagination: {
	//         el: '.swiper-pagination'
	//      },
	// });
	// // 
	$('.fadd-buy a').on('click',function(event) {
		
		// $('.fadd-cart a').trigger('click').css('color', 'red');
		// alert('2');
	});

});// end
