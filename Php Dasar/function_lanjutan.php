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
function tampilkanBuah(array $buah): void
{
    foreach ($buah as $key => $value) {
        echo "Buah ke-" . $key + 1 . " adalah " . $value . "\n";
    }
}
$buah = ["Mangga", "Apel", "Jeruk", "Semangka"];
tampilkanBuah($buah);
// output:
// Buah ke-1 adalah Mangga
// Buah ke-2 adalah Apel
// Buah ke-3 adalah Jeruk
// Buah ke-4 adalah Semangka



// belajar 13
function getNamaMahasiswa(): array
{
    return ["Yana", "Asep", "Siti"];
}

$mahasiswa = getNamaMahasiswa();

foreach ($mahasiswa as $key => $value) {
    echo "Mahasiswa ke-" . $key + 1 . " adalah " . $value . "\n";
}
// output
// Mahasiswa ke-1 adalah Yana
// Mahasiswa ke-2 adalah Asep
// Mahasiswa ke-3 adalah Siti




// belajar 14
function hitungTotal(array $harga): int
{
    return array_sum($harga);
}

$total = 0;
$harga = [10000, 20000, 30000];
foreach ($harga as $key => $value) {
    $total += $value;
}
echo $total . "\n";
// output 60000     


// Apa arti array $data pada parameter function? = array $data adalah parameter yang menerima nilai array
// Apa arti : array setelah nama function? = mengembalikan nilai array
// Apa perbedaan function getData(): array dan function getData(array $data) = function getData(): array adalah function yang mengembalikan nilai array, function getData(array $data) adalah function yang menerima nilai array
// Menurutmu, kenapa function yang mengembalikan array akan berguna dalam aplikasi nyata? = function yang mengembalikan array akan berguna dalam aplikasi nyata, karena function yang mengembalikan array akan berguna dalam aplikasi nyata




// belajar 15
function ambilNilaiLulus(array $nilai): array
{
    $lulus = [];
    foreach($nilai as $key => $value) {
        if ($value >= 60) {
            $lulus[] = $value;
        }
    }
    return $lulus;
}

$nilai = [80, 60, 50, 70, 90];
$lulus = ambilNilaiLulus($nilai);
echo implode(", ", $lulus) . "\n";
// output 80, 60, 70, 90



// belajar 16
$produk = [
    [
        "nama" => "Laptop",
        "harga" => 7000000,
        "jumlah" => 2
    ],
    [
        "nama" => "Mouse",
        "harga" => 150000,
        "jumlah" => 3
    ],
    [
        "nama" => "Keyboard",
        "harga" => 300000,
        "jumlah" => 2
    ]
];
    function hitungTotalBelanja(array $produk): int
{
    $total = 0;
    foreach ($produk as $key => $value) {
        $total += $value['harga'] * $value['jumlah'];
    }
    return $total;
}

echo "Total harga: " . hitungTotalBelanja($produk) . "\n";
// output Total harga: 15050000



// belajar 17
$harga = [10000, 20000, 15000, 5000];
function hitungTotal2(array $harga): int
{
    $total = 0;
    foreach($harga as $key => $value) {
        $total += $value;
    }
    return $total;
}

echo "Total harga : " .  hitungTotal2($harga) . "\n";
// output Total harga : 50000



// 5 KEYWORD PENTING
/*
1. Type Declaration String, Int, Float, Bool, Array, Null
2. Return Type
3. Variable arguments
4. Callback
5. Closure
*/





// Next belajar Filter Nilai

// belajar 18
function filterNilai(array $nilai): array
{
    $lulus = [];
    foreach($nilai as $key => $value) {
        if ($value >= 60) {
            $lulus[] = $value;
        }
    }
    return $lulus;
}

$nilai = [80, 60, 50, 70, 90];
$lulus = filterNilai($nilai);
echo implode(", ", $lulus) . "\n";
// output 80, 60, 70, 90


// belajar 19
$produk = [
    [
        "nama" => "Laptop",
        "harga" => 7000000,
        "stok" => 5
    ],
    [
        "nama" => "Mouse",
        "harga" => 150000,
        "stok" => 0
    ],
    [
        "nama" => "Keyboard",
        "harga" => 300000,
        "stok" => 10
    ],
    [
        "nama" => "Monitor",
        "harga" => 2000000,
        "stok" => 0
    ]
];
function produkTersedia(array $produk): array
{
    $tersedia = [];
    foreach($produk as $key => $value) {
        if ($value['stok'] > 0) {
            $tersedia[] = $value;
        }
    }
    return $tersedia;
}

$produkTersedia = produkTersedia($produk);
echo "Produk tersedia: " . count($produkTersedia) . "\n";
// output Produk tersedia: 2


// pertanyaan 
// 1. kenapa kita membuat $hasil = []; sebelum di forech 
// jawaban = untuk menampung nilai yang akan di return
// 2. Apa fungsi if ($value >= 60) dalam Mini Challenge 18? = untuk memfilter nilai yang akan di return
// 3. 