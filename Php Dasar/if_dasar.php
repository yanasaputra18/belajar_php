<?php
// Latihan 1
// $umur = 22;
// if ($umur >= 18) {
//     echo "Anda sudah dewasa. \n";
// } else {
//     echo "Anda masih di bawah umur. \n";
// }


// Latihan 2
$nilai = 92;
if ($nilai >= 90) {
    echo "Grade A. \n";
} elseif ($nilai >= 80) {
    echo "Grade B. \n";
} elseif ($nilai >= 70) {
    echo "Grade C. \n";
} elseif ($nilai >= 60) {
    echo "Grade D. \n";
} else {
    echo "Grade E. \n";
}


// latihan 3
$umur = 22;
if ($umur >= 18) {
    echo "Anda sudah dewasa. \n";
} elseif ($umur >= 13) {
    echo "Anda remaja. \n";
} else {
    echo "Anda masih anak-anak. \n";
}


// latihan 4
$role = "admin";
if ($role == "admin") {
    echo "Selamat datang admin. \n";
} elseif ($role == "member") {
    echo "Selamat datang member. \n";
} else {
    echo "Selamat datang tamu. \n";
}


// latihan 5
$login = true;
if ($login) {
    echo "Anda berhasil login. \n";
} else {
    echo "Anda gagal login. \n";
}


// latihan 6
$totalBelanja = 150000;
if ($totalBelanja >= 100000) {
    echo "Anda mendapatkan diskon 10%. \n";
} else {
    echo "Anda tidak mendapatkan diskon. \n";
}


// latihan 7
$stok = 0;
if ($stok > 0) {
    echo "Barang tersedia. \n";
} else {
    echo "Barang tidak tersedia. \n";
}


// latihan 8
$nilaiUjian = 75;
if ($nilaiUjian >= 80) {
    echo "Selamat, Anda lulus dengan nilai A. \n";
} elseif ($nilaiUjian >= 70) {
    echo "Selamat, Anda lulus dengan nilai B. \n";
} elseif ($nilaiUjian >= 60) {
    echo "Selamat, Anda lulus dengan nilai C. \n";
} else {
    echo "Maaf, Anda tidak lulus. \n";
}


// latihan 9
$isLogin = true;
$isMember = true;
if ($isLogin) {
    if ($isMember) {
        echo "Selamat datang member. \n";
    } else {
        echo "Selamat datang tamu. \n";
    }
} else {
    echo "Silakan login terlebih dahulu. \n";
}


// latihan 10
$stok = 5;
$isExpired = true;
if ($stok > 0) {
    if (!$isExpired) {
        echo "Barang tersedia dan masih layak pakai. \n";
    } else {
        echo "Barang tersedia tetapi sudah kadaluarsa. \n";
    }
} else {
    echo "Barang tidak tersedia. \n";
}


// latihan 11
$isCardValid = true;
$pinBenar = false;
if ($isCardValid) {
    if ($pinBenar) {
        echo "Transaksi berhasil. \n";
    } else {
        echo "PIN salah. \n";
    }
} else {
    echo "Kartu tidak valid. \n";
}



// latihan 12
$hari = "rabu";

switch ($hari) {
    case "senin":
        echo "Hari ini adalah hari kerja. \n";
        break;
    case "selasa":
        echo "Hari ini adalah hari kerja. \n";
        break;
    case "rabu":
        echo "Hari ini adalah hari kerja. \n";
        break;
    case "kamis":
        echo "Hari ini adalah hari kerja. \n";
        break;
    case "jumat":
        echo "Hari ini adalah hari kerja. \n";
        break;
    case "sabtu":
        echo "Hari ini adalah hari libur. \n";
        break;
    case "minggu":
        echo "Hari ini adalah hari libur. \n";
        break;
    default:
        echo "Nama hari tidak valid. \n";
}



// latihan 13
$role = "owner";
switch ($role) {
    case "admin":
        echo "Dashboard admin. \n";
        break;
    case "member":
        echo "Dashboard kasir. \n";
        break;
    case "owner":
        echo "Dashboard owner. \n";
        break;
    default:
        echo "Role tidak dikenal. \n";
}



// latihan 14
$status = "pending";
switch ($status) {
    case "pending":
        echo "Pesanan Anda sedang diproses. \n";
        break;
    case "shipped":
        echo "Pesanan Anda telah dikirim. \n";
        break;
    case "delivered":
        echo "Pesanan Anda telah diterima. \n";
        break;
    default:
        echo "Status pesanan tidak valid. \n";
}