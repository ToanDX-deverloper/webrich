<?php // File này cho trang page ?>
<?php get_header(); ?>

<div id="breadcrumb">
	<div class="breadcrumb-overlay"></div>
	<div class="breadcrumb-content">
		<div class="breadcrumb-title text-center">
			<h2><?php the_title(); ?></h2>
		</div>
		
		 <?php woocommerce_breadcrumb(); ?>
	</div>
</div>

<div class="wrapper">
	<div id="primary" class="inner">
		<?php if(is_page('cart') || is_page('checkout')){?>
			
			<main id="main" class="content-wrap one-sidebar" role="main">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
				endwhile; endif;
			?>
			</main>
		<?php }else{ ?>
			<!-- <?php //get_sidebar(); ?> -->
			<main id="main" class="content-wrap two-sidebar" role="main">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<header class="entry-header">
					<?php the_title( '<h1 class="page-heading">', '</h1>' ); ?>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif;?>
			</main>
			
		<?php } ?>
	</div>
</div>	
<?php get_footer(); ?>