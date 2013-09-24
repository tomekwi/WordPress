<?php
/**
 * This is the WordPress core served as a Composer package. It's stripped of
 * the wp-content folder - all its glory (themes, plugins, languages, etc.)
 * is supposed to be put into '/' or '/directory-of-your-choice' for you to
 * enjoy a clear folder structure.
 * 
 * The composer package is fitted with composer/installers, so you can specify
 * a custom installation path (for example '/wordpress-core'). For more
 * information about custom installers visit https://github.com/composer/installers .
 * 
 * @author Tomasz Wiszniewski <twiszniewski@gmail.com>
 */

/**
 * This file is a proxy redirecting the user to the admin panel.
 */

header('Location: wp-admin/');
