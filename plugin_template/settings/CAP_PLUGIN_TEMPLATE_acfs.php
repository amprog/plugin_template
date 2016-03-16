<?php
/**
 * File containing advanced custom fields required by CAP_PLUGIN_TEMPLATE
 *
 * An array containing the specs for any advanced custom fields used by
 * the CAP_PLUGIN_TEMPLATE plugin.
 *
 * @link       https://github.com/amprog/cap-plugin-template
 * @since      1.3.0
 *
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/settings
 **/

/**
 * Defines advanced custom fields used by CAP_PLUGIN_TEMPLATE
 *   Copyright (C) 2013 to 2016 - The Center for American Progress
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


$CAP_PLUGIN_TEMPLATE_acfs = array(
  "template_group" => array(
    'id' => 'acf_template_field_group',
    'title' => __('Template Fieldgroup'),
    'menu_order' => 0,

    'location' => array(
      array(
        array(
          'param' => 'ef_taxonomy',
          'operator' => '==',
          'value' => 'template_tax',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ), # End of locations for Template Group.

    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (),
    ), # End of options for Template Group.

    'fields' => array(
      array(
        'key'          => 'field_template_1',
        'label'        => __('Template Field Name'),
        'name'         => 'person_photo',
        'type'         => 'image',
        'save_format'  => 'id',
        'preview_size' => 'thumbnail',
        'library'      => 'all',
      ),
    ),  # End of Template Gorup fields.
  ), # End of Template Field group.

);

?>