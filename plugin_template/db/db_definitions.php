<?php
/**
 * Database artifacts required by the CAP_PLUGIN_TEMPLATE.
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

global $wpdb;

$fqdb_prefix = $wpdb->prefix . "_" . $CAP_PLUGIN_TEMPLATE_constants["prefix"] . "_";

$CAP_PLUGIN_TEMPLATE_table_definitions = array(
    "table_1" => array(
        "create" => "CREATE TABLE IF NOT EXISTS {$fqdb_prefix}table_1 (id BIGINT(20) PRIMARY KEY, col2 TEXT);",
        "drop"   => "DROP TABLE {$fqdb_prefix}table_1;",
        "name"   => "{$fqdb_prefix}table_1",
    ),
);

$CAP_PLUGIN_TEMPLATE_view_definitions = array(
    "view_1" => array(
        "create" => "CREATE VIEW IF NOT EXISTS {$fqdb_prefix}view_1 AS SELECT * FROM {$fqdb_prefix}table_1;",
        "drop"   => "DROP VIEW IF EXISTS {$fqdb_prefix}view_1;",
        "name"   => "{$fqdb_prefix}view_1",
    ),

);

?>