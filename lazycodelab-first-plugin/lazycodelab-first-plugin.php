<?php
/*
 * Plugin Name:       Bharat first Plugin
 * Plugin URI:        https://lazycodelab.com/about
 * Description:       Handling  the basics with this plugin in the guidance.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Bharat Rav
 * Author URI:        https://www.linkedin.com/in/bharatrav/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://lazycodelab.com/learning/wordpress/plugins/bharat/bharat-first-plugin/
 * Text Domain:       my-First-plugin
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    header("Location: /wordpress-learning");
    die("can not access directly");
}
function my_plugin_activation()
{
    //some plugin action at the time of activation of hook
};
register_activation_hook(__FILE__, 'my_plugin_activation');

function my_plugin_deactivation()
{
    //some plugin action at the time of activation of hook
};
register_deactivation_hook(
    __FILE__,
    'my_plugin_deactivation'
);

function pluginprefix_function_to_run()
{
    //some action when plugin is going to uninstall
}
register_uninstall_hook(
    __FILE__,
    'pluginprefix_function_to_run'
);

function f_sc_func()
{
    return "This is coming from shortcode";
};
add_shortcode('f-sc', 'f_sc_func');
