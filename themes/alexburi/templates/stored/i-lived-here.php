<?php 
	/* Template Name: I Lived Here */ 
	
	global $imgs;
	
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<div class="col-sm-9 main-content site-content" id="primary" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="entry-content">
		        			
					<img src="<?php echo $imgs; ?>i-lived-here-01-diana-weymar.jpg" />
					
					<header class="entry-header">
						
        				<?php the_title( '<h1 class="entry-title">', '.</h1>' ); ?>
						
						<span>13 wood blocks, drawings, journal text,  3 x 4 x 1, 2010.</span>
			        	
		        	</header>
		        	
					<img src="<?php echo $imgs; ?>i-lived-here-02-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-03-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-04-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-05-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-06-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-07-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-08-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-09-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-10-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-11-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-12-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-13-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-14-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>i-lived-here-15-diana-weymar.jpg" />
									
				</div><!-- .entry-content -->
				
			</article><!-- #post-## -->

		<?php endwhile; ?>
	
	</div><!-- #main-content -->
			
<?php get_footer(); ?>