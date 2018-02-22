function validation(){
	var firstname = document.getElementById('fname').value;
	var lastname = document.getElementById('lname').value;
	var mail = document.getElementById('email').value;
	var user = document.getElementById('username').value;
	var pass = document.getElementById('pwd').value;
	var con_pass = document.getElementById('cpwd').value;
	var age = document.getElementById('age').value;

 if(firstname === "" || lastname === "" || mail === "" || user === "" || pass === ""|| con_pass === ""|| age === ""){
 	alert("All inputs are required");
 	return false;
}
if(pass !== con_pass){
	alert("Passwords do not match");
	return false;
}
}