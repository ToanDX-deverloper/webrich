<?php get_header(); ?>
<div class="wrapper">
	<div id="primary" class="site-content">

		<div id="content" role="main">

			<?php while ( have_posts() ) :the_post();?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php the_content(); ?>
				
			<?php endwhile; // End of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div class="clearfix">
	</div>
	
	<?php get_sidebar(); ?>
</div>
	

<?php get_footer(); ?>