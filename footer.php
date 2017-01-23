<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package euphoria
 */

?>
</div><!--.news -->
</div><!--.container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">
		<img class="logo-img"
						src="http://localhost:1234/dinosophy/wordpress/images/check.png" alt="Home" width="" height="" syle="float:right;">
		<a href="http://localhost:1234/dinosophy/wordpress/book-now/"><img class="logo-img"
						src="http://localhost:1234/dinosophy/wordpress/images/traveller_info_logo.png" alt="Home" width="" height="" syle="float:right;"></a>
			
			
			<a href="http://www.traveller.ee/freetour"><img class="logo-img"
						src="http://localhost:1234/dinosophy/wordpress/images/logo_small_ta.png" alt="Home" width="" height="" syle="float:right;"></a><br>
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'euphoria' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'euphoria' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'euphoria' ), 'euphoria', '<a href="https://automattic.com/" rel="designer">trevorjoel.alternicom.com</a>' ); ?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
