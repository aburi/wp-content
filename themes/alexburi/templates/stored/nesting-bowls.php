<?php 
	/* Template Name: Nesting Bowls */ 
	
	global $imgs;
	
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<div class="col-sm-9 main-content site-content" id="primary" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="entry-content">
		        			
					<img src="<?php echo $imgs; ?>nesting-bowls-01-diana-weymar.jpg" />
					
					<header class="entry-header">
						
        				<?php the_title( '<h1 class="entry-title">', '.</h1>' ); ?>
						
						<span>Found book, 14 x 10 x 1. 2011.</span>
			        	
		        	</header>
		        	
					<img src="<?php echo $imgs; ?>nesting-bowls-02-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>nesting-bowls-03-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>nesting-bowls-04-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>nesting-bowls-05-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>nesting-bowls-06-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>nesting-bowls-07-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>nesting-bowls-08-diana-weymar.jpg" />

				</div><!-- .entry-content -->
				
			</article><!-- #post-## -->

		<?php endwhile; ?>
	
	</div><!-- #main-content -->
			
<?php get_footer(); ?>