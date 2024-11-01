<?php
/**
 * @package WP News in New Tab
 * @version 1.0
 */
/*
  Plugin Name: WP News in New Tab
  Description: Wordpress news new tab help Admin to open wordpress news or rss fedd open in new tab.
  Author: ifourtechnolab
  Version: 1.0
  Author URI: http://www.ifourtechnolab.com/
  License: GPLv2 or later
  License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * https://wordpress.org/ideas/topic/wordpress-news-request
 */
if (!defined('ABSPATH')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

add_action('admin_enqueue_scripts', 'wnnt_plugin_setup_menu');

function wnnt_plugin_setup_menu() {
    if (is_admin()) {
        wp_enqueue_script('wnnt-script', plugin_dir_url(__FILE__) . 'assets/wnnt.js', array('jquery'), '1.0', TRUE);
    }
}


