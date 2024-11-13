<?php
/*
Plugin Name: Content Words As link
Plugin URI: http://7learn.com
Description: A Simple Plugin For Make Links From Content
Author: Kaivan Alimohammadi
Version: 1.0.0
Author URI:  http://7learn.com
*/

defined('ABSPATH') || exit('no access');

function cwl_filter_content($content){

    $filter_data  = array(

        'آموزش' => 'http://www.7learn.com',
        'وردپرس' => 'http://www.7learn.com/category/wordpress'

    );

    foreach($filter_data as $key => $value){
        $link = '<a href="'.$value.'">'.$key.'</a>';
        $content = preg_replace('/'.$key.'/',$link,$content);

    }

    return $content;

}
add_filter('the_content','cwl_filter_content');