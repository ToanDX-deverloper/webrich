<?php // File này cho trang Search ?>
<?php get_header(); ?>
<div class="full-row full-content">
	<div id="primary" class="inner-content inner-container">
		<?php get_sidebar(); ?>
		<main id="main" class="content-wrap two-sidebar" role="main">
			<?php if(have_posts()){ ?>
				<h4 class="archive-heading"><?php printf( __( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h4>
				<div class="entry-content">
				<?php while ( have_posts() ) : the_post(); ?>

			        <div class="item_post">
						<a href="<?php echo get_permalink(); ?>">
							<div class="item_post_img">
								<?php if(has_post_thumbnail()): ?>								
										<?php echo get_the_post_thumbnail(get_the_ID(),'medium');?>
								<?php else: 
									$args = array('post_type' => 'attachment','numberposts' => 5,'post_parent' => get_the_ID());
									$attachments = get_posts( $args );
									if( $attachments ){
										foreach( $attachments as $attachment ) {
											echo wp_get_attachment_image( $attachment->ID, 'full' );
											break;
										}
									}else{
										echo '<img src="'.get_bloginfo('template_url').'/css/images/no-preview-400x400.jpg" alt="no-images" >';
									}
									endif;
								?>
							</div>
							<div class="item_post_content">
								<h4><?php the_title(); ?></h4> 
								<div class="post_date">Ngày đăng: <?php echo get_the_date('d/m/Y'); ?></div>
								<div class="post_excerpt"><?php the_excerpt(); ?></div>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
				</div>
			<?php
			the_posts_pagination(array('mid_size'  => 1,));
			}else{
				echo 'No post';
			} 
			?>
		</main>
		<?php get_sidebar('two'); ?>
	</div>
</div>	
<?php get_footer(); ?>