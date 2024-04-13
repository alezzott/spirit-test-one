<?php
$jsonFilePath = 'data/products.json';

if (!file_exists($jsonFilePath)) {
    echo 'Arquivo JSON não encontrado.';
} else {
    $json_content = file_get_contents($jsonFilePath);
    $products = json_decode($json_content, true);
}
?>