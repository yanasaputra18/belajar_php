<?php
// belajar 1 function
function sayHello($name) {
    echo "Hello $name \n";
} 
sayHello("Dunia");
sayHello("Dunia");
sayHello("Dunia");


// belajar 2 function biodata
function biodata($nama, $umur, $alamat) {
    echo "Nama saya $nama, umur saya $umur tahun, dan saya tinggal di $alamat \n";
}
biodata("Yana", 20, "Bandung");
biodata("Dimas", 20, "Bandung");


// belajar 3 function buat garis
function garis() {
    echo "============================== \n";
    echo "TOKO YANA \n";
    echo "============================== \n";
} 
garis();


// belajar 4 function sapa user
function sapaUser($nama) {
    echo "Halo $nama, selamat datang di toko kami \n";
}
sapaUser("Yana");   
sapaUser("Dimas");
sapaUser("Siti");


// belajar 5 function persegi sisi
function persegi($sisi) {
    $luas = $sisi * $sisi;
    echo "Luas persegi dengan sisi $sisi adalah $luas \n";
}
persegi(5);
persegi(10);


// belajar 6 function biodata lengkap
function biodataLengkap($nama, $umur, $alamat, $hobi) {
    echo "Nama saya $nama, umur saya $umur tahun, saya tinggal di $alamat, dan hobi saya adalah $hobi \n";
}
biodataLengkap("Yana", 20, "Bandung", "Membaca");
biodataLengkap("Dimas", 20, "Bandung", "Bermain game");
biodataLengkap("Siti", 20, "Bandung", "Menulis");


// belajar 7 function tambah angka menggunakan return
function tambah($a, $b) {
    return $a + $b;
}
$hasil = tambah(5, 10);
echo "Hasil penjumlahan adalah $hasil \n";  


// belajar 8 function hitung luas persegi sisi menggunakan return
function luasPersegi($sisi) {
    return $sisi * $sisi;
}
$luas = luasPersegi(5);
echo "Luas persegi dengan sisi 5 adalah $luas \n";  


// belajar 9 function hitung diskon menggunakan return
function diskon($harga, $diskon) {
    return $harga - ($harga * $diskon / 100);
}
$hargaSetelahDiskon = diskon(100000, 10);
echo "Harga setelah diskon adalah $hargaSetelahDiskon \n";


// belajar 10 function scope variable 
$angka = 10;

function test() {
    $angka = 20;
    echo $angka . "\n";
}

test();

echo $angka ."\n"; // Output: 10


// belajar 11 function global variable
$nama = "Yana";

function sapa($nama) {
    echo "Halo $nama\n";
}

sapa("Budi");

echo $nama . "\n"; // Output: Yana


// belajar 12 function globaal
$harga = 100000;

function tampilHarga() {
    global $harga;
    echo "Harga: Rp $harga";
}

tampilHarga();