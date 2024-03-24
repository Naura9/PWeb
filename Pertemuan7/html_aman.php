<!-- Praktikum 5 : Penggunaan Regex Pada PHP -->

<?php
// Mencocokkan pola regex untuk mencari huruf kecil dalam teks
$pattern = '/[a-z]/';
$text = 'This is a sample text.';
if (preg_match($pattern, $text)) { 
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br>";
echo "<hr>";

// Mencocokkan pola regex untuk mencari angka dalam teks
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) { 
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br>";
echo "<hr>";

// Mengganti kata "apple" dengan "banana" dalam teks menggunakan preg_replace
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text); 
echo $new_text;

echo "<br>";
echo "<hr>";

// Mencocokkan pola regex untuk mencari kata "good" dengan 2 atau 3 huruf "o"
$pattern = '/go{2,3}d/'; 
$text = 'God is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>
