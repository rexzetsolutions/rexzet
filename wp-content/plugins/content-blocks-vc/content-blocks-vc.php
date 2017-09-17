<?php
/*
Plugin Name: Content Blocks - Displaying Post & Custom Post in a News & Magazine Style
Plugin URI: http://beeteam368.com/content-blocks/
Description: Best Choice For Building Your Website.
Author: BeeTeam368
Author URI: http://beeteam368.com/content-blocks/
Version: 1.1.0
License: Commercial
*/

if(!defined('ABSPATH')){
	die('-1');
}

if(!defined('CBB_BETE_VER')){
	define('CBB_BETE_VER','1.1.0');
};

if(!defined('CBB_BETE_PLUGIN_URL')){
    define('CBB_BETE_PLUGIN_URL', plugin_dir_url(__FILE__));
};

if(!defined('CBB_BETE_PLUGIN_PATH')){
    define('CBB_BETE_PLUGIN_PATH', plugin_dir_path(__FILE__));
};

if(!defined('CBB_BETE_THEME_PATH')){
    define('CBB_BETE_THEME_PATH', get_template_directory());
};

if(!defined('CBB_BETE_PREFIX')){
    define('CBB_BETE_PREFIX', 'cbb_bt_');
};

require_once('includes/functions.php');
require_once('includes/query-class.php');
require_once('includes/reg-shortcode/elements.php');
require_once('includes/reg-shortcode/html-shortcode.php');
require_once('includes/reg-shortcode/reg-shortcode.php');
require_once('includes/plugin-settings/plugin-settings.php');
require_once('includes/reg-vc/reg-vc.php');
require_once('includes/class-tgm-plugin-activation.php');