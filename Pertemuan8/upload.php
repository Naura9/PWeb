<!-- Praktikum 1- Upload File -->
<?php
// Memeriksa apakah tombol submit diklik dan file diunggah
if (isset($_POST["submit"]) && isset($_FILES['documentToUpload'])) {
    $errors = array(); 
    $file_name = $_FILES['documentToUpload']['name'];
    $file_size = $_FILES['documentToUpload']['size'];
    $file_tmp = $_FILES['documentToUpload']['tmp_name'];
    $file_type = $_FILES['documentToUpload']['type'];
    
    // Mendapatkan ekstensi file
    @$file_ext = strtolower("" . end(explode('.', $_FILES['documentToUpload']['name'])) . "");
    
    // Array ekstensi file yang diperbolehkan
    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    // Ukuran maksimum file yang diizinkan (dalam bytes)
    $maxFileSize = 10 * 1024 * 1024; // 10 MB

    // Memeriksa apakah ekstensi dan ukuran file sesuai dengan ketentuan
    if (in_array($file_ext, $allowedExtensions) && $file_size <= $maxFileSize){
        // Menentukan direktori target untuk menyimpan dokumen
        $targetDirectory = "documents/";
        // Menentukan path file target yang akan diunggah
        $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);

        // Memindahkan file ke direktori tujuan
        if (move_uploaded_file($file_tmp, $targetFile)){
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>
