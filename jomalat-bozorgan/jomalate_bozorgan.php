<?php
/*
Plugin Name: جملات بزرگان
Plugin URI: http://7learn.com
Description: نمایش جملات بزرگان به صورت تصادفی
Author: کیوان علی محمدی
Version: 1.0.0
Author URI:  http://7learn.com
*/
function jomalat_callback($atts, $content = null)
{

    $jomalat = null;
    $file_path = plugin_dir_path(__FILE__) . 'jomalat.txt';
    if (file_exists($file_path)) {
        $jomalat = file($file_path);
    }
    if (is_array($jomalat) && count($jomalat) > 0) {

        $random_key = array_rand($jomalat);
        $htmlWrapper = '<div class="jomalat"><p>' . $jomalat[$random_key] . '</p></div>';
        return $htmlWrapper;
    }
}
add_shortcode('jomalat', 'jomalat_callback');
