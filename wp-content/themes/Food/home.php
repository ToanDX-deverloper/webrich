<?php get_header();?>

<section class="slide">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php bloginfo("template_directory") ?>/img/slide/slide1.jpg" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo("template_directory") ?>/img/slide/slide2.jpg" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo("template_directory") ?>/img/slide/slide3.jpg" alt="">
			</div>
		</div>
		<!-- Add Pagination -->
	    <div class="swiper-pagination"></div>
	    <!-- Add Arrows -->
	    <div class="swiper-button-next"></div>
	    <div class="swiper-button-prev"></div>
	</div>
	<script>
		jQuery(document).ready(function($) {
		   var slide =new Swiper('.slide .swiper-container',{
		   		pagination: {
			        el: '.swiper-pagination',
			       
			    },
			    navigation: {
			        nextEl: '.swiper-button-next',
			        prevEl: '.swiper-button-prev',
			    },
			    loop:true,


		   });
		});
	</script>
</section> <!--end slide -->
<section id="home-info" class="pd-80">
	<div class="wrapper row">
		<div class="col-left ">
			<h2 class="section-title">Tiềm Năng Bất Tận. Kết Nối Một Nhà.</h2>
			<p>Gia đình hỗ trợ lẫn nhau. Khi một thành viên gặp khó khăn, tất cả thành viên trong gia đình sẵn sàng giúp đỡ. Chúng tôi lắng nghe khách hàng, hiểu được nhu cầu và làm việc cùng nhau để đưa ra các giải pháp thực tiễn cho việc kinh doanh của họ. Chúng tôi chuyển giao kinh nghiệm và kiến thức, giúp khách hàng tạo ra những cơ hội mới, phát triển sản phẩm mới, nhận ra các xu hướng, và đảm nhận những thách thức kinh doanh. Nói cách khác, chúng tôi có thể làm tất cả để chăm sóc gia đình mình.</p>
			<a href="/rich-products-viet-nam" class="button-view">Xem thêm</a>
		</div>
		<div class="col-right">
			<ul class="categories">
				<li><img src="<?php bloginfo("template_directory") ?>/img/home_info/150-syrup.png" alt="Sirô Rich's"><h3>Sirô Rich's</h3></li>
				<li><img src="<?php bloginfo("template_directory") ?>/img/home_info/150-kem.png" alt="Kem trang trí, pha chế &amp; nấu ăn"><h3>Kem trang trí, pha chế &amp; nấu ăn</h3></li>
				<li><img src="<?php bloginfo("template_directory") ?>/img/home_info/150-nguyen-lieu.png" alt="Nguyên liệu trang trí bánh &amp; pha chế"><h3>Nguyên liệu trang trí bánh &amp; pha chế</h3></li>
				<li><img src="<?php bloginfo("template_directory") ?>/img/home_info/150-bot-tron.png" alt="Bột trộn"><h3>Bột trộn</h3></li>
			</ul>
		</div>
	</div>
</section><!--end home info-->
<section id="home-video" class="pd-80">
	<div class="container">
		<h2 class="section-title">GIỚI THIỆU TẬP ĐOÀN RICH PRODUCTS</h2>
		<div class="block-video row">
			<iframe width="800" height="450" src="https://www.youtube.com/embed/Hn0TXvmf32Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</section><!--end home video-->
<section id="home-feature-product">
	<div class="feat-next feat ">
		<i class="fa fa-angle-right"></i>
	</div>
	<div class="feat-prev feat fa fa-angle-left"></div>
	<div class="wrapper">
		<h2 class="section-title">Sản phẩm tiêu biểu</h2>
		
		<?php echo do_shortcode('[products limit="4" columns="4" visibility="featured" ]'); ?>
		<script>
			jQuery(document).ready(function($) {
				$('#home-feature-product .woocommerce').addClass('swiper-container');
				$('#home-feature-product .woocommerce .products').addClass('swiper-wrapper');
				$('#home-feature-product .woocommerce .products').after('<div class="swiper-button-next"></div><div class="swiper-button-prev"></div>');
				$('#home-feature-product .woocommerce li').addClass('swiper-slide');
				var slide =new Swiper('#home-feature-product .swiper-container',{
			   		pagination: {
				        el: '.swiper-pagination',
				       
				    },
				    navigation: {
				        nextEl: '.swiper-button-next',
				        prevEl: '.swiper-button-prev',
				    },
				    loop:true,
				    slidesPerView:4

			   });
				$('.feat-next').click(function(event) {
					$('.swiper-button-next').trigger('click');
				});
				$('.feat-prev').click(function(event) {
					$('.swiper-button-prev').trigger('click');
				});
			});
		</script>
	</div>
</section>
<section id="map" class="pd-80 flex">
	<div class="dealership">
		<div class="info">
			<h2>NHÀ PHÂN PHỐI & ĐẠI LÍ</h2>
		</div>
		<div class="dealer-wrapper flex">
			<div class="dealer-left">
				<div class="dealer-tab">
					<div class="tab-link" data-tab="tab1">Bắc Bộ</div>
					<div class="tab-link" data-tab="tab2">Trung Bộ</div>
					<div class="tab-link" data-tab="tab3">Nam Bộ</div>
				</div>
			</div>
			<div class="dealer-right">
				<div class="tab-item" id="tab1">
					<ul>
						<li>
							<p>Công ty TNHH SXTM Ong Vàng</p>
							<p>70 tổ 2, Thạch Cầu, Long Biên, Hà Nội</p>
							<p>0243 514 8966</p>
							<p></p>
						</li>
						<li>
							<p>Công ty TNHH Thương Mại Và Thực Phẩm Sao Việt</p>
							<p>2/77 Trần Nguyên Đán (B9 lô 10) khu đô thị Định Công, Hoàng Mai, Hà Nội</p>
							<p>(024) 3232 3658 hoặc 0983 608 472</p>
							<p>saovietfoods@gmail.com</p>
						</li>
					</ul>
				</div>
				<div class="tab-item" id="tab2">
					<ul>
						<li>
							<p>Công ty TNHH SXTM Ong Vàng</p>
							<p>70 tổ 2, Thạch Cầu, Long Biên, Hà Nội</p>
							<p>0243 514 8966</p>
							<p></p>
						</li>
					</ul>
				</div>
				<div class="tab-item" id="tab3">
					<ul>
						<li>
							<p>Công ty TNHH Thương Mại Và Thực Phẩm Sao Việt</p>
							<p>2/77 Trần Nguyên Đán (B9 lô 10) khu đô thị Định Công, Hoàng Mai, Hà Nội</p>
							<p>(024) 3232 3658 hoặc 0983 608 472</p>
							<p>saovietfoods@gmail.com</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		
		<script>
			jQuery(document).ready(function($) {
				function activeTab(obj) {
					// body...
					$('.dealer-tab div').removeClass('active');
					$(obj).addClass('active');
					var id = $(obj).attr('data-tab');
					$('.tab-item').hide();
					$("#"+id).show();
				}
				activeTab($('.dealer-tab div:first-child'));
				$('.dealer-tab div').click(function(){
                    activeTab(this);
                    // alert("hello");
                     return false;

                });
			});
		</script>
	</div>
	<div class="google-map">
		<iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=21.023150, 105.881381&amp;hl=vi-VN;z=16&amp;output=embed" data-gtm-yt-inspected-10666158_16="true" width="100%" height="596" frameborder="0"></iframe>
	</div>
</section><!--end hệ thống cửa hàng-->
<section id="contact" class="pd-top40">
	<div class="wrapper flex">
		<div class="info">
			<h2 class="pb-40 mr-bt40">Liên hệ</h2>
			<p class="line mb-40 mr-bt40"><i>Vui lòng để lại thông tin liên hệ &amp; thắc mắc của bạn, chúng tôi sẽ phản hồi trong thời gian sớm nhất.</i></p>
			<h3>RICH PRODUCTS VIỆT NAM</h3>
			<p class="address">Tầng 15, Tòa nhà Xổ Số Kiến Thiết<br>77 Trần Nhân Tôn, Phường 9, Quận 5, Tp. Hồ Chí Minh<br>Tel: 028 3866 4789 - Fax: +84 28 3866 2679<br>Email: ChamSocKhachHang@rich.com</p>
		</div>
		<div class="form-contact">
			<form method="post">
				<input name="name" type="text" required="required" placeholder="Họ tên">
				<input name="email" type="email" required="required" placeholder="Email">
				<input name="phone" type="text" placeholder="Số điện thoại">
				<input name="company" type="text" placeholder="Tên doanh nghiệp (nếu có)">
				<textarea name="message" placeholder="Hãy để lại yêu cầu của bạn."></textarea>
				<button type="submit" name="send_email" value="default">Gửi yêu cầu</button>
			</form>
		</div>
	</div>
</section><!--end contact-->
<section id="service">
	<div class="wrapper">
		<h2 class="section-title">Những giá trị chúng tôi mang lại</h2>
		<div class="service-wrapper flex">
			<div class="service">
				<img src="<?php bloginfo("template_directory") ?>/img/icon1.png" alt="">
				<h4 class="sv_title mt-40">Luôn làm điều phải</h4>
				<p class="sv_info">Chúng tôi duy trì và tuân thủ các chuẩn mực đạo đức, đồng thời luôn phấn đấu trở thành những công dân tốt trong xã hội.</p>
			</div>
			<div class="service">
				<img src="<?php bloginfo("template_directory") ?>/img/icon1.png" alt="">
				<h4 class="sv_title mt-40">Luôn làm điều phải</h4>
				<p class="sv_info">Chúng tôi duy trì và tuân thủ các chuẩn mực đạo đức, đồng thời luôn phấn đấu trở thành những công dân tốt trong xã hội.</p>
			</div>
			<div class="service">
				<img src="<?php bloginfo("template_directory") ?>/img/icon1.png" alt="">
				<h4 class="sv_title mt-40">Luôn làm điều phải</h4>
				<p class="sv_info">Chúng tôi duy trì và tuân thủ các chuẩn mực đạo đức, đồng thời luôn phấn đấu trở thành những công dân tốt trong xã hội.</p>
			</div>

		</div>
		<div class="service-wrapper flex">
			<div class="service">
				<img src="<?php bloginfo("template_directory") ?>/img/icon1.png" alt="">
				<h4 class="sv_title mt-40">Luôn làm điều phải</h4>
				<p class="sv_info">Chúng tôi duy trì và tuân thủ các chuẩn mực đạo đức, đồng thời luôn phấn đấu trở thành những công dân tốt trong xã hội.</p>
			</div>
			<div class="service">
				<img src="<?php bloginfo("template_directory") ?>/img/icon1.png" alt="">
				<h4 class="sv_title mt-40">Luôn làm điều phải</h4>
				<p class="sv_info">Chúng tôi duy trì và tuân thủ các chuẩn mực đạo đức, đồng thời luôn phấn đấu trở thành những công dân tốt trong xã hội.</p>
			</div>
			<div class="service">
				<img src="<?php bloginfo("template_directory") ?>/img/icon1.png" alt="">
				<h4 class="sv_title mt-40">Luôn làm điều phải</h4>
				<p class="sv_info">Chúng tôi duy trì và tuân thủ các chuẩn mực đạo đức, đồng thời luôn phấn đấu trở thành những công dân tốt trong xã hội.</p>
			</div>
			
		</div>
		<div class="clear"></div>
		
	</div>
</section>
<?php get_footer();?>