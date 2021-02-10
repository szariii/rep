jQuery(function ($) {

    $('#editbut').on('click', function() {
        console.log()

        

        $.ajax({
            method: "POST",
            url: "/wp-admin/admin-ajax.php",
            dataType: "json",
            data: {
                action: "dana",
                id: $('#id').val(),
                email: $('#emai').val(),
                name: $('#nam').val(),
                surname: $('#surnam').val(),
                nick: $('#nic').val(),
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