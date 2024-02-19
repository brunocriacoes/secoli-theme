<?php

$prods = json_decode(file_get_contents(__DIR__ . "/json/clientes.json"));
foreach ($prods as $p) {
    $name = $p->url;
    $name_file = str_replace(
        [
            'https://www.secoli.com.br/img/clientessatisfeitos/',
        ],
        '',
        $name
    );

    echo $name_file;
    $g = file_get_contents($name);
    $pt = __DIR__ . "/clientes/{$name_file}";
    file_put_contents($pt, $g);
}
echo "finish";

// php .\app-data\baixar-clientes.php
