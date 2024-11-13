<?php
/*
Plugin Name: Hello World
Plugin URI: http://7learn.com
Description: A Simple Hello World Plugin
Author: Kaivan Alimohammadi
Version: 1.0.0
Author URI:  http://7learn.com
*/

defined('ABSPATH') || exit('no access');

function hw_print_message(){

    $html = '<div style="color:red;font-size:30px;">
    <p>سلام دنیا</p>
</div>';

    echo $html;

}