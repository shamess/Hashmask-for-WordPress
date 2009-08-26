<?php
/**
Plugin Name: Hashmask for WordPress
Plugin URI: http://lab.arc90.com/2009/07/hashmask.php
Description: Adds arc90's hashmask to the admin log in feild.
Author: Shamess
Version: 0.9
Author URI: http://shamess.info/business/
*/

//  These are required until this ticket ( https://core.trac.wordpress.org/ticket/10630 ) has been applied
add_action('login_head', 'wp_print_head_scripts', 1);
add_action('login_head', 'wp_enqueue_scripts', 1);

if('wp-login.php' == substr (basename ($_SERVER[ 'REQUEST_URI' ]), 0, 12)) {
  wp_register_script ('sparkline', '/wp-content/plugins/hashmask/jquery.sparkline-1.4.2.js', array( 'jquery' ));
  wp_register_script ('jquery-sha1', '/wp-content/plugins/hashmask/jquery.sha1.js', array( 'jquery' ));
  wp_register_script ('hashmask', '/wp-content/plugins/hashmask/jquery.hashmask.js', array( 'sparkline', 'jquery-sha1' ));
  wp_enqueue_script ('hashmask');
}

function add_hashmask_script () {
  echo "<script language=\"JavaScript\" type=\"text/javascript\">jQuery(document).ready ( function () { jQuery('#user_pass').hashmask(); } );</script>";
}

add_action ('login_head', add_hashmask_script);

?>