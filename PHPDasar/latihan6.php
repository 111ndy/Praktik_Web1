<?php
// while loop
$x = 10;
while ($x > 5) {
    echo "Nomor: $x<br>";
    $x--;
}

echo "<br>";

// do while loop
$x = 1;
do {
    echo "Nomor : $x <br>";
    $x++;
} while ($x <= 5);

echo "<br>";

// foreach loop
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}

echo "<br>";

// for loop
for ($x = 0; $x <= 10; $x++) {
    echo "Nomor : $x<br>";
}

echo "<br>";

// for dengan break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor : $x <br>";
}
?>
