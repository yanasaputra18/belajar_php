<?php
// latihan 1 array
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




?>
