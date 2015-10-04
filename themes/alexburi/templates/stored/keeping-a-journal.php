<?php 
	/* Template Name: Keeping a Journal */ 
	
	global $imgs;
	
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<div class="col-sm-9 main-content site-content" id="primary" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
		        			
					<img src="<?php echo $imgs; ?>keeping-a-journal-01-diana-weymar.jpg" />
					
					<header class="entry-header">
						
        				<?php the_title( '<h1 class="entry-title">', '.</h1>' ); ?>
						
						<span>Canvas, handmade paper, egg shells, dead insects, text Joan Didion’s Keeping a Journal, ink, dried sea creatures, 4 x 30 x 9, 2010.</span>
			        	
		        	</header>

					<img src="<?php echo $imgs; ?>keeping-a-journal-02-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>keeping-a-journal-03-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>keeping-a-journal-04-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>keeping-a-journal-05-diana-weymar.jpg" />
									
				</div><!-- .entry-content -->
				
			</article><!-- #post-## -->

		<?php endwhile; ?>
	
	</div><!-- #main-content -->
			
<?php get_footer(); ?>