<?php

class Resep {
    private $nama_resep;
    private $daftar_bahan;
    private $langkah_memasak;
    private $jumlah_dilihat = 0;


    public function getNamaResep() {
        return $this->nama_resep;
    }

    public function setNamaResep($nama_resep) {
        $this->nama_resep = $nama_resep;
    }

    public function getDaftarBahan() {
        return $this->daftar_bahan;
    }

    public function setDaftarBahan($daftar_bahan) {
        $this->daftar_bahan = $daftar_bahan;
    }

    public function getLangkahMemasak() {
        return $this->langkah_memasak;
    }

    public function setLangkahMemasak($langkah_memasak) {
        $this->langkah_memasak = $langkah_memasak;
    }

    public function getJumlahDilihat() {
        return $this->jumlah_dilihat;
    }

    public function setJumlahDilihat($jumlah_dilihat) {
        if ($jumlah_dilihat >= 0) {
            $this->jumlah_dilihat = $jumlah_dilihat;
        } else {
            echo "Jumlah dilihat tidak boleh negatif.";
        }
    }
}


$Resep = new Resep();

$Resep->setNamaResep("Coto Makassar");
$Resep->setDaftarBahan("Daging sapi");
$Resep->setLangkahMemasak("Merebus daging dan jeroan");
$Resep->setJumlahDilihat(50);

echo "Nama Resep: " . $Resep->getNamaResep() . "<br>";
echo "Daftar Bahan: " . $Resep->getDaftarBahan() . "<br>";
echo "Langkah Memasak: " . $Resep->getLangkahMemasak() . "<br>";
echo "Jumlah Dilihat: " . $Resep->getJumlahDilihat();

?>