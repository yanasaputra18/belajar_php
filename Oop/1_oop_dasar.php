<?php
// ==============================================================================
// BELAJAR OOP PHP DASAR (OBJECT-ORIENTED PROGRAMMING)
// Bahan Belajar Anak SMP - Mudah, Rinci & Lengkap!
// ==============================================================================
/*
  APA ITUU OOP (Object-Oriented Programming)?
  OOP adalah gaya menulis kode dengan mengelompokkan data (Property) dan 
  fungsi (Method) menjadi satu kesatuan bernama OBJEK.

  ANALOGI SEDERHANA:
  1. CLASS  : Ibarat "Cetakan Mainan" atau "Blueprint/Gambar Desain".
  2. OBJECT : Ibarat "Mainan Plastik Nyata" hasil dari cetakan tersebut.
              Dari 1 cetakan (Class), kita bisa buat banyak mainan nyata (Object).
*/

echo "==================================================\n";
echo "1. CLASS & OBJECT DASAR\n";
echo "==================================================\n";

// Belajar 1: Membuat Class dan Instance Object
class Mobil
{
    // Class Mobil adalah cetakannya
}

// Membuat Objek Nyata (Instansiasi) dari Class Mobil menggunakan kata kunci 'new'
$mobilAsep = new Mobil();
$mobilSiti = new Mobil();

var_dump($mobilAsep);
var_dump($mobilSiti);

/*
PENJELASAN KODE BELAJAR 1:
- `class Mobil` : Kata kunci `class` digunakan untuk membuat cetakan bernama Mobil.
- `new Mobil()` : Kata kunci `new` digunakan untuk melahirkan/menciptakan Objek baru dari cetakan Mobil.
- `$mobilAsep` dan `$mobilSiti` adalah dua objek yang berbeda meskipun dibuat dari cetakan yang sama.
*/


echo "\n==================================================\n";
echo "2. PROPERTY & METHOD\n";
echo "==================================================\n";

// Belajar 2: Menambahkan Property (Variabel Objek) & Method (Fungsi Objek)
class Kucing
{
    // PROPERTY: Ciri-ciri atau atribut yang dimiliki Kucing
    public string $nama;
    public string $warna;
    public int $umur = 1; // Nilai default 1 tahun

    // METHOD: Aksi atau perilaku yang bisa dilakukan Kucing
    public function bersuara(): string
    {
        return "Meow... Meow! 🐱";
    }
}

$kucingKu = new Kucing();
// Mengisi nilai Property objek $kucingKu menggunakan tanda panah (->)
$kucingKu->nama = "Oyen";
$kucingKu->warna = "Oranye";

echo "Nama Kucing: " . $kucingKu->nama . "\n";
echo "Warna Kucing: " . $kucingKu->warna . "\n";
echo "Umur Kucing: " . $kucingKu->umur . " tahun\n";
echo "Suara Kucing: " . $kucingKu->bersuara() . "\n";

// output:
// Nama Kucing: Oyen
// Warna Kucing: Oranye
// Umur Kucing: 1 tahun
// Suara Kucing: Meow... Meow! 🐱

/*
PENJELASAN KODE BELAJAR 2:
- Property (`$nama`, `$warna`) : Variabel di dalam class untuk menyimpan ciri-ciri objek.
- Method (`bersuara()`) : Function di dalam class untuk menentukan aksi objek.
- Operator `->` (Single Arrow) : Digunakan untuk mengakses property atau method dari sebuah objek.
*/


echo "\n==================================================\n";
echo "3. KATA KUNCI \$this\n";
echo "==================================================\n";

// Belajar 3: Menggunakan $this untuk mengakses Property/Method dari dalam Class sendiri
class Siswa
{
    public string $nama;
    public int $nilai;

    public function perkenalkanDiri(): string
    {
        // $this artinya "objek yang SEDANG memanggil method ini"
        return "Halo, nama saya " . $this->nama . "!";
    }

    public function cekKelulusan(): string
    {
        if ($this->nilai >= 75) {
            return $this->nama . " dinyatakan LULUS! 🎉";
        } else {
            return $this->nama . " harus REMEDIAL! 📚";
        }
    }
}

$siswa1 = new Siswa();
$siswa1->nama = "Budi";
$siswa1->nilai = 85;

$siswa2 = new Siswa();
$siswa2->nama = "Joko";
$siswa2->nilai = 60;

echo $siswa1->perkenalkanDiri() . "\n";
echo $siswa1->cekKelulusan() . "\n";
echo $siswa2->perkenalkanDiri() . "\n";
echo $siswa2->cekKelulusan() . "\n";

// output:
// Halo, nama saya Budi!
// Budi dinyatakan LULUS! 🎉
// Halo, nama saya Joko!
// Joko harus REMEDIAL! 📚

/*
PENJELASAN KODE BELAJAR 3:
- `$this->nama` : Merujuk ke property `$nama` milik objek yang sedang aktif.
  Ketika $siswa1 memanggil method, $this merujuk ke $siswa1.
  Ketika $siswa2 memanggil method, $this merujuk ke $siswa2.
*/


echo "\n==================================================\n";
echo "4. CONSTRUCTOR & DESTRUCTOR\n";
echo "==================================================\n";

// Belajar 4: Magic Method __construct() dan __destruct()
class Laptop
{
    public string $merk;
    public int $ram;

    // CONSTRUCTOR: Method yang OTOMATIS berjalan saat Objek baru dibuat dengan 'new'
    public function __construct(string $merk, int $ram)
    {
        $this->merk = $merk;
        $this->ram = $ram;
        echo "[INFO] Laptop $this->merk (RAM $this->ram GB) berhasil dinyalakan.\n";
    }

    public function pakaiBekerja(): string
    {
        return "Sedang mengetik tugas PHP pakai laptop " . $this->merk . "...";
    }

    // DESTRUCTOR: Method yang OTOMATIS berjalan saat Objek selesai dipakai/dihapus dari memori
    public function __destruct()
    {
        echo "[INFO] Laptop $this->merk dimatikan (Shutdown).\n";
    }
}

$laptopYana = new Laptop("Asus", 16);
echo $laptopYana->pakaiBekerja() . "\n";

// output:
// [INFO] Laptop Asus (RAM 16 GB) berhasil dinyalakan.
// Sedang mengetik tugas PHP pakai laptop Asus...
// [INFO] Laptop Asus dimatikan (Shutdown).

/*
PENJELASAN KODE BELAJAR 4:
- `__construct()` : Tempat ideal untuk mengisi nilai awal (inisialisasi) property saat objek dilahirkan.
- `__destruct()` : Tempat pembersihan (cleanup) saat objek dihancurkan/selesai di akhir program.
*/


echo "\n==================================================\n";
echo "5. CONSTRUCTOR PROPERTY PROMOTION (PHP 8+)\n";
echo "==================================================\n";

// Belajar 5: Cara Cepat Menulis Property + Constructor di PHP 8 (Banyak Dipakai di Laravel!)
class Produk
{
    // Di PHP 8+, kita bisa langsung tulis visibility (public) di parameter __construct!
    // PHP akan otomatis membuatkan property dan mengisinya untuk kita.
    public function __construct(
        public string $namaProduk,
        public int $harga,
        public int $stok = 10
    ) {}

    public function getInfo(): string
    {
        return "Produk: $this->namaProduk | Harga: Rp $this->harga | Stok: $this->stok";
    }
}

$buku = new Produk("Buku Tulis", 5000);
$pensil = new Produk("Pensil 2B", 2000, 50);

echo $buku->getInfo() . "\n";
echo $pensil->getInfo() . "\n";

// output:
// Produk: Buku Tulis | Harga: Rp 5000 | Stok: 10
// Produk: Pensil 2B | Harga: Rp 2000 | Stok: 50

/*
PENJELASAN KODE BELAJAR 5:
- Perhatikan `public function __construct(public string $namaProduk, ...)`
- Ini dinamakan "Constructor Property Promotion". Kodenya ringkas 3x lipat dibanding cara lama!
- Fitur ini SANGAT POPULER digunakan dalam Controller & Service di Laravel modern.
*/


echo "\n==================================================\n";
echo "6. VISIBILITY / ACCESS MODIFIERS (public, protected, private)\n";
echo "==================================================\n";

// Belajar 6: Hak Akses Data (Public, Protected, Private)
/*
  ANALOGI VISIBILITY:
  1. PUBLIC    : Seperti "Taman Kota". Siapa saja boleh masuk dan lihat dari mana saja.
  2. PROTECTED : Seperti "Rumah Keluarga". Hanya Anggota Keluarga (Parent Class & Child Class) yang boleh masuk.
  3. PRIVATE   : Seperti "Brankas Rahasia Pribadi". Hanya Objek Pemilik Asli yang bisa buka di dalam class-nya sendiri!
*/

class RekeningBank
{
    public string $namaPemilik;     // Public: Bebas diakses luar
    protected string $nomorKartu;   // Protected: Hanya bisa diakses class ini & turunan (child)
    private int $saldo;             // Private: Rahasia! Hanya bisa diakses di dalam class RekeningBank ini saja

    public function __construct(string $nama, string $nomorKartu, int $saldoAwal)
    {
        $this->namaPemilik = $nama;
        $this->nomorKartu = $nomorKartu;
        $this->saldo = $saldoAwal;
    }

    // Method public untuk mengintip saldo secara aman
    public function getSaldo(): int
    {
        return $this->saldo;
    }

    // Method public untuk menabung (mengubah saldo private secara aman)
    public function isiSaldo(int $jumlah): void
    {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Berhasil menabung Rp $jumlah. Saldo terbaru: Rp $this->saldo\n";
        }
    }
}

$rekeningAsep = new RekeningBank("Asep", "123-456-789", 50000);

echo "Pemilik: " . $rekeningAsep->namaPemilik . "\n"; // BISA (public)
echo "Saldo Awal: Rp " . $rekeningAsep->getSaldo() . "\n"; // BISA lewat method public

// $rekeningAsep->saldo = 1000000; // ERROR! Tidak bisa ubah private secara langsung dari luar!
$rekeningAsep->isiSaldo(25000); // BISA (menabung lewat method sah)

// output:
// Pemilik: Asep
// Saldo Awal: Rp 50000
// Berhasil menabung Rp 25000. Saldo terbaru: Rp 75000

/*
PENJELASAN KODE BELAJAR 6:
- Property `private $saldo` sengaja dikunci agar tidak bisa asal diubah dari luar tanpa izin.
- Untuk membaca nilai private, kita buat method `public getSaldo()`.
- Untuk mengubah nilai private, kita buat method `public isiSaldo()`. Konsep ini disebut ENCAPSULATION.
*/


echo "\n==================================================\n";
echo "7. INHERITANCE (PEWARISAN SUATU CLASS MEWARISI CLASS LAIN)\n";
echo "==================================================\n";

// Belajar 7: Inheritence menggunakan kata kunci 'extends' dan 'parent::'
// Parent Class (Kelas Induk)
class Kendaraan
{
    public function __construct(
        public string $merk,
        public int $kecepatanMaksimal
    ) {}

    public function klakson(): string
    {
        return "Tiiin! Tiiin!";
    }

    public function getInfo(): string
    {
        return "Kendaraan Merk: $this->merk | Max Speed: $this->kecepatanMaksimal km/jam";
    }
}

// Child Class 1 (Kelas Anak 1: Mobil) - Mewarisi sifat Kendaraan
class MobilBalap extends Kendaraan
{
    public bool $turboActive = false;

    // Overriding method klakson khusus Mobil Balap
    public function klakson(): string
    {
        return "Vroooom! BEEP BEEP! 🏎️";
    }

    public function aktifkanTurbo(): void
    {
        $this->turboActive = true;
        echo "TURBO DIAKTIFKAN! Kecepatan meningkat pesat!\n";
    }
}

// Child Class 2 (Kelas Anak 2: Motor)
class Motor extends Kendaraan
{
    // Menggunakan parent::getInfo() untuk memanggil fungsi dari Class Induk
    public function getInfoLengkap(): string
    {
        return parent::getInfo() . " (Tipe: Sepeda Motor)";
    }
}

$ferrari = new MobilBalap("Ferrari", 350);
echo $ferrari->getInfo() . "\n"; // Memakai method dari parent (Kendaraan)
echo "Suara Klakson: " . $ferrari->klakson() . "\n"; // Memakai method overrided milik MobilBalap
$ferrari->aktifkanTurbo();

$vario = new Motor("Honda Vario", 110);
echo $vario->getInfoLengkap() . "\n";

// output:
// Kendaraan Merk: Ferrari | Max Speed: 350 km/jam
// Suara Klakson: Vroooom! BEEP BEEP! 🏎️
// TURBO DIAKTIFKAN! Kecepatan meningkat pesat!
// Kendaraan Merk: Honda Vario | Max Speed: 110 km/jam (Tipe: Sepeda Motor)

/*
PENJELASAN KODE BELAJAR 7:
- `class MobilBalap extends Kendaraan` : `extends` artinya MobilBalap mewarisi SEMUA property & method milik Kendaraan.
- Overriding : MobilBalap membuat ulang method `klakson()` dengan versi suaranya sendiri.
- `parent::getInfo()` : Kata kunci `parent::` dipakai jika child class ingin memanggil method asli milik Parent Class.
*/


// ==============================================================================
// CHEAT SHEET / RANGKUMAN OOP DASAR UNTUK ADIK-ADIK SMP
// ==============================================================================
/*
 1. Class         : Cetakan/Blueprint objek ( class NamaClass {} ).
 2. Object        : Objek nyata dari cetakan ( $obj = new NamaClass() ).
 3. Property      : Variabel penyimpan data objek ( public string $nama ).
 4. Method        : Function pemroses aksi objek ( public function sapa() {} ).
 5. $this         : Merujuk ke objek yang sedang memanggil method tersebut.
 6. __construct() : Method otomatis jalan saat objek baru dibuat (new).
 7. Visibility    :
    - public    : Bebas diakses dari mana saja.
    - protected : Hanya bisa diakses class ini & class anak turunannya (extends).
    - private   : Hanya bisa diakses di dalam class-nya sendiri.
 8. Inheritance   : Pewarisan sifat dari Parent Class ke Child Class ( class Anak extends Induk ).
*/
