<!-- Praktikum 5 - PHP - Form Proccessing -->
<?php
// Mencari huruf kecil dalam sebuah teks
$pattern = '/[a-z]/';
$text = 'This is a sample text.';
if(preg_match($pattern,$text)){ 
    echo "huruf kecil ditemukan !";
}else{
    echo "tidak ada huruf kecil !";
}

echo "<br>";
echo "<hr>";

// Mencocokkan angka dalam sebuah teks
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';

if(preg_match($pattern,$text,$matches)){ 
    echo "cocokan : ".$matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

echo "<br>";
echo "<hr>";

// Mengganti kata 'apple' dengan 'banana' dalam sebuah teks
$pattern = '/apple/';
$replacement = 'banana';
$text = 'i like apple pie.';
$new_text = preg_replace($pattern,$replacement,$text); 

echo "<br>";
echo "<hr>";

// Mencocokkan pola 'go{2,3}d' dalam sebuah teks
$pattern = '/go{2,3}d/'; 
$text = 'god is good';
if(preg_match($pattern,$text,$matches)){
    echo "cocokan : ".$matches[0];
}else{
    echo "tidak ada yang cocok!";
}

?>