<?php

require_once __DIR__ . '/../Catatan.php';

$c = new Catatan();

$hasil = $c->setJudul("Belajar PHP")
    ->setIsi("Belajar Koneksi Database dengan PDO")
    ->save();

echo $hasil ? "Berhasil disimpan" : "Gagal";