<?php

class Mobil {
    private $merek;
    private $warna;
    private $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    public function getMerek() {
        return $this->merek;
    }

    public function setMerek($merek) {
        $this->merek = $merek;
    }

    public function getwarna() {
        return $this->warna;
    }

    public function setwarna($warna) {
       if ($warna == "") {
            echo "Warna tidak boleh kosong!";
            return;
        }

        if (strlen($warna) < 3) {
            echo "Warna minimal 3 karakter!";
            return;
        }

        $this->warna = $warna;
    }

    public function getkecepatan() {
        return $this->kecepatan;
    }

    public function setkecepatan($kecepatan) {
        if ($kecepatan < 0) {
            echo "Kecepatan tidak boleh negatif!";
            return;
        }

        if ($kecepatan > 200) {
            echo "Kecepatan maksimal 200 km/jam!";
            return;
        }

        $this->kecepatan = $kecepatan;
    }

    public function getInfo() {
        echo "Merek: " . $this->merek . "<br>";
        echo "Warna: " . $this->warna . "<br>";
        echo "Kecepatan: " . $this->kecepatan . " km/jam<br>";
    }

    public function Jalankan() {
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

echo "<h3>Mobil 3</h3>";
$Mobil3->getInfo();
$Mobil3->jalankan();
$Mobil3->berhenti();

?>
