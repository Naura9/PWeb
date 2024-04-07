<!--Praktikum 2 - CRUD dengan OOP-->
<?php
class Database {
    private $host = "localhost"; // Atribut untuk menyimpan nama host database secara privat
    private $username = "root"; // Atribut untuk menyimpan nama pengguna database secara privat
    private $password = ""; // Atribut untuk menyimpan kata sandi database secara privat
    private $database = "prakwebdb"; // Atribut untuk menyimpan nama database secara privat
    public $conn; // Atribut untuk koneksi database yang dapat diakses secara publik

    // Konstruktor untuk membuat koneksi ke database
    public function __construct()
    {
        // Membuat koneksi baru menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Memeriksa apakah koneksi berhasil atau tidak
        if ($this->conn->connect_error) {
            die("connection failed: " . $this->conn->connect_error); // Mematikan skrip jika koneksi gagal
        }
    }
}
?>
