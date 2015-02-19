<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package linaya
 */
?>

			</section><!-- #content -->
		</div><!-- #main -->

	<?php /*<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'linaya' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'linaya' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'linaya' ), 'linaya', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->*/ ?>
	<footer class="footer">
		<div class="container">

			<div class=" col-lg-2 col-lg-offset-1 " >
				<?php

				$defaults = array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="menu_footer">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu( $defaults );

				?>
			</div>

			<div class=" col-lg-3 col-lg-offset-1 " style="width: auto;float: left">
				<a class="twitter-timeline" href="https://twitter.com/SocieteAyaline" data-widget-id="568315687383232512">Tweets de @SocieteAyaline</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>


			<div class=" col-lg-3 col-lg-offset-1 " style="background: white;width: 26.2%;padding: 0;">
				<div class="fb-like-box" data-href="https://www.facebook.com/pages/Ayaline/128187003913395?ref=ts&amp;fref=ts" data-height="300px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=811753498846498&version=v2.0";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
			</div>
			<div class="copyright" style="width: 100%;float: left;">
				<a href="http://www.ayaline.com" target="_blank">
					Réalisé par
					<img src="<?php echo bloginfo('template_directory') ?>/image/logo-ayaline.png" alt=""/>
				</a>
			</div>
		</div>
	</footer>




<?php wp_footer(); ?>

</body>
</html>
