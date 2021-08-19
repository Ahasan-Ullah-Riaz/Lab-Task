const name = document.getElementById('uname');

const password = document.getElementById('password');



form.addEventListener('submit', e => {
	
	// e.preventDefault();

	console.log("in valid.js")
	

	
	 let isValid = checkInputs();

	 if(!isValid){
	 	e.preventDefault();
	 }

});

function checkInputs() {
	// trim to remove the whitespaces
	const nameValue = name.value.trim()
	const passwordValue = password.value.trim();

	error_occured =  false


	if(nameValue === '') {
		console.log("name error")
		error_occured = true
		setErrorFor(name,"name cnanot be empty")
	} 
	
	

	
	if(passwordValue.length < 5 ||  passwordValue.length >32) {
		console.log("pass error")
		error_occured = true

		setErrorFor(password,"password length should be within 5  to  32")
	}

	
	


	
	if (error_occured) {
	return false

	}

	return true




}



function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}