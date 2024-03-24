<!-- Praktikum 3 - Upload File dengan PHP dan Jquery -->
<!-- Praktikum 4 - Menghias Upload File -->

<?php
// Memeriksa apakah terdapat file yang diunggah
if (isset($_FILES['file'])){
    $errors = array(); // Inisialisasi array untuk menyimpan pesan error
    $file_name = $_FILES['file']['name']; // Nama file yang diunggah
    $file_size = $_FILES['file']['size']; // Ukuran file yang diunggah
    $file_tmp = $_FILES['file']['tmp_name']; // Lokasi sementara file yang diunggah
    $file_type = $_FILES['file']['type']; // Jenis MIME file yang diunggah
    
    // Mendapatkan ekstensi file
    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    
    // Array ekstensi file yang diperbolehkan
    $extensions = array("jpg", "jpeg", "png", "gif");

    // Memeriksa apakah ekstensi file diizinkan
    if (in_array($file_ext, $extensions) === false){
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF";
    }
    
    // Memeriksa apakah ukuran file melebihi batas maksimum
    if ($file_size > 2097152){ // Batas ukuran file: 2 MB (dalam bytes)
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }
    
    // Jika tidak terdapat error, maka file diunggah ke direktori tujuan
    if (empty($errors) == true){
        move_uploaded_file($file_tmp, "documents/" . $file_name); // Memindahkan file ke direktori tujuan
        echo "File berhasil diunggah"; // Menampilkan pesan sukses
    } else { 
        // Jika terdapat error, tampilkan pesan-pesan error yang terkumpul
        echo implode(" ", $errors);
    }
}
?>
