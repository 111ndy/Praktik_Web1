<?php
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br><br>";

// tampilkan Mangga
echo "Saya suka : " . $namaBuah[1] . "<br>";

// tampilkan Jeruk
echo "Saya suka : " . $namaBuah[2] . "<br>";

// tampilkan Apel
echo "Saya suka : " . $namaBuah[3] . "<br>";

// tampilkan Melon
echo "Saya suka : " . $namaBuah[4] . "<br><br>";

// array dengan spesifik index
$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "30 Tahun");

$umur['andi'] = "35 Tahun";
echo "Umur andi adalah : " . $umur['andi'] . "<br><br>";

// tampilkan semua unsur
foreach ($namaBuah as $buah) {
    echo "Saya suka buah $buah <br>";
}
?>
