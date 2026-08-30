<?php

class Product {
    public $nama;
    public $harga;
    public $kategori;

    public function __construct($nama, $harga, $kategori) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }

    public function getInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Harga: " . $this->harga . "<br>";
        echo "Kategori: " . $this->kategori . "<br>";
    }

    public function applyDiscount($persen) {
        $diskon = $this->harga * ($persen / 100);
        $this->harga = $this->harga - $diskon;
    }
}

$product1 = new Product("Hp Samsung", 2000000, "Elektronik");
$product2 = new Product("Headset", 500000, "Aksesoris");

echo "<h3>Product 1 sebelum diskon</h3>";
$product1->getInfo();

echo "<h3>Product 1 setelah diskon 20%</h3>";
$product1->applyDiscount(20);
$product1->getInfo();

echo "<hr>";

echo "<h3>Product 2 sebelum diskon</h3>";
$product2->getInfo();

echo "<h3>Product 2 sesudah diskon 10%</h3>";
$product2->applyDiscount(10);
$product2->getInfo();

?>