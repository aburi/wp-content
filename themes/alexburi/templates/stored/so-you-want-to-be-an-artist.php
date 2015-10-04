<?php 
	/* Template Name: So You Want To Be An Artist */ 
	
	global $imgs;
	
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<div class="col-sm-9 main-content site-content" id="primary" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="entry-content">
		        			
					<img src="<?php echo $imgs; ?>so-you-want-to-be-an-artist-01-diana-weymar.jpg" />
					
					<header class="entry-header">
						
        				<?php the_title( '<h1 class="entry-title">', '.</h1>' ); ?>
						
						<span>Found book, glue, cut text, 11 x 9 x 7. 2011.</span>
			        	
		        	</header>
		        	
					<img src="<?php echo $imgs; ?>so-you-want-to-be-an-artist-02-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>so-you-want-to-be-an-artist-03-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>so-you-want-to-be-an-artist-04-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>so-you-want-to-be-an-artist-05-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>so-you-want-to-be-an-artist-06-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>so-you-want-to-be-an-artist-07-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>so-you-want-to-be-an-artist-08-diana-weymar.jpg" />
									
				</div><!-- .entry-content -->
				
			</article><!-- #post-## -->

		<?php endwhile; ?>
	
	</div><!-- #main-content -->
			
<?php get_footer(); ?>