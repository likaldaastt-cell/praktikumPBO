<?php

require_once __DIR__ . '/DatabaseConnection.php';

$db = DatabaseConnection::getInstance();

$connection = $db->getConnection();

if ($connection) {
    echo "Berhasil terkoneksi ke database!!!";
}