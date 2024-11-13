<?php
/*
Plugin Name: First My Plugin In 7Learn.com
Plugin URI: http://7learn.com
Description: First My Simple Plugin in 7Learn.com Wordpress Plugin Course
Author: Kaivan Alimohammadi
Version: 1.0.0
Author URI:  http://7learn.com
*/

defined('ABSPATH') || exit('no access');

define('FMP_DIR',plugin_dir_path(__FILE__));
define('FMP_URL',plugin_dir_url(__FILE__));
define('FMP_INC_DIR',trailingslashit(FMP_DIR.'inc'));
define('FMP_TPL_DIR',trailingslashit(FMP_DIR.'templates'));

add_action('send_message','do_something',10,1);
add_action('send_message','do_something_2',11,2);

function do_something($value){
    //echo "THIS IS FROM FRIST ADD ACTION  ";
}
function do_something_2($value){
    //echo 'THIS IS FROM SECOND ADD ACTION';
}

do_action('send_message',10);


$test = array(1,2,3,4,5,6);

add_filter('some_filter','do_some_filter',10,1);
function do_some_filter($data){
    unset($data[0]);
    return $data;
}

add_filter('some_filter','do_some_filter_2',9,1);
function do_some_filter_2($data){
    array_push($data,156);
    return $data;
}
$final_test = apply_filters('some_filter',$test);

//print_r($final_test);

function fmp_activation(){

    //Install Database
    //Initilize Config

    file_put_contents(FMP_DIR.'test.txt',"PLUGIN ACTIVE ",FILE_APPEND);

    //update_option('my_first_plugin',1);

}
function fmp_dectivation(){

    //Destroy Config
    // Drop Database

    unlink(FMP_DIR.'test.txt');
}
register_activation_hook(__FILE__,'fmp_activation');
register_deactivation_hook(__FILE__,'fmp_dectivation');


