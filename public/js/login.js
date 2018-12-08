const LOADING = 'Logging in <img src="http://localhost/cinta/public/img/loading.gif" id="loading">';
$(function() {
    $('button[type=submit]').on('click', function() {
        $(this).html(LOADING);
    });
});