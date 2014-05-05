<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<meta name="keywords" content="Casas, venta, San Jerónimo, Inmobiliaria, Dycemo, Constructora Dycemo, México DF, venta de casas, construcción de casas, arquitectos, arquitectura, México, Distrito Federal, Magdalena Contreras, Lidice"/>

		<!-- jQuery UI -->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  		<link rel="stylesheet" href="/resources/demos/style.css">

		<!--Webfonts: -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

		

		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=491141950999878";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>


		<header>

			<div class="width clearfix">

				<h1 class="columna c-2">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo THEMEPATH; ?>images/logo.png" alt="Dycemo" />
					</a>
				</h1>

				<nav class="columna c-6 menu right">
					<ul class="clearfix">
						<li>
							<a <?php if ( is_home() ){ echo 'class="active"'; } ?> href="<?php echo site_url(); ?>">Inicio</a>
						</li>

						<li>
							<a <?php if ( is_page('en-venta') ){ echo 'class="active"'; } ?> href="<?php echo site_url('en-venta'); ?>">En venta</a>
						</li>

						<li>
							<a <?php if ( is_page('nosotros') ){ echo 'class="active"'; } ?> href="<?php echo site_url('nosotros'); ?>">Nosotros</a>
						</li>

						<li class="last">
							<a <?php if ( is_page('contacto') ){ echo 'class="active"'; } ?> href="<?php echo site_url('contacto'); ?>">Contacto</a>
						</li>
					</ul>
				</nav>
			</div><!-- width -->

		</header>

		<div class="main clearfix">