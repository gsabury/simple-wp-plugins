<?php
/*
Plugin Name: Filter the Content
Plugin URI: http://7learn.com
Description: A Simple Plugin For Filter Content Words
Author: Kaivan Alimohammadi
Version: 1.0.0
Author URI:  http://7learn.com
*/

defined('ABSPATH') || exit('no access');

define('FTC_DIR', plugin_dir_path(__FILE__));


function ftc_filter_words($content)
{

    $filters_data = array(
        'وردپرس' => ' **** '
    );

    foreach ($filters_data as $key => $value) {
        $content = preg_replace('/' . $key . '/', $value, $content);
    }

    return $content;
}

add_filter('the_content', 'ftc_filter_words');


//Filter Comments Content

function ftc_filter_comments_content($comment_content)
{

    $filter_words = file(FTC_DIR . "comment_filters.txt");

    if (count($filter_words) > 0) {

        foreach ($filter_words as $key => $value) {
            $comment_content = preg_replace('/' . trim($value) . '/', " **** ", $comment_content);
        }
    }

    return $comment_content;
}

add_filter('comment_text', 'ftc_filter_comments_content');
