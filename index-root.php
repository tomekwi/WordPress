<?php
/**
 * This file should be copied to the site's main directory. It loads  * the
 * WordPress engine. Remember to change \//wordpress-core/\/ to the name of the
 * directory where you keep the core files.
 * 
 * @author Tomasz Wiszniewski
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wordpress-core/wp-blog-header.php');
