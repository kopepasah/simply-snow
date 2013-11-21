<?php
/*
Plugin Name: Simply Snow
Plugin URI: http://kopepasah.com/plugins/simply-snow/
Description: A plugin that, when activated, creates a snowing effect on your site.
Version: 1.0.0
Author: Justin Kopepasah
Author URI: http://kopepasah.com
*/

/**
 * Copyright (c) 2013 Justin Kopepasah. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * **********************************************************************
*/

function simply_snow_enqueue_scripts() {
	wp_register_script( 'snowstorm', plugins_url( '/assets/js/snowstorm.min.js', __FILE__ ), array(), '1.44', true );
	
	wp_enqueue_script( 'simply-snow', plugins_url( '/assets/js/simply-snow.js', __FILE__ ), array( 'snowstorm' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'simply_snow_enqueue_scripts' );