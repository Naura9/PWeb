<!-- Praktikum 3 - Form Input PHP -->

<?php
// Memeriksa apakah request method adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dar input nama menggunakan $_POST
    $nama = $_POST["nama"];
    // Mengambil nilai dari input email menggunakan $_POST
    $email = $_POST["email"];

    // Menampilkn kembali nilai nama dan email kepada pengguna
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>
