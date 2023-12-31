let a = setInterval(test_timer,100);

function test_timer() {
	let Name = document.getElementById('test_input_name');
	let Email = document.getElementById('test_input_email');
	let Pass = document.getElementById('test_input_pass');

	if (Name.value.includes(' ')) {
		Name.value = (Name.value.trim(' ').replace(' ', ''));
	}
}