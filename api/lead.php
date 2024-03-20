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
    $data = [
        'nome' => $request['nome'],
        'email' => $request['email']
    ];

    $to = 'maxsouza150@hotmail.com';
    $subject = 'Novo lead';
    $message = "Novo lead adicionado nome: " . $request['nome'] . " email: " . $request['email'];
    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail($to, $subject, $message, $headers);

    return rest_ensure_response($data);
}
