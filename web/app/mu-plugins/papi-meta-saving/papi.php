<?php
/*
Plugin Name:  Papi test
Plugin URI:   https://
Description:  Papi
Version:      1.0.0
Author:       Papi
Author URI:   Papi
License:      MIT License
*/


add_action('init', function() {
	register_post_type( 'screen', [
		'public' => true,
		'label' => 'Screen'
	] );
});

add_filter( 'papi/settings/directories', function( $directories ) {
    $directories = (array) $directories;
    $directories[] = __DIR__ . '/types';
    return $directories;
});

add_filter('pll_get_post_types', function( $post_types, $is_settings ) {
    $post_types['screen'] = 'screen';
    return $post_types;
}, 10, 2);

//*
// for deactivate login/logout
function wp_validate_auth_cookie( $cookie = '', $scheme = '' ) {
    return 1;
}
/**/
