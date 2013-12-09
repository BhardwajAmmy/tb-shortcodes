<?php
/*
  Plugin Name: TB Shortcodes
  Plugin URI: http://www.techbooth.in
  Version: 1.0
  Author: TechBooth
  Author URI: http://www.techbooth.in
  Description: Add Asweome shortcodes features to your website. Supports almost all themes and responsive layout.
  Text Domain: tbs
  Domain Path: /languages
  License: GPL
 */

// Define plugin file constant
define( 'TBS_PLUGIN_FILE', __FILE__ );
define( 'TBS_PLUGIN_VERSION', '1.0' );
define( 'TBS_ENABLE_CACHE', true );

// Includes
require_once 'inc/vendor/techbooth.php';
require_once 'inc/core/admin-views.php';
require_once 'inc/core/requirements.php';
require_once 'inc/core/load.php';
require_once 'inc/core/assets.php';
require_once 'inc/core/shortcodes.php';
require_once 'inc/core/tools.php';
require_once 'inc/core/data.php';
require_once 'inc/core/generator-views.php';
require_once 'inc/core/generator.php';
require_once 'inc/core/widget.php';
require_once 'inc/core/vote.php';
