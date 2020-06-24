<?php // File này cho các trang, category, achive, tag ?>
<?php get_header(); ?>

<div id="breadcrumb">
				<div class="breadcrumb-overlay"></div>
				<div class="breadcrumb-content">
					<div class="breadcrumb-title text-center">
						<h2><?php single_cat_title(); ?></h2>
					</div>
					
					 <?php woocommerce_breadcrumb(); ?>
				</div>
			</div>

<div class="wrapper news-archive">
	<div class="inner">
	
		<div class="blog-archive">
			<div class="blog-archive-title">
				<p><?php single_cat_title(); ?></p>
			</div>
			<div class="blog-archive-item">
				<?php
				$categories = get_the_category(get_the_ID());
				$category_ids = array();
			    foreach($categories as $individual_category) 
			    $category_ids[] = $individual_category->term_id;
			    $args=array(
			        'category__in' => $category_ids,
			        // 'post__not_in' => array(get_the_ID()),
			        'posts_per_page' => 5, // So bai viet dc hien thi
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
				 		<!-- <h2><?php //echo get_the_date(); ?></h2> -->
				 	<?php
				 endwhile; wp_reset_postdata(); 
			?>
			</div>
			
		</div>
		<div class="b-archive-right">
			<?php get_template_part( sidebar,news ); ?>
		</div>
	</div><!--end wrapper-->
</div><!--end wrapper-->




<?php get_footer(); ?>