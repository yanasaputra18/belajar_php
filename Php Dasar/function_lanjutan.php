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
// jawaban = untuk menampung nilai yang akan di return (ibarat menyiapkan ember kosong sebelum memilah barang).
// 2. Apa fungsi if ($value >= 60) dalam Mini Challenge 18? = untuk memfilter nilai yang akan di return (ibarat satpam penyeleksi, hanya nilai >= 60 yang diizinkan masuk ke ember).
// 3. Apa bedanya function yang punya `return` dengan yang TIDAK punya `return` (void)?
// jawaban = Function DENGAN `return` menyerahkan hasil olahan kembali ke pemanggil (bisa disimpan di variabel). Function TANPA `return` (void) hanya menjalankan tugas (seperti echo ke layar) tanpa memberikan nilai kembalian.


// ==============================================================================
// MATERI LANJUTAN: FITUR & KONSEP CANGGIH FUNCTION DI PHP
// (Bahan Belajar Anak SMP - Mudah, Rinci & Seru!)
// ==============================================================================


// ------------------------------------------------------------------------------
// BELAJAR 20: Variable Arguments (Variadic Function / Splat Operator `...`)
// ------------------------------------------------------------------------------
// Apa itu? Function yang bisa menerima JUMLAH ARGUMEN BEBAS (bisa 2, 5, atau 100 sekaligus!).
// Analogi: Kantong Ajaib. Kamu bisa memasukkan berapa saja angka ke dalamnya!

function totalNilai(int ...$angka): int
{
    // ...$angka otomatis mengubah semua argumen yang dimasukkan menjadi sebuah Array
    return array_sum($angka);
}

echo "Total Nilai 1 (3 angka) : " . totalNilai(10, 20, 30) . "\n";
echo "Total Nilai 2 (5 angka) : " . totalNilai(5, 10, 15, 20, 25) . "\n";

// output Total Nilai 1 (3 angka) : 60
// output Total Nilai 2 (5 angka) : 75

/* 
PENJELASAN KODE BELAJAR 20:
- `int ...$angka` : Tanda titik tiga (...) dinamakan "Splat Operator" atau "Variadic Argument".
  Artinya parameter ini sanggup menampung banyak nilai integer sekaligus dan membungkusnya jadi array $angka.
- `array_sum($angka)` : Function bawaan PHP untuk menjumlahkan seluruh isi array $angka.
*/


// ------------------------------------------------------------------------------
// BELAJAR 21: Anonymous Function (Function Tanpa Nama)
// ------------------------------------------------------------------------------
// Apa itu? Function yang dibuat TANPA NAMA dan biasanya disimpan di dalam sebuah variabel.
// Analogi: "Resep Rahasia" di secarik kertas yang kamu simpan dalam dompet (variabel).

$sapaUser = function (string $nama): string {
    return "Halo $nama, selamat datang di klub koding!";
};

// Cara memanggilnya: panggil nama variabelnya lalu beri tanda kurung ()
echo $sapaUser("Budi") . "\n";
echo $sapaUser("Siti") . "\n";

// output: Halo Budi, selamat datang di klub koding!
// output: Halo Siti, selamat datang di klub koding!

/*
PENJELASAN KODE BELAJAR 21:
- `$sapaUser = function (string $nama)` : Membuat function tanpa nama (anonymous) lalu memasukkannya ke variabel $sapaUser.
- `$sapaUser("Budi")` : Memanggil function melalui variabel tersebut seolah-olah nama function-nya adalah $sapaUser.
*/


// ------------------------------------------------------------------------------
// BELAJAR 22: Closure (Mengambil Variabel Luar Menggunakan Kata Kunci `use`)
// ------------------------------------------------------------------------------
// Apa itu? Anonymous function yang bisa "meminjam" atau mengakses variabel dari LUAR dirinya.
// Analogi: Anak sekolah yang membawa uang saku dari rumah (variabel luar) untuk belanja di kantin (function).

$diskonPersen = 10; // Variabel ini ada di LUAR function

$hitungHargaFinal = function (int $hargaAwal) use ($diskonPersen): float {
    // Dengan `use ($diskonPersen)`, function boleh membaca nilai $diskonPersen dari luar
    $potongan = $hargaAwal * ($diskonPersen / 100);
    return $hargaAwal - $potongan;
};

echo "Harga setelah diskon 10%: Rp " . $hitungHargaFinal(100000) . "\n";

// output: Harga setelah diskon 10%: Rp 90000

/*
PENJELASAN KODE BELAJAR 22:
- Normalnya, function PHP TIDAK BISA membaca variabel di luar dirinya.
- `use ($diskonPersen)` : Keyword `use` adalah jembatan penghubung agar variabel luar ($diskonPersen) bisa dipakai di dalam body function.
*/


// ------------------------------------------------------------------------------
// BELAJAR 23: Arrow Function (`fn() => ...`) - Sintaks Singkat (PHP 7.4+)
// ------------------------------------------------------------------------------
// Apa itu? Versi super singkat dari Anonymous Function / Closure!
// Analogi: Pesan singkat (SMS) dibanding surat panjang. Cepat & praktis!

$pajak = 0.11; // PPN 11%

// Cukup tulis `fn($param) => hasil_return`
$hitungPajak = fn(int $harga) => $harga * $pajak;

echo "Besar PPN 11% dari 50.000: Rp " . $hitungPajak(50000) . "\n";

// output: Besar PPN 11% dari 50.000: Rp 5500

/*
PENJELASAN KODE BELAJAR 23:
- `fn(int $harga) => $harga * $pajak` : Sintaks Arrow Function.
- Keunggulan Arrow Function:
  1. Tidak perlu ketik kata `return`, hasil setelah simbol `=>` otomatis di-return.
  2. OTOMATIS bisa membaca variabel luar ($pajak) TANPA perlu mengetik kata `use`!
*/


// ------------------------------------------------------------------------------
// BELAJAR 24: Callback Function (Function Sebagai Argumen di `array_map` & `array_filter`)
// ------------------------------------------------------------------------------
// Apa itu? Memasukkan function ke dalam function lain sebagai aturan / instruksi kerja.
// Analogi: Memberi instruksi ke Robot Pembantu: "Robot, saringkan angka-angka ini pakai aturan (function) ini!"

$daftarNilai = [40, 75, 80, 55, 90, 62];

// Menggunakan array_filter dengan Arrow Function sebagai Callback untuk mengambil nilai lulus (>= 60)
$nilaiLulus = array_filter($daftarNilai, fn(int $n) => $n >= 60);

echo "Nilai yang Lulus : " . implode(", ", $nilaiLulus) . "\n";

// Menggunakan array_map untuk menambahkan bonus +5 poin ke semua nilai
$nilaiBonus = array_map(fn(int $n) => $n + 5, $daftarNilai);

echo "Nilai Setelah Bonus +5 : " . implode(", ", $nilaiBonus) . "\n";

// output Nilai yang Lulus : 75, 80, 90, 62
// output Nilai Setelah Bonus +5 : 45, 80, 85, 60, 95, 67

/*
PENJELASAN KODE BELAJAR 24:
- `array_filter($daftarNilai, callback)` : Fungsi bawaan PHP yang mengecek setiap isi array. Jika callback bernilai true, item disimpan.
- `array_map(callback, $daftarNilai)` : Fungsi bawaan PHP yang mengubah (mentransformasi) setiap elemen array sesuai rumus di callback.
- `fn(int $n) => ...` di sini bertindak sebagai "Callback Function" (instruksi kerja yang dikirimkan).
*/


// ------------------------------------------------------------------------------
// BELAJAR 25: Named Arguments (Argumen Bernama - PHP 8+)
// ------------------------------------------------------------------------------
// Apa itu? Memanggil function dengan sebut NAMA PARAMETER-nya langsung, jadi urutannya bebas!
// Analogi: Memesan makanan dengan sebut nama menunya langsung, bukan urutan nomor menu.

function buatKartuPelajar(string $nama, string $sekolah, int $kelas): string
{
    return "Nama: $nama | Sekolah: $sekolah | Kelas: $kelas SMP";
}

// Memanggil dengan Named Arguments (urutan parameter tidak harus sama!)
echo buatKartuPelajar(
    kelas: 8,
    nama: "Rizky",
    sekolah: "SMP Negeri 1"
) . "\n";

// output: Nama: Rizky | Sekolah: SMP Negeri 1 | Kelas: 8 SMP

/*
PENJELASAN KODE BELAJAR 25:
- `kelas: 8, nama: "Rizky", sekolah: "SMP Negeri 1"` adalah Named Arguments.
- Kita bisa menuliskan nama parameternya diikuti titik dua (`namaParam: nilai`).
- Keuntungan: Kita tidak wajib menghafal urutan posisi parameter dan kodenya jauh lebih mudah dibaca!
*/


// ==============================================================================
// CHEAT SHEET / RANGKUMAN CEPAT UNTUK ADIK-ADIK SMP
// ==============================================================================
/*
1. Type Declaration ( string $a ): Menentukan jenis tipe data parameter agar tidak salah isi.
2. Return Type ( : int ): Menentukan jenis tipe data yang dikembalikan oleh function.
3. Nullable Type ( ?string ): Parameter/return boleh diisi nilai null atau string.
4. Variadic Function ( ...$angka ): Function bisa terima argumen sebanyak apapun, diolah jadi Array.
5. Anonymous Function & Closure: Function tanpa nama ($func = function() use ($var) {}).
6. Arrow Function ( fn() => expr ): Function singkat 1 baris, otomatis return & otomatis baca variabel luar.
7. Callback: Mengoper function ke fungsi lain seperti array_map() dan array_filter().
8. Named Arguments ( param: nilai ): Panggil function pakai nama parameter tanpa terikat urutan.
*/