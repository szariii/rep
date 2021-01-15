$('#prz').on('click', function(e){
alert('klik!');
})

$('#prz').on('click', function(){
  var loginVal = $('#email').val; 
  var passwordVal = $('#haslo').val;
  return {login: loginVal, password: passwordVal};
  var_dump(loginVal); 
  var_dump(passwordVal); 
  exit;
})



$.ajax({
action : "dane",
method : "post",
dataType : "json",
contentType : "application/json",
data:  { login:  "Marcin",  
		password: "Polska"
		},


success: function(){alert('success')},

error: function(){alert('error')},

complete: function(){alert('complete')},

});