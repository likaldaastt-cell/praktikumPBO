<?php

require_once __DIR__ . '/../Catatan.php';

$id = 1;

$hapus = Catatan::delete($id);

if ($hapus) {
    echo "Catatan {$id} berhasil dihapus";
} else {
    echo "Gagal menghapus catatan";
}