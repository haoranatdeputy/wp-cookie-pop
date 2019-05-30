<?php
/**
 * Plugin Name: Cookie Pop
 * Description: A simple cookie law implementation for GDPR.
 * Version: 1.0.0
 * Author: Deputy, Tom Grant
 * Domain Path: /lang
 * Text Domain: cookie-pop
 */

function cookie_pop_scripts() {
 
    wp_enqueue_script(
        'jquery-cookie',
        plugins_url( '/lib/cookie.js', __FILE__ ),
        array(),
        '1.4.1',
        true
    );
 
    wp_register_script(
        'cookie-pop-script',
        plugins_url( '/js/cookie-pop.js', __FILE__ ),
        array('jquery-cookie'),
        '1.0.0',
        true
    );
 
    wp_localize_script(
        'cookie-pop-script',
        'cookie_pop_text', array(
            'message' => __( 'We use cookies to ensure you get the best experience on our website, including collecting statistics to improve functionality and to deliver specific content to you. Find out more by reading our', 'cookie-pop' ),
            'button'  => __( 'Accept ', 'cookie-pop' ),
            'more'    => __( 'privacy policy.', 'cookie-pop' ),
            'url' => __('/privacy-policy')
        )
    );
 
    wp_enqueue_script( 'cookie-pop-script' );
 
}
function cookie_pop_styles() {
	wp_enqueue_style(
        'cookie-pop-style',
        plugins_url( '/css/cookie-pop.css', __FILE__ ),
        array(),
        '1.0.0'
    );
}

add_action( 'wp_enqueue_scripts', 'cookie_pop_styles');
add_action( 'wp_footer', 'cookie_pop_scripts' );
