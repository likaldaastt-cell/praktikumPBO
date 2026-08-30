<?php

function hitungNilaiAkhir($uts, $uas, $tugas) {
    $nilaiAkhir = ($uts * 0.30) + ($uas * 0.40) + ($tugas * 0.30);
    return (float) $nilaiAkhir;
}

$uts = 80;
$uas = 85;
$tugas = 90;

$hasil = hitungNilaiAkhir($uts, $uas, $tugas);

echo "Nilai UTS = ";
echo $uts;
echo "<br>";

echo "Nilai UAS = ";
echo $uas;
echo "<br>";

echo "Nilai Tugas = ";
echo $tugas;
echo "<br>";

echo "Nilai Akhir = ";
echo $hasil;

?>