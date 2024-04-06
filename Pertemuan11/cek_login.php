<!--Praktikum 1 - Struktur Folder dan File Paling Atas-->
<?php
// Mulai sesi jika belum dimulai
if (session_status() == PHP_SESSION_NONE)
    session_start();

// Memasukkan file koneksi.php
include 'config/koneksi.php';
// Memasukkan file pesan_kilat.php
include 'fungsi/pesan_kilat.php';
// Memasukkan file anti_injection.php
include 'fungsi/anti_injection.php';

// Mengamankan input username dari serangan SQL Injection
$username = antiinjection($koneksi, $_POST['username']);
// Mengamankan input password dari serangan SQL Injection
$password = antiinjection($koneksi, $_POST['password']);

// Query untuk mengambil data user berdasarkan username
$query = "SELECT username,level,salt, password as hashed_password FROM user WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
mysqli_close($koneksi);

// Mengambil salt dan hashed password dari hasil query
$salt = $row['salt'];
$hashed_password = $row['hashed_password'];

// Memeriksa apakah salt dan hashed password tidak kosong
if ($salt !== null && $hashed_password !== null) {
    // Menggabungkan salt dan password yang diinputkan
    $combined_password = $salt . $password;
    // Memeriksa apakah password yang diinputkan sesuai dengan hashed password
    if (password_verify($combined_password, $hashed_password)) {
        // Jika sesuai, menyimpan username dan level ke dalam sesi
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        // Mengarahkan pengguna ke halaman index
        header("location:index.php");
    } else {
        // Jika password tidak sesuai, menampilkan pesan error dan mengarahkan kembali ke halaman login
        pesan('danger', "Login gagal. Password Anda Salah.");
        header("location:login.php");
    }
} else {
    // Jika username tidak ditemukan, menampilkan pesan peringatan dan mengarahkan kembali ke halaman login
    pesan('warning', "Username tidak ditemukan.");
    header("location:login.php");
}

// Menghentikan eksekusi script selanjutnya
die();
?>
