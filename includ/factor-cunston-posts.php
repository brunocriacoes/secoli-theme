<?php

function registrar_tipo_post_personalizado(
    $nome_singular,
    $nome_plural,
    $slug,
    $icone = 'dashicons-admin-post',
    $suportes = array('title', 'editor', 'thumbnail'),
    $taxonomias = array('category', 'post_tag')
) {

    $labels = array(
        'name'                  => _x($nome_plural, 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x($nome_singular, 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __($nome_plural, 'text_domain'),
        'name_admin_bar'        => __($nome_singular, 'text_domain'),
        'archives'              => __("$nome_singular Arquivos", 'text_domain'),
        'attributes'            => __("$nome_singular Atributos", 'text_domain'),
        'parent_item_colon'     => __("Parente $nome_singular:", 'text_domain'),
        'all_items'             => __("Todos os $nome_plural", 'text_domain'),
        'add_new_item'          => __("Adicionar Novo $nome_singular", 'text_domain'),
        'add_new'               => __("Adicionar Novo", 'text_domain'),
        'new_item'              => __("Novo $nome_singular", 'text_domain'),
        'edit_item'             => __("Editar $nome_singular", 'text_domain'),
        'update_item'           => __("Atualizar $nome_singular", 'text_domain'),
        'view_item'             => __("Visualizar $nome_singular", 'text_domain'),
        'view_items'            => __("Visualizar $nome_plural", 'text_domain'),
        'search_items'          => __("Pesquisar $nome_singular", 'text_domain'),
        'not_found'             => __("Não encontrado", 'text_domain'),
        'not_found_in_trash'    => __("Não encontrado na lixeira", 'text_domain'),
        'featured_image'        => __("Imagem em destaque", 'text_domain'),
        'set_featured_image'    => __("Definir imagem em destaque", 'text_domain'),
        'remove_featured_image' => __("Remover imagem em destaque", 'text_domain'),
        'use_featured_image'    => __("Usar como imagem em destaque", 'text_domain'),
        'insert_into_item'      => __("Inserir no $nome_singular", 'text_domain'),
        'uploaded_to_this_item' => __("Carregado para este $nome_singular", 'text_domain'),
        'items_list'            => __("Listar $nome_singular", 'text_domain'),
        'items_list_navigation' => __("Navegação na lista de $nome_plural", 'text_domain'),
        'filter_items_list'     => __("Filtrar lista de $nome_plural", 'text_domain'),
    );

    $args = array(
        'label'                 => __($nome_singular, 'text_domain'),
        'description'           => __("Criar $nome_singular do site", 'text_domain'),
        'labels'                => $labels,
        'supports'              => $suportes,
        'taxonomies'            => $taxonomias,
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => $icone,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type($slug, $args);
}