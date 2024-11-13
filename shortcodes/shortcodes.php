<?php
/*
Plugin Name: Shortcodes Plugin
Plugin URI: http://7learn.com
Description: A Simple Plugin For Shortcodes
Author: Kaivan Alimohammadi
Version: 1.0.0
Author URI:  http://7learn.com
*/


add_shortcode('simple_shortcode', 'simple_shortcode_callback');

function simple_shortcode_callback($atts)
{

    $args = shortcode_atts(array(
        "id" => 10
    ), $atts);

    return "Hello World " . $args["id"];
}

function member_callback($atts, $content = null)
{

    if (is_user_logged_in()) {
        return $content;
    } else {
        return '<div class="member-only">محتوای مخصوص کاربران عضو شده سایت</div>';
    }
}

add_shortcode('member', 'member_callback');
