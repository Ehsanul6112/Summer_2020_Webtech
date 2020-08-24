function validate(){
	var email = document.getElementById('email').value;
	if(document.getElementById("email").value == ""){
		document.getElementById('userMsg').innerHTML = "email can't left empty";
		return false;
    }
	else{
		return true;
	}
}

function remover(){
	document.getElementById('userMsg').innerHTML = "";
}

function xyz(){
	if(document.getElementById('email').value == ""){
		document.getElementById('userMsg').innerHTML = "this field is required!";
	}
}
