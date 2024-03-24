<!-- Praktikum 3 - Upload File dengan PHP dan jQuery -->
<!-- Praktikum 4 - Menghias Upload File -->

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <!-- Container untuk form unggah file -->
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <!-- Form untuk mengunggah file dengan action menuju upload.php -->
        <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
            <!-- Container untuk input file -->
            <div class="file-input-container">
                <!-- Input file untuk memilih file yang akan diunggah -->
                <input type="file" name="file" id="file" class="file-input">
                <!-- Label untuk input file -->
                <label for="file" class="file-label">Pilih File</label>
            </div>
            <!-- Tombol untuk mengunggah file -->
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        </form>
        <!-- Div untuk menampilkan status unggah -->
        <div id="status" class="upload-status"></div>
    </div>
    <!-- Mengimpor jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Mengimpor script untuk menangani unggah file -->
    <script src="upload.js"></script>
</body>
</html>
