<!--Praktikum - Fungsi-->
<?php
/*Membuat function pada file fungsi.php dengan diawali penulisan function namaFungsi()*/
function perkenalan() {
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Naura <br/>";
    echo "Senang berkenalan dengan Anda</br>";
}

// Cara memanggil function yang telah dibuat
perkenalan();
perkenalan();

echo "<hr>";


////Fungsi dengan Parameter////
/*Membuat function dengan parameter*/
function perkenalan2($nama, $salam) {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Cara memanggil function dengan parameter yang telah dibuat
perkenalan2("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// Memanggil function kembali
perkenalan2($saya, $ucapanSalam);



////Parameter dengan nilai Default////
/*Membuat function menggunakan parameter dengan nilai default*/
function perkenalan3($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// //Cara memanggil function yang telah dibuat
perkenalan3("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// //Memanggil function kembali
perkenalan3($saya);

echo "<hr>";


//Memanggil fungsi di dalam fungsi
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan4($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2002, 2023) ." tahun<br>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//Memanggil fungsi perkenalan()
perkenalan4("Elok");
?>
