<?php

add_action('admin_menu', 'config_theme_secoli');

function config_theme_secoli() {
    add_menu_page(
        'Secoli',
        'Secoli', 
        'manage_options',
        'secoli-config-thema',
        'secoli_config_thema',
        'dashicons-admin-customizer',
        99
    );
}

function secoli_config_thema() {
    ?>
    <div class="wrap">
        <h1>Configurações Tema Secoli</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('secoli-config-theme-info');
            do_settings_sections('secoli-config-thema');
            submit_button('Salvar Configurações');
            ?>
        </form>
    </div>
    <?php
}

add_action('admin_init', 'secoli_register_config');

function secoli_register_config() {
    register_setting('secoli-config-theme-info', 'secoli_theme_info');

    add_settings_section(
        'informacao', // ID da seção
        'Informação', // Título da seção
        'secoli_title', // Callback para exibir a descrição da seção
        'secoli-config-thema' // Página em que esta seção deve ser exibida
    );

    add_settings_field(
        'secoli_telefone_header', // ID do campo
        'Telefone Header', // Título do campo
        'secoli_telefone_header_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_telefone_rodape', // ID do campo
        'Telefone Rodapé', // Título do campo
        'secoli_telefone_rodape_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_telefone_whatsapp', // ID do campo
        'Telefone Whatsapp', // Título do campo
        'secoli_telefone_whatsapp_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_email_header', // ID do campo
        'E-mail Header', // Título do campo
        'secoli_email_header_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_email_rodape', // ID do campo
        'E-mail Rodapé', // Título do campo
        'secoli_email_rodape_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_email_project', // ID do campo
        'E-mail para envio de projetos', // Título do campo
        'secoli_email_project_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_email_budget', // ID do campo
        'E-mail para recebimento de orçamentos', // Título do campo
        'secoli_email_budget_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_email_newsletter', // ID do campo
        'E-mail para cadastro de newsletter', // Título do campo
        'secoli_email_newsletter_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_facebook', // ID do campo
        'Facebbok', // Título do campo
        'secoli_facebook_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_twitter', // ID do campo
        'Twitter', // Título do campo
        'secoli_twitter_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

    add_settings_field(
        'secoli_instagram', // ID do campo
        'Instagram', // Título do campo
        'secoli_instagram_callback', // Callback para renderizar o campo
        'secoli-config-thema', // Página em que este campo deve ser exibido
        'informacao' // Seção em que este campo deve ser incluído
    );

}

function secoli_title() {
    echo '<p>Insira as informaçoes editáveis do tema</p>';
}

function secoli_telefone_header_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[telefone_header]" value="' . esc_attr($opcoes['telefone_header']) . '"/>';
}

function secoli_telefone_rodape_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[telefone_rodape]" value="' . esc_attr($opcoes['telefone_rodape']) . '"/>';
}

function secoli_telefone_whatsapp_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[telefone_whatsapp]" value="' . esc_attr($opcoes['telefone_whatsapp']) . '"/>';
}

function secoli_email_header_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[email_header]" value="' . esc_attr($opcoes['email_header']) . '"/>';
}

function secoli_email_rodape_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[email_rodape]" value="' . esc_attr($opcoes['email_rodape']) . '"/>';
}

function secoli_email_project_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[email_project]" value="' . esc_attr($opcoes['email_project']) . '"/>';
}

function secoli_email_budget_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[email_budget]" value="' . esc_attr($opcoes['email_budget']) . '"/>';
}

function secoli_email_newsletter_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[email_newsletter]" value="' . esc_attr($opcoes['email_newsletter']) . '"/>';
}

function secoli_facebook_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[facebook]" value="' . esc_attr($opcoes['facebook']) . '"/>';
}

function secoli_twitter_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[twitter]" value="' . esc_attr($opcoes['twitter']) . '"/>';
}

function secoli_instagram_callback() {
    $opcoes = get_option('secoli_theme_info');
    echo '<input type="text" name="secoli_theme_info[instagram]" value="' . esc_attr($opcoes['instagram']) . '"/>';
}

register_setting('secoli-config-theme-info', 'meu_theme_opcoes', 'sanitize_opcoes_info');

function sanitize_opcoes_info($opcoes) {
    $opcoes['telefone_header'] = sanitize_text_field($opcoes['telefone_header']);
    $opcoes['telefone_rodape'] = sanitize_text_field($opcoes['telefone_rodape']);
    $opcoes['telefone_whatsapp'] = sanitize_text_field($opcoes['telefone_whatsapp']);
    $opcoes['email_header'] = sanitize_text_field($opcoes['email_header']);
    $opcoes['email_rodape'] = sanitize_text_field($opcoes['email_rodape']);
    $opcoes['email_project'] = sanitize_text_field($opcoes['email_project']);
    $opcoes['email_budget'] = sanitize_text_field($opcoes['email_budget']);
    $opcoes['facebook'] = sanitize_text_field($opcoes['facebook']);
    $opcoes['twitter'] = sanitize_text_field($opcoes['twitter']);
    $opcoes['instagram'] = sanitize_text_field($opcoes['instagram']);
    return $opcoes;
}