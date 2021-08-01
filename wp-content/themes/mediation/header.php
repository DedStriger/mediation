<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IT-MEDIATION</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.svg" type="image/svg">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Montserrat+Alternates:ital,wght@1,400;1,600&family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<style>
			html{
			margin-top: 0 !important;
	}
		@media screen and (max-width: 782px){
	
	html{
			margin-top: 0 !important;
	}
}
	</style>
</head>
<body>
	<header>
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo" class="logo">
			<nav>
				<?php 
					wp_nav_menu( [
       'container'       => false 
					]);
				 ?>
			 <div class="language">
<!-- 			 	<span class="active">RU</span>
			 /
			 	<span>ENG</span> -->
			 	<?php echo do_shortcode('[bogo]'); ?>
			 </div>
			</nav>
			<div class="burger">
			 
			 </div>
		</div>
	</header>