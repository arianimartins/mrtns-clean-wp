<!DOCTYPE html>
<html <?php language_attributes();?> >

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/c1dcf9acab.js"></script>

	<!-- Animacao -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/hover.css">

	<!-- Pingback -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Comentarios (Reply) -->
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

	<!-- Domain Verify -->
  	<meta name="p:domain_verify" content="6505e12dad9031dcfa0e377110ead5e2"/>

  	<!-- Google Analytics -->
  	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-63088121-1', 'auto');
  		ga('send', 'pageview');
	</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<div class="main-div">
		<header>
			<nav class="menu-header" id="menu-header">
				<?php wp_nav_menu(array('theme_location'=>'principal','container_class'=>'menu-menu-principal-container')); ?>
			</nav>

			<section class="logo-section">
				<!--<img class="flower1" src="http://sites.google.com/site/arianimartinshost/imagens/flower1.png">
				<img class="flower2" src="http://sites.google.com/site/arianimartinshost/imagens/flower2.png">-->
				<img class="logo-image" src="http://sites.google.com/site/arianimartinshost/imagens/Assinatura1.png">
			</section>
		</header>