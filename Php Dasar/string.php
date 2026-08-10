<?php
// belajar string 1
$nama = "Yana";
echo strlen($nama) . "\n";
// output : 4 (karena menghitung jumlah karakter)


// belajar string 2
$nama = "Yana Saputra";
echo strlen($nama) . "\n";
// output : 12 (karena menghitung jumlah karakter)


// belajar string 3
$text = "Belajar PHP";
echo strtoupper($text) . "\n";
// output : BELAJAR PHP (karena mengubah string menjadi huruf besar)


// belajar string 4
$text = "BELAJAR PHP";
echo strtolower($text) . "\n";
// output : belajar php (karena mengubah string menjadi huruf kecil)


// belajar string 5
$nama = "Yana";
echo "Halo " . $nama . ", selamat belajar PHP!" . "\n";
// output : Halo Yana, selamat belajar PHP! (karena menggabungkan string)
// kenapa kita menggunkan titik(.) karna titik di php sering digunakan untuk menggabungkan string


// belajar string 6
$text = "Belajar PHP";
echo strlen($text) . "\n";
// output : 11 (karena menghitung jumlah karakter)


// belajar string 7
$text = "PHP";
echo strlen($text) . "\n";
// output : 3 (karena menghitung jumlah karakter)


// belajar string 8
$nama = "Yana";
$nama[0] = "R";
echo $nama . "\n";
// output : Rana (karena mengubah karakter pertama menjadi R)

