<?php // File này cho trang home ?>

<?php get_header(); ?>

<div class="main-slide">
	<?php echo do_shortcode( "[smartslider3 slider=4]"); ?>
</div>


<!-- Section cho phần giới thiệu   -->
<!-- ============================= -->
<section id="home-aboutus">
	<div class="wrapper">
		<div class="inner">
			<div class="section-title">
				<h2><?php echo _opt("home_aboutus_title"); ?></h2>
			</div>
			<div class="section-content flex">
				<div class="aboutus-content-left-wrap">

					<?php  for($i=1;$i<=_opt('home_number_aboutus');$i++){?>

						<div class="aboutus-content-left">
							<div class="about-center-img">
								<div class="about-circle">
									<div class="circle circle1"></div>
									<div class="circle circle2"></div>
									<div class="circle circle3"></div>
									<div class="circle circle4"></div>
								</div>
								<img src="<?php echo _opt("home_aboutus_img_$i"); ?>" alt="">
							</div>
							<div class="about-content">
								<div class="about-title"><p><?php echo _opt("home_aboutus_left_text_$i"); ?></p></div>
								<div class="about-desc"><p><?php echo _opt("home_aboutus_left_text2_$i"); ?></p></div>
							</div>
							
							
						</div>
					
					<?php } ?>
				</div>
				<div class="aboutus-content-image">
					<img src="<?php echo _opt("home_content_image"); ?>" alt="">
				</div>
				<div class="aboutus-content-right-wrap">

					<?php  for($i=1;$i<=_opt('home_number_aboutus');$i++){?>

						<div class="aboutus-content-right">
							<div class="about-center-img">
								<div class="about-circle">
									<div class="circle circle1"></div>
									<div class="circle circle2"></div>
									<div class="circle circle3"></div>
									<div class="circle circle4"></div>
								</div>
								<img src="<?php echo _opt("home_aboutus_img1_$i"); ?>" alt="">
							</div>
							<div class="about-content">
								<div class="about-title"><p><?php echo _opt("home_aboutus_right_text_$i"); ?></p></div>
								<div class="about-desc"><p><?php echo _opt("home_aboutus_right_text2_$i"); ?></p></div>
							</div>
							
							
						</div>
					
					<?php } ?>		
				</div>
			</div>
		</div>
	</div>
</section> 

<!-- Section banner 1 -->
<section class="home-banner1">
	<img src="<?php echo _opt("home_banner_img1") ?>" alt="">
	<a href="#">
		<img src="<?php echo _opt("home_banner_img11"); ?>" alt="">
	</a>
	<div class="wrapper">
		<div class="inner">
			<div class="banner1-content">
				<div class="banner1-inner">
					<div class="banner1-text">
						<div class="banner1-text-up"><?php echo _opt("banner1_txt_up"); ?></div>
						<div class="banner1-text-center"><?php echo _opt("banner1_txt_center"); ?></div>
						<div class="banner1-text-down"><?php echo _opt("banner1_txt_down"); ?></div>
					</div>
					<a class="btnHome banner-link" href="#">Xem ngay</a>
				</div>
			</div>	
		</div>
	</div>
</section>

<section id="home-collection" class="top-100">

	<div class="wrapper">
		<div class="inner">
			<div class="section-title">
				<h2><?php echo _opt("home_collection_title"); ?></h2>
			</div>
			<div class="tab">
				<div class="tablinks" data-tab="tab1">Rau hữu cơ</div>
				<div class="tablinks" data-tab="tab2">Hoa quả</div>
				<div class="tablinks" data-tab="tab3">Thực phẩm khô</div>
			</div>
			<div class="tab-item" id="tab1">
				<?php echo do_shortcode('[products limit="8" columns="4" category="rau-huu-co"]');?>
			</div>
			<div class="tab-item" id="tab2">
				
				<?php echo do_shortcode('[products limit="8" columns="4" category="hoa-qua"]');?>
			</div>
			<div class="tab-item" id="tab3">
				<?php echo do_shortcode('[products limit="8" columns="4" category="rau-huu-co"]');?>
			</div>
		</div>
		<script>
			jQuery(document).ready(function($) {
				function activeTab(obj){

					 $('.tab div').removeClass('active');

					 $(obj).addClass('active');
					 

					  var id = $(obj).attr('data-tab');

					  $('.tab-item').hide();

					  $("#"+id).show();
				}
				activeTab($('.tab div:nth-child(2)'));
				$('.tab div').click(function(){
                    activeTab(this);
                    // alert("hello");
                     return false;

                });

			});
		</script>
	</div>
	
</section>

<section id="home-product-featured " class="top-100">
	<div class="wrapper">
		<div class="inner">
			<div class="section-title">
				<h2><?php echo _opt("home_product_featured_title"); ?></h2>
			</div>
			<div class="section-content">
				<!-- <div class="get-id-produtfeat" >
					<?php //echo _opt('get_id_featured'); ?>
				</div> -->
				<div class="product-featured flex">
					<?php 
						$product;
						$test=_opt('get_id_featured');
						$arg =array(
							'post_type'=> 'product',
							'post__in' => explode(',',$test) ,
							'orderby'=> 'DATE',
							'order'=> 'DESC',
							
							);
						$getposts = new WP_query($arg); 
						global $wp_query; $wp_query->in_the_loop = true; 
						while ($getposts->have_posts()) : $getposts->the_post(); 
							?>
								<div class="img-product-featured">
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(_opt('get_id_featured')) );?>" alt="<?php the_title(); ?>" />
								    </a>
								</div>
								<div class="description-product-featured">
									<div class="des-feature">
										<div class="title-feature">
											<a href="<?php the_permalink();?>">
												<?php the_title(); ?>
											</a>
										</div>
										<div class="price-feature flex">
											<div class="fprice-sale">
												<span><?php echo $product->get_sale_price(); ?></span>
												<span><sup>đ</sup></span>
											</div>
											<div class="fprice-normal">
												<span>
													<strike><?php echo  $product->get_regular_price();?></strike>
												</span>
												<span><sup>đ</sup></span>	
											</div>
											
										</div>
										<div class="des-product"><?php the_excerpt(); ?></div>
									</div>
									<div class="f-buy-cart flex">
										<div class="fadd-cart">	
											<a href="<?php bloginfo('url');?>?add-to-cart=<?php echo (int)$test; ?>" product_id="<?php echo (int)$test; ?>" class="btnHome">Thêm vào giỏ</a>
											
										</div>
										<div class="fadd-buy">
											<a href="<?php echo wc_get_checkout_url(); ?>?add-to-cart=<?php echo (int)$test; ?>"  product_id="<?php echo (int)$test; ?>"  class="fBuy">Mua ngay</a>
										</div>
									</div>
								</div>
							<?php
						endwhile;wp_reset_postdata(); 
					?>
					
					
				</div>
			</div>
		</div>
	</div>
</section><!--end section home product -->
<script>
		jQuery(document).ready(function($) {
			$(".btn-gallery-slide-left").click(function(event) {
				$('#home-gallery .swiper-button-prev').trigger('click');
			});
			$(".btn-gallery-slide-right").click(function(event) {
				$('#home-gallery .swiper-button-next').trigger('click');
			});
		});
	</script>

<section id="home-gallery"  class="top-60">
	
	
	<div class="wrapper">
		<div class="inner">
			<div class="">
				<i class="fa fa-long-arrow-left btn-slide btn-gallery-slide-left"></i>
			</div>
			<div class="">
				<i class="fa fa-long-arrow-right btn-slide btn-gallery-slide-right"></i>
			</div>
	
			 <div class="swiper-container">
                 <div class="swiper-wrapper swiper-height">
                 	<?php 
                 		$product;
						$test=_opt('get_id_featured');
						$arg =array(
							'post_type'=> 'product',
							'post__in' => explode(',',$test) ,
							'orderby'=> 'DATE',
							'order'=> 'DESC',
							
							);
						$getposts = new WP_query($arg); 
						global $wp_query; $wp_query->in_the_loop = true; 
						while ($getposts->have_posts()) : $getposts->the_post();

							$post_thumbnail_id = $product->get_gallery_image_ids();
							// echo '<pre>',print_r($post_thumbnail_id),'</pre>';
							// print_r(count($post_thumbnail_id));
							// $img=wp_get_attachment_url($post_thumbnail_id[$i]);

							
						    for($i=0; $i<count($post_thumbnail_id); $i++){ 
		                         ?>
			                         <div class="swiper-slide">
			                            <div class="text-slide">
			                            	<a href="<?php echo wp_get_attachment_url($post_thumbnail_id[$i]); ?>" data-fancybox="gallery">

			                            		<img src="<?php echo wp_get_attachment_url($post_thumbnail_id[$i]); ?>" alt="">
			                              		<div class="overlay-gallery"></div>
			                            	</a>
			                              	
			                            </div>
			                         </div>
		                         <?php
		                      } 
						endwhile;wp_reset_postdata(); 	
                 		
                 	 ?>
                 	
                      
                </div>
                <div class="swiper-button-next"></div>
    		    <div class="swiper-button-prev"></div>  
               	 <div class="swiper-pagination"></div> 
               </div>
              	
		</div>
	</div>
	<script>
		jQuery(document).ready(function($) {
			 var swiper = new Swiper('#home-gallery .swiper-container', {
			 	 spaceBetween: 20,
			 	 slidesPerView: 3,
			 	  navigation: {
			        nextEl: '.swiper-button-next',
			        prevEl: '.swiper-button-prev',
			      },
      			 loop:true,
      			 pagination: {
			        el: '.swiper-pagination'
			     },
    		});

			$('#home-gallery .swiper-container .text-slide a').fancybox();
		});
	</script>
</section>
<script>
	jQuery(document).ready(function($) {
			$(".btn-nhanxet-slide-left").click(function(event) {
				$('.home-nhanxet .swiper-button-prev').trigger('click');
			});
			$(".btn-nhanxet-slide-right").click(function(event) {
				$('.home-nhanxet .swiper-button-next').trigger('click');
			});
		});
</script>

<section class="home-nhanxet top-100" style="background:url(<?php echo _opt("home_nhanxet_background"); ?>);
background-attachment: fixed;
	-moz-background-attachment:fixed;
	-webkit-background-attachment:fixed;
	background-size: cover;
	-moz-background-attachment:cover;
	-webkit-background-attachment:cover;
	background-repeat: no-repeat;	" >
	<div class="wrapper">
		<div class="inner">
			<div class="section-title">
				<h2><?php echo _opt("home_nhanxet_title"); ?></h2>
			</div>
			<div class="section-content">
				<div class="">
					<i class="fa fa-long-arrow-left btn-slide btn-nhanxet-slide-left"></i>
				</div>
				<div class="">
					<i class="fa fa-long-arrow-right btn-slide btn-nhanxet-slide-right"></i>
				</div>
				<div class="swiper-container">
	                 <div class="swiper-wrapper swiper-height">
	                      <?php for($i=1;$i<=_opt('home_number_nhanxet');$i++){ ?>
	                         <div class="swiper-slide">
	                            <div class="text-slide">
	                              
	                              		
											<div class="review-circle">
												<div class="circle circle1"></div>
												<div class="circle circle2"></div>
												<div class="circle circle3"></div>
												<div class="circle circle4"></div>
											</div>
											
										<div class="review-content">
											<div class="review-icon"><i class="fa fa-quote-left"></i></div>
		                              		<div class="review-user"><?php echo _opt("home_nhanxet_user_".$i); ?></div>
		                              		<div class="review-desc"><?php echo _opt("home_nhanxet_desc_".$i); ?></div>
										</div>
	                              		
	                              	
	                            </div>
	                         </div>
	                       <?php } ?>
	                       
	                </div>
	                <div class="swiper-button-next"></div>
	    		    <div class="swiper-button-prev"></div>  
                 	<div class="swiper-pagination"></div> 
               </div>
			</div>
		</div>
	</div>
	<script>
		jQuery(document).ready(function($) {
			 var swiper1 = new Swiper('.home-nhanxet .swiper-container', {
			 	 spaceBetween: 20,
			 	 slidesPerView: 3,
			 	  navigation: {
			        nextEl: '.swiper-button-next',
			        prevEl: '.swiper-button-prev',
			      },
			       pagination: {
			        el: '.swiper-pagination'
			      },
      			 loop:true,
    		});
		});
	</script>
</section>

<section class="home-teamer top-100">
	<div class="wrapper">
		<div class="inner">
			<div class="section-title">
				<h2><?php echo _opt("home_creator_title"); ?></h2>
			</div>
			<div class="teamer-wrapper">
				<?php for( $i=1; $i<4;$i++){ ?>
					<div class="teamer flex">
						<div class="teamer-img"><img src="<?php echo _opt("teamer_img_".$i); ?>" alt="<?php echo _opt("teamer_name_".$i); ?> "></div>
						<div class="teamer-info">
							<div class="teamer-name"> <?php echo _opt("teamer_name_".$i); ?> </div>
							<div class="teamer-position"><?php echo _opt("teamer_position_".$i); ?></div>
							<div class="teamer-content"><?php echo _opt("teamer_content_".$i); ?></div>
							<div class="social-network">
								<a href="<?php echo _opt("social_fb_".$i); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="<?php echo _opt("social_yt_".$i); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
								<a href="<?php echo _opt("social_ins_".$i); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="<?php echo _opt("social_tw_".$i); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
							</div>
							<a href="" class="btnMore">XEM THÊM</a>
						</div>
						
					</div>
				<?php } ?>
			</div>
				

			
		</div>
	</div>
</section>

<!-- Banner 2 -->
<section class="home-banner2 top-100 mr-100" style="background: url(<?php echo _opt("home_banner2_background"); ?>);background-attachment: fixed;
	-moz-background-attachment:fixed;
	-webkit-background-attachment:fixed;
	background-size: cover;
	-moz-background-attachment:cover;
	-webkit-background-attachment:cover;
	background-repeat: no-repeat;	">
	
	<div class="wrapper">
		<div class="inner">
			<div class="banner2-text">
				<div class="banner2-big-text"><?php echo _opt("banner2_big_text"); ?></div>
				<div class="banner2-medium-text"><?php echo _opt("banner2_medium_text"); ?></div>
				<div class="banner2-small-text"><?php echo _opt("banner2_small_text"); ?></div>
				<div class="banner2-sale-text"><?php echo _opt("banner2_sale_text"); ?></div>
				<a href="" class="btnMore">XEM THÊM</a>
			</div>
		</div>
	</div>

</section>

<section class="news-home top-100 mr-100">
	<div class="wrapper">
		<div class="inner">
			<div class="section-title">
				<h2>Tin tức</h2>
				<div class="home-news-wrapper">
					<?php
						$args = array(
					'post_status' => 'publish', // Chỉ lấy những bài viết được publish
					'showposts' => 4, // số lượng bài viết
					
				);
				 $getposts = new WP_query($args); 
				 global $wp_query; $wp_query->in_the_loop = true; 
				 while ($getposts->have_posts()) : $getposts->the_post(); 
				 	?>	
				 		<div class="blog-content">
	 						<div class="blog_img">
				   				<a href="<?php the_permalink(); ?>">
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>" />
							    </a>
							</div>
							<div class="blog-content-item">
								<div class="blog-content-title">
							   		<a href="<?php the_permalink(); ?>">
							   			<p><?php the_title(); ?></p>
							   		</a>
		 						</div>
		 						<div class="blog-content-author">
		 							<p><?php the_author(); ?></p>
		 						</div>
		 						<div class="b-excerpt">
		 							<span><?php echo the_excerpt(); ?></span>
		 							<a href="<?php the_permalink(); ?>">
		 								<span>Xem thêm</span>
		 								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
		 							</a>
		 						</div>
		 						<div class="article-info-relate">

		 							<div class="b-date">
		 								<i class="fa fa-calendar-o" aria-hidden="true"></i>
			 							<span><?php echo get_the_date('d/m/y'); ?></span>
			 						</div>
			 						<div class="count-fbcmt">
										<i class="fa fa-comments-o" aria-hidden="true"></i>
										<span class="fb-comments-count" data-href="https://www.facebook.com/hoilaptrinhviennhandan/posts/253394979344940"></span>
									</div>
		 						</div>
							</div>
						   
						</div>
				 	<?php
				 endwhile; wp_reset_postdata(); 
					?>
				</div>
			</div>
		</div>
	</div>
	
</section>



<?php get_footer(); ?>