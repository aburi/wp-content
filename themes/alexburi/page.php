<?php get_header(); ?>
	
	<div class="container">
		
		<div id="primary" class="content-area">
			
			<div class="margin-btm-sm"><?php if ( function_exists( 'yoast_breadcrumb' ) ) yoast_breadcrumb(); ?></div>
			
			<main id="main" class="site-main" role="main">
				
				<?php while ( have_posts() ) : the_post();
		
					get_template_part( 'content', 'page' );
			
				endwhile; ?>
		
			</main><!-- .site-main -->
			
		</div><!-- .content-area -->
	
	</div>
	
<?php get_footer(); ?>
