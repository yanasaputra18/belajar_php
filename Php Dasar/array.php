<?php
$hewan = ["kucing", "anjing", "kelinci", "kambing", "sapi"];
echo "Hewan pertama adalah " . $hewan[0] . "\n";
echo "Hewan kedua adalah " . $hewan[1] . "\n";
echo "Hewan ketiga adalah " . $hewan[2] . "\n";
echo "Hewan keempat adalah " . $hewan[3] . "\n";
echo "Hewan kelima adalah " . $hewan[4] . "\n";



// latihan 2 Buat array kosong.
$angka[] = 10;
$angka[] = 20;
$angka[] = 30;
$angka[] = 40;
$angka[] = 50;
echo "Angka pertama adalah " . $angka[0] . "\n";
echo "Angka kedua adalah " . $angka[1] . "\n";
echo "Angka ketiga adalah " . $angka[2] . "\n";
echo "Angka keempat adalah " . $angka[3] . "\n";
echo "Angka kelima adalah " . $angka[4] . "\n";


// latihan 3 Buat array mengubah warna
$warna = ["merah", "hijau", "hijau"];
$warna[1] = "kuning";

echo $warna[0] . "\n";
echo $warna[1] . "\n";
echo $warna[2] . "\n";

// latihan 4 belajar array assosiatif

$mobil = [
    "merek" => "Toyota",
    "model" => "Avanza",
    "tahun" => 2022,
    "warna" => "Merah"
];

echo "Mobil : " . $mobil["merek"] . "\n";
echo "Model : " . $mobil["model"] . "\n";
echo "Tahun : " . $mobil["tahun"] . "\n";
echo "Warna : " . $mobil["warna"] . "\n";

// latihan 5 array buat data produk

$produk = [
    "nama" => "Buku Tulis",
    "harga" => 5000,
    "jumlah" => 10
];
$produk["jumlah"] = 20;

echo "Produk : " . $produk["nama"] . "\n";
echo "Harga : " . $produk["harga"] . "\n";
echo "Jumlah : " . $produk["jumlah"] . "\n";


// latihan 6 array asosiatif yang di gabung dengan foreach
$mahasiswa = [
    "nama" => "Yana",
    "umur" => 20,
    "jurusan" => "Teknik Informatika"
];
foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value . "\n";
}


//latihan 7 array multidimensional
$mahasiswa = [
    [
        "nama" => "Yana",
        "umur" => 20,
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Budi",
        "umur" => 21,
        "jurusan" => "Teknik Komputer"
    ],
    [
        "nama" => "Citra",
        "umur" => 22,
        "jurusan" => "Sistem Informasi"
    ]
];

// cara cetak salah satu mahasiswa
echo $mahasiswa[0]["nama"] . "\n";
echo $mahasiswa[0]["umur"] . "\n";
echo $mahasiswa[0]["jurusan"] . "\n";



//belajar 8 array multidimensional yang di gabung dengan foreach
$produk = [
    [
        "nama" => "Buku Tulis",
        "harga" => 5000,
        "jumlah" => 10
    ],
    [
        "nama" => "Pensil",
        "harga" => 2000,
        "jumlah" => 20
    ],
    [
        "nama" => "Penghapus",
        "harga" => 1000,
        "jumlah" => 30
    ]
];
// foreach ($produk as $key => $value) {
//     echo "Nama : " . $produk[$key]["nama"] . "\n";
//     echo "Harga : " . $produk[$key]["harga"] . "\n";
//     echo "Jumlah : " . $produk[$key]["jumlah"] . "\n";
// }

// pengulangan hanya untuk menampilkan nama saja
// foreach ($produk as $key => $value) {
//     echo "Nama : " . $produk[$key]["nama"] . "\n";
// }

// pengulangan hanya untuk menampilkan harga saja
foreach ($produk as $key => $value) {
    echo "Harga : " . $produk[$key]["harga"] . "\n";
}



//latihan 9
$produk = [
    [
        "nama" => "Laptop",
        "harga" => 7000000,
        "jumlah" => 2
    ],
    [
        "nama" => "Mouse",
        "harga" => 150000,
        "jumlah" => 5
    ],
    [
        "nama" => "Keyboard",
        "harga" => 300000,
        "jumlah" => 3
    ]
];
// agar menghasilkan seperti
// Laptop - 2
// Mouse - 5
// Keyboard - 3

foreach ($produk as $key) {
    echo $key["nama"] . " - " . $key["jumlah"] . "\n";
}


// munculin total produk
$total = 0;
foreach ($produk as $key) {
    $total += $key["jumlah"];
}
echo "Total Produk : " . $total . "\n";

// munculkan nama produk dan harga di kali jumlah produk
foreach ($produk as $key) {
    echo $key["nama"] . "(" . $key["jumlah"] . ")" . " = " . $key["harga"] * $key["jumlah"] . "\n";
}


// munculkan seluruh total harga produk
$total = 0;
foreach ($produk as $key) {
    $total += $key["harga"] * $key["jumlah"];
}
echo "TotalHargaProduk : " . $total . "\n";






// Belajar count
$produk = [
    [
        "nama" => "Laptop",
        "harga" => 7000000,
        "jumlah" => 2
    ],
    [
        "nama" => "Mouse",
        "harga" => 150000,
        "jumlah" => 5
    ],
    [
        "nama" => "Keyboard",
        "harga" => 300000,
        "jumlah" => 3
    ]
];
// tampilkan jumlah jenis produk menggunkan count
echo "Total Produk : " . count($produk) . "\n";


// gabungkan count dengan foreach
foreach ($produk as $key => $value) {
    echo "produk ke ". $key+1 ." : ". $value["nama"]. "\n";
}


// buat program untuk mencetak jumlah jenis produk, total produk, dan total harga produk
$total_jenis = count($produk);
$total_jumlah = 0;
$total_harga = 0;
foreach ($produk as $key => $value) {
    $total_jumlah += $value["jumlah"];
    $total_harga += $value["harga"] * $value["jumlah"];
}
echo "Jumlah jenis produk : ". $total_jenis ."\n";
echo "Total produk : ". $total_jumlah ."\n";
echo "Total harga produk : ". $total_harga ."\n";


// Belajar isset dan empty
$nama = "yana";

var_dump(isset($nama));
var_dump(empty($nama));

// latihan untuk umur
$umur = 0;
var_dump(isset($umur));
var_dump(empty($umur));

// belajar data user
$user = [
    "nama" => "Yana",
    "umur" => 20,
    "jurusan" => "Teknik Informatika"
];
var_dump(isset($user["umur"]));
var_dump(isset($user["pacar"]));


// buat program produk gunakan isset untuk mengecek nama,harga dan stok tersedia
$produk = [
    "nama" => "Laptop",
    "harga" => 7000000
];

echo "Nama : " . (isset($produk["nama"]) ? $produk["nama"] : "Tidak tersedia") . "\n";
echo "Harga : " . (isset($produk["harga"]) ? $produk["harga"] : "Tidak tersedia") . "\n";
echo "Stok : " . (isset($produk["stok"]) ? $produk["stok"] : "Tidak tersedia") . "\n";





// belajar empty lanjutan $nama = null;

$nama = null;

var_dump(isset($nama));
var_dump(empty($nama));

$nama = "";

var_dump(isset($nama));
var_dump(empty($nama));


$nama = "0";

var_dump(isset($nama));
var_dump(empty($nama));



// Belajar push array
$buah = ["apel", "mangga", "jeruk"];

echo $buah[0]. "\n";
echo $buah[1]. "\n";
echo $buah[2]. "\n";

// tambah data di akhir
array_push($buah, "semangka");
echo $buah[3]. "\n";

// tambah data di awal
array_unshift($buah, "anggur");
echo $buah[0]. "\n";

// hapus data terakhir
array_pop($buah);
echo $buah[3]. "\n";

// hapus data pertama
array_shift($buah);
echo $buah[0]. "\n";

// hapus data dengan key tertentu
unset($buah[0]);


//latihan studikasus menggabungkan pengetahuan yang tadi
$produk = ["Laptop", "Mouse"];
// Tambahkan "Keyboard" ke belakang.
array_push($produk, "Keyboard");
// Tambahkan "Monitor" ke belakang.
array_push($produk, "Monitor");
// Hapus "Laptop".
unset($produk[0]);
// Tambahkan "Webcam" ke depan.
array_unshift($produk, "Webcam");
// Tampilkan semua produk menggunakan foreach
foreach($produk as $value){
    echo $value. "\n";
}





// mini challenge 1
$buah = ["Apel", "Mangga", "Jeruk", "Semangka"];
// Hapus "Mangga" menggunakan unset().
unset($buah[1]);
var_dump($buah);


// mini challenge 2
$buah = ["Apel", "Mangga", "Jeruk", "Semangka"];
// Hapus "Mangga" menggunakan unset().kemudian rapikah index menggunakan array_values() dan tampilkan menggunakan foreach
unset($buah[1]);
$buah = array_values($buah);
foreach ($buah as $key => $value) {
    echo $value . "\n";
}


// mini challenge 3
$produk = [
    "Laptop",
    "Mouse",
    "Keyboard",
    "Monitor",
    "Webcam"
];
// Hapus Keyboard dan monitor menggunakan unset().Kemudian rapikan index menggunakan array_values().Tampilkan hasil akhirnya dengan foreach.
unset($produk[2]);
unset($produk[3]);
$produk = array_values($produk);
foreach ($produk as $value) {
    echo $value . "\n";
}













// mini challenge 4
$produk = [
    "nama" => "Laptop",
    "harga" => 7000000,
    "stok" => 10
];
// Gunakan array_keys() untuk menampilkan:
// nama, harga dan stok 

$keys = array_keys($produk);

foreach ($keys as $key => $value) {
    echo $value . " : " . $produk[$value] . "\n";
}


// mini challenge 5
// Gunakan array_values() untuk menampilkan:
$value = array_values($produk);
foreach ($value as $key => $value) {
    echo $value . "\n";
}


// mini challenge 6
$buah = ["Apel", "Mangga", "Jeruk", "Semangka"];
//  Gunakan in_array() untuk mengecek:
// Apakah "Mangga" ada dalam array?

if (in_array("Mangga", $buah)) {
    echo "Mangga ada dalam array\n";
} else {
    echo "Mangga tidak ada dalam array\n";
}

// mini challenge 7 
$buah = ["Apel","Anggur", "Mangga", "Jeruk", "Semangka"];
// Gunakan array_search() untuk mencari posisi: mangga dan semangka
$posisi_mangga = array_search("Mangga", $buah);
echo "Posisi Mangga : ". $posisi_mangga ."\n";
$posisi_semangka = array_search("Semangka", $buah);
echo "Posisi Semangka : ". $posisi_semangka ."\n";


// mini challenge 8 buat program
$produk = [
    "Laptop",
    "Mouse",
    "Keyboard",
    "Monitor"
];
// User ingin mencari "Keyboard".
$cek = array_search("Keyboard", $produk);
if ($cek !== false) {
    echo "Keyboard ada dalam array di posisi ". $cek ."\n";
} else {
    echo "Keyboard tidak ada dalam array\n";
}


