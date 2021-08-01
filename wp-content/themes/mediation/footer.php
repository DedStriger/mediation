	<footer>
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo" class="logo">
			<nav>
				<?php 
					wp_nav_menu( [
       'container'       => false 
					]);
				 ?>
			 <div class="language">
			 	<?php echo do_shortcode('[bogo]'); ?>
			 </div>
			</nav>
		</div>
		<?php
if ( have_posts() ) : 
  query_posts('category_name=adress');  
  while (have_posts()) : the_post();  
?>
<?php the_content();?>
<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
	</footer>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var btn = document.querySelector('.burger');
			var nav = document.querySelector('nav');
			var cont = true;
			var ru = document.querySelector('.ru a');
			var en = document.querySelector('.en a');
			var ruF = document.querySelector('footer .ru a');
			var enF = document.querySelector('footer .en a');

			ru.innerHTML = 'RU';
			en.innerHTML = 'ENG';

			ruF.innerHTML = 'RU';
			enF.innerHTML = 'ENG';

			btn.addEventListener('click', function(){

				if(cont){
				  this.classList.add('active');
				  nav.classList.add('mobile');
				  cont = false;
				  }
				else{
      this.classList.remove('active');
      nav.classList.remove('mobile');
      cont = true;
				 }  
			});



		});
	</script>
</body>
</html>