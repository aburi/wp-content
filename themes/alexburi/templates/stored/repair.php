<?php 
	/* Template Name: Repair */ 
	
	global $imgs;
	
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<div class="col-sm-9 main-content site-content" id="primary" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="entry-content">
		        			
					<img src="<?php echo $imgs; ?>repair-01-diana-weymar.jpg" />
					
					<header class="entry-header">
						
        				<?php the_title( '<h1 class="entry-title">', '.</h1>' ); ?>
						
						<span>Antique infant gown, thread, 17 x 19, 2012.</span>
			        	
		        	</header>
		        	
					<img src="<?php echo $imgs; ?>repair-02-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>repair-03-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>repair-04-diana-weymar.jpg" />
									
				</div><!-- .entry-content -->
				
			</article><!-- #post-## -->

		<?php endwhile; ?>
	
	</div><!-- #main-content -->
			
<?php get_footer(); ?>