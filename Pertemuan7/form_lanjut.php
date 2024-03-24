<!-- Praktikum 6 - Form Lanjut -->

<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <!-- Form dikirim ke proses_lanjut.php saat tombol "Submit" diklik -->
    <form method="POST" action="proses_lanjut.php"> 
        <label for="buah">Pilih Buah:</label> 
        <select name="buah" id="buah">
            <option value="apel">Apel</option> 
            <option value="pisang">Pisang</option> 
            <option value="mangga">Mangga</option> 
            <option value="jeruk">Jeruk</option> 
        </select>
        <br>

        <label>Pilih Warna Favorit:</label><br>
        <!-- Checkbox untuk memilih warna favorit -->
        <input type="checkbox" name="warna[]" value="merah"> Merah<br> 
        <input type="checkbox" name="warna[]" value="biru"> Biru<br> 
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <!-- Radio button untuk memilih jenis kelamin -->
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br> 
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>

        <!-- Tombol "Submit" untuk mengirimkan form -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
