<?php
// belajar 1 foreach
$buah = ["mangga", "pisang", "jeruk"];

foreach ($buah as $b) {
    echo $b . "\n";
}


// // belajar 2 foreach nilai
$nilai = ["andi" => 80, "bagus" => 90, "cici" => 100];

foreach ($nilai as $nama => $nilai) {
    echo "nilai : " , $nama . " = " . $nilai . "\n";
}


// belajar 3 foreach mahasisiwa
$mahasiswa = [ "yana","andi","bagus"];

foreach ($mahasiswa as $nama) {
    echo "Selamat datang " . $nama . "\n";
}

