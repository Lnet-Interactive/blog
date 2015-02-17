<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package linaya
 */

get_header(); ?>

<?php /*
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop  ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					 Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary --> */?>
	<div class="container">
		<img src="<?php echo bloginfo('template_directory') ?>/image/Sli1.PNG" class="taille-slider">

		<div class="blog">


			<!-- Example row of columns -->
			<div class="row">
				<div class="container">
					<div class="col-lg-4">
						<h2>L'Homme</h2>
						<img src="<?php echo bloginfo('template_directory') ?>/image/1.PNG" class="taille-blog">
						<h4>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</h4>

						<div class="spacer"></div>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh Donec sed odio dui. </p>

						<p><a class="btn btn-default color-button" href="#" role="button">En savoir + &raquo;</a></p>
					</div>
					<div class=" col-lg-4">
						<h2>La Technologie</h2>
						<img src="<?php echo bloginfo('template_directory') ?>/image/2.PNG" class="taille-blog">
						<h4>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</h4>

						<div class="spacer"></div>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo  </p>

						<p><a class="btn btn-default color-button" href="#" role="button">En savoir +&raquo;</a></p>
					</div>
					<div class="col-lg-4">
						<h2>Le métien</h2>
						<img src="<?php echo bloginfo('template_directory') ?>/image/3.PNG" class="taille-blog">
						<h4>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</h4>

						<div class="spacer"></div>
						<p>Donec sed odio dui.  Vestibulum id ligula porta felis euismod sempeDonec sed odio dui.  Vestibulum id ligula porta felis euismod sempe.</p>

						<p><a class="btn btn-default color-button" href="#" role="button">En savoir + &raquo;</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="spacer"></div>
	<div class="row">
		<div class="container">
			<div class=" col-lg-3 ">
				<h4 class="color-titre-menu">Solutions</h4>
				<h5 class="style-titre">
					<img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/>OpenSource</h5>


				<p class="color-content">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh Donec sed odio dui. </p>

				<h5 class="style-titre"><img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/>Ecommerce</h5>

				<p class="color-content">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh Donec sed odio dui. </p>


				<h5 class="style-titre"><img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/>E-tourisme</h5>

				<p class="color-content">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh Donec sed odio dui. </p>

			</div>

			<div class=" col-lg-3 col-lg-offset-1 ">
				<div class="spacer"></div>
				<div class="spacer"></div>

				<h5 class="style-titre"><img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/>E-Collectivités</h5>

				<p class="color-content">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh Donec sed odio dui. </p>


				<h5 class="style-titre"><img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/>OutSourcing</h5>

				<p class="color-content">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh Donec sed odio dui. </p>

			</div>

			<div class=" col-lg-3 col-lg-offset-1 ">
				<h4 class="color-titre-menu">Temoignages<img src="<?php echo bloginfo('template_directory') ?>/image/flecheHaut.PNG"><img src="<?php echo bloginfo('template_directory') ?>/image/flecheBas.PNG">
				</h4>

				<p class="color-content">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh Donec sed odio dui. </p>

				<a href="#" class="style-titre"> Voir Tous Les Témoignages <img src="<?php echo bloginfo('template_directory') ?>/image/flèche.PNG"></a>
			</div>

		</div>
	</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
