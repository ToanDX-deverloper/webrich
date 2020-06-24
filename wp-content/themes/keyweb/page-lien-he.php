<?php // File này cho trang liên hệ ?>

<?php get_header(); ?>


<?php do_action(thanh_breadscrumb); ?>

<div class="wrapper">

	<div id="primary" class="inner">

		<main id="main" class="content-wrap" role="main">

			<div class="lien-he-contact flex">
				<div class="contact contact-address">
					<div class="contact-title">
						<div class="contact-icon">
							<i class="fa fa-map-marker"></i>
						</div>
						<h4><?php echo _opt('lh_diachi_title'); ?></h4>
					</div>
					<div class="contact-content">
						<?php echo _opt("ft_diachi");?>
					</div>
				</div>
				<div class="contact contact-phone">
					<div class="contact-title">
						<div class="contact-icon">
							<i class="fa fa-phone"></i>
						</div>
						<h4><?php echo _opt('lh_phone_title'); ?></h4>
					</div>
					<div class="contact-content">
						<a href="tel:0385157444"><?php echo _opt("header_phone"); ?></a>	
					</div>
				</div>
				<div class="contact contact-email">
					<div class="contact-title">
						<div class="contact-icon">
							<i class="fa fa-envelope-o"></i>
						</div>
						<h4><?php echo _opt('lh_email_title'); ?></h4>
					</div>
					<div class="contact-content">
						<a href="mailto:hotro@keyweb.vn"><?php echo _opt("header_email"); ?></a>
					</div>
				</div>
			</div>

			<div class="form-contact">
				<div class="form-contact-title">
					<h4>LIÊN HỆ</h4>
				</div>
				<div class="lhform-contact-content">
					<?php echo do_shortcode( '[contact-form-7 id="562" title="form cho trang liên hệ"]'); ?>
				</div>
			</div>
			<div class="lh-map">
				<?php echo _opt("lienhe_map"); ?>
			</div>
		

		</main>

	</div>

</div>	

<?php get_footer(); ?>