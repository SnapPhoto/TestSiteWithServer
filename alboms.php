<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alboms</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/script.js"></script>
	<script src="js/data.js"></script>
</head>
<body>
	



	<!-- header -->
	<div class="header-block">
		<div class="header">
			<div class="container-fluid">
				<div class="flex-line">

					<div class="name-site">
						<p>snapphoto</p>
					</div>

					<!-- на какой странице я нахожусь -->
					<div class="where-i-am-page">
						<p>альбомы</p>
					</div>

					<div id="log-reg-button" class="log-reg-button">
						<input type="button" value="login" class="logreg_btn" onmousedown="logreg_open()">
					</div>

					<div id="open-account-button">
						<div class="open-form-account">
							<input type="button" value="account" id="button-open-account" 
							onmousedown="form_account()">
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>




	<!-- форма аккаунта -->
	<div id="form-account-panel-main" onmouseleave="close_account_form()">
		<div id="form-account-panel">
			<div class="form-account-panel-class-name">
				<p id="name-account-name" class="line-line">name </p>
				<input id="name-name-input" type="text" class="line-line" value="" placeholder="Ваше имя">
			</div>
			<div class="form-account-panel-class-email">
				<p id="email-account-email" class="line-line">email</p>
				<input type="text" class="" id="email-account-text-email" value="Sasha@mail.ru">
			</div>
			<div class="form-account-panel-class-pass">
				<p id="pass-account-pass" class="line-line">password</p>
				<input type="text" id="pass-account-text-pass" value="4022000Sasha">
			</div>
		</div>
		<div class="buttons">
			<div class="save-button">
				<input id="save-name-in-account" type="button" value="сохранить">
			</div>
			<div class="leave-button" onmousedown="close_account_form()">
				<input id="leave-account" type="button" value="выйти" onmousedown="leave_account();">
			</div>
		</div>
		
	</div>



	<div id="logreg-main-form-id" class="logreg-main-form">
		<div class="logreg-fon-fon">
			
		</div>
		<div class="logreg-fon">

			<!-- login -->

			<div id="logreg-form-box" class="logreg-form-box">
				<div class="form-exit-button">
					<div class="form-exit-button-logreg">
						<!-- exit button -->
					<button class="exit-button-form-logreg" onmousedown="close_form_logreg()">x</button>
					</div>
				</div>




				<?php 
					if(isset($_COOKIE['user']) == 0):
				 ?>
				<h4 class="t-top">Войдите или зарегистрируйтесь</h4>

				<!-- тестовая форма входа в аккаунт -->
				
					<div>
						<form action="php/in.php" class="formaa" method="post">
							<input id="f-login-l" class="input-mg-bottom-5" type="text" name="login" placeholder="login"> <br>
							<input id="f-email-l" class="input-mg-bottom-5" type="email" name="email" placeholder="email"> <br>
							<input id="f-password-l" class="input-mg-bottom-5" type="password" name="password" placeholder="password"> <br>
							<input type="submit" value="Войти">
						</form>	
					</div>

				<div class="register-button">
					<input id="button_register_account" type="button" value="Зарегистрироваться" onmousedown="register_form()">
				</div>

				<?php else: ?>
					<h4>Привет, <?= $_COOKIE['user'] ?> !</h4>
					<a href="php/exit.php">Выйти из аккаунта</a>

				<?php endif; ?>

				



			</div>

			<!-- register -->

			<div id="register-form-box" class="register-form-box">
				<div class="form-exit-button">
					<div class="form-exit-button-logreg">
						<!-- exit button -->
					<button class="exit-button-form-logreg" onmousedown="close_form_logreg()">x</button>
					</div>
				</div>




				
				<h4 class="t-top">Зарегистрируйте <br> аккаунт</h4>

				<!-- тестовая форма отправки данных в базу данных -->
				<div class="text-center">
					<form action="php/db.php" class="formaa" method="post">
						<input id="f-login-r" class="input-mg-bottom-5" type="text" name="login" placeholder="login"> <br>
						<input id="f-email-r" class="input-mg-bottom-5" type="email" name="email" placeholder="email"> <br>
						<input id="f-password-r" class="input-mg-bottom-5" type="password" name="password" placeholder="password"> <br>
						<input type="submit" value="Зарегистрироваться">
					</form>
				</div>

				<div class="login-button">
					<input id="button_login_account" type="button" value="Войти" onmousedown="login_form()">
				</div>
				




			</div>
		</div>
	</div>



	





	<!-- блок с полем после "header" -->
	<div class="block-bottom-header">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<div class="block-with-links">

						<ul class="links">
							<li class="main">
								<a class="alboms-a" href="index.php"><p class="ul-li-a-p">главная</p></a>
							</li>
							<li class="price">
								<a class="price-a" href="price.php"><p class="ul-li-a-p">стоимость</p></a>
							</li>
							<li class="reviews">
								<a class="reviews-a" href=""><p class="ul-li-a-p">отзывы</p></a>
							</li>
							<li class="border-li"></li>
							<li class="vk">
								<a class="vk-a" href="https://vk.com/snphoto" target="_blank"><img class="vk-link" src="img/vk_logo.svg" alt="vk"></a>
							</li>
						</ul>

					</div>
				</div>

				<div class="col-9 height-100">
					<div class="row">
						<!-- конструктор блоков -->
						<div class="block-with-alboms col-12 pole-img text-center">
							<!-- альбомы -->
							<div class="alboms">
								<a href="wedding.php">
									<div class="albom wedding">
										<img class="albom-img" src="img/wedding-2.jpg" alt="">
										<p>wedding</p>
									</div>
								</a>
								
								<div class="albom nature">
									<img class="albom-img" src="img/nature-1.jpg" alt="">
									<p>nature</p>
								</div>
								<div class="albom family">
									<img class="albom-img" src="img/family-1.jpg" alt="">
									<p>family</p>
								</div>
								<div class="albom lovestory">
									<img class="albom-img" src="img/lovestory-1.PNG" alt="">
									<p>lovestory</p>
								</div>
								<div class="albom other">
									<img class="albom-img" src="img/other-1.JPG" alt="">
									<p>other</p>
								</div>

							</div>

							<!-- блок с пустым телом для отступа -->
							<div class="block-100">
								
							</div>

						</div>
					</div>
				
				</div>

			</div>	
		</div>
	</div>



	





	<!-- конец страницы -->
	<div class="end-site  container-fluid text-center">
		<div class="line">
			<p>snapphoto</p>
		</div>
		<div class="line">
			<p>copyrate</p>
		</div>
		<div class="line">
			<a class="back" href="index.php">назад</a>
		</div>
	</div>

</body>
</html>