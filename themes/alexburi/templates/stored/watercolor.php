<?php 
	/* Template Name: Watercolor */ 
	
	global $imgs;
	
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<div class="col-sm-9 main-content site-content" id="primary" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="entry-content">
		        			
					<img src="<?php echo $imgs; ?>water-color-pods-diana-weymar.jpg" />
					
					<header class="entry-header">
						
        				<?php the_title( '<h1 class="entry-title">', '.</h1>' ); ?>
						
						<span>Found book, 14 x 10 x 1. 2011.</span>
			        	
		        	</header>
		        	
					<img src="<?php echo $imgs; ?>water-color-tiny-pieces-diana-weymar.jpg" />
					
					<header class="entry-header">
						
        				<h1 class="entry-title">Tiny Pieces</h1>
						
						<div class="clearfix">
		        		
			        		<div class="description pull-left">
			        			<small class="text-muted">{materials}</small>
			        		</div>
			        		
			        		<div class="year pull-right">
			        			<small class="text-muted">{date}</small>
			        		</div>
			        		
		        		</div>
		        		
		        	</header>
		        	
					<img src="<?php echo $imgs; ?>water-color-01-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-02-diana-weymar.jpg" />
					<header class="entry-header">
												
						<div class="clearfix">
		        		
			        		<div class="description pull-left">
			        			<small class="text-muted">watercolor, ink</small>
			        		</div>
			        		
			        		<div class="year pull-right">
			        			<small class="text-muted">{date}</small>
			        		</div>
			        		
		        		</div>
		        		
		        	</header>
					
					<img src="<?php echo $imgs; ?>water-color-03-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-04-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-05-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-06-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-07-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-08-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-09-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-10-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-11-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-12-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-13-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-14-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-15-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-16-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-17-diana-weymar.jpg" />
					<img src="<?php echo $imgs; ?>water-color-18-diana-weymar.jpg" />
									
				</div><!-- .entry-content -->
				
			</article><!-- #post-## -->

		<?php endwhile; ?>
	
	</div><!-- #main-content -->
			
<?php get_footer(); ?>