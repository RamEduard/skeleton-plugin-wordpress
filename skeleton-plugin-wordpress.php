<?php
/*
Plugin Name: Plugin Name
Plugin URI: https://github.com/RamEduard/skeleton-plugin-wordpress
Description: Description plugin
Version: 1.0
Author: Author Name
Text Domain: skeleton-plugin-wordpress
Domain Path: /languages/

	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/**
 * Localization
 */
load_plugin_textdomain('skeleton-plugin-wordpress', false, dirname(plugin_basename(__FILE__)) . '/languages/');

// Loader
$loader = require __DIR__ . '/autoloader/autoloader.php';
// Load namespaces
$loader->add('src', __DIR__ . '/src');