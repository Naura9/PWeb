<!--Praktikum - Variabel Superglobal-->
<!--Variabel $_REQUEST
    Array asosiatif yang menyimpan gabungan nilai dari variabel $_GET, 
    $_POST, dan $_COOKIE yang kesemuanya berhubungan dengan data yang 
    dikirim bersamaan dengan request user.-->
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