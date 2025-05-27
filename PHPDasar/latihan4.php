<?php
// Operator logika yang bisa digunakan:
// ==  Sama Dengan          $x == $y
// === Identical            $x === $y
// !=  Tidak sama dengan    $x != $y
// <>  Tidak sama dengan    $x <> $y
// !== Not identical        $x !== $y
// >   Lebih Besar dari     $x > $y
// <   Kurang Dari          $x < $y
// >=  Lebih besar/sama     $x >= $y
// <=  Kurang dari/sama     $x <= $y
// <=> Spaceship            $x <=> $y

// IF
$t = date("H"); // mendapatkan jam dengan format 1-24
echo "IF:<br>";
if ($t < 16) {
    echo "Selamat siang!<br>";
}

// IF ELSE
$t = date("H"); // mendapatkan jam dengan format 1-24
echo "<br>IF dan ELSE:<br>";
if ($t < 20) {
    echo "Selamat siang!<br>";
} else {
    echo "Selamat malam!<br>";
}

// IF ELSEIF ELSE (Nested If)
echo "<br>Nested IF:<br>";
if ($t < 10) {
    echo "Selamat Pagi!<br>";
} elseif ($t < 16) {
    echo "Selamat sore!<br>";
} else {
    echo "Selamat Malam!<br>";
}
