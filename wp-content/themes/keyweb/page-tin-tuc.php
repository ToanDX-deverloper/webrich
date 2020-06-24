<?php // File này cho các trang, category, achive, tag ?>
<?php get_header(); ?>

<?php do_action(thanh_breadscrumb); ?>

<div class="wrapper news-all ">
	<div class="inner">
		
			<div class="news-left">
		<?php 
	$args=array(
		'taxonomy' => 'category',
		'hide_empty'=> 0,
		'include'=> array(19,95,96),
		'orderby'=> 'include',
	);
	$_termss=get_terms($args);

	// echo '<pre>',print_r($_termss),'</pre>';
	
	// $test=array();
	
	foreach ($_termss as $term) {

		// echo $term->name;
		// echo '<a href="'.get_term_link($term->term_id).'" title="'.$term->name.'">Xem tất cả</a>';
		?>
		<div class="blog-title">
			<div class="b-title blogcustom-title"><?php echo $term->name; ?></div>
			<div class="b-view-more blogcustom-title">
				<a href="<?php echo get_term_link($term->term_id); ?>" title="<?php echo $term->name; ?>">
					<span>Xem tất cả</span>
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</a>
				

			</div>
			<div class="b-line">
			</div>
		</div>

		<div class="swiper-container" id="<?php echo $term->slug; ?>">
		 	<div class="swiper-wrapper">
		<?php
		
		
		
	$bien=array(
	   		'post_status' => 'publish', // Chỉ lấy những bài viết được publish
			'showposts' => 6,
			'cat'=> $term->term_id,
	   );
	    $getposts = new WP_query($bien); 
		 global $wp_query; $wp_query->in_the_loop = true; 
		 while ($getposts->have_posts()) : $getposts->the_post(); 
		 	?>
		 				<div class="swiper-slide">
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
			 			</div>
		 					
		 				
		 		
		 		<!-- <h2><?php //echo get_the_date(); ?></h2> -->
		 	<?php
		 endwhile; wp_reset_postdata(); 
		 ?>	
		 	
			</div><!--end div swiper wrapper-->
			<div class="swiper-button-next">
				<svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
			</div>
		    <div class="swiper-button-prev">
		    	<svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true" data-prefix="fa" data-icon="angle-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path></svg>
		    </div>  
			</div><!--end div swiper container-->

		<?php
	} //end foreach
	



	
?>	</div><!--end newsleft-->
	<div class="newsclear"></div>
	<div class="news-right">
		<?php get_template_part( sidebar,news ); ?>
	</div>

	</div><!--end innner-->
	
</div><!--end wrapper-->

<script>
		jQuery(document).ready(function($) {
			var tintuc = new Swiper('.news-all .swiper-container',{
				spaceBetween:30,
				slidesPerView:2,
				navigation: {
			        nextEl: '.swiper-button-next',
			        prevEl: '.swiper-button-prev',
			      },

			});
		});
		
	</script>



<?php get_footer(); ?>