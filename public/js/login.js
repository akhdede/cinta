$(function() {   

    const loading = 'Logging in <img src="http://localhost/cinta/img/loading.gif" id="loading">';

    $('button[type=submit]').on('click', function() {
        $(this).html(loading);
        var nip = $('#nip').val().trim();
        var password = $('#password').val().trim();

        $.ajax({
            url:'http://localhost/cinta/auth/proses_login',
            type:'post',
            data:{nip:nip, password:password},
            success:function(response) {
                if (response == 1) {
                    console.log('berhasil');
                }

            }
        });
    });
    setTimeout(function() {
        $('#message').fadeOut('slow');
    }, 3000);
});