<!-- Praktikum 1 - Function Isset -->
<!-- isset() untuk memeriksa apakah suatu variabel telah didefinisikan (ada) atau tidak.
    Fungsi ini mengembalikan true jika variabel telah didefinisikan dan memiliki nilai, 
    dan false jika variabel tidak ada atau bernilai null.-->

<?php
//Memeriksa apakah variabel $umur telah didefinisikan dan memiliki nilai lebih dari atau sama dengan 18
$umur;
$umur;
if(isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa";
} else {
    echo "Anda belum dewasa atau varibael 'umur' tidak ditemukan.";
}
echo "<br>";

//Memeriksa apakah variabel 'nama' telah didefinisikan dalam array $data
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>