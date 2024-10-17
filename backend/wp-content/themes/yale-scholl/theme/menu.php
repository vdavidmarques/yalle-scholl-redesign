<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'), 
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');

function get_custom_menu($data) {
    // Recebe o slug do menu passado na URL
    $menu_slug = $data['slug'];
    
    // Obtém o objeto do menu usando o slug do menu
    $menu = wp_get_nav_menu_object($menu_slug);

    // Verifica se o menu existe
    if (!$menu) {
        return new WP_Error('no_menu', 'Menu não encontrado', array('status' => 404));
    }

    // Obtém os itens do menu
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    // Verifica se o menu tem itens
    if (!$menu_items) {
        return new WP_Error('no_items', 'Nenhum item encontrado no menu', array('status' => 404));
    }

    // Cria um array formatado com os itens do menu
    $formatted_menu_items = array();
    foreach ($menu_items as $item) {
        $formatted_menu_items[] = array(
            'ID' => $item->ID,
            'title' => $item->title,
            'url' => $item->url,
            'menu_order' => $item->menu_order,
            'target' => $item->target, // Se o link deve abrir em uma nova aba
        );
    }

    return $formatted_menu_items; // Retorna o array com os itens formatados
}

// Registra o endpoint na API REST
function register_custom_menu_api() {
    register_rest_route('custom-api/v1', '/menu/(?P<slug>[a-zA-Z0-9-_]+)', array(
        'methods' => 'GET',
        'callback' => 'get_custom_menu',
    ));
}

add_action('rest_api_init', 'register_custom_menu_api');

