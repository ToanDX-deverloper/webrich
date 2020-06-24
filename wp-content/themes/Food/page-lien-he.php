<?php get_header(); ?>

	<h2 class="section-title pd-top40">Liên hệ</h2>
	<section id="map" class="pd-40 flex">
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


<?php get_footer(); ?>