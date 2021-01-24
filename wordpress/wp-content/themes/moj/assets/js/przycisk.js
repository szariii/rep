jQuery(function ($) {


    $('#prz').on('click', function () {
        alert('klik');
        let loginVal = $('#email').val();
        let passwordVal = $('#haslo').val();


        $.ajax({
            method: "POST",
            url: "/wp-admin/admin-ajax.php",
            data: {
                action: "dane",
                login: loginVal,
                password: passwordVal,
            },
            success: function (response) {
                console.log(response);
                alert('success')
            },
            error: function (response) {
                console.log(response);
                alert('error')
            },
        });

    });

})