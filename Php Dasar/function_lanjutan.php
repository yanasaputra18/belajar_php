<?php
// Belajar function lanjutan


// Belajar 1 sapa
function sapa(string $nama): string
{
    return "Halo $nama";
}

echo sapa("Asep") . "\n";
echo sapa("Siti") . "\n";
echo sapa("Joko") . "\n";
// output : Halo Asep


// Belajar 2 tambah
function tambah(int $a, int $b): int
{
    return $a + $b;
}

echo "hasil tambah 1 : " . tambah(10, 20) . "\n";
echo "hasil tambah 2 : " . tambah(100, 50) . "\n";
echo "hasil tambah 3 : " . tambah(5, 6) . "\n";

// output 1 : 30
// output 2 : 150
// output 3 : 11


// belajar 3 hitung luas persegi
function hitungLuasPersegi(int $panjang, int $lebar): int
{
    return $panjang * $lebar;
}

echo "luas persegi 1 : " . hitungLuasPersegi(40, 60) . "\n";
echo "luas persegi 2 : " . hitungLuasPersegi(20, 50) . "\n";
echo "luas persegi 3 : " . hitungLuasPersegi(10, 10) . "\n";

// output 1 : 2400
// output 2 : 1000
// output 3 : 100





// belajar 4  bikin function sapa dengan defual yana
