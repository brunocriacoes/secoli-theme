<?php

add_action('init', function () {
    registrar_tipo_post_personalizado('Equipe', 'Equipes', 'post_equipe', 'dashicons-groups');
});


add_action('init', function() {
    $campos_personalizados = array(
        array('nome' => 'secoli_equipe_text', 'tipo' => 'textarea'),
        array('nome' => 'secoli_equipe_name', 'tipo' => 'text'),
		array('nome' => 'secoli_equipe_cargo', 'tipo' => 'text'),

    );
    adicionar_campos_personalizados($campos_personalizados, 'post_equipe', 'secoli_equipe_metabox', 'Campos personalizados');
});