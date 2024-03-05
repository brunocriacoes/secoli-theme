<?php

add_action('init', function () {
    registrar_tipo_post_personalizado('Destaque', 'Destaque', 'post_prod_dest', 'dashicons-products');
});

add_action('init', function() {
    $campos_personalizados = array(
        array('nome' => 'secoli_prod_dest_link', 'tipo' => 'url'),

    );
    adicionar_campos_personalizados($campos_personalizados, 'post_prod_dest', 'secoli_prod_dest_metabox', 'Campos personalizados');
});