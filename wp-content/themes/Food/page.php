


<?php  get_header(); ?>

	<div id="primary-page" class="content-area">            
		<div class="wrapper">
			<?php woocommerce_breadcrumb(); ?>
			<main id="main" class="site-main" role="main">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );
				
		
			endwhile;
			?>

			</main><!-- .site-main -->
		</div><!-- .content-area -->
	</div>
<?php get_footer(); ?>




