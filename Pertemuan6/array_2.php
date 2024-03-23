<!--Praktikum Bagian 2 - Associative Array-->
<!--Terdiri dari pasangan key (menunjukkan posisi dimana nilai disimpan) dan value
    PHP menggunakan tanda => untuk mendefinisikan value kepada kunci-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <?php
        //mendefinisikan array asosiatif namanya $Dosen
        $Dosen = [
            //key => value
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' ];

        //menampilkan nilai dari kunci-unci pada array 
        echo "Nama: {$Dosen ['nama']} <br>";
        echo "Domisili {$Dosen ['domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
    ?>
</body>
</html>
