<?php

add_action('init', function () {
    registrar_tipo_post_personalizado('Anúncio', 'Anúncios', 'post_anuncio', 'dashicons-feedback');
});


add_action('init', function() {
    $campos_personalizados = array(
        array('nome' => 'secoli_anuncio_link', 'tipo' => 'url')
    );
    adicionar_campos_personalizados($campos_personalizados, 'post_anuncio', 'secoli_anuncio_metabox', 'Campos personalizados anuncio');
});