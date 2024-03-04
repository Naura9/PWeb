<?php 
// membuat variabel baru pada file variabel_konstanta.php //
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";
echo "<br>";

// menambahkan variabel baru dengan tipe data boolean //
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";
echo "<br>";

//Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang 
didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>