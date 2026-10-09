<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\ProductService;

try {
    $service = new ProductService();

    $product1 = $service->createProduct('Buku', 25000);
    $product2 = $service->createProduct('Mouse', 75000);

    echo $service->displayProduct($product1) . "<br>";
    echo $service->displayProduct($product2) . "<br>";

} catch (Throwable $e) {
    echo "<h3>Terjadi Error</h3>";
    echo "<p>Pesan: " . $e->getMessage() . "</p>";
    echo "<p>File: " . $e->getFile() . "</p>";
    echo "<p>Line: " . $e->getLine() . "</p>";
}