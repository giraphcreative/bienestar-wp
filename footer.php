<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	
	<footer class="footer">
		<div class="columns">
			<div class="column">
				<img src="<?php the_field( 'logo_footer', 'option' ) ?>" class="footer-logo" />
				<?php print apply_filters( 'the_content', get_field( 'footer-address', 'option' ) ); ?>
				<p class="copyright">Copyright &copy; <?php print date( 'Y' ) ?> <?php bloginfo( 'name' ) ?>.</p>
			</div>
			<div class="column">
				<div class="footer-aux">
				<?php 
				// if we have a default language
				if ( get_default_language() ) {
					// check the url for a language string, and output that menu
					wp_nav_menu( array( 'theme_location' => 'footer-' . get_current_language() , 'menu_class' => 'nav-menu' ) );
				} else {
					// display the default menu
					wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu' ) );
				}
				?>
				</div>
				<div class="social-icons">
					<?php 
					theme_social_icon( 'twitter' );
					theme_social_icon( 'facebook' );
					theme_social_icon( 'instagram' );
					theme_social_icon( 'linkedin' );
					theme_social_icon( 'youtube' );
					?>
				</div>
			</div>
		</div>
		<p class="copyright">Copyright &copy; <?php print date( 'Y' ) ?> <?php bloginfo( 'name' ) ?>.</p>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>