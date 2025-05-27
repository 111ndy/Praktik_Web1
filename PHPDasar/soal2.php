<?php

// Jumlah total yang ingin ditarik Ani
$totalAmount = 1387500;

// Array pecahan yang tersedia
$denominations = [100000, 50000, 20000, 10000, 5000, 2000, 500];

// Array untuk menyimpan jumlah tiap pecahan
$counts = [];

// Hitung jumlah tiap pecahan
foreach ($denominations as $denomination) {
    $counts[$denomination] = intdiv($totalAmount, $denomination);
    $totalAmount %= $denomination;
}

// Tampilkan hasil
echo "Rincian pecahan yang diterima Ani:\n";
foreach ($counts as $denomination => $count) {
    echo "Rp " . number_format($denomination, 0, ',', '.') . " : " . $count . " lembar\n";
}

