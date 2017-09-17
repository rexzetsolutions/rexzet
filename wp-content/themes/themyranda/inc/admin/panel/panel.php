<?php
/**
 * Flatsome Admin Panel
 */
class Flatsome_Admin {

	/**
	 * Constructor
	 * Sets up the welcome screen
	 */
	public function __construct() {

		
		add_action( 'admin_enqueue_scripts', array( $this, 'flatsome_panel_style' ) );

	} // end constructor


	/**
	 * Load welcome screen css
	 * @return void
	 * @since  1.4.4
	 */
	public function flatsome_panel_style() {
		global $flatsome_version;
		wp_enqueue_style( 'flatsome-panel-css', get_template_directory_uri() . '/inc/admin/panel/panel.css', $flatsome_version );
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 * @since 1.0.0
	 */
	public function flatsome_panel_register_menu() {
		$url = admin_url().'admin.php?page=flatsome-panel';

	    add_submenu_page('flatsome-panel', '', 'Theme Options', 'manage_options', 'customize.php' );
	}

	/**
	 * The welcome screen
	 * @since 1.0.0
	 */
	public function flatsome_panel_welcome() {
		?>
		<div class="flatsome-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-activate.php' ); ?>
			</div>
		</div>
		<?php
	}

	public function flatsome_panel_getting_started() {
		?>
		<div class="flatsome-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-guide.php' ); ?>
			</div>
		</div>
		<?php
	}

	public function flatsome_panel_tutorials() {
		?>
		<div class="flatsome-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-tutorials.php' ); ?>
			</div>
		</div>
		<?php
	}

	/*public function flatsome_panel_plugins() {
		?>
		<div class="flatsome-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-plugins.php' ); ?>
			</div>
		</div>
		<?php
	} */

	public function flatsome_panel_support() {
		?>
		<div class="flatsome-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-support.php' ); ?>
			</div>
		</div>
		<?php
	}

	public function flatsome_panel_changelog() {
		?>
		<div class="flatsome-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-changelog.php' ); ?>
			</div>
		</div>
		<?php
	}

}

$GLOBALS['Flatsome_Admin'] = new Flatsome_Admin();
