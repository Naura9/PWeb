<?php
//Membuat data maahasiswa dengan Array multidemsnsi
echo "<h1 style='font-size: 24px; font-weight: bold;'>Data Mahasiswa Array Multidimensi</h1>";
$dataMhs = [
    [
        'image' => 'img/img1.jfif',
        'nama' => 'Andi',
        'nim'=> '2241760100',
        'jurusan'=> 'Teknik Elektro',
        'email'=> 'andi@gmail.com'
    ],
    [
        'image' => 'img/img2.jfif',
        'nama' => 'Queen',
        'nim'=> '2241760109',
        'jurusan'=> 'Akuntansi',
        'email'=> 'queen@gmail.com'
    ],
    [
        'image' => 'img/img3.jfif',
        'nama' => 'Kisa',
        'nim'=> '2241760189',
        'jurusan'=> 'Teknik Kimia',
        'email'=> 'kisa@gmail.com'
    ],
    [
        'image' => 'img/img4.jfif',
        'nama' => 'William',
        'nim'=> '2241760104',
        'jurusan'=> 'Teknik Elektro',
        'email'=> 'william@gmail.com',
    ],
    [
        'image' => 'img/img5.jfif',
        'nama' => 'Byan',
        'nim'=> '2241760101',
        'jurusan'=> 'Teknik Mesin',
        'email'=> 'byan@gmail.com',
    ],
];

foreach ($dataMhs as $mhs) {
    echo '<img src="' . $mhs['image'] . '" alt="Profil Mahasiswa" width="100" height="100"><br>';
    echo "Nama: " . $mhs['nama'] . "<br>";
    echo "NIM: " . $mhs['nim'] . "<br>";
    echo "Jurusan: " . $mhs['jurusan'] . "<br>";
    echo "Email: " . $mhs['email'] . "<br><br>";
}
?>
