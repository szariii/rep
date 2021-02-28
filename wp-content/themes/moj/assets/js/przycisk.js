jQuery(function ($) {

    $('#prz').on('click', function () {
        console.log()



        $.ajax({
            method: "POST",
            url: "/wp-admin/admin-ajax.php",
            dataType: "json",
            data: {
                action: "dane",
                email: $('#email').val(),
                password: $('#pass').val(),
                name: $('#name').val(),
                surname: $('#surname').val(),
                nick: $('#nick').val(),
            },
            success: function (response) {
                console.log(response);
                alert('dane zapisano poprawnie')
            },
            error: function (response) {
                console.log(response);
                alert('error')
            },
        });
    });
});