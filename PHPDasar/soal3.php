<?php
// Data array siswa
$siswa = [
    ["no" => 1, "poin" => 75, "nama" => "Cantika"],
    ["no" => 2, "poin" => 80, "nama" => "Joni"],
    ["no" => 3, "poin" => 65, "nama" => "Jihan"],
    ["no" => 4, "poin" => 70, "nama" => "Aya"],
    ["no" => 5, "poin" => 85, "nama" => "Ita"],
    ["no" => 6, "poin" => 90, "nama" => "Evelyn"],
    ["no" => 7, "poin" => 95, "nama" => "Alivia"],
    ["no" => 8, "poin" => 65, "nama" => "Sintia"]
];

// a) Tampilkan poin siswa dengan nomor urut 5
echo "a) Poin siswa dengan nomor urut 5:\n";
foreach ($siswa as $data) {
    if ($data["no"] == 5) {
        echo "Nama: " . $data["nama"] . " - Poin: " . $data["poin"] . "\n";
        break;
    }
}

echo "\n";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "b) Siswa yang memiliki poin 90:\n";
$found = false;
foreach ($siswa as $data) {
    if ($data["poin"] == 90) {
        echo $data["nama"] . "\n";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada siswa dengan poin 90.\n";
}

echo "\n";

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "c) Siswa yang memiliki poin 100:\n";
$found = false;
foreach ($siswa as $data) {
    if ($data["poin"] == 100) {
        echo $data["nama"] . "\n";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada siswa dengan poin 100.\n";
}
?>
