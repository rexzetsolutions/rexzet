<?php
/*
Plugin Name: Speed Up WordPress Plugin
Plugin URI: http://premiumwow.com/
Description: A one click solution to speeding up your wordpress site. No Setup needed. 
Author: premiumwow
Author URI: http://premiumwow.com/
Version: 1.0.0  
*/

require_once('speedupwp_fun.php');
/*
** Speedupwp Htaccess
**/
global $speedupwp;
global $suwlink;
global $suw1;
global $suw2;
global $suw3;
global $suw4;
global $suw5;
global $suw6;

$suwurl = strtolower(get_bloginfo('url'));
$suwurl = str_replace('https://','',$suwurl);
$suwurl = str_replace('http://','',$suwurl);
$suwurl = str_replace('www.','',$suwurl);

$suwlink = "
# Speedup Wordpress Plugin Starts

RewriteEngine on
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?".$suwurl." [NC]
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?google.com [NC]
RewriteRule \.(jpg|jpeg|png|gif)$ - [NC,F,L]
 
";

	$suw1 .= '# GZIP '."\r\n"."\r\n";
	$suw1 .= '<IfModule mod_deflate.c>'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE text/plain'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE text/html'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE text/xml'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE text/css'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE text/javascript'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/xml'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/xhtml+xml'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/rss+xml'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/javascript'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/x-javascript'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/x-httpd-php'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/x-httpd-fastphp'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/vnd.ms-fontobject'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/x-font'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/x-font-opentype'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/x-font-otf'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/x-font-truetype'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE application/x-font-ttf'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE image/svg+xml'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE image/x-icon'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE font/opentype'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE font/otf'."\r\n";
	$suw1 .= 'AddOutputFilterByType DEFLATE font/ttf'."\r\n";
	$suw1 .= 'BrowserMatch ^Mozilla/4 gzip-only-text/html'."\r\n";
	$suw1 .= 'BrowserMatch ^Mozilla/4\.0[678] no-gzip'."\r\n";
	$suw1 .= 'BrowserMatch \bMSI[E] !no-gzip !gzip-only-text/html'."\r\n";
	$suw1 .= 'Header append Vary User-Agent env=!dont-vary'."\r\n";
	$suw1 .= '</IfModule>'."\r\n"."\r\n";

	$suw2 .= '# Leverage Browser Caching Start'."\r\n"."\r\n";
	$suw2 .= '<IfModule mod_expires.c>'."\r\n";
	$suw2 .= 'ExpiresActive On'."\r\n";
	$suw2 .= 'ExpiresByType image/jpg "access 1 year"'."\r\n";
	$suw2 .= 'ExpiresByType image/jpeg "access 1 year"'."\r\n";
	$suw2 .= 'ExpiresByType image/gif "access 1 year"'."\r\n";
	$suw2 .= 'ExpiresByType image/png "access 1 year"'."\r\n";
	$suw2 .= 'ExpiresByType text/css "access 1 month"'."\r\n";
	$suw2 .= 'ExpiresByType text/html "access 1 month"'."\r\n";
	$suw2 .= 'ExpiresByType application/pdf "access 1 month"'."\r\n";
	$suw2 .= 'ExpiresByType application/javascript "access plus 1 year"'."\r\n";
	$suw2 .= 'ExpiresByType text/x-javascript "access 1 month"'."\r\n";
	$suw2 .= 'ExpiresByType application/x-shockwave-flash "access 1 month"'."\r\n";
	$suw2 .= 'ExpiresByType image/x-icon "access 1 year"'."\r\n";
	$suw2 .= 'ExpiresDefault "access 1 month"'."\r\n";
	$suw2 .= '</IfModule>'."\r\n"."\r\n";
	
	$suw3 .= '# Caching of common files Start'."\r\n"."\r\n";
	$suw3 .= '<IfModule mod_headers.c>'."\r\n";
	$suw3 .= '<FilesMatch "\.(ico|pdf|flv|swf|js|css|gif|png|jpg|jpeg|ico|txt|html|htm)$">'."\r\n";
	$suw3 .= 'Header set Cache-Control "max-age=2592000, public"'."\r\n";
	$suw3 .= '</FilesMatch>'."\r\n";
	$suw3 .= '</IfModule>'."\r\n"."\r\n";

	$suw4 .= '# Enable Keepalive Start'."\r\n"."\r\n";
	$suw4 .= '<ifModule mod_headers.c>'."\r\n";
	$suw4 .= 'Header set Connection keep-alive'."\r\n";
	$suw4 .= '</ifModule>'."\r\n"."\r\n";
	
	$suw5 .= '# Use UTF-8 encoding Start'."\r\n"."\r\n";
	$suw5 .= 'AddDefaultCharset utf-8'."\r\n"."\r\n";
	
	$suw6 .= '# Enable Vary: Accept-Encoding Start'."\r\n"."\r\n";
	$suw6 .= '<IfModule mod_headers.c>'."\r\n";
	$suw6 .= '<FilesMatch "\.(js|css|xml|gz)$">'."\r\n";
	$suw6 .= 'Header append Vary: Accept-Encoding'."\r\n";
	$suw6 .= '</FilesMatch>'."\r\n";
	$suw6 .= '</IfModule>'."\r\n"."\r\n";

	$suw6 .= '# Speedup Wordpress Plugin Ends'."\r\n"."\r\n";

$speedupwp = ABSPATH.'.htaccess';

/*
** Speedupwp Activate
**/
function speedupwp_activate() {
	global $speedupwp;
	global $suwlink;
	global $suw1;
	global $suw2;
	global $suw3;
	global $suw4;
	global $suw5;
	global $suw6;

	if (file_exists($speedupwp)) {
		$sh = fopen($speedupwp, 'r');
		$suwaccess = fread($sh, filesize($speedupwp));
		fclose($sh);
  	}
	$sh = fopen($speedupwp, 'w') or die("can't open file");
	fwrite($sh, $suwaccess.$suwlink);
	fwrite($sh, $suw1);
	fwrite($sh, $suw2);
	fwrite($sh, $suw3);
	fwrite($sh, $suw4);
	fwrite($sh, $suw5);
	fwrite($sh, $suw6);
	fclose($sh);
}
register_activation_hook( __FILE__, 'speedupwp_activate' );
 
/*
** Speedupwp Deactivate
**/
function speedupwp_deactivate() {
	global $speedupwp;
	global $suwlink;
	global $suw1;
	global $suw2;
	global $suw3;
	global $suw4;
	global $suw5;
	global $suw6;

	if (file_exists($speedupwp)) {
		$sh = fopen($speedupwp, 'r');
		$suwaccess = fread($sh, filesize($speedupwp));
		fclose($sh);
		$suwaccess = str_replace($suwlink, "", $suwaccess);
		$suwaccess = str_replace($suw1, "",$suwaccess);
		$suwaccess = str_replace($suw2, "",$suwaccess);
		$suwaccess = str_replace($suw3, "",$suwaccess);
		$suwaccess = str_replace($suw4, "",$suwaccess);
		$suwaccess = str_replace($suw5, "",$suwaccess);
		$suwaccess = str_replace($suw6, "",$suwaccess);
		$sh = fopen($speedupwp, 'w') or die("can't open file");
		fwrite($sh, $suwaccess);
		fclose($sh);
	}
} 
register_deactivation_hook( __FILE__, 'speedupwp_deactivate' );
?>