<?php
    
// Função para imprimir o menu do header
function custom_header_menu()
{
?>
    <nav id="custom-header-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'custom_header_menu',
            'menu_id'        => 'custom-header-menu',
            'menu_class'     => 'main-menu',
            'fallback_cb'    => '__return_false',
            'walker'         => new Custom_Menu_Walker(),
        ));
        ?>
    </nav>
<?php
}

// Função para imprimir o menu do footer
function custom_footer_menu()
{
?>
    <nav id="custom-footer-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'custom_footer_menu',
            'menu_id'        => 'custom-footer-menu',
            'fallback_cb'    => '__return_false',
        ));
        ?>
    </nav>
<?php
}

// Adicionar os menus personalizados ao tema
function register_custom_menus()
{
    register_nav_menus(
        array(
            'custom_header_menu' => __('Menu do Header', 'consultoria-vida-segura'),
            'custom_footer_menu' => __('Menu do Footer', 'consultoria-vida-segura'),
        )
    );
}
add_action('after_setup_theme', 'register_custom_menus');