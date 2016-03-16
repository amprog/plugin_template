<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://github.com/amprog/cap-plugin-template
 * @since      1.0.0
 *
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/includes
 **/

/**
 * Defines actions to occur on plugin deactivation for CAP_PLUGIN_TEMPLATE
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
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/includes
 * @author     John Q. Public <jqp@americanprogress.org> for The Center for American Progress
 **/
class CAP_PLUGIN_TEMPLATE
{
  /**
   * The loader that's responsible for maintaining and registering all hooks that power
   * the plugin.
   *
   * @since    1.0.0
   * @access   protected
   * @var      Plugin_Name_Loader    $loader    Maintains and registers all hooks for the plugin.
   */
  protected $loader;


  /**
   * The unique identifier of this plugin.
   *
   * @since    1.0.0
   * @access   protected
   * @var      string    $plugin_name    The string used to uniquely identify this plugin.
   */
  protected $plugin_name;


  /**
   * The current version of the plugin.
   *
   * @since    1.0.0
   * @access   protected
   * @var      string    $version    The current version of the plugin.
   */
  protected $version;


  /**
   * Which subclasses have been loaded.  This correlates to which functionality
   * has been defined.
   *
   * @since    1.0.0
   * @access   private
   * @var      array    $subclasses_loaded    Which subclasses have been loaded.
   */
  private $subclasses_loaded;


  /**
   * Debugging level.
   *
   * @since    1.0.0
   * @access   private
   * @var      array    $debug    Debugging level.
   */
  private $debug = 0;


  /**
   * Define the core functionality of the plugin.
   *
   * Set the plugin name and the plugin version that can be used throughout the plugin.
   * Load the dependencies, define the locale, and set the hooks for the admin area and
   * the public-facing side of the site.
   *
   * @since    1.0.0
   */
  public function __construct()
  {
    include_once("../constants/constants.php");

    $this->subclasses_loaded = array(
      "loader" => false,
      "i18n" => false,
      "admin" => false,
      "public" => false,
    );

    $this->plugin_name = $CAP_PLUGIN_TEMPLATE_constants["slug"];

    foreach($CAP_PLUGIN_TEMPLATE_constants as $k => $v) {
      $this->$k = $v;
    }

    $this->load_dependencies();
    $this->set_locale();
    $this->define_admin_hooks();
    $this->define_public_hooks();
    $this->define_general_hooks();
  }


  /**
   * Load the required dependencies for this plugin.
   *
   * Include the following files that make up the plugin:
   *
   * - Plugin_Name_Loader. Orchestrates the hooks of the plugin.
   * - Plugin_Name_i18n. Defines internationalization functionality.
   * - Plugin_Name_Admin. Defines all hooks for the admin area.
   * - Plugin_Name_Public. Defines all hooks for the public side of the site.
   *
   * Create an instance of the loader which will be used to register the hooks
   * with WordPress.
   *
   * @since    1.0.0
   * @access   private
   */
  private function load_dependencies()
  {
    foreach($this->subclasses_loaded as $tclass => $v) {
      $subclass_file = plugin_dir_path(dirname(__FILE__)) . 'includes/class_' . $this->class_label . "_{$tclass}.php";

      if(file_exists($subclass_file)) {
        require_once($subclass_file);
        $this->subclasses_loaded[$tclass] = true;
      }
    }

    if($this->subclasses_loaded["loader"]) {
      $this->loader = new CAP_PLUGIN_TEMPLATE_Loader(array("debug" => $this->debug));
    }
  }


  /**
   * Define the locale for this plugin for internationalization.
   *
   * Uses the Plugin_Name_i18n class in order to set the domain and to register the hook
   * with WordPress.
   *
   * @since    1.0.0
   * @access   private
   */
  private function set_locale()
  {
    if($this->subclasses_loaded["i18n"]) {
      $plugin_i18n = new CAP_PLUGIN_TEMPLATE_i18n(array("debug" => $this->debug));

      if($this->subclasses_loaded["loader"]) {
        $this->loader->add_action('plugins_loaded', $plugin_i18n, 'load_plugin_textdomain');
      }
    }
  }


  /**
   * Register all of the hooks related to the admin area functionality
   * of the plugin.
   *
   * @since    1.0.0
   * @access   private
   */
  private function define_admin_hooks()
  {
    if($this->subclasses_loaded["admin"]) {
      $plugin_admin = new CAP_PLUGIN_TEMPLATE_Admin(array("debug" => $this->debug, "plugin_name" => $this->plugin_name, "version" => $this->version, "plugin_core" => $this));

      if($this->subclasses_loaded["loader"]) {
        $this->loader->add_action('admin_enqueue_scripts', $plugin_admin, 'enqueue_styles');
        $this->loader->add_action('admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts');

        # Add hooks for actions and filters for the backend here.  Those functions should
        # be defined in the XX_Admin class.
      }
    }
  }


  /**
   * Register all of the hooks related to the public-facing functionality
   * of the plugin.
   *
   * @since    1.0.0
   * @access   private
   */
  private function define_public_hooks()
  {
    if($this->subclasses_loaded["public"]) {
      $plugin_public = new CAP_PLUGIN_TEMPLATE_Public(array("debug" => $this->debug, "plugin_name" => $this->plugin_name, "version" => $this->version, "plugin_core" => $this));

      if($this->subclasses_loaded["loader"]) {
        $this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_styles');
        $this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_scripts');

        # Add hooks for actions and filters for the backend here.  Those functions should
        # be defined in the XX_Admin class.
      }
    }
  }


  /**
   * Register all of the hooks related to the public-facing functionality
   * of the plugin.
   *
   * @since    1.0.0
   * @access   private
   */
  private function define_general_hooks()
  {
    if($this->subclasses_loaded["loader"]) {
      $this->loader->add_action('init', $this, 'register_taxonomies');

      # Add hooks here.  Those functions should be defined in this class.
    }
  }


  /**
   * Register taxonomies.
   *
   * @since    1.0.0
   * @access   private
   */
  private function register_taxonomies()
  {
    require_once("../settings/CAP_PLUGIN_TEMPLATE_taxonomies.php");

    if(   isset($CAP_PLUGIN_TEMPLATE_taxonomies)
       && is_array($CAP_PLUGIN_TEMPLATE_taxonomies)
       && count(array_keys($CAP_PLUGIN_TEMPLATE_taxonomies)) > 0) {
      foreach($CAP_PLUGIN_TEMPLATE_taxonomies as $label=>$tax) {
        register_taxonomy($label, $tax["post_types"], $tax["configs"]);
      }
    }
  }


  /**
   * Run the loader to execute all of the hooks with WordPress.
   *
   * @since    1.0.0
   */
  public function run()
  {
    $this->loader->run();
  }


  /**
   * Plugin name getter
   *
   * @since     1.0.0
   * @return    string    The name of the plugin.
   */
  public function get_plugin_name()
  {
    return $this->plugin_name;
  }


  /**
   * Loader object getter.
   *
   * @since     1.0.0
   * @return    CAP_PLUGIN_TEMPLATE_Loader    Orchestrates the hooks of the plugin.
   */
  public function get_loader()
  {
    return $this->loader;
  }


  /**
   * Version getter.
   *
   * @since     1.0.0
   * @return    string    The version number of the plugin.
   */
  public function get_version()
  {
    return $this->version;
  }


  /**
   * Debug getter.
   *
   * @since     1.0.0
   * @return    string    The version number of the plugin.
   */
  public function get_debug()
  {
    return $this->debug;
  }
}

?>