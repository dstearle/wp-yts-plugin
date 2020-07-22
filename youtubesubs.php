<?php
/*
Plugin Name: Youtube Subs
Plugin URI: https://dstearle.com
Description: Display Youtube sub button and count
Version: 0.1.0
Author: Dallas Earle
Author URI: https://dstearle.com
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
    exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');