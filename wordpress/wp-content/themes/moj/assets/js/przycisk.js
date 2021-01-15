$('#prz').on('click', function () {
    alert('klik');
    var loginVal = $('#email').val;
    var passwordVal = $('#haslo').val;


    $.ajax({
        action: "dane",
        method: "post",
        dataType: "json",
        contentType: "application/json",
        data: {
            login: loginVal,
            password: passwordVal
        },

        success: function () {
            alert('success')
        },

        error: function () {
            alert('error')
        },

        complete: function () {
            alert('complete')
        },

    });

})

