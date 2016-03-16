<?php
/**
 * Defines the actions to take during plugin activation.
 *
 * @link       https://github.com/amprog/cap-plugin-template
 * @since      1.0.0
 *
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/includes
 */

/**
 * Defines actions to occur on plugin activation for CAP_PLUGIN_TEMPLATE
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
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/includes
 * @author     Eric Helvey <ehelvey@americanprogress.org> for The Center for American Progress
 */
class CAP_PLUGIN_TEMPLATE_Activator
{
	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate()
	{
	  CAP_PLUGIN_TEMPLATE_Activator::load_gravity_forms();
	}


	/**
	 * Load CAP_Byline gravity forms.
	 *
	 * @since    1.0.0
	 */
	private static function load_gravity_forms()
	{
	  require_once("../settings/CAP_PLUGIN_TEMPLATE_gravityforms.php");

      if(function_exists('gform_notification')) {
        foreach($CAP_PLUGIN_TEMPLATE_gravityforms as $form) {
          $form_id = GFAPI::add_form($form);
        }
      }
	}
}

?>