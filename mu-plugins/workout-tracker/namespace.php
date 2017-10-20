<?php
/*
Plugin Name: Workout Tracker
Plugin URI: https://www.bronsonquick.com.au/
Description: A plugin to track circuits and weights programs and progress.
Author: Bronson Quick
Version: 0.1
Author URI: https://www.bronsonquick.com.au/
 */

namespace Workout_Tracker;

require_once( __DIR__ . '/inc/custom-post-types.php' );
require_once( __DIR__ . '/inc/custom-meta-boxes.php' );

add_action( 'muplugins_loaded', __NAMESPACE__ . '\\CPT\\bootstrap' );
add_action( 'muplugins_loaded', __NAMESPACE__ . '\\CMB\\bootstrap' );
