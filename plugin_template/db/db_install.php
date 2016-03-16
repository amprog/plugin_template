<?php
/**
 * Creating database artifacts for CAP_PLUGIN_TEMPLATE.  Called from
 * CAP_PLUGIN_TEMPLATE_Activator::activate().
 *   Copyright (C) <YEAR TO YEAR>  The Center for American Progress
 *
 * CAP_PLUGIN_TEMPLATE is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * CAP_PLUGIN_TEMPLATE is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with CAP_PLUGIN_TEMPLATE.  If not, see <http://www.gnu.org/licenses/gpl.html>.
 **/

require_once("db_definitions.php");

foreach($CAP_PLUGIN_TEMPLATE_table_definitions as $k => $v) {
    $wpdb->query($v["create"]);
}

foreach($CAP_PLUGIN_TEMPLATE_view_definitions as $k => $v) {
    $wpdb->query($v["create"]);
}

?>