<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

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
	<body <?php body_class(); ?>>
		<!-- header -->
		<header>
			<div class="contenedor">
			<!-- navbar -->
			<h2 class="logotipo" a href="<?php echo home_url(); ?>">Nehfli</h2>
				<!-- menu -->
				<nav>
    				<a href="" class="activo">Inicio</a>
    				<a href="">Programas</a>
   					<a href="">Peliculas</a>
    				<a href="">Mas Recientes</a>
    				<a href="">Mi lista</a>
    				</nav>
		</header>
		<main>
        	<div class="pelicula-principal" style="background: linear-gradient(rgba(0,0,0, .50) 0%, rgba(0,0,0, .50) 100%),  url(<?php echo get_template_directory_uri(); ?>/img/piratas-del-caribe.jpg);">
            	<div class="contenedor">
                	<h3 class="titulo">
						Piratas del Caribe
					</h3>
					<p class="descripcion">
						Cuando Jack Sparrow vuelve a encontrarse con una mujer a la que había conocido años atrás, no está seguro de si se trata de amor o si ella es una estafadora sin escrúpulos que lo está utilizando para encontrar la legendaria Fuente de la Juventud.
					</p>
					<button role="button" class="boton"><i class="fa fa-play" aria-hidden="true"></i>Reproducir</button>
					<button role="button" class="boton"><i class="fa fa-info-circle" aria-hidden="true"></i>Mas Informacion</button>
				</div>
			</div>
		</main>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
		<!-- /header -->
