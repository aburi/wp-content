<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
	
	<div class="container pad-btm">
		
		<div id="primary" class="content-area">
			
			<main id="main" class="site-main" role="main">
				
				<div class="margin-btm-sm"><?php if ( function_exists( 'yoast_breadcrumb' ) ) yoast_breadcrumb(); ?></div>
				
				<?php while ( have_posts() ) : the_post(); ?>
		
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
						<header class="entry-header margin-btm sr-only">
						
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						
						</header><!-- .entry-header -->
					
						<div class="entry-content">
						
							<?php // the_content(); ?>
								
							<?php
								$attachments = grab_ids_from_gallery();
								$i = 0;
								
								if ( $attachments ) {
									
									foreach ( $attachments as $attachment ) { 
										
										$i++;
										
										$image_thumb  = wp_get_attachment_image_src( $attachment, 'thumbnail' )[0];
										$image_lg     = wp_get_attachment_image_src( $attachment, 'large' )[0];
										$title        = get_the_title($attachment);
										
										//if ( ($i % 7 != 0) == 0) echo '<div class="row">';
										
										//$array = array(1,5,11,16,21,26);
										$array = array(1,7,13,19,25,31);
										
										if ( in_array($i, $array) ) echo '<div class="row">';
										
									?>
									
										<div class="col-sm-2">
											
											<a href="<?php echo $image_lg; ?>" data-lightbox="<?php echo get_the_title(); ?>" data-title="<?php echo $title; ?>">
												
												<img class="img-responsive" src="<?php echo $image_thumb; ?>" alt="<?php echo $title; ?>" />
												
											</a>
										
										</div>
										
<!--
echo apply_filters( 'the_title', $attachment->post_title );
echo get_the_title($attachment);
-->										
										
									<?php 
										//$array = array(4,8,12,16,20,24);
										$array = array(6,12,18,24,30,36);
										if ( in_array($i, $array) ) echo '</div>';
										
									}
									
								}
							?>
														
							<script>
								
								

							</script>
						
						</div><!-- .entry-content -->
					
					</article><!-- #post-## -->
					
				<?php endwhile; ?>

			</main><!-- .site-main -->
			
		</div><!-- .content-area -->
	
	</div>
	
<?php get_footer(); ?>

