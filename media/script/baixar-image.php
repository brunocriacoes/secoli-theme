<?php

$prods = json_decode(file_get_contents(__DIR__ . "/json/prods.json"));
foreach($prods as $p) {
    $name = $p->img;
    $name_file = str_replace(
        [
            'https://www.secoli.com.br/timthumb/timthumb.php?src=/img/produtos/1/',
            '&w=300',
            'https://www.secoli.com.br/img/splash/',
            'https://www.secoli.com.br/img/produtos/1/',
            '',
        ],'',$name);
 
    var_dump($name_file);
    $g = file_get_contents($name);
    $pt = __DIR__ . "/images/{$name_file}";
    file_put_contents($pt, $g);
}

