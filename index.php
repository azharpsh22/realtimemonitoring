<?php
// Ambil URL dari parameter 'url'
$url = isset($_GET['url']) ? $_GET['url'] : '/';

// Definisikan rute Anda
switch ($url) {
    case '/':
        // Aksi yang dijalankan saat rute utama dipanggil
       include 'home.php';
        break;

    case 'dasboard':
        // Aksi yang dijalankan saat rute '/about' dipanggil
        include 'das.php';
        break;

    case '/contact':
        // Aksi yang dijalankan saat rute '/contact' dipanggil
        echo "Ini adalah halaman kontak kami.";
        break;

    default:
        // Aksi yang dijalankan saat tidak ada rute yang cocok
        echo "Halaman tidak ditemukan.";
        break;
}
?>