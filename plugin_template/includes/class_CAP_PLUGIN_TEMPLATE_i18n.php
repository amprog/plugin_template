<?php
/**
 * Defines the internationalization functionality for CAP_PLUGIN_TEMPLATE.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/amprog/cap-plugin-template
 * @since      1.0.0
 *
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/includes
 */

/**
 * Defines the internationalization functionality for CAP_PLUGIN_TEMPLATE
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
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/includes
 * @author     John Q. Public <jqp@americanprogress.org> for The Center for American Progress
 */
class CAP_PLUGIN_TEMPLATE_i18n
{
  /**
   * Load the plugin text domain for translation.
   *
   * @since    1.0.0
   */
  public function load_plugin_textdomain()
  {
    $intl_dir = dirname(dirname(plugin_basename(__FILE__))) . '/intl/';

    load_plugin_textdomain('cap-plugin-template', false, $intl_dir);
  }
}

?>