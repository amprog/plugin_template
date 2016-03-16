<?php
/**
 * File containing gravityforms required by CAP_PLUGIN_TEMPLATE
 *
 * An array containing the specs for any gravity forms used by
 * the CAP_PLUGIN_TEMPLATE plugin.
 *
 * @link       https://github.com/amprog/cap-plugin-template
 * @since      1.3.0
 *
 * @package    CAP_PLUGIN_TEMPLATE
 * @subpackage CAP_PLUGIN_TEMPLATE/settings
 **/

/**
 * Defines gravityforms used by CAP_PLUGIN_TEMPLATE
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


$CAP_PLUGIN_TEMPLATE_gravityforms = array(
  array(
    'labelPlacement' => 'top_label',
    'useCurrentUserAsAuthor' => 1,
    'title' => __('CAP PLUGIN TEMPLATE Form'),
    'description' => __('Fill out the form below to TEMPLATE'),
    'descriptionPlacement' => 'below',
    'button' => array('type' => 'text', 'text' => __('Submit')),
    'enableHoneypot' => '1',
    'enableAnimation' => '1',
    'id' => '2',
    'is_active' => '1',
    'date_created' => '2014-06-17 15:17:18',
    'is_trash' => '0',

    'fields' => array(
      array(
        # Message to be sent to the author.
        'id' => '3',
        'isRequired' => '1',
        'size' => 'medium',
        'type' => 'textarea',
        'label' => __('Message'),
        'formId' => '2',
        'pageNumber' => '1',
        'descriptionPlacement' => 'below',
      ),
    ), # End of Template Form fields.

    'notifications' => array(
      '53a057ebea107' => array(
        'id' => '53a057ebea107',
        'to' => '{admin_email}',
        'name' => 'Admin Notification',
        'event' => 'form_submission',
        'toType' => 'email',
        'subject' => 'You have received a message from '.get_bloginfo('name').'',
        'message' => '{all_fields}'
      ),
    ), # End of Template Form Notifications.

    'confirmations' => array(
      '53a057ebeadd6' => array(
        'id' => '53a057ebeadd6',
        'isDefault' => '1',
        'type' => 'message',
        'name' => 'Default Confirmation',
        'message' => __('Thank you for contacting me.'),
        'disableAutoformat' => null,
        'pageId' => null,
        'url' => null,
        'queryString' => null,
        'conditionalLogic' => array (),
      ),
    ), # End of Template Form Confirmations.
  ), # End of Template form.
);

?>