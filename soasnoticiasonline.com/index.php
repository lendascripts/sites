<?php
$handle = @fopen("redirect.txt", "r");
if($handle)
{
	$redirects = fgets($handle, 4096);
	$redirects = explode(';', $redirects);
	fclose($handle);
	$dominio = $redirects[0];
	$dominio = str_replace('http://','',$dominio);
	$dominio = str_replace('https://','',$dominio);
	if($redirects[2] == 'S')
		if($redirects[1] == 'S')
			header('location: https://'.$dominio.'/');
		else
			header('location: http://'.$dominio.'/');
}
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
