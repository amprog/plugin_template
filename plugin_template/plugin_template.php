<?php
/**
Plugin Name: CAP_PLUGIN_TEMPLATE
Plugin URI:  https://github.com/amprog/cap-plugin-template
Description: <CHANGEME: THIS DESCRIBES MY PLUGIN IN A SHORT SENTENCE>
Version:     1.5
Author:      John Q. Public for The Center for American Progress
Author URI:  https://github.com/amprog/
License:     GPL3
License URI: http://www.gnu.org/licenses/gpl.html
Text Domain: cap-plugin-template
Domain Path: /intl

CAP_PLUGIN_TEMPLATE is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

CAP_PLUGIN_TEMPLATE is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with CAP_PLUGIN_TEMPLATE.  If not, see <http://www.gnu.org/licenses/gpl.html>.
 **/

/**
 * CAP_PLUGIN_TEMPLATE bootstrap file
 *
 * - Makes sure that we were called properly.
 * - Registers callbacks for admin functionality.
 * - Loads dependencies.
 * - Registers activation hooks.
 * - Registers deactivation hooks.
 * - Starts plugin.
 *
 * @link              https://github.com/amprog/cap-plugin-template
 * @since             1.0.0
 * @package           CAP_PLUGIN_TEMPLATE
 *
 * @wordpress-plugin
 **/

# If this file is called directly, abort.
if(!defined('WPINC')) {
  die;
}

$plugin_dir = plugin_dir_path(__FILE__);

# Activation callback
if(file_exists("$plugin_dir/includes/class_CAP_PLUGIN_TEMPLATE_activator.php")) {

  /**
   * Callback for plugin activation.
   *
   * @since    1.0.0
   **/
  function activate_CAP_PLUGIN_TEMPLATE()
  {
    require_once("$plugin_dir/includes/class_CAP_PLUGIN_TEMPLATE_activator.php");
    CAP_PLUGIN_TEMPLATE_Activator::activate();
  }
  register_activation_hook(__FILE__, 'activate_CAP_PLUGIN_TEMPLATE');
}

# Deactivation callback
if(file_exists("$plugin_dir/includes/class_CAP_PLUGIN_TEMPLATE_deactivator.php")) {

  /**
   * Callback for plugin deactivation.
   *
   * @since    1.0.0
   **/
  function deactivate_CAP_PLUGIN_TEMPLATE()
  {
	require_once("$plugin_dir/includes/class_CAP_PLUGIN_TEMPLATE_deactivator.php");
	CAP_PLUGIN_TEMPLATE_Deactivator::deactivate();
  }
  register_deactivation_hook(__FILE__, 'deactivate_CAP_PLUGIN_TEMPLATE');
}


# Load main PLUGINNAME class
require("$plugin_dir/includes/class_CAP_PLUGIN_TEMPLATE.php");

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function run_CAP_PLUGIN_TEMPLATE() {
	$plugin = new CAP_PLUGIN_TEMPLATE();
	$plugin->run();
}
run_CAP_PLUGIN_TEMPLATE();

?>