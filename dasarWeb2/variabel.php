<?php
$name="Naura";
$alamat="Malang";
define("GAJI", 5000000);
define("nomorrumah", 8);

echo $name;
echo "<br>";
echo GAJI;
echo "<br>";
echo nomorrumah;
echo "<br>";
echo "$name bergaji Rp. GAJI";
echo "<br>";
echo "$name bergaji Rp. " .GAJI;
echo "<hr>"; //buat garis
echo "nama saya:  $name";
echo "<br>";
echo "alamat rumah saya: " .$alamat;
echo "<br>";
echo "$name $alamat";
echo "<br>";
echo $name .$alamat;
echo "<hr>";
unset($name);
echo "ini memakai unset $name";
echo $nama
?>