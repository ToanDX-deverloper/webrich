	 <?php _kw_get_lib('swiper');  ?>

	<footer id="footer">
		<div class="wrapper">
			<div class="inner">
				<div class="ft-subscribe flex">
					<div class="ft-sub-left">
						<p>Đăng ký nhận tin từ chúng tôi</p>
						<span>Vui lòng nhập email để nhận các thông tin mới nhất từ chúng tôi</span>
					</div>
					<div class="ft-sub-right ">
						<?php echo do_shortcode( '[contact-form-7 id="496" title="form-subcribe"]' ); ?>
					</div>
					<script>
						jQuery(document).ready(function($) {
							jQuery(".ft-sub-right form p span:after").click(function(event) {
								// jQuery(this).closet('p').find('wpcf7-submit').trigger('click');
								alert("hello");
							});
						});
					</script>
				</div>
				<div class="ft-logo text-center">
					<img src="<?php echo _opt("logo"); ?>" alt="">
				</div>	
				<div class="ft-social-network">
					<a href="<?php echo _opt("ft_linkfb"); ?> " target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="<?php echo _opt("ft_linkins"); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="<?php echo _opt("ft_linkyt"); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
					<a href="<?php echo _opt("ft_linktw"); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
					
				</div>	
				<div class="ft-allbox ">
					<div class="wrapper">
						<div class="inner flex">
							<div class="ftbox-contact">	
								<h2>LIÊN HỆ</h2>
								<p><i class="fa fa-map-marker"></i><?php echo _opt("ft_diachi");?></p>
								<a href="tel:0385157444"><i class="fa fa-phone"></i><span><?php echo _opt("header_phone"); ?></span></a>	
								<a href="mailto:hotro@keyweb.vn"><i class="fa fa-envelope-o"></i><span><?php echo _opt("header_email"); ?></span></a>					
							</div>
							<div class="ftbox-htkh">
								<h2>HỖ TRỢ KHÁCH HÀNG</h2>
								<div class="htkh-menu">
									<?php wp_nav_menu( array( 'theme_location' => 'htkh_menu' ) ); ?>
								</div>
							</div>
							<div class="ftbox-linkfast">
								<h2>LIÊN KẾT NHANH</h2>
								<?php wp_nav_menu( array( 'theme_location' => 'organic_menu_clone' ) ); ?>
							</div>
							<div class="ftbox-gallery">
								<h2>GALLERY</h2>
								<div class="ft-gallery-wrap">
									<?php for($i=1;$i<=_opt('home_number_gallery');$i++){ ?>
									 	<div class="ft-gallery-item">
									 		<a href="<?php echo _opt("home_gallery_img_".$i); ?>" data-fancybox="gallery">
									 			<img src="<?php echo _opt("home_gallery_img_".$i); ?>" alt="">
									 			<div class="overlayft-gallery"></div>
									 		</a>
									 		
									 	</div>
			                              				
			                        <?php } ?>
								</div>
								 
							</div>	
							<script>
								jQuery(document).ready(function($) {
									$('.ftbox-gallery .ft-gallery-itemr .text-slide a').fancybox();
								});
							</script>						
						</div>
					</div>				
				</div>	

			</div>
		</div>
	</footer>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
	
	<!-- Copyright  -->
	<div class="ft-copyright text-center">
		<p><?php echo _opt("ft_copyright"); ?></p>
	</div><!---copyright div end-->

	<div id="mobile-custom-navigation">
		<div class="mobile-navi-wrapper flex">
			<div class="m-newsproduct">
				<div class="mobile-nav-item">
					<a href="<?php echo home_url(); ?>">
						<i class="fa fa-tag"></i>
						<p class="m-title">Hàng mới</p>
					</a>
					
				</div>
			</div>
			<div class="m-saleproduct">
				<div class="mobile-nav-item">
					<a href="<?php echo home_url(); ?>">
						<i class="fa fa-gift"></i>
						<p class="m-title">Khuyến mãi</p>
					</a>
					
				</div>
			</div>
			<div class="m-account">
				<div class="mobile-nav-item">
					<a href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>">
						<i class="fa fa-user"></i>
						<p class="m-title">Tài khoản</p>
					</a>
					
				</div>
			</div>
			<div class="m-contact">
				<div class="mobile-nav-item">
					<a href="<?php echo home_url()?>/lien-he ">
						<i class="fa fa-volume-control-phone"></i>
						<p class="m-title">Liên hệ</p>
					</a>
					
				</div>
			</div>
			<div class="m-cart">
				<div class="mobile-nav-item">
					<a href="<?php echo wc_get_cart_url(); ?>">
						<i class="fa fa-shopping-cart m-cart-wrapper">
							<span class="mobile-count-cart"></span>
						</i>
						
						<p class="m-title">Giỏ hàng</p>
					</a><!--end tag a-->
					<script>
						jQuery(document).ready(function($) {
							m_cart=$('a.cart-contents').html();
							$('.mobile-count-cart').html(m_cart);
						});
					</script>
				</div>
			</div>
		</div>
	</div>

	<?php _kw_get_lib('font-awesome-4.7.0'); ?>
	<?php get_template_part('zkw_addon'); ?>
	<?php _kw_get_lib('fancybox'); ?>
	<?php wp_footer(); ?> 
	<script>
		jQuery(document).ready(function($) {
				$('.them_cart').click(function(event) {
		
		/* Act on the event */
		$(this).closest('.product').find('.add_to_cart_button').css('color', 'red').trigger('click');
		setTimeout(function(){
		 	$.ajax({ // Hàm ajax
           type : "post", //Phương thức truyền post hoặc get
           dataType : "html", //Dạng dữ liệu trả về xml, json, script, or html
           url : '<?php echo admin_url('admin-ajax.php');?>', // Nơi xử lý dữ liệu
           data : {
                action: "random", //Tên action, dữ liệu gởi lên cho server
           },
           beforeSend: function(){
                // Có thể thực hiện công việc load hình ảnh quay quay trước khi đổ dữ liệu ra

           },
           success: function(response) {
                //Làm gì đó khi dữ liệu đã được xử lý
                $('.display-cart').html(response); // Đổ dữ liệu trả về vào thẻ &lt;div class="display-post"&gt;&lt;/div&gt;
            //     $.fancybox.open({

		          //   src: '.display-post',

		          //   type: 'inline'

		          // });

		          	
		          	$('.display-cart').addClass('display-modelcart').css('display', 'block');
		          	$('.modal-close').click(function(event) {
						$(this).closest('.display-modelcart').css('display', 'none');
					})
					$('.continus-shopping').click(function(event) {

						$(this).closest('.display-modelcart').css('display', 'none');
					})
					
           	},
           error: function( jqXHR, textStatus, errorThrown ){
                //Làm gì đó khi có lỗi xảy ra
                console.log( 'The following error occured: ' + textStatus, errorThrown );
           }
       });
		}, 500);
		
		});

		 
	
	});
	</script>
	<div class="display-cart"></div>

	<script>
		jQuery(document).ready(function($) {

			$(document).find('.search-form-wrapper #search-form').keyup(function() {
    	
        var val_search = $(this).val();

      	// alert(val_search)
        if (val_search.length > 0) {
            $.ajax({
                type: "POST",
                dataType: "html",
                url: '<?php echo admin_url('admin-ajax.php');?>',
                data: {
                    action: "search_pro",
                    val_search: val_search,
                },
                // context: this,
                beforeSend: function() {
                    $('.search-form-wrapper').find('.search_ajax').show().addClass('radius_search2');

                    $('.search-form-wrapper').addClass('radius_search');
                    $('.loading_search').show();
                },
                success: function(response) {
           				
                    	  $('.loading_search').hide();
                        $('.title_search_ajax').html('<span class="suggestion-product"> Sản phẩm gợi ý</span>');
                        $('.content_search_ajax').html(response);
                       
                  		
                      
                    
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('The following error occured: ' + textStatus, errorThrown)
                }
            })
        } else {
            $(this).parents('.search-form-wrapper').find('.search_ajax').hide();
            $('.search-form-wrapper').find('.search_ajax').removeClass('radius_search2');
            $('.search-form-wrapper').removeClass('radius_search');
            $('.content_search_ajax').html("<span class='suggestion-product'>Không tìm kiếm thấy sản phẩm nào</span>");

        }

        
    	}); // end keyup event
	});// end Ready
	</script>

</body>
</html>