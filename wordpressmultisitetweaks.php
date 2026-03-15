<?php

/**
 * Plugin Name: WordPress Multisite Tweaks
 * Description: A group of tweaks for the WordPress admin section in a multisite environment
 * Author:      Scot Newbury
 * Requires     PHP: 7.4
 * Version:     0.1.0
 */

// Set the namespace
namespace ScotNewbury\WordPressMultisiteTweaks;

// Stop execution of the plugin if it's call directly.
if (!defined('ABSPATH')) {
  exit;
}

require_once __DIR__ . '/src/MultisiteTweaks.php';
