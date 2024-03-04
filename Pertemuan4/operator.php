<?php
//membuat varibael a dan b untuk mencoba penggunaan operator pada file operator.php//
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pangkat: " . $pangkat . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Pembagian: " . $sisaBagi . "<br> <br>";

//Menambahkan kode untuk operator pembanding
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a sama dengan b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br> <br>";

//Menambahkan kode untuk operator logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;   

echo "Hasil dari operasi logika AND: " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil dari operasi logika OR: " . ($hasilOr ? "true" : "false") . "<br>";
echo "Hasil dari operasi logika NOT pada a: " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Hasil dari operasi logika NOT pada b: " . ($hasilNotB ? "true" : "false") . "<br><br>";

//Menambahkan kode untuk operator penugasan
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Nilai a setelah ditambah dengan b: " . $a . "<br>";
echo "Nilai a setelah dikurangi dengan b: " . $a . "<br>";
echo "Nilai a setelah dikali dengan b: " . $a . "<br>";
echo "Nilai a setelah dibagi dengan b: " . $a . "<br>";
echo "Sisa hasil pembagian a dengan b: " . $a . "<br><br>";

//Menambahkan kode untuk operator identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br><br>";

/*Soal cerita: Sebuah restoran memiliki 45 kursi di dalamnya. 
Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
Berapa persen kursi yang masih kosong di restoran tersebut?
*/
echo "Soal Cerita: <br>";
$kursiResto = 45;
$pelanggan = 28;

$kursiKosong = $kursiResto - $pelanggan;
$hasil = ($kursiKosong/$kursiResto) * 100;

echo "Persentase kursi yang masih kosong di restoran tersebut yaitu " . $hasil . "%";
?>
