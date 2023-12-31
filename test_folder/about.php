<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Тестовая локация</title>
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/test_location_style.css">
	<script src="/js/test_script.js"></script>
</head>
<body>
	<div class="centerr">
		


		
		<?php 
			if(isset($_POST["test_btn"])){
				if( ($_POST["name"]=='') || ($_POST["pass"]=='') || ($_POST["email"]=='') ) {
					echo "ошибка!";
				}
				else if(($_POST["name"]!=='') && ($_POST["pass"]!=='') && ($_POST["email"]!=='')){

					echo "ура!";
				}
			}
		?>
	


		<form id="test-location" name="test" action="" method="post"
		>
			<label>Name</label> <br>
			<input id="test_input_name" class="test-location" type="text" placeholder="" name="name" /> <br>
			<label>Email</label> <br>
			<input id="test_input_email" class="test-location" type="email" placeholder="" name="email" /> <br>
			<label>Password</label>  <br>
			<input id="test_input_pass" class="test-location" type="password" placeholder="" name="pass" /> <br>
			<input class="test-location" type="submit" value="Отправить" name="test_btn">
		</form>

		
	</div>
</body>
</html>