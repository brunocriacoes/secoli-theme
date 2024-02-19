<?php

$files = glob(__DIR__ . "/product-json/*.json*");
$data = [];

foreach ($files as $f) {
    $d = json_decode(file_get_contents($f));
    $data = array_merge($data, $d);
}

file_put_contents(__DIR__ . "/json/prods.json", json_encode($data));

// php .\app-data\group-prod.php