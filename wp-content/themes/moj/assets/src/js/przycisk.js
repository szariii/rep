jQuery(function ($) {

    
    $(document).ready(function() {
        var result = $('.form-label #id');
        console.log(result);
    });




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
                alert(response.data.message)
            },
            error: function (response) {
                console.log(response);
                alert('error')
            },
        });
    });

    




    
    
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
                alert(response.data.message)
            },
            error: function (response) {
                console.log(response);
                alert('error')
            },
        });
    });
});