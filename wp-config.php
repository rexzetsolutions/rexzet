<?php

/** Enable W3 Total Cache */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/orientaltimes/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define( 'DBI_AWS_ACCESS_KEY_ID', 'AKIAJGGM5RBKC4X4N6TQ' );
define( 'DBI_AWS_SECRET_ACCESS_KEY', '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' );

//Begin Really Simple SSL Server variable fix
$_SERVER["HTTP"] = "on";
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
$server_opts = array("HTTP_CLOUDFRONT_FORWARDED_PROTO" => "http", "HTTP_CF_VISITOR"=>"https", "HTTP_X_FORWARDED_PROTO"=>"http", "HTTP_X_FORWARDED_SSL"=>"on", "HTTP_X_FORWARDED_SSL"=>"1");
foreach( $server_opts as $option => $value ) {
if ( (isset($_ENV["HTTP"]) && ( "on" == $_ENV["HTTP"] )) || (isset( $_SERVER[ $option ] ) && ( strpos( $_SERVER[ $option ], $value ) !== false )) ) {
$_SERVER[ "HTTP" ] = "on";
break;
}
}
//END Really Simple SSL

define('WP_HOME','https://orientaltimes.in');
define('WP_SITEURL','https://orientaltimes.in');

define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'oriental_akash');
/** MySQL database username */
define('DB_USER', 'oriental_akash');
/** MySQL database password */
define('DB_PASSWORD', 'rexzet@123');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'exwlt4ozuhtghxnqmvte1johikovprohjnnsoynlaxzn69fokw60ul10krjgtkzj');
define('SECURE_AUTH_KEY',  'atmkawe4u9e1bcqzt3l40i7fifpkkxddnb96gidmxabl7regnjlxydfkapg8vu0f');
define('LOGGED_IN_KEY',    'gb5kx5optubgk9kegyqx6thp0rrfcgtwnyvcbihkitpoknqiamqzxnvcq6bu7kcf');
define('NONCE_KEY',        'hq6lxv5glszw6ibma4nrc6vhow8rt8c1lgjiefholeksins3q0olvmnrue5unoit');
define('AUTH_SALT',        'iyfqhso9tix2yh4yoehctea8qnzh77dmtp7nf2ysl4l59stcxvwtwbdwnqyxd8vf');
define('SECURE_AUTH_SALT', 'bahyahez5bkw3zhtlu0xlgabgxwcxauj8k74o0surei0xkquqguuu5bxsvyvdocd');
define('LOGGED_IN_SALT',   'lexszfpk9vghbpe84beqg0lvnih09hijspf2e8po88ugzxjsmzcsg9r1h8vtwzsa');
define('NONCE_SALT',       'z7bihzibjihdpk4xhogry7taeznnlcxgp1dde9wq5hyo3kxlenzr2gvud2qfdmys');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpjb_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
 define('WP_DEBUG', false);
 
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
