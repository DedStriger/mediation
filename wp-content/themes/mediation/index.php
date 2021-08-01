<?php get_header(); ?>
	<main>
		<div class="container">
<?php
if ( have_posts() ) : 
  query_posts('category_name=service');  
  while (have_posts()) : the_post();  
?>
			<section class="top-section">
				<h2 class="main-header"><?php the_title(); ?></h2>
					<?php the_content(); ?><!-- 
				<?php the_post_thumbnail(); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/top.png" alt="top" class="main-img"> -->
			</section>
			<?php 
	endwhile;  
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=displace');  
  while (have_posts()) : the_post();  
?>
			<section class="list" id="about">
				<h2 class="main-header"><?php the_title(); ?></h2>
				<div class="list-row">
					<?php the_content(); ?>
				</div>
			</section>
					<?php 
	endwhile;  
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=judge');  
  while (have_posts()) : the_post();  
?>
			<section class="cyber">
				<div>
				<h2 class="main-header"><?php the_title(); ?></h2>
				<?php the_content(); ?>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/judge.png" alt="judge" class="cyber-img">
			</section>
				<?php 
	endwhile;  
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=baner');  
  while (have_posts()) : the_post();  
?>
			<div class="baner">
				<?php the_content(); ?>
			</div>
			<?php 
	endwhile;  
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query(); 
			 ?>
			<?php
if ( have_posts() ) : 
  query_posts('category_name=categr');  
  while (have_posts()) : the_post();  
?>
			<section class="types" id="types">
				<h2 class="main-header"><?php the_title(); ?></h2>
				<div class="grid-types">
					<?php the_content(); ?>
				</div>
			</section>
			<?php 
	endwhile;  
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query(); 
			 ?>
			<div class="laywers" id="laywer">
<?php
if ( have_posts() ) : 
  query_posts('category_name=laywer');  
  while (have_posts()) : the_post();  
?>
				<div class="laywer">
					<?php the_content(); ?>
				</div>

				<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=main-review');  
  while (have_posts()) : the_post();  
?>
				<div class="laywers-subtitle">
					<?php the_content(); ?>
					
				</div>
			</div>
		<section class="form">
			
		<h2 class="main-header"><?php echo get_the_excerpt()?></h2>
			
			<?php 
			$rurl = $_SERVER["REQUEST_URI"];
			if($rurl == '/mediation/'){
			echo do_shortcode('[contact-form-7 id="125" title="Контактная форма 1"]');
		} else {
			echo do_shortcode('[contact-form-7 id="126" title="форма eng"]');
		}
			 ?>
			 <!--<form action='mail.php' method="POST">-->
			 <!--    <input type='text' name='cv-name'>-->
			 <!--    <button type='submit'>submit</button>-->
			 <!--</form>			 -->
   </section>
			<section class="reviews" id="review">
				<h2 class="main-header"><?php the_title(); ?></h2>
					<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
				<div class="review-cont">
								<?php
if ( have_posts() ) : 
  query_posts(array( 'category_name' => 'review', 'order' => 'DESC'));  
  while (have_posts()) : the_post();  
?>
					<div class="review-card">
						<?php the_content(); ?>
					</div>
							<?php 
	endwhile;  
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query(); 
			 ?>
					
				</div>
			</section>
		</div>
	</main>
<?php get_footer(); ?>