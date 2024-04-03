<?php

add_action('init', function() {
    $payload = array(
        array('nome' => 'secoli_page_foto_bloco1_title', 'tipo' => 'text'),
        array('nome' => 'secoli_page_foto_bloco1_desc', 'tipo' => 'textarea'),
        array('nome' => 'secoli_page_foto_bloco1_img', 'tipo' => 'text'),

    );
    adicionar_campos_personalizados($payload, 'post', 'secoli_page_foto_bloco1_metabox', 'Bloco Principal');
});

add_action('init', function() {
    $payload = array(
        array('nome' => 'secoli_page_foto_bloco2_title', 'tipo' => 'text'),
        array('nome' => 'secoli_page_foto_bloco2_desc', 'tipo' => 'textarea'),
        array('nome' => 'secoli_page_foto_bloco2_img', 'tipo' => 'text'),

    );
    adicionar_campos_personalizados($payload, 'post', 'secoli_page_foto_bloco2_metabox', 'Bloco de imagem esquerda');
});

add_action('init', function() {
    $payload = array(
        array('nome' => 'secoli_page_foto_bloco3_title', 'tipo' => 'text'),
        array('nome' => 'secoli_page_foto_bloco3_desc', 'tipo' => 'textarea'),
        array('nome' => 'secoli_page_foto_bloco3_img', 'tipo' => 'text'),

    );
    adicionar_campos_personalizados($payload, 'post', 'secoli_page_foto_bloco3_metabox', 'Bloco de imagem direita');
});