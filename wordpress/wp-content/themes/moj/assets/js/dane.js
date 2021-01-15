$('#prz').on('click', function(){
  var loginVal = $('#email').value(); 
  var passwordVal = $('#haslo').value()




$.ajax({
url : "http://localhost:5000/movies"
action: "dane",
method:"post",
dataType: "json",
contentType : "application/json",
data:  { login:  $loginVal,  
		password: $passwordVal
		}
})

success: (){alert('success')},

error: (){alert('error')},

complete: (){alert('complete')},

});
