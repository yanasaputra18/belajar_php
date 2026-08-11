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


// belajar string 9
$nama = "   Yana   ";
echo $nama . "\n";
// output :    Yana    (karena spasi dihitung)

// belajar string 10
$nama = "   Yana   ";
echo trim($nama) . "\n";
// output : Yana (karena menghapus spasi)

// belajar string 11
$nama = "   Yana Saputra   ";
echo strlen($nama) . "\n";
// output : 18 (karena menghitung jumlah karakter)


// belajar string 12
$nama = "   Yana Saputra   ";
$nama = trim($nama);
echo strlen($nama) . "\n";
// output : 12 (karena menghapus spasi)


// belajar string 13
$nama = "   Yana   ";

if (trim($nama) == "Yana") {
    echo "Sama";
    echo "\n";
} else {
    echo "Tidak sama";
    echo "\n"; 
}
// output : Sama (karena menghapus spasi)



// Next lanjut belajar str_replace()

// belajar string 14
$text = "Saya belajar PHP";
echo str_replace("PHP", "Laravel", $text) . "\n";
// output : Saya belajar Laravel (karena mengganti string)


// belajar string 15
$text = "Saya suka apel";
$hasil = str_replace("apel", "mangga", $text);
echo $hasil . "\n";
// output : Saya suka mangga (karena mengganti string)


// belajar string 16
$text = "PHP PHP PHP";
echo str_replace("PHP", "Laravel", $text) . "\n";
// output : Laravel Laravel Laravel (karena mengganti string)


// belajar string 17
$nama = "Yana Saputra";
$hasil = str_replace(" ", "-", $nama);
echo $hasil . "\n";
// output : Yana-Saputra (karena mengganti spasi)


// belajar string 18
$text = "Saya belajar PHP";
$hasil = str_replace("PHP", "Laravel", $text);
echo $text . "\n";
echo $hasil . "\n";
// output : Saya belajar PHP
//          Saya belajar Laravel (karena str_replace tidak mengubah string asli, melainkan membuat string baru)




// Next belajar substr()

// belajar string 19
$text = "Belajar PHP";
echo substr($text, 0, 7) . "\n";
// output : Belajar (karena mengambil substring dari karakter ke-0 sebanyak 7 karakter)


// belajar string 20
$text = "Belajar PHP";
echo substr($text, 8, 3) . "\n";
// output : PHP (karena mengambil substring dari karakter ke-8 sebanyak 3 karakter)


// belajar string 21
$text = "Yana Saputra";
echo substr($text, 0, 4) . "\n";
// output : Yana (karena mengambil substring dari karakter ke-0 sebanyak 4 karakter)


// belajar string 22
$text = "Yana Saputra";
echo substr($text, 5, 7) . "\n";
// output : Saputra (karena mengambil substring dari karakter ke-5 sebanyak 7 karakter)


// belajar string 23
$text = "Belajar PHP";
$hasil = substr($text, 0, 7);
echo $text . "\n";
echo $hasil . "\n";
// output : Belajar PHP
//          Belajar (karena substr tidak mengubah string asli, melainkan membuat string baru)


// belajar string 24
$text = "Programming";
echo substr($text, 0, 3) . "\n";
// output : Pro (karena mengambil substring dari karakter ke-0 sebanyak 3 karakter)






// Next belajar substr()


// belajar string 25
$text = "Yana Saputra";
$hasil = substr($text, 5);
echo $hasil . "\n";
// Outputnya adalah "Saputra" (karena mengambil substring dari karakter ke-5)


// belajar string 26
$text = "Belajar PHP";
echo substr($text, -3) . "\n";
// Outputnya adalah "PHP" (karena mengambil substring dari karakter ke-3 dari belakang)


// belajar 27
$text = "Yana Saputra";
echo substr($text, -7) . "\n";
// Outputnya adalah "Saputra" (karena mengambil substring dari karakter ke-7 dari belakang)


// belajar string 28
$text = "Belajar PHP";
$hasil = substr($text, 0, 7);
$hasil = strtoupper($hasil);
echo $hasil . "\n";
// Outputnya adalah "BELAJAR" (karena mengambil substring dari karakter ke-0 sebanyak 7 karakter dan mengubahnya menjadi huruf besar)


// belajar string 29
// Kali ini jangan hanya tebak output. Saya ingin kamu berpikir seperti PHP.
$text = "Belajar PHP";
$hasil = substr($text, 8, 3);
echo $text . "\n";
echo $hasil . "\n";
// isi dari $text "B" karakter ke berapa ? 0, "e" karakter ke berapa ? 1, dst
// isi dari $hasil "P" karakter ke berapa ? 8, "H" karakter ke berapa ? 9, "P" karakter ke berapa ? 10
// apakah $text berubah ? jawabannya tidak





// Next belajar strpos()

// belajar string 30
$text = "Saya belajar PHP";
$posisi = strpos($text, "PHP");
var_dump($posisi);
// output : int(11) (karena mengambil posisi karakter PHP)


// belajar string 31
$text = "Saya belajar PHP";
$posisi = strpos($text, "belajar");
var_dump($posisi);
// output : int(5) (karena mengambil posisi karakter belajar)


// belajar string 32
$text = "Saya belajar PHP";
$posisi = strpos($text, "Laravel");
var_dump($posisi);
// output : bool(false) (karena tidak menemukan karakter Laravel)


// belajar string 33
$text = "Saya belajar PHP";
$posisi = strpos($text, "Laravel");
var_dump($posisi);
// output : bool(false) (karena tidak menemukan karakter Laravel)


// belajar string 34
$text = "PHP adalah bahasa pemrograman";
$posisi = strpos($text, "PHP");
var_dump($posisi);
// output : int(0) (karena mengambil posisi karakter PHP)


// belajar string 35
$text = "PHP adalah bahasa pemrograman";
$posisi = strpos($text, "PHP");
if ($posisi !== false) {
    echo "PHP ditemukan pada posisi " . $posisi . "\n";
} else {
    echo "PHP tidak ditemukan\n";
}
// output : PHP ditemukan pada posisi 0


// belajar string 36
$text = "Saya belajar PHP";
$posisi = strpos($text, "Laravel");
if ($posisi !== false) {
    echo "PHP ditemukan pada posisi " . $posisi . "\n";
} else {
    echo "PHP tidak ditemukan\n";
}
// output : PHP tidak ditemukan (karena tidak menemukan karakter Laravel)





// Next belajar explode()

// belajar string 37
$text = "Yana Saputra";
$hasil = explode(" ", $text);
var_dump($hasil);
// output : array(2) { [0]=> string(4) "Yana" [1]=> string(7) "Saputra" }


// belajar string 38
$text = "apel,mangga,jeruk";
$buah = explode(",", $text);
foreach ($buah as $value) {
    echo $value . "\n";
}
// output : 
// apel
// mangga
// jeruk


// belajar string 39
$email = "yana@gmail.com";
$hasil = explode("@", $email);
var_dump($hasil);
// output : array(2) { [0]=> string(4) "yana" [1]=> string(10) "gmail.com" }


// belajar string 40
$text = "PHP-Laravel-MySQL";
$hasil = explode("-", $text);
foreach ($hasil as $value) {
    echo $value . "\n";
}
// output : 
// PHP
// Laravel
// MySQL


// belajar string 41
$text2 = "Yana,Saputra,20,Tangerang";
$data = explode(",", $text2);
for ( $i = 0; $i < count($data); $i++ ) {
    echo $data[$i] . "\n";
}
// output : 
// Yana
// Saputra
// 20
// Tangerang


// belajar string 42
$text = "Belajar PHP";
$hasil = explode(" ", $text);
echo $text . "\n";
var_dump($hasil);
// Apa isi $text?
// output : Belajar PHP
// Apa isi $hasil?
// output : array(2) { [0]=> string(7) "Belajar" [1]=> string(3) "PHP" }
// Apakah $text berubah?
// output : tidak
// Kenapa $hasil sekarang menjadi array?
// output : karena explode memecah string menjadi array






// Next belajar implode()

// belajar string 43
$buah = ["apel", "mangga", "jeruk"];
$hasil = implode(", ", $buah);
echo $hasil . "\n";
// output : apel, mangga, jeruk (karena menggabungkan string)


// belajar string 44
$data = ["Yana", "Saputra", "20", "Tangerang"];
$hasil = implode(" | ", $data);
echo $hasil . "\n";
// output : Yana | Saputra | 20 | Tangerang (karena menggabungkan string)


// belajar string 45
$kata = ["Saya", "belajar", "PHP"];
$hasil = implode(" ", $kata);
echo $hasil . "\n";
// output : Saya belajar PHP (karena menggabungkan string)


// belajar string 46
$produk = ["Laptop", "Mouse", "Keyboard"];
$hasil = implode(" - ", $produk);
echo $hasil . "\n";
// output : Laptop - Mouse - Keyboard (karena menggabungkan string)


// belajar string 47
$nama = ["Yana", "Saputra"];
$hasil = implode(" ", $nama);
echo $hasil . "\n";
// output : Yana Saputra (karena menggabungkan string)


// belajar string 48
$data = ["PHP", "Laravel", "MySQL"];
$hasil = implode(" - ", $data);
echo $data[0] . "\n";
echo $hasil . "\n";
/*
1. Apa isi $data[0]? = PHP
2. Apa isi $hasil? = PHP - Laravel - MySQL
3. Apakah $data berubah? = tidak
4. Kenapa implode() menghasilkan string? = karena implode menggabungkan string menjadi string
*/





// Next belajar str_contains()

// belajar string 49
$text = "Saya belajar PHP";
var_dump(str_contains($text, "PHP"));
// output : bool(true) (karena mengandung karakter PHP)


// belajar string 50
$text = "Saya belajar PHP";
var_dump(str_contains($text, "Laravel"));
// output : bool(false) (karena tidak mengandung karakter Laravel)


// belajar string 51
$text = "Yana sedang belajar Laravel";
if (str_contains($text, "Laravel")) {
    echo "Laravel ditemukan\n";
} else {
    echo "Laravel tidak ditemukan\n";
}
// output : Laravel ditemukan (karena mengandung karakter Laravel)


// belajar string 52
$text = "Saya sedang belajar PHP dan Laravel";
$kata = ["Laravel", "PHP", "Javascript"];
foreach ($kata as $value) {
    if (str_contains($text, $value)) {
        echo "$value ditemukan\n";
    } else {
        echo "$value tidak ditemukan\n";
    }
}
// output : 
// PHP ditemukan
// Laravel ditemukan
// JavaScript tidak ditemukan

// belajar string 53
$text = "PHP";

if (str_contains($text, "P")) {
    echo "Ditemukan \n";
} else {
    echo "Tidak ditemukan \n";
}
// output : Ditemukan (karena mengandung karakter P)





// Next belajar str_starts_with() & str_ends_with()


// belajar string 54
$text = "Belajar PHP";
var_dump(str_starts_with($text, "Belajar"));
// output : bool(true) (karena mengandung karakter Belajar)


// belajar string 55
$text = "Belajar PHP";
var_dump(str_starts_with($text, "PHP"));
// output : bool(false) (karena tidak mengandung karakter PHP)


// belajar string 56
$file = "dokumen.pdf";
var_dump(str_ends_with($file, ".pdf"));
// output : bool(true) (karena mengandung karakter .pdf)


// belajar string 57
$file = "foto.jpg";
var_dump(str_ends_with($file, ".pdf"));
// output : bool(false) (karena tidak mengandung karakter .pdf)


// belajar string 58
$url = "https://example.com";
if (str_starts_with($url, "https")) {
    echo "URL aman\n";
} else {
    echo "URL tidak aman\n";
}
// output : URL aman (karena mengandung karakter https)


// belajar string 59
$file = "laporan-penjualan.pdf";
if (str_ends_with($file, ".pdf")) {
    echo "File PDF\n";
} else {
    echo "File bukan PDF\n";
}
// output : File PDF (karena mengandung karakter .pdf)


// belajar string 60
/*
str_contains() digunakan untuk mengecek apakah string mengandung karakter tertentu
str_starts_with() digunakan untuk mengecek apakah string diawali dengan karakter tertentu
str_ends_with() digunakan untuk mengecek apakah string diakhiri dengan karakter tertentu

return bool(true) jika mengandung karakter
return bool(false) jika tidak mengandung karakter
*/
// Dan berikan masing-masing satu contoh kasus nyata kapan function tersebut berguna.


// studi kasus str_contains
$text = "Belajar PHP itu menyenangkan";
if (str_contains($text, "PHP")) {
    $hasil = str_replace("PHP", "Laravel", $text);
    echo $hasil . "\n";
} else {
    echo "PHP tidak ditemukan\n";
}
// output : Belajar Laravel itu menyenangkan (karena mengandung karakter PHP)

// studi kasus str_starts_with
$text = "Belajar PHP itu menyenangkan";
if (str_starts_with($text, "Belajar")) {
    $hasil = str_replace("Belajar", "Belajar Laravel", $text);
    echo $hasil . "\n";
} else {
    echo "Belajar tidak ditemukan\n";
}
// output : Belajar Laravel itu menyenangkan (karena mengandung karakter Belajar)

// studi kasus str_ends_with
$text = "Belajar PHP itu menyenangkan";
if (str_ends_with($text, "menyenangkan")) {
    $hasil = str_replace("menyenangkan", "menyenangkan Laravel", $text);
    echo $hasil . "\n";
} else {
    echo "menyenangkan tidak ditemukan\n";
}
// output : Belajar Laravel itu menyenangkan (karena mengandung karakter menyenangkan)