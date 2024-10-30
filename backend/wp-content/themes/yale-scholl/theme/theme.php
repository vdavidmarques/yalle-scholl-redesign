<?php

/*******************************
    Adding scripts and Css
 ********************************/
add_action('wp_enqueue_scripts', function () {
    if (!is_admin()) {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');

        wp_enqueue_script('script-js', get_template_directory_uri() . "/dist/library/js/scripts.min.js", array('jquery'), null, true);
    }
});

/*******************************
        Adding logo
 ********************************/

function theme_custom_logo_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_custom_logo_setup');


/*******************************
        Exposing ACF fields to REST API
 ********************************/
function add_acf_fields_to_custom_post_api($response, $post) {
    if (function_exists('get_fields')) {
        $acf_fields = get_fields($post->ID);

        if ($acf_fields) {
            $response->data['acf'] = $acf_fields;
        }
    }
    return $response;
}

add_filter('rest_prepare_courses', 'add_acf_fields_to_custom_post_api', 10, 3);

function add_acf_fields_to_rest_api($response, $post, $request) {
    if (function_exists('get_fields')) {
        $acf_fields = get_fields($post->ID);

        if ($acf_fields) {
            foreach ($acf_fields as $key => $value) {
                if (is_numeric($value) && wp_attachment_is_image($value)) {
                    $image_data = wp_get_attachment_image_src($value, 'full');
                    $acf_fields[$key] = [
                        'id' => $value,
                        'url' => $image_data[0],
                        'width' => $image_data[1],
                        'height' => $image_data[2],
                    ];
                }
            }

            $response->data['acf'] = $acf_fields;
        }
    }

    return $response;
}

// Aplica a função para páginas e posts (e custom post types)
add_filter('rest_prepare_page', 'add_acf_fields_to_rest_api', 10, 3);
add_filter('rest_prepare_post', 'add_acf_fields_to_rest_api', 10, 3);