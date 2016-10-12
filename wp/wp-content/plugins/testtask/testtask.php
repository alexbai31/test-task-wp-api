<?php

/**
 * Plugin Name:       Test task
 * Description:       Wordpress test task plugin, A/B
 * Version:           1.0.0
 */

require plugin_dir_path( __FILE__ ) . 'class-plugin.php';

$plugin = new Plugin;
$plugin->init();