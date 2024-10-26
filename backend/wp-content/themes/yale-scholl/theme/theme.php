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

    function add_acf_fields_to_rest_api($response, $post, $request) {
        if (function_exists('get_fields')) {
            // Obter todos os campos ACF do post
            $acf_fields = get_fields($post->ID);
            
            // Adicionar campos ACF aos dados da resposta
            if ($acf_fields) {
                $response->data['acf'] = $acf_fields;
            }
        }
        return $response;
    }
    
    add_filter('rest_prepare_post', 'add_acf_fields_to_rest_api', 10, 3);
    add_filter('rest_prepare_page', 'add_acf_fields_to_rest_api', 10, 3);
    
    
