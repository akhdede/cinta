$(function() {   

    const loading = 'Logging in <img src="http://192.168.1.25/cinta/img/loading.gif" id="loading">';

    $('button[type=submit]').on('click', function() {
        $(this).html(loading);
        var nip = $('#nip').val().trim();
        var password = $('#password').val().trim();

        $.ajax({
            url:'http://192.168.1.25/cinta/auth/proses_login',
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