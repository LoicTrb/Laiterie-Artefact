<!doctype html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
 		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png"/>

		<title><?php echo get_the_title( $ID ); ?> | Laiterie</title>
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				<!--[if lt IE 9]>
						<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
						<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
				<![endif]-->
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body>
		<!--preloader
        <div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
				</div>
			</div>
		</div>
      -->
			<header class="header" id="header">
				<div class="navbar-wrapper">
					<div class="navbar navbar-default">
						<div class="container">
							<div class="navbar-header">
								<h1 class="sr-only">Home</h1>
								<a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".active-navbar-collapse">
									<span class="sr-only">Navigation</span>
									<i class="fa fa-bars"></i>
								</a>
								<a href="#" class="mobile-cart-icon">
									<i class="fa fa-shopping-cart"></i><span>0</span>
								</a>
								<a href="<?php echo get_home_url(); ?>" class="navbar-brand">
									<img class="logo-img logo-normal" src="<?php echo get_template_directory_uri(); ?>/images/LOGO-V6.png" alt="">
									<img class="logo-img logo-float" src="<?php echo get_template_directory_uri(); ?>/images/LOGO-V6.png" alt="">
								</a>
							</div>
							<nav class="collapse navbar-collapse active-navbar-collapse">
								<ul class="navbar-nav sf-menu">
									<li class="current-menu-item menu-item-has-children">
										<a href="<?php echo get_home_url(); ?>">Home</a>
									</li>
									<li class="menu-item-has-children">
										<a href="http://localhost/laiterie/evenements/">évenements</a>
									</li>
									<li class="menu-item-has-children">
										<a href="<?php echo get_home_url(); ?>/#actu">Actualités</a>
									</li>
									<li class="menu-item-has-children">
										<a href="http://localhost/laiterie/contact/">Contact</a>
									</li>
									<li class="menu-item-has-children">
										<a href="https://www.artefact.org/lososphere">Nos projets</a>
										<ul class="sub-menu">
											<li><a href="https://www.artefact.org/le-projet-artefact">LE PROJET ARTEFACT</a></li>
											<li><a href="https://www.artefact.org/lososphere">L'OSOSPHère</a></li>
											<li><a href="https://www.artefact.org/le-festival-des-artefacts">FESTIVAL DES ARTEFACTS</a></li>
											<li><a href="https://www.artefact.org/le-dispositif-d-accompagnement">DISPOSITIF D'ACCOMPAGNEMENT</a></li>
										</ul>
									</li>
									<li class="menu-item-cart cart-icon">
										<a class="cart-button" href="http://localhost/laiterie/panier/">
											<span class="cart-item">
												<i class="fa fa-shopping-cart"></i>
											</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
