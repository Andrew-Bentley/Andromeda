<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<div class="row footer-pad">
					<div class="col-5">
 					 <h1>Elex Studio</h1>
					 <p>We're a passionate freelance marketing and web development
						 studio based in South England.</p>

						<?php if (has_nav_menu('social')) : ?>
    					<div class="social-menu">
        				<?php theme_social_menu(); ?>
    					</div>
						<?php endif; ?>


 				 </div>
				 <div class="col-sm">
					 <?php
						wp_nav_menu( array(
						    'footer-nav-left' => 'Footer Nav Left',
						    'container_class' => 'footer-nav' ) );
						?>
				 </div>
				 <div class="col-sm">
					 <?php
						wp_nav_menu( array(
						    'footer-nav-middle' => 'Footer Nav Miiddle',
						    'container_class' => 'footer-nav' ) );
						?>
				 </div>
				 <div class="col-sm">
					 <?php
						wp_nav_menu( array(
						    'footer-nav-right' => 'Footer Nav Right',
						    'container_class' => 'footer-nav' ) );
						?>
				 </div>
				 </div>
				</div>
			</div><!-- .wrap -->
		<div class="sub-footer">
			<div class="wrap" id="sub-footer-wrap">
				<dv class="row">
					<div class="col-sm">
						<p class="text-left sub-footer-text">Copyright Elex Studio LTD 2018</p>
					</div>
					<div class="col-sm">
						<p class="text-right sub-footer-text">Made with <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/love_heart.svg" alt="Love heart" style="width:14px;"> in West Berkshire
					</div>
				</div>
			</div>
		</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
