<?php 
	/* Template Name: Impounded */ 
	
	global $imgs;
	
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<div class="col-sm-9 main-content site-content" id="primary" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="entry-content">
		        			
					<img src="<?php echo $imgs; ?>impounded-01-diana-weymar.jpg" />
					
					<header class="entry-header">
						
        				<?php the_title( '<h1 class="entry-title">', '.</h1>' ); ?>
						
						<span>Thread, natural dyes, cotton sheet. 2012.</span>
			        	
		        	</header>
		        	
					<img src="<?php echo $imgs; ?>impounded-02-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>impounded-03-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>impounded-04-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>impounded-05-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>impounded-06-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>impounded-07-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>impounded-08-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>impounded-09-diana-weymar.jpg" />
									
				</div><!-- .entry-content -->
								
			</article><!-- #post-## -->

		<?php endwhile; ?>
	
	</div><!-- #main-content -->
			
<?php get_footer(); ?>