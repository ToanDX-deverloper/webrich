<?php


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if (isset($_GET['step'])) {
    $step = $_GET['step'];
}
else{
    $step = "";
}


do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
    echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
    return;
}

?>
 <div class="breadcrum-wrap1">
        <div class="wrapper">
            <h1 class="logo-text"><?php echo bloginfo('title'); ?></h1>
                 <?php woocommerce_breadcrumb($args); ?>
        </div>              
    </div>


<div class="full-checkout">
    <?php if ($step==""): ?>

        <form name="checkout-1" method="post" class="checkout-tu-tao " action="<?php echo esc_url( wc_get_checkout_url() ); ?>?step=2" 
        enctype="multipart/form-data">
            <!-- <div class="page_title"><h1>Suplo Baby - Hệ thống cửa hàng thời trang và đồ dùng cho các bé</h1></div> -->
            <?php if ( $checkout->get_checkout_fields() ) : ?>

                <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                <div class="col2-set" id="customer_details">
                    <div class="col-1">
                        <?php do_action( 'woocommerce_checkout_billing' ); ?>
                    </div>
                </div>

                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

            <?php endif; ?>

        </form>


        <form name="checkout" method="post" class="checkout woocommerce-checkout woocommerce-checkout-tao checkout-2" 
        action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
            
            <?php if ( $checkout->get_checkout_fields() ) : ?>

                <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                <div class="col2-set" id="customer_details">
                    <div class="col-1">
                        <?php do_action( 'woocommerce_checkout_billing' ); ?>
                    </div>
                </div>

                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

            <?php endif; ?>

            <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>



            <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

            <div id="order_review" class="woocommerce-checkout-review-order">
                <!--    <h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3> -->
                <div class="order_review_toggle_mobile">
                    <a  class="show_order_review"> Hiển thị thông tin đơn hàng <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <a  class="hide_order_review"> Ẩn thông tin đơn hàng <i class="fa fa-angle-up" aria-hidden="true"></i></a>
                    <p class="total-mobile"><?php wc_cart_totals_order_total_html(); ?></p>
                </div>
                <?php do_action( 'woocommerce_checkout_order_review' ); ?>
            </div>

            <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

        </form>


        <?php elseif ($step=="2"): ?>
            <form name="checkout" method="post" class="checkout woocommerce-checkout woocommerce-checkout-step2" 
            action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

                <?php if ( $checkout->get_checkout_fields() ) : ?>

                    <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                    <div class="col2-set" id="customer_details">
                        <!-- <div class="page_title"><h1>Suplo Baby - Hệ thống cửa hàng thời trang và đồ dùng cho các bé</h1></div> -->
                        <div class="col-1">
                            <?php do_action( 'woocommerce_checkout_billing' ); ?>
                        </div>
                        <h3 class="tilte_phuongthuc">Phương thức vận chuyển</h3>
                        <div class="phuongthuc_ship">       
                            <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
                            <?php wc_cart_totals_shipping_html(); ?>
                        <?php endif; ?>

                    </div>
                    <h3 class="tilte_phuongthuc">Phương thức thanh toán</h3>
                    <div class="phuongthuc_thanhtoan">
                        <div id="payment" class="woocommerce-checkout-payment">
                        
                            </div>

                        </div>
                        <div class="wrap-cart">
                            <button class="dat_hang_full phuong-thuc" >Đặt hàng</button>
                            <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="gio-hang">Quay lại thông tin thanh toán</a>
                            



                            <script>
                                jQuery(document).ready(function () {
                                    jQuery('.dat_hang_full').click(function () {
                                        jQuery(this).parents('#customer_details').find('#place_order').trigger('click');
                                    });
                                });
                            </script>


                        </div>
                    </div>

                    <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

                <?php endif; ?>

                <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>



                <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                <div id="order_review" class="woocommerce-checkout-review-order">
                    <!-- <h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3> -->
                    <div class="order_review_toggle_mobile">
                        <a class="show_order_review"> Hiển thị thông tin đơn hàng <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="hide_order_review"> Ẩn thông tin đơn hàng <i class="fa fa-angle-up" aria-hidden="true"></i></a>
                        <p class="total-mobile"><?php wc_cart_totals_order_total_html(); ?></p>
                    </div>
                    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                </div>

                <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

            </form>
        <?php endif ?>

        <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
        <div class="clear"></div>
    </div>