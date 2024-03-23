<!--Praktikum - Escape character-->
<?php
//Untuk membalikkan string dengan menggunakan perintah strrev()
$pesan = "Saya arek malang";
echo strrev($pesan) . "<br>";


//Ubah variabel pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
//UBah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
//Gabungan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>