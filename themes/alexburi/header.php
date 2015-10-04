<!doctype html>
<html lang="<?php language_attributes(); ?>">

	<head>

    <meta charset="utf-8">
    <!-- <title>yo webapp</title> -->
    <!-- <meta name="description" content=""> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <!-- <link rel="stylesheet" href="styles/main.css"> -->
    <!-- endbuild -->

    <!--[if lt IE 9]>
			<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<![endif]-->

		<?php wp_head(); ?>

  </head>

	<body <?php body_class(); ?>>

		<div id="page" class="hfeed site">

			<a class="sr-only" href="#content">Skip to content</a>

			<header id="masthead" class="site-header" role="banner">

				<nav class="navbar">

					<div class="container">

						<div class="navbar-header">

							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<?php if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif; ?>

						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav navbar-right">

	<!--
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo get_permalink(7); ?>">Art Books</a></li>
										<li><a href="<?php echo get_permalink(9); ?>">Artifacts</a></li>
										<li><a href="<?php echo get_permalink(11); ?>">Embellished Embroidery</a></li>
										<li><a href="<?php echo get_permalink(17); ?>">Paper Works</a></li>
	 								</ul>
								</li>
	-->
								<li><a href="<?php echo get_permalink(161); ?>">Gallery</a></li>
								<li><a href="<?php echo get_permalink(5); ?>">News &amp; Exhibitions</a></li>
								<li><a href="<?php echo get_permalink(83); ?>">Resume</a></li>
								<li><a href="<?php echo get_permalink(89); ?>">Contact</a></li>

							</ul>

						</div><!-- /.navbar-collapse -->

					</div><!-- /.container-fluid -->

				</nav>

			</header><!-- .site-header -->

			<div id="content" class="site-content">
