<?php
// Soal A
var_dump(0 == false);
var_dump(0 === false);
// Output: true, false


// Soal B
var_dump("10" == 10);
var_dump("10" === 10);
// Output: true, false


// Soal C
$nilai = 0;

if ($nilai) {
    echo "TRUE\n";
} else {
    echo "FALSE\n";
}
// Output: FALSE


// Soal D
$produk = ["Keyboard", "Mouse", "Monitor"];

$index = array_search("Keyboard", $produk);

if ($index) {
    echo "Produk ditemukan\n";
} else {
    echo "Produk tidak ditemukan\n";
}
// Output: Produk ditemukan
// kenapa bisa begitu?
// karena array index 0 dianggap sebagai nilai true
// padahal index 0 adalah nilai awal
// harusnya pakai var_dump() untuk mengecek nilai index 0
var_dump($index);


// Soal E
$produk = ["Keyboard", "Mouse", "Monitor"];

$index = array_search("Keyboard", $produk);

if ($index !== false) {
    echo "Produk ditemukan di index $index\n";
} else {
    echo "Produk tidak ditemukan\n";
}
// Output: Produk ditemukan di index 0


//  Soal F
$a = null;

var_dump($a);
var_dump(isset($a));
var_dump(empty($a));
// Output: NULL, bool(false), bool(true)
//  kenapa iisset false? karena variabel tersebut tidak memiliki nilai alias nilainya null



// soal G
$a = 0;

var_dump(isset($a));
var_dump(empty($a));
// Output: bool(true), bool(true)


// Soal H
$a = "";

var_dump(isset($a));
var_dump(empty($a));
// Output: bool(true), bool(true)