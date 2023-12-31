

function close_form_price() {
	var close_button = document.getElementsByClassName('exit-button-form');
	for(let i = 0; i < close_button.length; i++){

		close_button[i].onclick = function() {
			document.getElementById('main-form-price').style.display = 'none';
			document.getElementById('box-fon-form-wedding').style.display = 'none';
			document.getElementById('box-fon-form-family').style.display = 'none';
		}
	}	
}

function open_form_price() {

	// wedding
	var open_button_wedding = document.getElementById('input_button_open_form_wedding');

		open_button_wedding.onclick = function() {
			document.getElementById('main-form-price').style.display = 'block';
			document.getElementById('box-fon-form-wedding').style.display = 'block';
		}

	// family 
	var open_button_family = document.getElementById('input_button_open_form_family');

		open_button_family.onclick = function() {
			document.getElementById('main-form-price').style.display = 'block';
			document.getElementById('box-fon-form-family').style.display = 'block';
		}
}


function logreg_open() {
	var open_button = document.getElementsByClassName('logreg_btn');
	for(let i = 0; i < open_button.length; i++){

		open_button[i].onclick = function() {	

			document.getElementById('logreg-main-form-id').style.display = 'block';
			document.getElementById('register-form-box').style.display = 'none';
			// document.getElementById('login-form-box').style.display = 'block';
		}
	}	
}

function close_form_logreg() {
	var close_button = document.getElementsByClassName('exit-button-form-logreg');
	for(let i = 0; i < close_button.length; i++){

		close_button[i].onclick = function() {

			document.getElementById('logreg-main-form-id').style.display = 'none';
			document.getElementById('logreg-form-box').style.display = 'block';
		}
	}	
}

function register_form() {
	var register_button = document.getElementById('button_register_account');
	register_button.onclick = function() {

		document.getElementById('logreg-form-box').style.display = 'none';
		document.getElementById('register-form-box').style.display = 'block';
	}
}

function login_form() {
	var login_button = document.getElementById('button_login_account');
	login_button.onclick = function() {
		var pass_input = document.getElementById('password-text-input');	

		document.getElementById('register-form-box').style.display = 'none';
		document.getElementById('logreg-form-box').style.display = 'block';
	}
}



function form_account() {
	// форма аккаунта

	var account_button = document.getElementById('button-open-account');
	var listener_account_fon_panel = document.getElementById('form-account-panel-main');

	account_button.onclick = function() {
		document.getElementById('form-account-panel-main').style.display = 'block';
	}
	
}

function close_account_form() {
	// закрытие формы с информацией об аккаунте

	var account_button = document.getElementById('button-open-account');
	var listener_account_fon_panel = document.getElementById('form-account-panel-main');

}







