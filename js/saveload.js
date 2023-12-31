
function load() {

	// load

	if (localStorage.key('name') !== null) {
		name = JSON.parse(localStorage.getItem('name'));
		
	}
	else{
		// name == false
		name = '';
		
	}







	if (localStorage.key('pass') !== null) {
		pass = JSON.parse(localStorage.getItem('pass'));
		
	}
	else{
		// pass == false
		pass = '';
		
	}







	if (localStorage.key('email') !== null) {
		email = JSON.parse(localStorage.getItem('email'));
		
	}
	else{
		// email == false
		email = '';
		
	}








	if (localStorage.key('account_status') == 1) {
		account_status = 1;
	}
	else{
		// account_status == false
		account_status = 0;
		
	}
}


function save() {

	if( localStorage.key('name') !== null ){
		localStorage.removeItem('name');
		localStorage.setItem('name', JSON.stringify(name) );
	}
	else{
		localStorage.setItem('name', JSON.stringify(name) );
	}






	if( localStorage.key('pass') !== null ){
		localStorage.removeItem('pass');
		localStorage.setItem('pass', JSON.stringify(pass) );
	}
	else{
		localStorage.setItem('pass', JSON.stringify(pass) );
	}





	if( localStorage.key('email') !== null ){
		localStorage.removeItem('email');
		localStorage.setItem('email', JSON.stringify(email) );
	}
	else{
		localStorage.setItem('email', JSON.stringify(email) );
	}






	if( localStorage.key('account_status') !== null ){
		localStorage.removeItem('account_status');
		localStorage.setItem('account_status', JSON.stringify(account_status) );
	}
	else{
		localStorage.setItem('account_status', JSON.stringify(name) );
	}
}