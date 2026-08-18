<?php
// ==============================================================================
// BELAJAR OOP PHP LANJUTAN (PERSIAPAN UNTUK FRAMEWORK LARAVEL)
// Bahan Belajar Anak SMP - Rinci, Mudah Dipahami & Berstandar Industri!
// ==============================================================================
/*
  KENAPA HARUS BELAJAR OOP LANJUTAN INI?
  Framework populer seperti LARAVEL dibangun 100% menggunakan konsep-konsep
  OOP lanjutan di file ini. Memahami file ini = 80% siap masuk ke Laravel!
*/

namespace BelajarOop {

    echo "==================================================\n";
    echo "1. ENCAPSULATION (GETTER & SETTER DENGAN VALIDASI)\n";
    echo "==================================================\n";

    // Belajar 8: Menyembunyikan data private dan mengontrol akses lewat Setter/Getter
    class AkunUser
    {
        private string $username;
        private int $umur;

        public function __construct(string $username, int $umurAwal)
        {
            $this->username = $username;
            $this->setUmur($umurAwal); // Menggunakan setter untuk validasi sejak pertama dibuat
        }

        // GETTER: Untuk membaca nilai privat secara aman
        public function getUmur(): int
        {
            return $this->umur;
        }

        // SETTER: Untuk mengubah nilai privat DENGAN VALIDASI/FILTERING
        public function setUmur(int $umurBaru): void
        {
            if ($umurBaru < 0) {
                echo "[ERROR] Umur tidak boleh angka negatif!\n";
            } elseif ($umurBaru > 120) {
                echo "[ERROR] Umur tidak masuk akal!\n";
            } else {
                $this->umur = $umurBaru;
            }
        }

        public function getUsername(): string
        {
            return strtolower($this->username);
        }
    }

    $user1 = new AkunUser("YanaSaputra", 15);
    echo "Username: " . $user1->getUsername() . " | Umur: " . $user1->getUmur() . " tahun\n";

    $user1->setUmur(-5); // Akan ditolak oleh Setter!
    $user1->setUmur(16); // Berhasil diubah
    echo "Umur setelah diupdate: " . $user1->getUmur() . " tahun\n";

    /*
    PENJELASAN KODE BELAJAR 8:
    - Encapsulation adalah memecah data private dan memberikan PINTU MASUK (Setter) & PINTU KELUAR (Getter).
    - Tanpa Setter, siapa saja bisa mengubah umur jadi -100 dari luar. Dengan Setter, kita bisa memasang FILTER VALIDASI.
    */


    echo "\n==================================================\n";
    echo "2. STATIC KEYWORD (PROPERTIES & METHODS TANPA 'new')\n";
    echo "==================================================\n";

    // Belajar 9: Static Member
    /*
      ANALOGI STATIC:
      - Non-Static : Buku Catatan masing-masing siswa (setiap siswa punya isi buku beda).
      - Static     : Papan Pengumuman Kelas (satu papan untuk semua siswa, dimiliki bersama oleh Class).
    */

    class MatematikaHelper
    {
        // Static Property: Variabel milik Class (bukan milik objek individual)
        public static float $phi = 3.14159;
        public static int $totalPerhitungan = 0;

        // Static Method: Fungsi yang bisa dipanggil LANGSUNG tanpa perlu membuat `new MatematikaHelper()`
        public static function luasLingkaran(float $jariJari): float
        {
            self::$totalPerhitungan++; // self:: digunakan untuk mengakses static member di dalam class sendiri
            return self::$phi * $jariJari * $jariJari;
        }

        public static function tambah(int $a, int $b): int
        {
            self::$totalPerhitungan++;
            return $a + $b;
        }
    }

    // Memanggil Static Method & Property menggunakan Scope Resolution Operator (::)
    echo "Nilai PHI: " . MatematikaHelper::$phi . "\n";
    echo "Luas Lingkaran (r=7): " . MatematikaHelper::luasLingkaran(7) . "\n";
    echo "Hasil 10 + 20: " . MatematikaHelper::tambah(10, 20) . "\n";
    echo "Total perhitungan yang telah dilakukan: " . MatematikaHelper::$totalPerhitungan . "x\n";

    /*
    PENJELASAN KODE BELAJAR 9:
    - `public static function` : Membuat method statis.
    - `MatematikaHelper::tambah()` : Dipanggil dengan titik dua ganda `::`.
    - `self::$phi` : Di dalam class, gunakan `self::` (bukan `$this->`) untuk mengakses static member.
    - HUBUNGAN DENGAN LARAVEL: Di Laravel, kamu sering melihat sintaks seperti `User::all()`, `Route::get()`, `DB::table()`. Itu semua memanfaatkan konsep Static Method (Facade)!
    */


    echo "\n==================================================\n";
    echo "3. CLASS CONSTANTS (const)\n";
    echo "==================================================\n";

    // Belajar 10: Constant dalam Class
    class KonfigurasiAplikasi
    {
        // Constant adalah nilai TETAP yang tidak pernah bisa diubah setelah didefinisikan
        public const NAMA_APP = "Belajar PHP SMP";
        public const VERSI = "2.0.0";
        public const MAKS_LOGIN_ATTEMPT = 3;

        public function getInfoApp(): string
        {
            // Mengakses const dari dalam class menggunakan self::NAMA_CONST
            return self::NAMA_APP . " (Versi " . self::VERSI . ")";
        }
    }

    echo "Nama App: " . KonfigurasiAplikasi::NAMA_APP . "\n";
    echo "Maksimal Coba Login: " . KonfigurasiAplikasi::MAKS_LOGIN_ATTEMPT . "x\n";

    $app = new KonfigurasiAplikasi();
    echo "Info App: " . $app->getInfoApp() . "\n";

    /*
    PENJELASAN KODE BELAJAR 10:
    - `public const` : Mendefinisikan konstanta class. Nama konstanta biasanya ditulis KAPITAL.
    - Di luar class diakses pakai `NamaClass::NAMA_CONST`, di dalam class pakai `self::NAMA_CONST`.
    */


    echo "\n==================================================\n";
    echo "4. ABSTRACT CLASS & ABSTRACT METHOD\n";
    echo "==================================================\n";

    // Belajar 11: Abstract Class
    /*
      APA ITUU ABSTRACT CLASS?
      Abstract class adalah "Class Template Setengah Jadi" yang TIDAK BISA dibuat objeknya secara langsung (new).
      Abstract class mewajibkan semua Child Class (turunannya) untuk membuat ulang method abstraknya!
      Analogi: Cetakan Dasar Senjata / Perkakas. Kamu harus pilih mau buat "Pedang" atau "Pistol", tidak bisa buat "Senjata Abstrak".
    */

    abstract class Notifikasi
    {
        // Abstract Method: Hanya cetak judul fungsinya saja, TANPA ISI BODY {}.
        // Setiap child class WAJIB mengisi body method ini!
        abstract public function kirimPesan(string $tujuan, string $pesan): string;

        // Abstract class boleh punya method biasa yang bertindak sebagai fungsi umum
        public function logWaktu(): string
        {
            return "[" . date("Y-m-d H:i:s") . "] ";
        }
    }

    class NotifikasiEmail extends Notifikasi
    {
        // Wajib membuat implementasi dari kirimPesan()
        public function kirimPesan(string $tujuan, string $pesan): string
        {
            return $this->logWaktu() . "Mengirim EMAIL ke $tujuan: '$pesan'";
        }
    }

    class NotifikasiWhatsApp extends Notifikasi
    {
        // Wajib membuat implementasi dari kirimPesan()
        public function kirimPesan(string $tujuan, string $pesan): string
        {
            return $this->logWaktu() . "Mengirim WA ke $tujuan: '$pesan' 💬";
        }
    }

    $email = new NotifikasiEmail();
    echo $email->kirimPesan("asep@gmail.com", "Selamat Kamu Lulus!") . "\n";

    $wa = new NotifikasiWhatsApp();
    echo $wa->kirimPesan("081234567890", "Kode OTP kamu adalah 4821") . "\n";

    /*
    PENJELASAN KODE BELAJAR 11:
    - `abstract class Notifikasi` : Tidak bisa di-instansiasi (`$n = new Notifikasi()` akan ERROR!).
    - `abstract public function kirimPesan(...)` : Memaksa NotifikasiEmail & NotifikasiWhatsApp membuat method `kirimPesan()` mereka masing-masing.
    */


    echo "\n==================================================\n";
    echo "5. INTERFACE (KONTRAK KERJA KELAS)\n";
    echo "==================================================\n";

    // Belajar 12: Interface
    /*
      APA ITUU INTERFACE?
      Interface adalah "KONTRAK PERJANJIAN" murni 100%. Semua method di dalam interface adalah abstrak.
      Sebuah Class yang "mengimplementasikan" (implements) interface BERJANJI akan menyediakan semua fungsi yang diminta oleh interface tersebut.
      Analogi: Stopkontak Listrik. Apapun merk alatnya (Kipas, TV, Kulkas), asal punya steker standar (Interface), pasti bisa dicolok!
    */

    interface PaymentGatewayInterface
    {
        public function bayar(int $jumlah): string;
        public function cekStatusTransaksi(string $idTransaksi): string;
    }

    // Class Midtrans berjanji menaati kontrak PaymentGatewayInterface
    class MidtransPayment implements PaymentGatewayInterface
    {
        public function bayar(int $jumlah): string
        {
            return "Memproses pembayaran Rp $jumlah via Midtrans Gateway... Berhasil! ✅";
        }

        public function cekStatusTransaksi(string $idTransaksi): string
        {
            return "Status Transaksi $idTransaksi: PAID";
        }
    }

    // Class Paypal juga menaati kontrak yang sama
    class PaypalPayment implements PaymentGatewayInterface
    {
        public function bayar(int $jumlah): string
        {
            return "Processing payment of Rp $jumlah via PayPal Inc... Success! 💳";
        }

        public function cekStatusTransaksi(string $idTransaksi): string
        {
            return "Transaction Status $idTransaksi: COMPLETED";
        }
    }

    $pembayaran1 = new MidtransPayment();
    echo $pembayaran1->bayar(50000) . "\n";

    $pembayaran2 = new PaypalPayment();
    echo $pembayaran2->bayar(150000) . "\n";

    // HUBUNGAN DENGAN LARAVEL: Di Laravel, Interface dikenal dengan nama "Contracts" (misal: Illuminate\Contracts\Auth\Authenticatable).


    echo "\n==================================================\n";
    echo "6. TRAIT (FUNGSI SERBAGUNA BISA DI-SHARE)\n";
    echo "==================================================\n";

    // Belajar 13: Trait
    /*
      APA ITUU TRAIT?
      Trait adalah kumpulan fungsi serbaguna yang bisa "DITEMPEL/DISISIPKAN" ke dalam banyak class berbeda.
      PHP hanya mendukung single inheritance (1 class anak hanya boleh punya 1 class induk).
      Dengan TRAIT, kita bisa menyisipkan fitur tambahan ke class manapun tanpa peduli siapa class induknya!
    */

    trait LoggableTrait
    {
        public function catatLog(string $pesan): void
        {
            echo "[LOG ACTIVITY]: $pesan pada " . date("H:i:s") . "\n";
        }
    }

    trait HasSlugTrait
    {
        public function buatSlug(string $judul): string
        {
            return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $judul)));
        }
    }

    class Artikel
    {
        // Menggunakan kata kunci 'use' untuk menempelkan Trait di dalam Class
        use LoggableTrait, HasSlugTrait;

        public function simpanArtikel(string $judul): void
        {
            $slug = $this->buatSlug($judul);
            echo "Artikel disimpan dengan slug: /artikel/$slug\n";
            $this->catatLog("Artikel '$judul' berhasil dibuat.");
        }
    }

    class User
    {
        use LoggableTrait; // Class User juga bisa pakai LoggableTrait!

        public function register(string $nama): void
        {
            echo "User $nama mendaftar.\n";
            $this->catatLog("User $nama telah didaftarkan ke database.");
        }
    }

    $artikel = new Artikel();
    $artikel->simpanArtikel("Belajar OOP PHP Sangat Mudah!");

    $user = new User();
    $user->register("Budi");

    // HUBUNGAN DENGAN LARAVEL: Di Model Laravel, kamu akan SELALU melihat `use HasFactory, Notifiable, HasApiTokens;`. Itu semua adalah TRAIT!
}

// ------------------------------------------------------------------------------
// BELAJAR 14: NAMESPACE & 'use' KEYWORD (PENGELOMPOKAN CLASS)
// ------------------------------------------------------------------------------
namespace App\Admin {
    class User {
        public function getRole(): string {
            return "Saya adalah Admin Sistem 🛡️";
        }
    }
}

namespace App\Customer {
    class User {
        public function getRole(): string {
            return "Saya adalah Pembeli/Customer 🛒";
        }
    }
}

namespace App\Main {

    use App\Admin\User as AdminUser;
    use App\Customer\User as CustomerUser;
    use Exception;

    echo "\n==================================================\n";
    echo "7. NAMESPACE & 'use' KEYWORD (PENGELOMPOKAN CLASS)\n";
    echo "==================================================\n";

    $admin = new AdminUser();
    echo $admin->getRole() . "\n";

    $customer = new CustomerUser();
    echo $customer->getRole() . "\n";

    /*
    PENJELASAN KODE BELAJAR 14:
    - Namespace ibarat "Folder / Kategori" tempat menyimpan Class.
    - Tujuannya agar jika ada dua Class yang namanya SAMA (misal: User Admin vs User Customer), keduanya tidak bentrok!
    - HUBUNGAN DENGAN LARAVEL: Setiap file di Laravel selalu diawali `namespace App\Http\Controllers;` dan `use App\Models\User;`.
    */


    echo "\n==================================================\n";
    echo "8. EXCEPTION HANDLING (MENANGANI ERROR DENGAN TRY-CATCH)\n";
    echo "==================================================\n";

    // Belajar 15: Try, Catch, Throw
    function bagiAngka(int $angka, int $pembagi): float
    {
        if ($pembagi === 0) {
            // Melempar (throw) Exception jika ada kondisi berbahaya
            throw new Exception("Pembagian dengan angka 0 (nol) tidak diperbolehkan!");
        }
        return $angka / $pembagi;
    }

    try {
        echo "Hasil 10 / 2 = " . bagiAngka(10, 2) . "\n";
        echo "Hasil 10 / 0 = " . bagiAngka(10, 0) . "\n"; // Ini akan memicu exception!
        echo "Baris ini tidak akan dijalankan jika di atas error.\n";
    } catch (Exception $e) {
        // Menangkap error di dalam $e
        echo "[TERTANGKAP ERROR]: " . $e->getMessage() . "\n";
    } finally {
        // Baris di 'finally' akan SELALU berjalan baik ada error maupun tidak
        echo "[FINALLY]: Proses pembagian selesai dieksekusi.\n";
    }


    echo "\n==================================================\n";
    echo "9. DEPENDENCY INJECTION & TYPE HINTING OBJECT\n";
    echo "==================================================\n";

    // Belajar 16: Dependency Injection
    class Engine
    {
        public function nyalakan(): string
        {
            return "Mesin V8 Menyala: Brmmm! Brmmm! 🏎️";
        }
    }

    class MobilSport
    {
        // Inject objek Engine ke dalam constructor MobilSport
        public function __construct(private Engine $engine) {}

        public function staterMobil(): void
        {
            // MobilSport menggunakan layanan dari objek Engine
            echo $this->engine->nyalakan() . "\n";
        }
    }

    $mesinV8 = new Engine();
    // Dependency Injection: Menyuntikkan $mesinV8 ke dalam MobilSport
    $mobil = new MobilSport($mesinV8);
    $mobil->staterMobil();

    /*
    PENJELASAN KODE BELAJAR 16:
    - Dependency Injection adalah memasukkan objek lain yang dibutuhkan lewat parameter, bukan membuat objek sendiri di dalam secara manual.
    - HUBUNGAN DENGAN LARAVEL: Di Controller Laravel, saat menulis `public function store(Request $request)`, 
      Laravel secara otomatis menyuntikkan (Inject) objek `$request` tersebut untukmu! Konsep ini dinamakan "Service Container DI".
    */
}

// ==============================================================================
// CHEAT SHEET / RANGKUMAN OOP LANJUTAN UNTUK PERSIAPAN LARAVEL
// ==============================================================================
/*
 1. Getter & Setter : Pintu masuk/keluar aman untuk membaca dan mengedit data private dengan validasi.
 2. Static ( :: )   : Akses method/property langsung dari Class tanpa perlu 'new'. (Dasar Laravel Facades).
 3. Abstract Class  : Class cetakan setengah jadi, memaksa child class buat method abstraknya.
 4. Interface       : Kontrak perjanjian 100% wajib yang dipatuhi oleh class yang meng-implements.
 5. Trait ( use )   : Potongan fitur serbaguna yang bisa ditempel ke banyak class sekaligus.
 6. Namespace       : Pengelompokan folder class untuk cegah bentrokan nama class.
 7. Try-Catch       : Menangkap error (Exception) agar aplikasi tidak crash mendadak.
 8. Dependency Inj. : Menyuntikkan objek dependency lewat parameter constructor/method (Dasar Laravel Service Container).
*/
