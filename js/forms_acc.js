window.onload = function() {
	clear_in_input_form();
}
function clear_in_input_form() {
	var form_login_l = document.getElementById('f-login-l');
	var form_email_l = document.getElementById('f-email-l');
	var	form_password_l = document.getElementById('f-password-l');

	var form_login_r = document.getElementById('f-login-r');
	var form_email_r = document.getElementById('f-email-r');
	var form_password_r = document.getElementById('f-password-r');

	form_login_l.style.value = '';
	form_email_l.style.value = '';
	form_password_l.style.value = '';

	form_login_r.style.value = '';
	form_email_r.style.value = '';
	form_password_r.style.value = '';
}