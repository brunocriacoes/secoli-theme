<?php

function api_lead()
{
    register_rest_route('secoli/v1', '/lead', array(
        'methods'  => 'GET',
        'callback' => 'api_lead_fn',
        'args' => array(
            'nome' => array(
                'required' => true,
            ),
            'email' => array(
                'required' => true,
            ),
        ),
    ));
}
add_action('rest_api_init', 'api_lead');

function api_lead_fn($request)
{
    $opcoes = get_option('secoli_theme_info');
    

    $to = $opcoes['email_newsletter'];
    $subject = 'Novo lead';
    $message = "Novo lead adicionado, <br> <b>Nome: </b>" . $request['nome'] . "<br> <b>E-mail: </b>" . $request['email'];
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $send = wp_mail($to, $subject, $message, $headers);

    $data = [
        'nome' => $request['nome'],
        'email' => $request['email'],
        'to' => $opcoes['email_newsletter'],
        'next' => $send,
        'message' => 'Seu e-mail foi cadastrado com sucesso!',
    ];

    return rest_ensure_response($data);
}
