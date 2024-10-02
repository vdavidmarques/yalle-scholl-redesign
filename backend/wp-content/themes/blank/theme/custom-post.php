<?php
    
    // Registrar Custom Post Type Planos de Saúde
    function registrar_planos_saude_custom_post() {
        $labels = array(
            'name'               => 'Planos de Saúde',
            'singular_name'      => 'Plano de Saúde',
            'menu_name'          => 'Planos de Saúde',
            'name_admin_bar'     => 'Plano de Saúde',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo Plano de Saúde',
            'new_item'           => 'Novo Plano de Saúde',
            'edit_item'          => 'Editar Plano de Saúde',
            'view_item'          => 'Ver Plano de Saúde',
            'all_items'          => 'Todos os Planos de Saúde',
            'search_items'       => 'Pesquisar Planos de Saúde',
            'parent_item_colon'  => 'Planos de Saúde Pai:',
            'not_found'          => 'Nenhum plano de saúde encontrado.',
            'not_found_in_trash' => 'Nenhum plano de saúde encontrado na lixeira.'
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'planos-de-saude' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'thumbnail', 'custom-fields'),
            'menu_icon'          => 'dashicons-heart' //Planos de Saúde
        );
        
        register_post_type( 'planos-de-saude', $args );

         // Registrar Taxonomia para Planos de Saúde
         $labels_taxonomy = array(
            'name'              => 'Categorias de Planos de Saúde',
            'singular_name'     => 'Categoria de Planos de Saúde',
            'search_items'      => 'Pesquisar Categorias',
            'all_items'         => 'Todas as Categorias',
            'parent_item'       => 'Categoria Pai',
            'parent_item_colon' => 'Categoria Pai:',
            'edit_item'         => 'Editar Categoria',
            'update_item'       => 'Atualizar Categoria',
            'add_new_item'      => 'Adicionar Nova Categoria',
            'new_item_name'     => 'Novo Nome de Categoria',
            'menu_name'         => 'Categorias de Planos de Saúde',
        );
        
        $args_taxonomy = array(
            'hierarchical'      => true,
            'labels'            => $labels_taxonomy,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'plano-de-saude' ),
        );
        
        register_taxonomy( 'categoria_planos-de-saude', 'planos-de-saude', $args_taxonomy );
    }
    add_action( 'init', 'registrar_planos_saude_custom_post' );