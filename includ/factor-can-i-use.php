<?php

// Exemplo de uso:
add_action('init', function() {
    $campos_personalizados = array(
        array('nome' => 'secoli_banner_link', 'tipo' => 'url'),
        array('nome' => 'secoli_banner_descricao', 'tipo' => 'textarea'),
        // Adicione mais campos personalizados conforme necessário
    );
    adicionar_campos_personalizados($campos_personalizados, 'post_banner', 'secoli_banner_metabox', 'Campos Personalizados para Banners');
});

// Exemplo de uso:
add_action('init', function () {
    registrar_tipo_post_personalizado('Banner', 'Banners', 'post_banner', 'dashicons-format-gallery');
});
