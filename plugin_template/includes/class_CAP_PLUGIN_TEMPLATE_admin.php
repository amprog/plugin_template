<?php
/**
 * The admin functionality of the CAP_PLUGIN_TEMPLATE.
 *
 * @link       https://github.com/amprog/cap-plugin-template
 * @since      1.0.0
 *
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/includes
 */

/**
 * Defines the admin section for CAP_PLUGIN_TEMPLATE
 *   Copyright (C) <YEAR to YEAR>  The Center for American Progress
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 **/

/**
 * The admin functionality of the CAP_PLUGIN_TEMPLATE plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/includes
 * @author     John Q. Public <jqp@americanprogress.org> for The Center for American Progress
 */
class CAP_PLUGIN_TEMPLATE_Admin
{
  /**
   * The ID of this plugin.
   *
   * @since    1.0.0
   * @access   private
   * @var      string    $plugin_name    The ID of this plugin.
   */
  private $plugin_name;


  /**
   * The version of this plugin.
   *
   * @since    1.0.0
   * @access   private
   * @var      string    $version    The current version of this plugin.
   */
  private $version;


  /**
   * Debugging level.
   *
   * @since    1.0.0
   * @access   private
   * @var      string    $debug    Debugging level.
   */
  private $debug;


  /**
   * Reference to the main plugin class.
   *
   * @since    1.0.0
   * @access   private
   * @var      object    $plugin_core    Reference to the core plugin object
   */
  private $plugin_core;


  /**
   * Initialize the class and set its properties.
   *
   * @since    1.0.0
   * @param      array    $args       Array of function arguments.
   */
  public function __construct($args = array())
  {
    foreach($args as $k=>$v) {
      $this->$k = $v;
    }
  }


  /**
   * Register the stylesheets for the public-facing side of the site.
   *
   * @since    1.0.0
   */
  public function enqueue_styles()
  {
    $public_css_files = array(
      "cap_plugin_template_admin1.css",
      "cap_plugin_template_admin2.css",
    );

    $css_prefix = plugin_dir_url( __FILE__ ) . 'css';

    foreach($public_css_files as $cssfile) {
      wp_enqueue_style($this->plugin_name, "{$css_prefix}/{$cssfile}", array(), $this->version, 'all');
    }
  }


  /**
   * Register the JavaScript for the public-facing side of the site.
   *
   * @since    1.0.0
   */
  public function enqueue_scripts()
  {
    $public_js_files = array(
      "cap_plugin_template_admin1.js",
      "cap_plugin_template_admin2.js",
    );

    $js_prefix = plugin_dir_url( __FILE__ ) . 'js';

    foreach($public_js_files as $jsfile) {
      wp_enqueue_script($this->plugin_name, "{$js_prefix}/{$jsfile}", array('jquery'), $this->version, false);
    }
  }
}

?>