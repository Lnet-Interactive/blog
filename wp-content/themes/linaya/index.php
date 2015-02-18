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

<section class="content" id="content" >
		<div class="container">

			<div class="taille-slider">
				<?php putRevSlider("homeslider_boxed") ?>
			</div>

			<div class="blog">


				<!-- Example row of columns -->
				<div class="row">
					<div class="container">

						<?php
							$post_1 = get_category_by_slug('lhomme');
							$title1 = $post_1->cat_name;
							$category_description1 = $post_1->category_description;
							$cat_ID1 = $post_1->cat_ID;

						?>

						<div class="col-lg-4">
							<h2><?php echo $title1; ?></h2>
							<img src="<?php echo bloginfo('template_directory') ?>/image/1.PNG" class="taille-blog">
							<h4>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</h4>

							<div class="spacer"></div>
							<p><?php echo $category_description1; ?></p>

							<p><a class="btn btn-default color-button" href="<?php echo get_category_link( $cat_ID1 ) ; ?>" role="button">En savoir + &raquo;</a></p>
						</div>
						<?php
						$post_2 = get_category_by_slug('la-technologie');
						$title2 = $post_2->cat_name;
						$category_description2 = $post_2->category_description;
						$cat_ID2 = $post_2->cat_ID;

						?>

						<div class="col-lg-4">
							<h2><?php echo $title2; ?></h2>
							<img src="<?php echo bloginfo('template_directory') ?>/image/2.PNG" class="taille-blog">
							<h4>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</h4>

							<div class="spacer"></div>
							<p><?php echo $category_description2; ?></p>

							<p><a class="btn btn-default color-button" href="<?php echo get_category_link( $cat_ID2 ) ; ?>" role="button">En savoir + &raquo;</a></p>
						</div>
						<?php
						$post_3 = get_category_by_slug('le-metien');
						$title3 = $post_3->cat_name;
						$category_description3 = $post_3->category_description;
						$cat_ID3 = $post_3->cat_ID;
						?>

						<div class="col-lg-4">
							<h2><?php echo $title3; ?></h2>
							<img src="<?php echo bloginfo('template_directory') ?>/image/3.PNG" class="taille-blog">
							<h4>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</h4>

							<div class="spacer"></div>
							<p><?php echo $category_description2; ?></p>

							<p><a class="btn btn-default color-button" href="<?php echo get_category_link( $cat_ID3 ) ; ?>" role="button">En savoir + &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="spacer"></div>
		<div class="row">
			<div class="container">
				<div class=" col-lg-3 ">
					<?php
						$bloc_1 = get_post(40);
						$title_bloc1 = $bloc_1->post_title;
					?>
					<h4 class="color-titre-menu">Solutions</h4>
					<h5 class="style-titre">
						<img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/><?php echo $title_bloc1; ?></h5>


					<p class="color-content"><?php echo $bloc_1->post_excerpt; ?></p>
					<?php
						$bloc_2 = get_post(44);
						$title_bloc2 = $bloc_2->post_title;
					?>

					<h5 class="style-titre"><img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/><?php echo $title_bloc2; ?></h5>

					<p class="color-content"><?php echo $bloc_2->post_excerpt; ?></p>


					<?php
					$bloc_3 = get_post(46);
					$title_bloc3 = $bloc_3->post_title;
					?>

					<h5 class="style-titre"><img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/><?php echo $title_bloc3; ?></h5>


					<p class="color-content"><?php echo $bloc_3->post_excerpt; ?></p>

				</div>

				<div class=" col-lg-3 col-lg-offset-1 ">
					<div class="spacer"></div>
					<div class="spacer"></div>

					<?php
						$bloc_4 = get_post(46);
						$title_bloc4 = $bloc_4->post_title;
					?>

					<h5 class="style-titre"><img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/><?php echo $title_bloc4; ?></h5>


					<p class="color-content"><?php echo $bloc_4->post_excerpt; ?></p>



					<?php
						$bloc_5 = get_post(25);
						$title_bloc5 = $bloc_5->post_title;
						$the_excerpt_5 = $bloc_5->post_excerpt;
					?>

					<h5 class="style-titre"><img src="<?php echo bloginfo('template_directory') ?>/image/icone.PNG"/><?php echo $title_bloc5; ?></h5>

					<p class="color-content"><?php echo $the_excerpt_5;  ?></p>

				</div>

				<div class=" col-lg-3 col-lg-offset-1 ">
					<h4 class="color-titre-menu">Temoignages
					</h4>

					<div class="testimonials-slider">


						<?php
							$args=array(
								'category_name'  => 'temoignages',
								'post_type'      => 'post',
								'post_status'    => 'publish',
							);

							$_allPosts = get_posts( $args );
							foreach ( $_allPosts as $post ) : setup_postdata( $post );
								$metaName = get_post_meta( $post->ID, 'testimonials-name' );
								$metaLink = get_post_meta( $post->ID, 'testimonials-link' );

						?>
								<div class="slide">
									<div class="testimonials-carousel-context">
										<div class="testimonials-carousel-content"><p class="color-content" ><?php echo $post->post_content; ?></p></div>
										<div class="testimonials-name"><?php echo $metaName[0]; ?><span><?php echo $metaLink[0]; ?></span></div>
									</div>
								</div>

						<?php
							endforeach;
							wp_reset_postdata();
						?>

					</div>
					<?php
						// Get the ID of a given category
							$category_id = get_cat_ID( 'Témoignages' );
						// Get the URL of this category
							$category_link = get_category_link( $category_id );
					?>

					<a href="<?php echo esc_url( $category_link ); ?>" class="style-titre"> Voir Tous Les Témoignages <img src="<?php echo bloginfo('template_directory') ?>/image/fleche.PNG"></a>

				</div>



			</div>
		</div>
<?php get_footer(); ?>
