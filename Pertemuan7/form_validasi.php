<!-- Praktikum 7 : Validasi Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <!-- Input nama -->
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <!-- Input email -->
        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <!-- Input password -->
        <label for="password">Password :</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi untuk nama
                if (nama === ""){
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi untuk email
                if (email === ""){
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validasi untuk password
                if (password === ""){
                    $("#password-error").text("Password harus diisi");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Jika ada kesalahan validasi, akan dicegah
                if (!valid){
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>