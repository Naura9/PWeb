<?php
//Membuat array nilaiSiswa pada file array.php//
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

//Menambahkan kode untuk array dua nilai//
echo "<br><br>";
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

//MEmbuat setiap nilai array dengan 2 nilai yaitu nama mahasiswa dan nilai dalam matakuliah//
echo "<br><br>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78]
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
};


/*Soal : Seorang guru ingin mencetak daftar nilai siswa dalam ujian 
matematika. Guru tersebut memiliki data setiap siswa terdrir dari nama 
dan nilai. Bantu guru ini mencetak daftar nilai siswa yang mencapai 
nilai di atas rata-rata kelas. Dengan ketentuan nama dan nilai siswa 
Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva 
dapat 90 */
echo "<br> <br>";
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

// Menghitung jumlah siswa dan total nilai kelas
$totalNilai = 0;
$jumlahSiswa = 0;
foreach ($daftarNilai as $nilai) {
    $jumlahSiswa++;
    $totalNilai += $nilai[1];
}

// Menghitung rata-rata nilai kelas
$rataRataKelas = $totalNilai / $jumlahSiswa;

// Mencetak daftar nilai siswa yang di atas rata-rata kelas
echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas: <br>";
foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRataKelas) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}

?>