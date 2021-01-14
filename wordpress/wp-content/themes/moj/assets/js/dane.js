function dane(){
var loginVal = document.getElementById("email").value; 
var passwordVal = document.getElementById("haslo").value; 

return {login: loginVal, password: passwordVal}
var_dump($loginVal); 
var_dump($passwordVal); 
exit;
}

$.ajax({
method:"post",
action: "dane",
data:  { login:  $loginVal,  
		password: $passwordVal
		}
})
