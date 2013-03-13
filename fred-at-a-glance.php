<?php
   /*
   Plugin Name: FRED At a Glance Sidebar Widget
   Plugin URI: http://research.stlouisfed.org/fred2/
   Description: A widget showcasing popular economic data series from the Federal Reserve Bank of St. Louis' FRED database.
   Version: 1.0
   Author: Julie Knoll, Research Division, Federal Reserve Bank of St. Louis
   Author URI: http://research.stlouisfed.org
   License: GPLv2
   */

wp_register_sidebar_widget(
	'fred-glance-widget',
	'FRED At a Glance',
	'output_fred_glance_widget',
	array('description'=>
			'A widget showcasing popular economic data series from the Federal Reserve Bank of St. Louis\' FRED database.')
);

function output_fred_glance_widget() {
	echo '<iframe style="border: 1px solid #333333; overflow: hidden; width: 190px; height: 490px;margin:1em 0" 
			src="//research.stlouisfed.org/fred-glance-widget.php" height="240" width="320" frameborder="0" scrolling="no"></iframe>';
}