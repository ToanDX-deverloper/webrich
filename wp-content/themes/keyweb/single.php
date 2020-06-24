<?php // File này cho trang post ?>
<?php get_header(); ?>
<?php do_action(thanh_breadscrumb); ?>
<div class="full-row full-content">
	<div id="primary" class="inner-content inner-container">
		<!-- <?php //get_sidebar(); ?> -->
		<div class="wrapper news-single">
			<div class="inner">
				<main id="main" class="content-wrap two-sidebar" role="main">
					<header class="entry-header">
						<div class="s-posttitle">
							<?php the_title( '<p class="archive-heading">', '</p>' ); ?>
						</div>
						<div class="s-info">
							<div class="s-info-left">
								<div class="s-postdate">
									<i class="fa fa-calendar-o" aria-hidden="true"></i>
									<?php echo get_the_date('d/m/y'); ?>
								</div>
								<div class="count-fbcmt">
									<i class="fa fa-comments-o" aria-hidden="true"></i>
									<span class="fb-comments-count" data-href="https://www.facebook.com/hoilaptrinhviennhandan/posts/253394979344940"></span>
								</div>
								<div class="s-post-author">
									<i class="fa fa-user-o" aria-hidden="true"></i>
									<?php the_author(); ?>
								</div>

							</div>
							<div class="s-info-right">
								<span class="fb-like" data-href="https://www.facebook.com/Share-for-you-everything-Website-105907227444461" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></span>
							</div>
							
						</div>
											
					</header>
					<div class="entry-content">
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
							endwhile; endif;
						?>
					</div>
					
					
					
					
				</main>
				<div class="s-sidebar-news">
						<?php get_template_part( sidebar, news ); ?>
						<div class="bai-viet-lienquan">
						<?php
						/*
						 * Code hiển thị bài viết liên quan trong cùng 1 category
						 * Code by levantoan.com
						 */
						$categories = get_the_category(get_the_ID());
						if ($categories){
						    echo '<div class="relatedcat">';
						    $category_ids = array();
						    foreach($categories as $individual_category) 
						    $category_ids[] = $individual_category->term_id;
						    $args=array(
						        'category__in' => $category_ids,
						        'post__not_in' => array(get_the_ID()),
						        'posts_per_page' => 5, // So bai viet dc hien thi
						    );
						    $my_query = new wp_query($args);
						    if( $my_query->have_posts() ):
						        echo '<h3>Các tin khác</h3><ul>';
						        while ($my_query->have_posts()):$my_query->the_post();
						            ?>
						            <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
						            <?php
						        endwhile;
						        echo '</ul>';
						    endif; wp_reset_query();
						    echo '</div>';
						}
						?>
					</div>
				</div>
			</div><!--end inner-->
		</div><!--end wrapper-->
		
		<!-- <?php //get_sidebar('two'); ?> -->
	</div>
</div>	

<?php get_footer(); ?>