<?php
// ==============================================================================
// STUDI KASUS OOP PHP: SISTEM KANTIN DIGITAL SMP MERDEKA 🏫🍟🥤
// Bahan Belajar Anak SMP - Sangat Rinci, Mudah Dipahami & Lengkap!
// ==============================================================================
/*
  ==============================================================================
  📖 CERITA STUDI KASUS (LATAR BELAKANG):
  ==============================================================================
  SMP Merdeka ingin menguji sistem baru bernama "Kantin Digital".
  Dulu, pencatatan transaksi di kantin masih pakai buku kertas. Akibatnya:
  1. Kasir sering salah hitung uang kembalian.
  2. Siswa sering kehilangan uang tunai di lapangan sekolah.
  3. Makanan kadaluarsa atau stok habis sering tidak terdeteksi.

  Sekolah meminta bantuan KITA (Programmer Cilik!) untuk membuat aplikasi 
  Kantin Digital berbasis Object-Oriented Programming (OOP).

  ==============================================================================
  🎯 PETA KONSEP OOP YANG DITERAPKAN DI APPS INI:
  ==============================================================================
  1. CLASS & OBJECT      : Membuat objek nyata (Siswa, Makanan, Minuman, Kasir).
  2. ENCAPSULATION       : Mengunci saldo siswa & stok barang dengan `private` + Getter/Setter.
  3. INHERITANCE         : Class `Makanan` & `Minuman` mewarisi induknya yaitu Class `Produk`.
  4. ABSTRACT CLASS      : Class `Produk` sebagai template abstrak item kantin.
  5. INTERFACE           : Kontrak `PembayaranInterface` untuk E-Wallet dan Cash.
  6. POLYMORPHISM        : Kasir bisa memproses pembayaran pakai E-Wallet MAUPUN Cash.
  7. TRAIT               : Trait `LogTransaksiTrait` untuk mencetak struk belanja.
  8. STATIC MEMBER       : `KantinHelper` untuk rekap total omset kantin tanpa bikin objek.
  9. EXCEPTION HANDLING  : `try-catch` menangkap error jika saldo kurang atau stok habis.
  10. DEPENDENCY INJECT. : `MesinKasir` menerima objek pembayaran via parameter.
*/

echo "======================================================================\n";
echo "       🏫 SISTEM KANTIN DIGITAL SMP MERDEKA BERBASIS OOP PHP 🏫       \n";
echo "======================================================================\n\n";

// ==============================================================================
// BAGIAN 1: CUSTOM EXCEPTION (PENAHAAN ERROR KHUSUS KANTIN)
// ==============================================================================
/*
  ANALOGI SMP:
  Exception adalah "Kartu Pelanggaran / Alarm Peringatan".
  Jika ada kejadian abnormal (seperti uang kurang atau barang habis),
  program tidak boleh mendadak mati/crash, melainkan mengeluarkan alarm khusus ini!
*/

class SaldoKurangException extends Exception {}
class StokHabisException extends Exception {}


// ==============================================================================
// BAGIAN 2: STATIC HELPER (FUNGSI BANTUAN SERBAGUNA)
// ==============================================================================
/*
  ANALOGI SMP:
  Papan Pengumuman Utama Kantin. Siapa saja boleh pakai tanpa perlu izin / buat baru.
  Static digunakan agar kita bisa memanggil `KantinHelper::formatRupiah()` 
  atau `KantinHelper::$totalOmset` langsung!
*/

class KantinHelper
{
    public static int $totalOmset = 0;
    public static int $totalTransaksiSukses = 0;

    // Fungsi statis untuk mengubah angka 15000 jadi "Rp 15.000"
    public static function formatRupiah(int $angka): string
    {
        return "Rp " . number_format($angka, 0, ',', '.');
    }
}


// ==============================================================================
// BAGIAN 3: ABSTRACT CLASS & INHERITANCE (PRODUK, MAKANAN, MINUMAN)
// ==============================================================================
/*
  ANALOGI SMP:
  - Class `Produk` adalah "Template Cetakan Barang". Kita TIDAK BISA membeli "Produk"
    tanpa jelas bentuknya. Harus jelas: apakah Makanan atau Minuman?
  - Karena itu `Produk` dijadikan `abstract class`!
  - `Makanan` dan `Minuman` adalah `Child Class` yang menuruni sifat `Produk`.
*/

abstract class Produk
{
    // ENCAPSULATION: Property dibuat `private` / `protected` agar tidak diubah sembarangan dari luar!
    protected string $nama;
    protected int $harga;
    protected int $stok;

    public function __construct(string $nama, int $harga, int $stok)
    {
        $this->nama = $nama;
        $this->setHarga($harga);
        $this->setStok($stok);
    }

    // GETTER: Cara aman membaca data private
    public function getNama(): string
    {
        return $this->nama;
    }

    public function getHarga(): int
    {
        return $this->harga;
    }

    public function getStok(): int
    {
        return $this->stok;
    }

    // SETTER DENGAN VALIDASI: Mencegah harga / stok negatif!
    public function setHarga(int $hargaBaru): void
    {
        if ($hargaBaru < 0) {
            echo "[⚠️ WARNING] Harga tidak boleh negatif! Diubah otomatis ke 0.\n";
            $this->harga = 0;
        } else {
            $this->harga = $hargaBaru;
        }
    }

    public function setStok(int $stokBaru): void
    {
        if ($stokBaru < 0) {
            $this->stok = 0;
        } else {
            $this->stok = $stokBaru;
        }
    }

    // Method untuk mengurangi stok saat dibeli
    public function kurangiStok(int $jumlah): void
    {
        if ($jumlah > $this->stok) {
            // Lempar alarm error jika stok kurang!
            throw new StokHabisException("Stok item '{$this->nama}' tidak cukup! sisa: {$this->stok}, diminta: {$jumlah}.");
        }
        $this->stok -= $jumlah;
    }

    // ABSTRACT METHOD: Wajib dibuat ulang (override) oleh Makanan dan Minuman!
    abstract public function getInfoLengkap(): string;
}

// Child Class 1: Makanan (Mewarisi Produk)
class Makanan extends Produk
{
    // Memakai fitur Constructor Property Promotion PHP 8 untuk property tambahan $tanggalKadaluarsa
    public function __construct(
        string $nama,
        int $harga,
        int $stok,
        public string $tanggalKadaluarsa
    ) {
        // Memanggil constructor milik parent (Produk)
        parent::__construct($nama, $harga, $stok);
    }

    // Mengimplementasikan abstract method getInfoLengkap()
    public function getInfoLengkap(): string
    {
        return "🍱 [MAKANAN] {$this->nama} | Harga: " . KantinHelper::formatRupiah($this->harga) .
               " | Stok: {$this->stok} | Exp: {$this->tanggalKadaluarsa}";
    }
}

// Child Class 2: Minuman (Mewarisi Produk)
class Minuman extends Produk
{
    public function __construct(
        string $nama,
        int $harga,
        int $stok,
        public bool $isDingin = true
    ) {
        parent::__construct($nama, $harga, $stok);
    }

    public function getInfoLengkap(): string
    {
        $labelDingin = $this->isDingin ? "🧊 Dingin" : "☕ Hangat";
        return "🥤 [MINUMAN] {$this->nama} | Harga: " . KantinHelper::formatRupiah($this->harga) .
               " | Stok: {$this->stok} | Suhu: {$labelDingin}";
    }
}


// ==============================================================================
// BAGIAN 4: CLASS SISWA (ENCAPSULATION DENGAN DOMPET DIGITAL)
// ==============================================================================
/*
  ANALOGI SMP:
  Objek Siswa menyimpan profil murid SMP (Nama, NISN, Saldo E-Wallet).
  Saldo murid KUDU disembunyikan (`private`) agar tidak ada murid nakal 
  yang langsung mengubah saldonya jadi Rp 1 Miliar tanpa top up!
*/

class Siswa
{
    private int $saldoEWallet;

    public function __construct(
        public string $nisn,
        public string $nama,
        int $saldoAwal = 0
    ) {
        $this->setSaldo($saldoAwal);
    }

    public function getSaldo(): int
    {
        return $this->saldoEWallet;
    }

    public function setSaldo(int $jumlah): void
    {
        if ($jumlah < 0) {
            echo "[⚠️ ERROR] Top-up saldo tidak boleh negatif!\n";
            return;
        }
        $this->saldoEWallet = $jumlah;
    }

    public function topUpSaldo(int $jumlah): void
    {
        if ($jumlah > 0) {
            $this->saldoEWallet += $jumlah;
            echo "💳 Top-Up Berhasil! Saldo terbaru {$this->nama}: " . KantinHelper::formatRupiah($this->saldoEWallet) . "\n";
        }
    }

    public function potongSaldo(int $jumlah): void
    {
        if ($jumlah > $this->saldoEWallet) {
            // Lempar exception jika saldo siswa kurang dari total belanja!
            throw new SaldoKurangException("Saldo E-Wallet {$this->nama} tidak cukup! Butuh: " . 
                KantinHelper::formatRupiah($jumlah) . ", Saldo saat ini: " . KantinHelper::formatRupiah($this->saldoEWallet));
        }
        $this->saldoEWallet -= $jumlah;
    }
}


// ==============================================================================
// BAGIAN 5: INTERFACE & POLYMORPHISM (SISTEM PEMBAYARAN)
// ==============================================================================
/*
  ANALOGI SMP:
  Interface `PembayaranInterface` adalah "Stopkontak Standar Kasir".
  Apapun jenis cara bayarnya (E-Wallet kartu siswa atau Uang Cash kertas),
  selama mengikuti aturan `PembayaranInterface` (punya fungsi `prosesBayar`),
  Mesin Kasir siap menerima pembayaran tersebut!
*/

interface PembayaranInterface
{
    public function prosesBayar(Siswa $siswa, int $totalBelanja): string;
}

// Opsi Pembayaran 1: E-Wallet Kartu Siswa
class PembayaranEWallet implements PembayaranInterface
{
    public function prosesBayar(Siswa $siswa, int $totalBelanja): string
    {
        // Potong saldo siswa secara langsung (akan throw SaldoKurangException jika kurang)
        $siswa->potongSaldo($totalBelanja);
        return "Berhasil dibayar via E-Wallet Siswa (" . $siswa->nama . "). Sisa saldo: " . KantinHelper::formatRupiah($siswa->getSaldo());
    }
}

// Opsi Pembayaran 2: Uang Tunai / Cash
class PembayaranTunai implements PembayaranInterface
{
    public function __construct(public int $uangDiterima) {}

    public function prosesBayar(Siswa $siswa, int $totalBelanja): string
    {
        if ($this->uangDiterima < $totalBelanja) {
            $kurang = $totalBelanja - $this->uangDiterima;
            throw new SaldoKurangException("Uang tunai kurang " . KantinHelper::formatRupiah($kurang) . "!");
        }

        $kembalian = $this->uangDiterima - $totalBelanja;
        return "Berhasil dibayar Tunai. Uang: " . KantinHelper::formatRupiah($this->uangDiterima) . 
               " | Kembalian: " . KantinHelper::formatRupiah($kembalian);
    }
}


// ==============================================================================
// BAGIAN 6: TRAIT (CETAK STRUK BELANJA DENGAN LOGGING)
// ==============================================================================
/*
  ANALOGI SMP:
  Trait seperti "Stiker Fitur Tambahan". Class mana saja yang ingin punya kemampuan 
  mencetak struk belanja tinggal tempel `use LogTransaksiTrait;` tanpa perlu bikin ulang kodenya!
*/

trait LogTransaksiTrait
{
    public function cetakStruk(string $namaSiswa, string $namaProduk, int $jumlah, int $total, string $detailMetode): void
    {
        echo "--------------------------------------------------\n";
        echo "📜 [STRUK BELANJA KANTIN SMP MERDEKA]              \n";
        echo "Waktu    : " . date("d-m-Y H:i:s") . "\n";
        echo "Pembeli  : {$namaSiswa}\n";
        echo "Item     : {$namaProduk} (x{$jumlah})\n";
        echo "Total    : " . KantinHelper::formatRupiah($total) . "\n";
        echo "Metode   : {$detailMetode}\n";
        echo "--------------------------------------------------\n";
    }
}


// ==============================================================================
// BAGIAN 7: CLASS KASIR KANTIN (DEPENDENCY INJECTION & WORKFLOW Utama)
// ==============================================================================
/*
  ANALOGI SMP:
  Mesin Kasir Kantin menyatukan SEMUA elemen: Siswa, Produk, dan Metode Pembayaran.
  - Menggunakan **Dependency Injection** karena `PembayaranInterface` disuntikkan lewat parameter method.
  - Menggunakan **Trait** `LogTransaksiTrait` untuk cetak struk.
  - Menggunakan **Exception Handling** (`try-catch`) agar jika terjadi transaksi gagal, kasir menampilkan pesan ramah tanpa bikin server kantin roboh!
*/

class KasirKantin
{
    use LogTransaksiTrait;

    public function melayaniPembelian(
        Siswa $siswa,
        Produk $produk,
        int $jumlah,
        PembayaranInterface $metodePembayaran
    ): void {
        echo "\n🔔 [TRANSAKSI BARU] Siswa '{$siswa->nama}' mencoba membeli {$jumlah}x {$produk->getNama()}...\n";

        try {
            // 1. Cek & Kurangi Stok Produk (bisa throw StokHabisException)
            $produk->kurangiStok($jumlah);

            // 2. Hitung Total Harga
            $totalHarga = $produk->getHarga() * $jumlah;

            // 3. Eksekusi Pembayaran (bisa throw SaldoKurangException)
            $statusBayar = $metodePembayaran->prosesBayar($siswa, $totalHarga);

            // 4. Update Rekap Static Kantin
            KantinHelper::$totalOmset += $totalHarga;
            KantinHelper::$totalTransaksiSukses++;

            // 5. Cetak Struk menggunakan Trait
            echo "✅ TRANSAKSI SUKSES!\n";
            $this->cetakStruk($siswa->nama, $produk->getNama(), $jumlah, $totalHarga, $statusBayar);

        } catch (StokHabisException $e) {
            echo "❌ [GAGAL - STOK KANTIN HABIS]: " . $e->getMessage() . "\n";
        } catch (SaldoKurangException $e) {
            echo "❌ [GAGAL - UANG/SALDO TIDAK CUKUP]: " . $e->getMessage() . "\n";
        } catch (Exception $e) {
            echo "❌ [GAGAL - ERROR SISTEM]: " . $e->getMessage() . "\n";
        } finally {
            echo "ℹ️  [INFO SISTEM] Transaksi {$siswa->nama} selesai diproses.\n";
        }
    }
}


// ==============================================================================
// 🚀 DEMO / SIMULASI JALANNYA PROGRAM KANTIN DIGITAL
// ==============================================================================

echo "📌 1. MENYAPAKAN MENU KANTIN & DATA SISWA\n";
echo "----------------------------------------------------------------------\n";

// Inisialisasi Produk Makanan dan Minuman
$nasiGoreng = new Makanan("Nasi Goreng Spesial", 12000, 5, "2026-08-20");
$esTeh      = new Minuman("Es Teh Manis Jumbo", 4000, 10, true);
$rotiBakar  = new Makanan("Roti Bakar Cokelat", 8000, 2, "2026-08-21");

// Tampilkan Daftar Menu
echo $nasiGoreng->getInfoLengkap() . "\n";
echo $esTeh->getInfoLengkap() . "\n";
echo $rotiBakar->getInfoLengkap() . "\n\n";

// Inisialisasi Siswa
$budi = new Siswa("00812345", "Budi Santoso", 25000);  // Saldo Rp 25.000
$siti = new Siswa("00899999", "Siti Rahma", 5000);     // Saldo Rp 5.000

echo "Data Siswa 1: {$budi->nama} (NISN: {$budi->nisn}) | Saldo: " . KantinHelper::formatRupiah($budi->getSaldo()) . "\n";
echo "Data Siswa 2: {$siti->nama} (NISN: {$siti->nisn}) | Saldo: " . KantinHelper::formatRupiah($siti->getSaldo()) . "\n\n";

// Inisialisasi Mesin Kasir Kantin
$kasir = new KasirKantin();


echo "📌 2. SKENARIO 1: TRANSAKSI SUKSES (Budi beli 1 Nasi Goreng via E-Wallet)\n";
echo "----------------------------------------------------------------------\n";
$bayarEWallet = new PembayaranEWallet();
$kasir->melayaniPembelian($budi, $nasiGoreng, 1, $bayarEWallet);


echo "\n📌 3. SKENARIO 2: TRANSAKSI SUKSES DENGAN CASH (Siti beli 1 Es Teh pakai uang Rp 10.000)\n";
echo "----------------------------------------------------------------------\n";
$bayarCashSiti = new PembayaranTunai(10000);
$kasir->melayaniPembelian($siti, $esTeh, 1, $bayarCashSiti);


echo "\n📌 4. SKENARIO 3: GAGAL KARENA SALDO KURANG (Siti coba beli Nasi Goreng via E-Wallet)\n";
echo "----------------------------------------------------------------------\n";
// Saldo Siti saat ini hanya Rp 5.000, sedangkan Nasi Goreng harga Rp 12.000
$kasir->melayaniPembelian($siti, $nasiGoreng, 1, $bayarEWallet);


echo "\n📌 5. SKENARIO 4: SITI TOP UP SALDO LALU BELI ROTI BAKAR\n";
echo "----------------------------------------------------------------------\n";
$siti->topUpSaldo(20000); // Siti top-up Rp 20.000 (Saldo sekarang = Rp 25.000)
$kasir->melayaniPembelian($siti, $rotiBakar, 2, $bayarEWallet); // Beli 2 Roti Bakar = Rp 16.000


echo "\n📌 6. SKENARIO 5: GAGAL KARENA STOK HABIS (Budi mau beli 5 Roti Bakar)\n";
echo "----------------------------------------------------------------------\n";
// Stok Roti Bakar tadi ada 2, dan sudah dibeli habis oleh Siti (sisa stok: 0)
$kasir->melayaniPembelian($budi, $rotiBakar, 5, $bayarEWallet);


echo "\n======================================================================\n";
echo "📊 REKAP AKHIR KANTIN HARI INI (STATIC REKAP)\n";
echo "======================================================================\n";
echo "Total Transaksi Sukses : " . KantinHelper::$totalTransaksiSukses . " Transaksi\n";
echo "Total Omset Kantin      : " . KantinHelper::formatRupiah(KantinHelper::$totalOmset) . "\n";
echo "Sisa Stok Nasi Goreng  : " . $nasiGoreng->getStok() . " porsi\n";
echo "Sisa Stok Es Teh       : " . $esTeh->getStok() . " gelas\n";
echo "Sisa Stok Roti Bakar   : " . $rotiBakar->getStok() . " buah\n";
echo "Sisa Saldo Budi        : " . KantinHelper::formatRupiah($budi->getSaldo()) . "\n";
echo "Sisa Saldo Siti        : " . KantinHelper::formatRupiah($siti->getSaldo()) . "\n";
echo "======================================================================\n";
