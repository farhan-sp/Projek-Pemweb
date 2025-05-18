$('#kirim-pesan').submit(function(e) {
    $.ajax({
        url: '/contact',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            alert("Pesan Berhasil Dikirim!");
        },
        error: function(xhr, status, error) {
            alert("Pesan Gagal!");
        }
    });
});