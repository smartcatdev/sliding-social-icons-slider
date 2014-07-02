<?php
/*
Plugin Name: Sliding Social Icons
Plugin URI: http://smartcatdesign.net/sliding-social-icons-free-wordpress-plugin/
Description: Sliding Social Icons plugin that creates a social media bar on the left of your site dynamically, with smooth hover effects and links.
Author: smartcat
Version: 2.0
Author URI: http://smartcatdesign.net
contact: info@smartcatdesign.net
*/


//include("libs/class.plugin.php");

//$wpbs_plugindir = str_replace('\\','/',dirname(__FILE__));
//$wpbs_plugin = new ahm_plugin(end(explode('/',$wpbs_plugindir)));
//define('wpbs__DIR',$wpbs__plugindir);

if(!defined('SC_SOCIAL_SLIDER_PATH'))
    define('SC_SOCIAL_SLIDER_PATH',plugin_dir_url(__FILE__));

register_activation_hook(__FILE__, 'sc_social_slider');

function sc_social_slider() {
    add_option('sc_social_slider_activation_redirect', true);
    sc_social_slider_register_options();
}

function sc_social_slider_register_options() {
    // declare options array
    $sc_social_slider_options = array(
        'sc_social_slider_facebook' => 'grid',
        'sc_social_slider_gplus' => 'yes',
        'sc_social_slider_youtube' => 'yes',
        'sc_social_slider_linkedin' => 'yes',
        'sc_social_slider_email' => 'yes',
        'sc_social_slider_shortcode' => 'yes',
        'sc_social_slider_twitter' => 'yes',
        'sc_social_slider_instagram' => 'yes',
        'sc_social_slider_phone' => 'yes',
        'sc_social_slider_pinterest' => 'yes',
        'sc_social_slider_skype' => 'yes',
        'sc_social_slider_foursquare' => 'yes',
        'sc_social_slider_github' => 'yes',
        'sc_social_slider_tumblr' => 'yes',
        'sc_social_slider_store' => 'yes',
        'sc_social_slider_position' => 'left',
        'sc_social_slider_background' => '#404040',
        'sc_social_slider_color' => '#ffffff',
        'sc_social_slider_margin' => '100',
        'sc_social_slider_switch' => 1,
    );
    // check if option is set, if not, add it
    foreach ($sc_social_slider_options as $option_name => $option_value) {
        if (get_option($option_name) === false) {
            add_option($option_name, $option_value);
        } else {
            update_option($option_name, addslashes($_POST[$option_name]));
        }
    }
}

// redirect when activated
add_action('admin_init', 'sc_social_slider_activation_redirect');

function sc_social_slider_activation_redirect() {
    if (get_option('sc_social_slider_activation_redirect', false)) {
        delete_option('sc_social_slider_activation_redirect');
        wp_redirect(admin_url() . 'edit.php?post_type=team_member&page=sc_social_slider_settings');
    }
}

// menu
if(is_admin()){
    add_action("admin_menu","wpbs_menu");
}
function wpbs_menu(){
    add_menu_page("Sliding Social Icons","Sliding Social Icons","administrator",'wpbs_panel','wpbs_settings', SC_SOCIAL_SLIDER_PATH . 'images/icon.jpg');

}
function wpbs_settings(){

    if (isset($_REQUEST['sc_social_slider_save']) && $_REQUEST['sc_social_slider_save'] == 'Update') {
        sc_social_slider_register_options();
    }

    include("tpls/settings.php");
}


add_action('wp_enqueue_scripts', 'sc_social_slider_styles_scripts');
function sc_social_slider_styles_scripts() {

    // plugin main style
    wp_enqueue_style('sc_social_slider_default_style', SC_SOCIAL_SLIDER_PATH . 'css/site/sc_social_slider.css', false, '2.0');

    // plugin main script
    wp_enqueue_script('sc_social_slider_default_script', SC_SOCIAL_SLIDER_PATH . 'js/site/sc_social_slider.js', array('jquery'), '2.0');
}

add_action('admin_enqueue_scripts', 'sc_social_slider_styles_scripts_admin');
function sc_social_slider_styles_scripts_admin($hook) {
    wp_enqueue_script('sc_social_slider_admin_script', SC_SOCIAL_SLIDER_PATH . 'js/admin/jquery.miniColors.js', array('jquery'));
}

add_action('wp_head','sc_social_slider_add_css');
function sc_social_slider_add_css(){

    include 'tpls/' . get_option('sc_social_slider_position') . '_css.php';
}

add_action('wp_footer','sc_social_slider_add_html');
function sc_social_slider_add_html(){
    if('1' == get_option('sc_social_slider_switch'))
        include 'tpls/' . get_option('sc_social_slider_position') . '.php';
}

