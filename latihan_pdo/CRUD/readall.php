<?php

require_once __DIR__ . '/../Catatan.php';

$data = Catatan::getAll();

foreach ($data as $item) {
    echo $item['id'] . ". "
        . $item['judul'] . " - "
        . $item['isi'];

    echo PHP_EOL;
}