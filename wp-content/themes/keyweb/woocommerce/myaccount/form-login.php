<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if (isset($_GET['register_s'])) {
	$register_s = $_GET['register_s'];
}  
else{
	$register_s = "";
}


do_action( 'woocommerce_before_customer_login_form' ); ?>


<div class="u-columns col2-set" id="customer_login">

	<?php 
	if ($register_s == 1) {
		?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h2 class="headding_login"><span><?php esc_html_e( 'Tạo tài khoản', 'woocommerce' ); ?></span></h2>

				<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

					<?php do_action( 'woocommerce_register_form_start' ); ?>

					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<!-- <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
							<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"  placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
						</p>

					<?php endif; ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<!-- <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
						<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
					</p>

					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<!-- <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
							<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" name="password" id="reg_password" autocomplete="new-password" />
						</p>

						<?php else : ?>

							<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

						<?php endif; ?>

						<?php do_action( 'woocommerce_register_form' ); ?>

						<p class="register_btn">
							<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
							<br>
							<span class="btn_login_r">
								<button type="submit" class="login_submit_btn" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
							</span>
							<span class="re_login">
								<a href="?register_s=">Đăng nhập</a>
							</span>
						</p>

						<?php do_action( 'woocommerce_register_form_end' ); ?>

					</form>

				</div>
			</div>
		<?php }elseif ($register_s == 2) {?>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<?php 
					do_action( 'woocommerce_before_lost_password_form' );
					?>
					<h2 class="headding_login"><span><?php esc_html_e( 'Lấy lại mật khẩu', 'woocommerce' ); ?></span></h2>

					<form method="post" class="woocommerce-ResetPassword lost_reset_password">

						<p class="text-lostpass"><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>

						<p class="lost-pass-input">
							<!-- <label for="user_login"><?php esc_html_e( 'Username or email', 'woocommerce' ); ?></label> -->
							<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" placeholder="<?php esc_html_e( 'Username or email', 'woocommerce' ); ?>" autocomplete="username" />
						</p>

						<div class="clear"></div>

						<?php do_action( 'woocommerce_lostpassword_form' ); ?>

						<p class="lost-pass-btn">
							<input type="hidden" name="wc_reset_password" value="true" />
							<button type="submit" class="login_submit_btn" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
						</p>
						
						<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>


					</form>
					<div class="register">
						 <a href="?register_s=" class="back-to">Quay lại</a>
					</div>
					<?php
					do_action( 'woocommerce_after_lost_password_form' );
					?>

				</div>
			</div>
		<?php  } else{?>
			<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<h2 class="headding_login"><span><?php esc_html_e( 'Đăng Nhập', 'woocommerce' ); ?></span></h2>

					<form class="woocommerce-form woocommerce-form-login login" method="post">

						<?php do_action( 'woocommerce_login_form_start' ); ?>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<!-- <label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
							<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" placeholder="<?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
						</p>
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<!-- 	<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
							<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" id="password" autocomplete="current-password" />
						</p>

						<?php do_action( 'woocommerce_login_form' ); ?>

						<p class="form-row btn_login">
							<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
								<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
								<span class="checkbox"></span>
							</label>
							<br>
							<span class="btn_login_r">
								<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
								<button type="submit" class="login_submit_btn" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
							</span>
						</p>
						<p class="woocommerce-LostPassword lost_password">
							<a href="?register_s=2"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
						</p>

						<?php do_action( 'woocommerce_login_form_end' ); ?>

					</form>
					<div class="register">
						Bạn chưa có tài khoản. Đăng ký <a href="?register_s=1" class="dang-ki">Tại đây</a>
					</div>
				</div>
			</div>
		<?php } ?>


	</div>

