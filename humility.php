<?php
/**
 * Plugin Name: WordPress SEO Meta Humility
 * Plugin URI:
 * Description: Puts the WordPress SEO meta box in it's rightful place on Edit
 * screens.  Reduces the priority level of the WordPress SEO plugin's meta box
 * to 'default'.
 * Version:     1.0
 * Author:      Rachel Baker
 * Author URI:  http://10up.com
 * License:     GPLv2+
 */

/**
 * Copyright (c) 2014 Rachel Baker (email : rachel@10up.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if ( ! defined( 'WPSEO_VERSION' ) ) {
	function seo_meta_admin_notice() {
		printf( '<div class="error"><p>%s</p></div>', __( 'The WordPress SEO plugin is not active' ) );
	}
	add_action( 'admin_notices', 'seo_meta_admin_notice' );
}

function seo_meta_deprioritize( $priority ) {
	$priority = 'default';

	return $priority;
}
add_filter( 'wpseo_metabox_prio', 'seo_meta_deprioritize' );