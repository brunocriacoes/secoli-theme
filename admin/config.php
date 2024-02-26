<?php

add_action('admin_menu', 'meu_plugin_adicionar_menu_admin');

function meu_plugin_adicionar_menu_admin() {
    add_menu_page(
        'Config Themes',
        'Config Themes', 
        'manage_options', // Capacidade necessária para acessar esta página
        'secoli-config-thema', // Slug da página
        'secoli_config_thema', // Função que exibe o conteúdo da página
        'dashicons-admin-customizer', // Ícone do menu (opcional)
        99 // Posição do menu (opcional)
    );
}

function secoli_config_thema() {
    ?>
    <div class="wrap">
        <h1>Configuração Smartlead</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('secoli-config-theme-info'); // Opções do grupo que esta página irá manipular
            do_settings_sections('secoli-config-thema'); // Slug da página para identificar as seções
            submit_button('Salvar Configurações');
            ?>
        </form>
    </div>
    <?php
}

add_action('admin_init', 'secoli_register_config');

function secoli_register_config() {
    register_setting('secoli-config-theme-info', 'meu_plugin_opcoes');

    add_settings_section(
        'meu_plugin_secao_db', // ID da seção
        'Configurações do Banco de Dados', // Título da seção
        'secoli_title', // Callback para exibir a descrição da seção
        'secoli-config-thema' // Página em que esta seção deve ser exibida
    );

    add_settings_field(
        'meu_plugin_campo_host', // ID do campo
        'Host do Banco de Dados', // Título do campo
        'meu_plugin_campo_host_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'meu_plugin_secao_db' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'meu_plugin_campo_nome_db',
        'Nome do Banco de Dados',
        'meu_plugin_campo_nome_db_callback',
        'secoli-config-thema',
        'meu_plugin_secao_db'
    );

    add_settings_field(
        'meu_plugin_campo_usuario',
        'Usuário do Banco de Dados',
        'meu_plugin_campo_usuario_callback',
        'secoli-config-thema',
        'meu_plugin_secao_db'
    );

    add_settings_field(
        'meu_plugin_campo_senha',
        'Senha do Banco de Dados',
        'meu_plugin_campo_senha_callback',
        'secoli-config-thema',
        'meu_plugin_secao_db'
    );

    add_settings_field(
        'meu_plugin_campo_porta',
        'Porta do Banco de Dados',
        'meu_plugin_campo_porta_callback',
        'secoli-config-thema',
        'meu_plugin_secao_db'
    );


    // Repita add_settings_field() conforme necessário para outros campos como usuário, senha, etc.
}

// Callbacks para descrição da seção e campos
function secoli_title() {
    echo '<p>Insira as configurações de conexão ao seu banco de dados remoto.</p>';
}

// function meu_plugin_campo_host_callback() {
//     $opcoes = get_option('meu_plugin_opcoes');
//     echo '<input type="text" name="meu_plugin_opcoes[host]" value="' . esc_attr($opcoes['host']) . '"/>';
// }

// function meu_plugin_campo_nome_db_callback() {
//     $opcoes = get_option('meu_plugin_opcoes');
//     echo '<input type="text" id="nome_db" name="meu_plugin_opcoes[nome_db]" value="' . esc_attr($opcoes['nome_db'] ?? '') . '"/>';
// }

// function meu_plugin_campo_usuario_callback() {
//     $opcoes = get_option('meu_plugin_opcoes');
//     echo '<input type="text" id="usuario" name="meu_plugin_opcoes[usuario]" value="' . esc_attr($opcoes['usuario'] ?? '') . '"/>';
// }

// function meu_plugin_campo_senha_callback() {
//     $opcoes = get_option('meu_plugin_opcoes');
//     echo '<input type="password" id="senha" name="meu_plugin_opcoes[senha]" value="' . esc_attr($opcoes['senha'] ?? '') . '"/>';
// }

// function meu_plugin_campo_porta_callback() {
//     $opcoes = get_option('meu_plugin_opcoes');
//     echo '<input type="text" id="porta" name="meu_plugin_opcoes[porta]" value="' . esc_attr($opcoes['porta'] ?? '') . '" placeholder="3306"/>';
// }


register_setting('secoli-config-theme-info', 'meu_plugin_opcoes', 'sanitize_opcoes_info');

function sanitize_opcoes_info($opcoes) {
    $opcoes['host'] = sanitize_text_field($opcoes['host']);
    $opcoes['nome_db'] = sanitize_text_field($opcoes['nome_db']);
    $opcoes['usuario'] = sanitize_text_field($opcoes['usuario']);
    // A senha pode ser tratada com cuidado especial, talvez criptografada antes de salvar
    $opcoes['senha'] = sanitize_text_field($opcoes['senha']);
    $opcoes['porta'] = sanitize_text_field($opcoes['porta']);
    return $opcoes;
}
