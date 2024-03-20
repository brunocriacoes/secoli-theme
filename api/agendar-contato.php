<?php

function api_agendar()
{
    register_rest_route('secoli/v1', '/agendar-contato', array(
        'methods'  => 'GET',
        'callback' => 'api_agendar_fn',
        'args' => array(
            'nome' => array(
                'required' => true,
            ),
            'telefone' => array(
                'required' => true,
            ),
            'email' => array(
                'required' => true,
            ),
            'nome_empresa' => array(
                'required' => true,
            ),
            'cnpj' => array(
                'required' => true,
            ),
            'descricao' => array(
                'required' => true,
            ),
        ),
    ));
}
add_action('rest_api_init', 'api_agendar');

function api_agendar_fn($request)
{
    $opcoes = get_option('secoli_theme_info');
    

    $to = $opcoes['email_budget'];
    $subject = 'Agendamento de contato';
    $message = "Novo agendamento, <br>";
    $message .= "<b>Nome: </b>" . $request['nome'] . "<br>";
    $message .= "<b>Telefone: </b>" . $request['telefone'] . "<br>";
    $message .= "<b>E-mail: </b>" . $request['email'] . "<br>";
    $message .= "<b>Empresa: </b>" . $request['nome_empresa'] . "<br>";
    $message .= "<b>CNPJ: </b>" . $request['cnpj'] . "<br>";
    $message .= "<b>Descricao: </b>" . $request['descricao'] . "<br>";
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $send = wp_mail($to, $subject, $message, $headers);

    $data = [
        'nome' => $request['nome'],
        'email' => $request['email'],
        'to' => $opcoes['email_budget'],
        'next' => $send,
        'message' => 'Seu agendamento foi feito com sucesso!',
    ];

    return rest_ensure_response($data);
}
