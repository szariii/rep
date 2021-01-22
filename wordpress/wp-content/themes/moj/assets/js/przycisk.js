$('#prz').on('click', function () {
    alert('klik');
    var loginVal = $('#email').val;
    var passwordVal = $('#haslo').val;


    $.ajax({
		url: "/../../function.php",
        action: "dane",
        method: "POST",
        dataType: "json",
        contentType: "application/json",
        data: {
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

