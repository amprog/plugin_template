<?php
/**
 * File containing an array of taxonomies required by CAP_PLUGIN_TEMPLATE
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://github.com/amprog/cap-plugin-template
 * @since      1.3.0
 *
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/settings
 **/

/**
 * Defines taxonomies created by CAP_PLUGIN_TEMPLATE
 *   Copyright (C) <Year to Year> - The Center for American Progress
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


$CAP_PLUGIN_TEMPLATE_taxonomies = array(
  "tax1" => array(
    "post_types" => get_post_types(),
    "configs" => array(
      'label' => __('TAX1'),
      'rewrite' => array(
        'slug' => 'tax1',
        'with_front' => false,
      ),
      'hierarchical' => false,
      'show_admin_column' => false,
      'capabilities' => array(
        'manage_terms' => 'edit_others_posts',
        'edit_terms' => 'edit_others_posts',
        'delete_terms' => 'edit_others_posts',
      ),
    ),
  ), # End of Tax1 Taxonomy
);

?>