<?php 
	/* Template Name: Traded Tools */ 
	
	global $imgs;
	
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<div class="col-sm-9 main-content site-content" id="primary" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="entry-content">
		        			
					<img src="<?php echo $imgs; ?>traded-tools-01-diana-weymar.jpg" />
					
					<header class="entry-header">
						
        				<?php the_title( '<h1 class="entry-title">', '.</h1>' ); ?>
						
						<span>Found jigsaw, felt, moss, 7 x 7 x 5.  2012.</span>
			        	
		        	</header>
		        	
					<img src="<?php echo $imgs; ?>traded-tools-02-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>traded-tools-03-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>traded-tools-04-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>traded-tools-05-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>traded-tools-06-diana-weymar.jpg" />
																	
				</div><!-- .entry-content -->
				
			</article><!-- #post-## -->

		<?php endwhile; ?>
	
	</div><!-- #main-content -->
			
<?php get_footer(); ?>