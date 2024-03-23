<!--Praktikum - Variabel Superglobal-->
<!--Variabel $_POST
    Variabel $_POST mirip dengan variabel $_GET. 
    Hanya saja data yang di-passing tidaklah melalui query string pada URL,
    akan tetapi pada body request. Dan request method yang dilakukan 
    haruslah dengan metode POST.-->
<html>
<body>
    <!-- Yang mengirimkan data ke halaman yang sama (PHP_SELF) -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        // Memeriksa apakah request method yang digunakan adalah POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil nilai dari input field dengan name "fname" menggunakan variabel superglobal $_POST
            $name = $_POST['fname'];
            // Memeriksa apakah input field "fname" tidak kosong
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name; 
            }
        }
    ?>
</body>
</html>
