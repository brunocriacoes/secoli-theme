<?php

add_action('init', function () {
    registrar_tipo_post_personalizado('Promo', 'Promos', 'post_promo', 'dashicons-megaphone');
});


add_action('init', function() {
    $campos_personalizados = array(
        array('nome' => 'secoli_promo_text', 'tipo' => 'text'),
        array('nome' => 'secoli_promo_link', 'tipo' => 'url'),
        array('nome' => 'secoli_promo_data_init', 'tipo' => 'date'),
		array('nome' => 'secoli_promo_data_end', 'tipo' => 'date'),

    );
    adicionar_campos_personalizados($campos_personalizados, 'post_promo', 'secoli_promo_metabox', 'Campos personalizados promo');
});