<base href="/">
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../web/css/normalize.css" >
	<link rel="stylesheet" type="text/css" href="../web/css/stylehtmlacademy.css">
	<title>BORODINSKI</title>
</head>
<body>
	<header class="main-header">
		<div class="main-header-layout container">
			<nav class="main-navigation">
				<ul class="main">
					<li>
						<a href="#">Информация</a>
					</li>
					<li>
						<a href="#">Новости</a>
					</li>
					<li>
						<a href="../price">Прайс-лист</a>
					</li>
					<li>
						<a href="../map">Карта</a>
					</li>
					<li>
						<a href="#">Контакты</a>
					</li>
				</ul>
			</nav>
			<div class="user-block">
				<a class="login">Вход</a>
			</div>
		</div>
	</header>
	<!-- PLACE YOUR CONTENT HERE -->
	<?php  echo $content; ?>

	<footer class="main-footer">
		<div class="main-footer-layout container">
			<section class="footer-contacts">
				<p>БАРБЕРШОП «БОРОДИНСКИЙ»<br>
				АДРЕС: Г. САНКТ-ПЕТЕРБУРГ, УЛ. Б. КОНЮШЕННАЯ, Д. 19/8<br>
				<a class="modal-map-ref">КАК НАС НАЙТИ?</a><br>
				ТЕЛЕФОН: +7 (495) 666-02-66</p>
			</section>
			<section class="footer-social">
				<p>Давайте дружить!</p>
				<div class="social-container">
					<a class="social-btn social-btn-vk" href="vk.com">Вконтакте</a>
					<a class="social-btn social-btn-fb" href="facebook.com">Фейсбук</a>
					<a class="social-btn social-btn-insta" href="instagram.com">Инстаграм</a>
				</div>
			</section>
			<section class="footer-copyright">
				<p>Разработано</p>
				<a class="btn" href="htmlacademy.ru">htmlacademy.ru</a>
			</section>
		</div>
	</footer>
	<!-- MODAL POP-UP login forn -->
	<div id="modal-login" class="modal-login-form">
		<button class="modal-content-close" title="Закрыть окно">Закрыть окно</button>

		<!-- MODAL CONTENT -->
		<h2>Личный кабинет</h2>
		<p>введите пожалуйста свой логин и пароль</p>
		<form action="/action-page.php" class="modal-content" method="post">
			<div class="modal-container">
					<label for="user-name">Логин</label>
		        	<input type="text" name="user-name" id="user-name" placeholder="логин">
		        	<label for="user-password">Пароль</label>
		        	<input type="password" name="user-password" id="user-password" placeholder="пароль">
	        	<div>
	        		<label class="checkbox-container"> 
	        			<input type="checkbox" name="remember-me" checked="checked"><span class="checkmark"></span>запомните меня
	        		</label>
        		<span class="restore"><a href="#">Я забыл пароль!</a></span>
				</div>
        		<button type="submit" class="btn">Войти</button>
			</div>
		</form>
	</div>
	
	<script type="text/javascript">
		var link = document.querySelector(".login");
		var popup = document.querySelector(".modal-login-form");
		var close = document.querySelector(".modal-content-close");
		var login = popup.querySelector("[name=user-name]");
		var password = popup.querySelector("[name=user-password]")
		var overlay = document.querySelector(".overlay");
		var mapLink = document.querySelector(".modal-map-ref");
		var mapClose = document.querySelector(".modal-map .modal-content-close")
		var map = document.querySelector(".modal-map");
		var form = popup.querySelector("form");
		var storage = localStorage.getItem("login");

		link.addEventListener("click", function(event){
			event.preventDefault();
			popup.classList.add("modal-login-show");
			overlay.classList.add("overlay-show");

			if (storage) {
				login.value = storage;
				password.focus();
			}
			else{
				login.focus();
			}
		});

		close.addEventListener("click", function(event){
			event.preventDefault();
			popup.classList.remove("modal-login-show");
			overlay.classList.remove("overlay-show");
			popup.classList.remove("modal-error");
		});
		mapClose.addEventListener("click", function(event){
			event.preventDefault();
			overlay.classList.remove("overlay-show");
			map.classList.remove("modal-map-show");
		});

		overlay.addEventListener("click", function(event){
			event.preventDefault();
			popup.classList.remove("modal-login-show");
			overlay.classList.remove("overlay-show");
			map.classList.remove("modal-map-show");
			popup.classList.remove("modal-error");
		});
		mapLink.addEventListener("click", function(event){
			event.preventDefault();
			map.classList.add("modal-map-show");
			overlay.classList.add("overlay-show");
		});

		form.addEventListener("submit", function(event){
			if (!login.value || !password.value) {
				event.preventDefault();
				popup.classList.add("modal-error");
			}
			else{
				event.preventDefault();
				localStorage.setItem("login", login.value);
			}
		});

		window.addEventListener("keydown", function(event){
			if (event.keyCode === 27) {
				if (popup.classList.contains("modal-login-show") || map.classList.contains("modal-map-show")) {}
				popup.classList.remove("modal-login-show");
				overlay.classList.remove("overlay-show");
				map.classList.remove("modal-map-show");
				popup.classList.remove("modal-error");
			}
		})
		
	</script>
</body>
</html>
