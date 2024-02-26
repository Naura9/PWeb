<?php
$var1 = 12;
// echo gettype($var1); //tipe data dari $var1 ex: integer
var_dump($var1); //tipedata(value) ex: int(12)
echo "<br>";

$var2 = 99.99;
// echo gettype($var2);
var_dump($var2); //float(99.99)
echo"<br>";

$var3 = "polinema";
// echo gettype($var3);
var_dump($var3);    
echo "<br>";
echo "<hr>";
unset($var3);
echo $var3;
var_dump($var3); //setalah di unset, var3 jadi NULL

echo"<hr>";
$var4 = true;
// echo gettype($var4);
var_dump($var4);
?>