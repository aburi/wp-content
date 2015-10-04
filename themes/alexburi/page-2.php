<?php 
	get_header(); 
	
	global $resources;
	
?>
	
	<div class="container">
		
		<div id="primary" class="content-area">
			
			<main id="main" class="site-main" role="main">
				
				<div class="row margin-btm-sm">
					
					<div class="col-sm-8">
						
<!-- 						<img class="img-responsive" src="<?php echo $resources.'/artwork/homepage/slide1.jpg'; ?>" alt=""> -->
						
						<div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								
								<div class="item active">
									<img src="<?php echo $resources.'/artwork/homepage/slide1.jpg'; ?>" alt="">
								</div>
								<div class="item">
									<img src="<?php echo $resources.'/artwork/homepage/slide2.jpg'; ?>" alt="">
								</div>
								<div class="item">
									<img src="<?php echo $resources.'/artwork/homepage/slide3.jpg'; ?>" alt="">
								</div>
								<div class="item">
									<img src="<?php echo $resources.'/artwork/homepage/slide4.jpg'; ?>" alt="">
								</div>
								<div class="item">
									<img src="<?php echo $resources.'/artwork/homepage/slide5.jpg'; ?>" alt="">
								</div>
								<div class="item">
									<img src="<?php echo $resources.'/artwork/homepage/slide6.jpg'; ?>" alt="">
								</div>
								<div class="item">
									<img src="<?php echo $resources.'/artwork/homepage/slide7.jpg'; ?>" alt="">
								</div>
							
							</div>
							
						</div>
						
					</div>
					<div class="col-sm-4 hidden-xs">
						<img class="img-responsive margin-btm-sm" src="<?php echo $resources.'/artwork/homepage/slide2.jpg'; ?>" alt="">
						<img class="img-responsive" src="<?php echo $resources.'/artwork/homepage/slide3.jpg'; ?>" alt="">
					</div>
					
				</div>
				<div class="row hidden">
					
					<div class="col-sm-4">
						<img class="img-responsive" src="<?php echo $resources.'/artwork/homepage/slide4.jpg'; ?>" alt="">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive" src="<?php echo $resources.'/artwork/homepage/slide5.jpg'; ?>" alt="">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive" src="<?php echo $resources.'/artwork/homepage/slide7.jpg'; ?>" alt="">
					</div>
					
				</div>
	
			</main><!-- .site-main -->
			
		</div><!-- .content-area -->
	
	</div>

<?php get_footer(); ?>
