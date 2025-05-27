<?php

$gajiPokok = 3250000;
$tunjanganJabatan = 1200000;
$pajakPenghasilan = 0.1;

// Menghitung gaji kotor
$gajiKotor = $gajiPokok + $tunjanganJabatan;
echo "Gaji Kotor: Rp. " . number_format($gajiKotor, 2, ',', '.') . "<br>";

// Menghitung pajak penghasilan
$pajak = $gajiKotor * $pajakPenghasilan;
echo "Pajak Penghasilan: Rp. " . number_format($pajak, 2, ',', '.') . "<br>";

// Menghitung gaji bersih
$gajiBersih = $gajiKotor - $pajak;
echo "Gaji Bersih: Rp. " . number_format($gajiBersih, 2, ',', '.') . "<br>";
