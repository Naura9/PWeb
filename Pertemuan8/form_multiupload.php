<!-- Praktikum 2 - Multi Upload File -->
<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Document</title>
</head>
<body>
    <!-- Untuk upload dokumen -->
    <!-- <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
        <input type="submit" value="Unggah">
    </form> -->

    <!-- Untuk upload gambar-->
    <h2>Unggah Gambar </h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".png, .jpg, .jpeg">
        <input type="submit" value="Unggah">
    </form>
</body>
</html