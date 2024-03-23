<!--Praktikum - Date and Time-->
<!--Time-->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h3> Time </h3>
    <?php
        // Mengatur zona waktu default menjadi Asia/Jakarta
        date_default_timezone_set("asia/jakarta");
        echo date("h:i:sa")
    ?>
</body>
</html>