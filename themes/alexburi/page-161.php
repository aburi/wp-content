<?php 
	get_header(); 
	
	global $resources;
	
?>
	
	<div class="container">
		
		<div id="primary" class="content-area">
			
<!-- 			<div class="margin-btm-sm"><?php if ( function_exists( 'yoast_breadcrumb' ) ) yoast_breadcrumb(); ?></div> -->
			
			<main id="main" class="site-main" role="main">
				
				<div class="row margin-btm-sm">
					
					<div class="col-sm-6">
						
						<a href="<?php echo get_permalink(7); ?>" title="">
							<img class="img-responsive" src="<?php echo $resources.'/artwork/homepage/slide1.jpg'; ?>" alt="">
						</a>
					</div>
					<div class="col-sm-6">
						<a href="<?php echo get_permalink(9); ?>" title="">
							<img class="img-responsive" src="<?php echo $resources.'/artwork/homepage/slide2.jpg'; ?>" alt="">
						</a>
					</div>
					
				</div>
				<div class="row margin-btm-sm">
						
						<div class="col-sm-6">
							<a href="<?php echo get_permalink(11); ?>" title="">
								<img class="img-responsive" src="<?php echo $resources.'/artwork/homepage/slide3.jpg'; ?>" alt="">
							</a>
						</div>
						<div class="col-sm-6">
							<a href="<?php echo get_permalink(17); ?>" title="">
								<img class="img-responsive" src="<?php echo $resources.'/artwork/homepage/slide4.jpg'; ?>" alt="">
							</a>
						</div>
						
					</div>
	
			</main><!-- .site-main -->
			
		</div><!-- .content-area -->
	
	</div>

<?php get_footer(); ?>
