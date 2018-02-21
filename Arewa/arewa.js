function validateform(){
	var mail = document.getElementById("exampleInputEmail1").value;	
	if (mail === "" || thesurname === "" || thefirstname === ""){
		alert("Enter your email address");
		return false;
	}

}

function validatemyform(){
	var thesurname = document.getElementById("surname").value;
	var thefirstname = document.getElementById("firstname").value;
	var themiddlename = document.getElementById("middlename").value;
	var theemail = document.getElementById("email").value;
	var thepass = document.getElementById("pass").value;
	var thepasse = document.getElementById("passe").value;
	var themale = document.getElementsByName("sex");
	var thestate =document.getElementById("state").value;
	
  

	if(thesurname === ""){
		alert("Please enter your surname");
		return false;
	}
	if(thefirstname === ""){
		alert("Please enter your first name");
		return false;
	}
	if(themiddlename === ""){
		alert("Please enter your middle name");
		return false;
	}
	if(theemail === ""){
		alert("Please enter your email address");
		return false;
	}
	if(thepass !== thepasse){
		alert("The passwords don't match");
		return false;
	}
	if(themale[0].checked == false && themale[1].checked == false){
			alert("Please choose your gender");
			return false;
		}
	if(thestate === "0"){
		alert("You must choose a state");
		return false;

	}
	}
	