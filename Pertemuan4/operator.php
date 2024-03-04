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
echo "Sisa Pembagian: " . $sisaBagi . "<br>";
?>