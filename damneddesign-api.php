<?php
/**
* Plugin Name: Damned Design API
* Plugin URI: https://www.damneddesigns.com/
* Description: This plugin has been developed to use REST APIs in Next js
* Version: 1.0
* Author: Talal Nazir
* Author URI: 
**/

add_action( 'rest_api_init', function () {
    register_rest_route( 'wp/v2', '/test', array(
      'methods' => 'GET',
      'callback' =>'testing_function'
    ));
});
function testing_function( $request ) {
    echo "test is working successfully";
}