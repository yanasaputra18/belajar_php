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