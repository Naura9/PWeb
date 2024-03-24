<!-- Praktikum 2 - Function Empty -->
<!-- Untuk memeriksa apakah suatu variabel kosong atau tidak terdefinisi. 
     Fungsi ini mengembalikan true jika variabel kosong atau tidak terdefinisi, 
     dan false jika variabel memiliki nilai atau telah didefinisikan.-->

<?php
    //Memeriksa apakah array $myArray kosong atau tidak terdefinisi 
    $myArray = array(); // Array kosong
    if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.";
    } else {
    echo "Array terdefinisi dan tidak kosong.";
    }

    echo "<br>";

    //Memeriksa apakah variabel $nonExistentVar kosong atau tidak terdefinisi
    if(empty($nonExistentVar)) {
        echo "Variabel tidak terdefinisi atau kosong.";
    } else {
        echo "Variabel terdefinisi dan tidak kosong.";
    }
?>

