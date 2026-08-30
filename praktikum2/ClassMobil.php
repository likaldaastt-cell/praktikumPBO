<?php

class Mobil {
    public $merek;
    public $nama;
    public $kecepatan;

    public function __construct($merek, $nama, $kecepatan) {
        $this->merek = $merek;
        $this->nama = $nama;
        $this->kecepatan = $kecepatan;
    }

    public function getInfo() {
        echo "Merek: " . $this->merek . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Kecepatan: " . $this->kecepatan . "km/jam<br>";
    }

    public function jalankan() {
        echo "Mobil berjalan...<br>";
    }

    public function berhenti() {
        echo "Mobil berhenti<br>";
    }
}

$Mobil1 = new Mobil("Hyundai", "Hitam", 120);
$Mobil2 = new Mobil("Honda", "Merah", 140);
$Mobil3 = new Mobil("BMW", "Hitam", 100);

echo "<h3>Mobil 1</h3>";
$Mobil1->getInfo();
$Mobil1->jalankan();
$Mobil1->berhenti();

echo "<h3>Mobil 2</h3>";
$Mobil2->getInfo();
$Mobil2->jalankan();
$Mobil2->berhenti();

echo "<h3>Mobil 2</h3>";
$Mobil3->getInfo();
$Mobil3->jalankan();
$Mobil3->berhenti();

?>