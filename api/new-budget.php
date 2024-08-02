<?php

function api_new_budget()
{
    register_rest_route('secoli/v1', '/new-budget', array(
        'methods'  => 'GET',
        'callback' => 'api_new_budget_fn',

    ));
}
add_action('rest_api_init', 'api_new_budget');

function api_new_budget_fn($request)
{
    $opcoes = get_option('secoli_theme_info');
    

    $to = $opcoes['email_budget'];
    $subject = 'Novo Orçamento';
    $message = "Um novo orçamento foi adicionado ao painel da Smart Lead";
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $send = wp_mail($to, $subject, $message, $headers);

    $data = [
        'nome' => $request['nome'],
        'email' => $request['email'],
        'to' => $opcoes['email_budget'],
        'next' => $send,
        'message' => 'Seu e-mail foi cadastrado com sucesso!',
    ];

    return rest_ensure_response($data);
}
