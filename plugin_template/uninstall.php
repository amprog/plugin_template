<?php
/**
 * <one line to give the program's name and a brief idea of what it does.>
 *   Copyright (C) <year>  The Center for American Progress
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

// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

$plugin_dir = plugin_dir_path( __FILE__ );

require_once($plugin_dir . "/constants/constants.php");
require_once($plugin_dir . "/db/db_uninstall.php");

$option_name = 'plugin_option_name';

delete_option( $option_name );

// For site options in Multisite
delete_site_option( $option_name );


?>