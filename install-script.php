<?php
//Default Settigs For Plugin
 $Settings = array(
     'enable_logo' => "no",
    'logo_url' => "",
     'custom_bg_color' => ""
 );
 add_option('wp_login_logo_settings', $Settings);
 do_action( 'applying_wp_custom_login_settings' );