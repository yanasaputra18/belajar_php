<?php
// Belajar function lanjutan


// // Belajar 1 sapa
// function sapa(string $nama): string
// {
//     return "Halo $nama";
// }

// echo sapa("Asep") . "\n";
// echo sapa("Siti") . "\n";
// echo sapa("Joko") . "\n";
// // output : Halo Asep


// // Belajar 2 tambah
// function tambah(int $a, int $b): int
// {
//     return $a + $b;
// }

// echo "hasil tambah 1 : " . tambah(10, 20) . "\n";
// echo "hasil tambah 2 : " . tambah(100, 50) . "\n";
// echo "hasil tambah 3 : " . tambah(5, 6) . "\n";

// // output 1 : 30
// // output 2 : 150
// // output 3 : 11


// // belajar 3 hitung luas persegi
// function hitungLuasPersegi(int $panjang, int $lebar): int
// {
//     return $panjang * $lebar;
// }

// echo "luas persegi 1 : " . hitungLuasPersegi(40, 60) . "\n";
// echo "luas persegi 2 : " . hitungLuasPersegi(20, 50) . "\n";
// echo "luas persegi 3 : " . hitungLuasPersegi(10, 10) . "\n";

// // output 1 : 2400
// // output 2 : 1000
// // output 3 : 100





// // belajar 4  bikin function sapa dengan defual yana
// function sapa_defual(string $nama = "yana"): string
// {
//     return "Halo $nama";
// }

// echo sapa_defual("Asep") . "\n";
// echo sapa_defual("Siti") . "\n";
// echo sapa_defual() . "\n";


// // belajar 5 function diskon
// function hitungDiskon(int $harga, int $diskon): int
// {
//     return $harga - $diskon;
// }

// echo hitungDiskon(100000, 10000) . "\n";
// echo hitungDiskon(50000, 5000) . "\n";
// echo hitungDiskon(50000, 5000) . "\n";


// // belajar 6 hitung total
// function hitungTotal(int $harga, int $jumlah, int $diskon): int
// {
//     return $harga * $jumlah - $diskon;
// }

// // hitung total harga
// /*
// Harga  = 10000
// Jumlah = 5
// Diskon = 0
// Total = 10000 * 5 - 0 = 50000
// */
// echo "Total harga : " . $harga = 10000 . "\n";
// echo "Jumlah beli : " . $jumlah = 5 . "\n";
// echo "Diskon : " . $diskon = 0 . "\n";
// echo "Total harga : " . hitungTotal($harga, $jumlah, $diskon) . "\n";





// Next belajar TYPE DECLARATION
function namaLengkap(string $nama): string
{
    return "Nama Saya: $nama";
}

echo namaLengkap("Yana") . "\n";
// output Nama Saya: Yana



// belajar 7
function tambah(int $a, int $b): int
{
    return $a + $b;
}
echo tambah(10, 20) . "\n";
echo tambah(100, 200) . "\n";
// output 30
// output 300


// belajar 8
function hitungHarga(float $harga, int $jumlah): float
{
    return $harga * $jumlah;

}

echo hitungHarga(10000.5, 3) . "\n";
// output 30001.5



// belajar 9 
function isLulus(int $nilai): bool
{
    if ($nilai >= 60) {
        return true;
    } else {
        return false;
    }
}

var_dump(isLulus(80));
var_dump(isLulus(50));
// output : bool(true)
// output : bool(false)




// belajar 10
function namaUser(?string $nama): string
{
    if ($nama === null) {
        return "Nama user belum diisi";
    } else {
        return $nama;
    }
}
echo namaUser("Asep") . "\n";
echo namaUser(null) . "\n";
// output Asep
// output Nama user belum diisi
// arti dari ": string" adalah mengembalikan nilai string


// belajar 11
function cekUmur(?int $umur): string
{
    if ($umur === null) {
        return "Umur belum diisi";
    } else {
        return $umur;
    }
}
echo cekUmur(18) . "\n";
echo cekUmur(null) . "\n";
// output 18
// output Umur belum diisi
// kenapa ?int digunakan pada parameter, bukan berarti function tersebut mengembalikan null? = untuk menampung nilai default null saja, dan di parameter


// Menurut kamu, apa manfaat type declaration dalam project besar seperti aplikasi toko, POS, atau Laravel? =
// 1. Kita tidak perlu melakukan validasi input secara manual
// 2. Type declaration membuat kode lebih mudah dibaca dan dipahami
// 3. Type declaration membuat kode lebih aman dan terhindar dari error





// NEXT: ARRAY SEBAGAI PARAMETER & RETURN

// belajar 12
