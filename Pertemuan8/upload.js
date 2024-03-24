// Praktikum 3 - Upload File dengan PHP dan jQuery
// Praktikum 4 - Menghias Upload File

$(document).ready(function () {
    $('#file').change(function(){
        // Memeriksa apakah ada file yang dipilih
        if (this.files.length > 0){
            // Mengaktifkan tombol unggah dan mengatur opasitasnya menjadi 1
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            // Menonaktifkan tombol unggah dan mengatur opasitasnya menjadi 0.5
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $("#upload-form").submit(function (e) {
        e.preventDefault(); // Mencegah form dari pengiriman default

        // Membuat objek FormData dari form
        var formData = new FormData(this);

        // Mengirim data menggunakan AJAX
        $.ajax({
            url: "upload_ajax.php", // URL untuk mengirim data
            type: "POST", // Metode pengiriman data
            data: formData, // Data yang akan dikirim
            cache: false, // Menonaktifkan caching
            contentType: false, // Menonaktifkan default content type
            processData: false, // Menonaktifkan pemrosesan data
            success: function (response) { // jika pengiriman berhasil
                $("#status").html(response); 
            },
            error: function(){ // jika terjadi kesalahan
                $("#status").html("Terjadi kesalahan saat mengunggah file.");
            }
        });
    });
});
