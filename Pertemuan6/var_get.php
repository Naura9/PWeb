<!--Praktikum - Variabel Superglobal-->
<!--Variabel $_GET
    Array asosiatif yang berisi nilai dari query string.-->

<?php
// Mengambil nilai dari query string dengan key 'nama' dan 'usia' menggunakan variabel superglobal $_GET
    $nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong 
    $usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong

    echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>
