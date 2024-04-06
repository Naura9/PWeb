<!-- Praktikum 4 - Folder Module Bagian Jabatan -->
<!DOCTYPE html>
<html>
<body>
<div class="container-fluid">
  <div class="row">
    <?php 
    // Memasukkan menu.php dan mengambil ID dari parameter GET
    require 'admin/template/menu.php';
    $id = $_GET['id'];

    // Menyiapkan query SQL untuk mengambil data jabatan berdasarkan ID
    $query = "SELECT * FROM jabatan WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jabatan</h1>
      </div>
      <div class="card col-md-6">
        <div class="card-header">Form Edit Jabatan</div>
        <div class="card-body">
          <form action="fungsi/edit.php?jabatan=edit" method="POST">
            <!-- Tombol untuk kembali ke halaman jabatan -->
            <a href="index.php?page=jabatan" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true"></i> Batal</a>
            <!-- Input tersembunyi untuk menyimpan ID jabatan -->
            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
            <!-- Input untuk mengedit nama jabatan -->
            <div class="mb-3">
              <label for="jabatan" class="form-label">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" value="<?= $row['jabatan']; ?>">
            </div>
            <!-- Input untuk mengedit keterangan jabatan -->
            <div class="mb-3">
              <label for="keterangan" class="form-label">Keterangan</label>
              <textarea class="form-control" name="keterangan"><?= $row['keterangan']; ?></textarea>
            </div>
            <!-- Tombol untuk menyimpan perubahan -->
            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>
</body>
</html>