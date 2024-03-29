<!-- Praktikum 06 - Tampilan CRUD dengan Ajax -->

<?php
include 'auth.php'; // Mengimpor file auth.php untuk melakukan autentikasi
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>"> <!-- Menyimpan token CSRF sebagai meta tag -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnm0Cqb1lwilj8lyljo/mousej skC4p0pQbqy17RrhNudi9RnKkMHpvbliG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Data anggota</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php" style="color: #fff;">
            CRUD Dengan Ajax
        </a>
    </nav>
    <div class="container">
        <h2 align="center" style="margin: 30px;">Data anggota</h2>
        <!-- Form untuk input data anggota -->
        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                        <!-- Pesan kesalahan untuk nama -->
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                    </div>
                    <!-- Pesan kesalahan untuk jenis kelamin -->
                    <p class="text-danger" id="err_jenis_kelamin"></p>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <!-- Pesan kesalahan untuk alamat -->
                <p class="text-danger" id="err_alamat"></p>
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                <!-- Pesan kesalahan untuk nomor telepon -->
                <p class="text-danger" id="err_no_telp"></p>
            </div>
            <div class="form-group">
                <!-- Tombol untuk menyimpan data -->
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>
        <hr>
        <!-- Div untuk menampilkan data anggota -->
        <div class="data"></div>
    </div>
    <!-- Informasi hak cipta -->
    <div class="text-center">© <?php echo date('Y'); ?> Copyright:
        <a href="https://google.com/">Desain dan pemrograman web</a>
    </div>

    <!-- Mengimpor jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Mengimpor DataTables jQuery -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- Mengimpor DataTables Bootstrap -->
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!-- Mengimpor Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // Konfigurasi token CSRF pada setiap permintaan Ajax
        $(document).ready(function () {
            $.ajaxSetup({
                headers
