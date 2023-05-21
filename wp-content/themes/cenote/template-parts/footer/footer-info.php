<?php
/**
 * Displays footer information like copyright
 *
 * @package Cenote
 */

?>
<div class="site-info">
	<?php
		/* translators: 1: Current Year, 2: Blog Name 3: Cenote Theme Link 4: ThemeGrill 5: WordPress. */
		printf( esc_html__( 'Copyright &copy; %1$s %2$s. All rights reserved. Theme: %3$s by %4$s. Powered by %5$s.', 'cenote' ), date( 'Y' ), '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_html( get_bloginfo( 'name' ) ) . '" ><span>' . get_bloginfo( 'name' ) . '</span></a>', '<a href="https://themegrill.com/themes/cenote/" target="_blank" rel="nofollow">Cenote</a>', 'ThemeGrill', '<a href="https://wordpress.org" target="_blank" rel="nofollow">WordPress</a>' );
	?>
</div><!-- .site-info -->
