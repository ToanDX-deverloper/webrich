<?php // File này cho trang hệ thống cửa hàng ?>

<?php get_header(); ?>


<?php do_action(thanh_breadscrumb); ?>

<div class="wrapper">

	<div id="primary" class="inner">

		<main id="main" class="content-wrap" role="main">
			<div class="page-title">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="content-page">


				<?php for($i=1;$i<=_opt("number_htch");$i++){ ?>

					<div class="shop-system">
						<div class="shop-system-img">
							<img src="<?php echo _opt("htch_img_".$i); ?>" alt="">
						</div>
						<div class="shop-system-address">
							<a href="<?php echo _opt("htch_map_".$i); ?>" target="_blank">
								<i class="fa fa-map-marker"></i>
								<span><?php echo _opt("htch_name_address_".$i); ?></span>
							</a>
						</div>
						<div class="shop-system-phone">	
							<a href="tel:<?php echo _opt("htch_phone_".$i); ?>">
								<i class="fa fa-phone"></i>
								<span><?php echo _opt("htch_phone_".$i); ?></span>
							</a>
						</div>
					</div>

				<?php }; ?>

			</div>
		</main>
	</div>
</div>

<?php get_footer(); ?>
