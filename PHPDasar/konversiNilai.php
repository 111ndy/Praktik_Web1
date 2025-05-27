<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];
    $huruf = "";

    if ($nilai >= 0 && $nilai <= 59) {
        $huruf = "C";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        $huruf = "BC";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        $huruf = "B";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        $huruf = "AB";
    } elseif ($nilai >= 90 && $nilai <= 100) {
        $huruf = "A";
    } else {
        $huruf = "Nilai tidak valid!";
    }

    echo "<p>Nilai angka: $nilai</p>";
    echo "<p>Nilai huruf: <strong>$huruf</strong></p>";
}
?>

