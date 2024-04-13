<?php
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
} else {
    header('Location: index.php');
    exit;
}

$json_content = file_get_contents('../data/products.json');
$products = json_decode($json_content, true);
$product = null;
foreach ($products as $p) {
    if ($p['id'] == $productId) {
        $product = $p;
        break;
    }
}
if ($product === null) {
    header('Location: index.php');
    exit;
}
?>