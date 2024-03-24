<!-- Praktikum 1 - Upload File -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <!-- Formulir untuk mengunggah file -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- Input untuk memilih file yang akan diunggah (png, jpg, jpeg) -->
        <input type="file" name="fileToUpload" id="fileToUpload"> 

        <!-- Input untuk memilih file yang akan diunggah (txt, pdf, word, doc, docx-->
        <!-- <input type="file" name="documentToUpload" id="documentToUpload"> -->

        <!-- Tombol untuk mengirimkan formulir -->
        <input type="submit" value="Upload File" name="submit">    
    </form>
</body>
</html>