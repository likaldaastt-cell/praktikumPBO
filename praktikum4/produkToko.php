<?php

class Produk
{
    protected $merek;
    protected $harga;

    public function __construct($merek, $harga)
    {
  
        if ($harga <= 0) {
            throw new Exception("Harga harus lebih dari 0");
        }

        $this->merek = $merek;
        $this->harga = $harga;
    }

    public function getInfo()
    {
        echo "Merek: " . $this->merek . "<br>";
        echo "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
    }
}

class Makanan extends Produk
{
    private $tanggalKadaluarsa;

    public function __construct($merek, $harga, $tanggalKadaluarsa)
    {
        parent::__construct($merek, $harga);

        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function getInfo()
    {
        echo "Produk: Makanan - Mie Instan<br>";
        echo "Merek: " . $this->merek . "<br>";
        echo "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Tanggal Kadaluarsa: " . $this->tanggalKadaluarsa . "<br>";
        echo "Status: Segar<br><br>";
    }
}

class Elektronik extends Produk
{
    private $garansi;

    public function __construct($merek, $harga, $garansi)
    {
        parent::__construct($merek, $harga);

        $this->garansi = $garansi;
    }

    public function getInfo()
    {
        echo "Produk: Elektronik - Smart TV<br>";
        echo "Merek: " . $this->merek . "<br>";
        echo "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Garansi: " . $this->garansi . " bulan<br>";
    }
}

$makanan = new Makanan(
    "Indomie",
    3500,
    "2025-06-30"
);

$elektronik = new Elektronik(
    "Samsung",
    5000000,
    12
);

$makanan->getInfo();
$elektronik->getInfo();

?>