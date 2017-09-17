<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage gs_review
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="mega-navigation" class="mega-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Mega Menu', 'twentyseventeen' ); ?>">

	<?php wp_nav_menu( array( 'theme_location' => 'mega-menu','menu_id'=>'top_mega_menu' ) ); ?>
</nav>