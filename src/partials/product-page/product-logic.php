<?php
define('BASE_URL', '/backlit-frame');
require __DIR__ . '/../../data/catalog.php';
require __DIR__ . '/../../../app/classes/Product.php';

header('Content-Type: application/json');

$id = (int) ($_GET['id'] ?? 0);

if (!$id) {
    header('Location: catalog.html');
    exit;
}

$productData = null;

foreach ($catalogItems as $item) {
    if ($item['id'] === $id) {
        $productData = $item;
        break;
    }
}

if (!$productData) {
    header('Location: catalog.html');
    exit;
}

$product = new Product(
    $productData['id'],
    $productData['title'],
    $productData['category'],
    $productData['image'],
    $productData['origin'],
    $productData['benefit'],
    $productData['description'],
    $productData['basePrice']
);

$product->selectedSize = $_GET['size'] ?? $product->selectedSize;

$product->customDesign = isset($_GET['custom']);

$price = $product->getPrice();


if (isset($_GET['ajax']) && $_GET['ajax'] === '1') {
    echo json_encode([
        'price' => $price,
        'selectedSize' => $product->selectedSize,
        'customDesign' => $product->customDesign,
    ]);
    exit;
}
?>