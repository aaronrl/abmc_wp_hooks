<?php

/*
Plugin Name:  ABMC Hooks
Plugin URI: https://www.malinoisclub.com/
Description:  Custom WordPress hooks for ABMC-controlled sites.
Version: 1.0
Author: Aaron Lindstrom
Author URI:  https://github.com/aaronrl
License: MIT License
License URI: https://github.com/aaronrl/abmc_wp_hooks/blob/main/LICENSE
Text Domain: abmc_hooks
*/

//=================================================
// Security: Abort if this file is called directly
//=================================================
if ( !defined('ABSPATH') ) { 
    die;
}

// Enable older Paypal Standard plugin for Woocommerce
// Source: https://developer.woocommerce.com/2021/07/12/developer-advisory-paypal-standard-will-be-hidden-on-new-installs/?_ga=2.199826732.387520936.1640293957-607410601.1640293957
add_filter( 'woocommerce_should_load_paypal_standard', '__return_true' );