<?php

class Mobil {
    private $merek;
    private $warna;
    private $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }

    public function getMerek() {
        return $this->merek;
    }

    public function setMerek($merek) {
        $this->merek = $merek;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        if ($warna == "") {
            echo "Warna tidak boleh kosong!<br>";
            return;
        }

        if (strlen($warna) < 3) {
            echo "Warna minimal 3 karakter!<br>";
            return;
        }

        $this->warna = $warna;
    }

    public function getKecepatan() {
        return $this->kecepatan;
    }

    public function setKecepatan($kecepatan) {
        if ($kecepatan < 0) {
            echo "Kecepatan tidak boleh negatif!<br>";
            return;
        }

        if ($kecepatan > 200) {
            echo "Kecepatan maksimal 200 km/jam!<br>";
            return;
        }

        $this->kecepatan = $kecepatan;
    }

    public function getInfo() {
        echo "Merek: " . $this->merek . "<br>";
        echo "Warna: " . $this->warna . "<br>";
        echo "Kecepatan: " . $this->kecepatan . " km/jam<br>";
    }

    public function jalankan() {
        echo "Mobil berjalan...<br>";
    }

    public function berhenti() {
        echo "Mobil berhenti<br>";
    }
}

$Mobil1 = new Mobil("Hyundai", "Hitam", 160);

echo "<h3>Mobil 1</h3>";
$Mobil1->getInfo();
$Mobil1->jalankan();
$Mobil1->berhenti();

$Mobil2 = new Mobil("Honda", "Merah", 140);

echo "<h3>Mobil 2</h3>";
$Mobil2->getInfo();
$Mobil2->jalankan();
$Mobil2->berhenti();

$Mobil3 = new Mobil("BMW", "Putih", 120);

echo "<h3>Mobil 3</h3>";
$Mobil3->getInfo();
$Mobil3->jalankan();
$Mobil3->berhenti();

?>