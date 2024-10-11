<?php
    /*******************************
    Adding scripts and Css
        ********************************/   
    add_action( 'wp_enqueue_scripts', function () {
        if (!is_admin()) {
            wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
            
            wp_enqueue_script( 'script-js', get_template_directory_uri() . "/dist/library/js/scripts.min.js", array( 'jquery' ), null, true );
        }
    }); 

    /*******************************
        Adding logo
    ********************************/   

    function theme_custom_logo_setup() {
        add_theme_support('custom-logo', array(
            'height'      => 100, 
            'width'       => 300, 
            'flex-height' => true,
            'flex-width'  => true,
        ));
    }
    add_action('after_setup_theme', 'theme_custom_logo_setup');
    
