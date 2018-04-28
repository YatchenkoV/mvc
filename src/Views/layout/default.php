<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../web/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../web/css/stylehtmlacademy.css">
	<title>BORODINSKI</title>
</head>
<body>
	<header class="main-header">
		<div class="main-header-layout container">
			<nav class="main-navigation">
				<a class="logo-menu" href="<? $this->path('homepage'); ?>">
					<img src="../img/logo_menu.png" width="111px" height="24px" alt="Barbershop BORODINSKI">
				</a>
				<ul class="main">
					<li>
						<a href="#">Информация</a>
					</li>
					<li>
						<a href="#">Новости</a>
					</li>
					<li>
						<a href="<? $this->path('price')?>">Прайс-лист</a>
					</li>
					<li>
						<a href="#">Магазин</a>
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
		
	<!-- INCLUDE HERE -->
	<?php  include $content; ?>
		
	

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
	<!-- MODAL MAP -->
	<div class="modal-map animate">
		<button class="modal-content-close" type="button" title="Закрыть">Закрыть</button>
		<div id="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.5989424123861!2d30.320894615921482!3d59.93879686904811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696310fca5ba729%3A0xea9c53d4493c879f!2z0JHQvtC70YzRiNCw0Y8g0JrQvtC90Y7RiNC10L3QvdCw0Y8g0YPQuy4sIDE5LCDQodCw0L3QutGCLdCf0LXRgtC10YDQsdGD0YDQsywg0KDQvtGB0YHQuNGPLCAxOTExODY!5e0!3m2!1sru!2sua!4v1518046141928" width="766" height="561"></iframe>
		</div>
	</div>
	<div class="overlay">
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
		//get the modal
		// var modal = document.getElementById('modal-login');
		// var map = document.getElementById('modal-map');
		// var overlay = document.getElementsByClassName('modal-overlay');
		// //when the user clicks anywhere outside of the modal, close it

		// window.onclick=function(event){
		// 	if (event.target==modal) {
		// 		modal.style.display="none";
		// 	}
		// }
		// window.onclick=function(event){
		// 	if (event.target==map){
		// 		map.style.display="none";
		// 	}
		// }

		// function modalLogin(){
		// 	document.getElementById('modal-overlay').style.display='block';
		// 	document.getElementById('modal-login').style.display='block';
		// }
		// function closeModal(){
		// 	document.getElementById('modal-overlay').style.display='none';
		// 	document.getElementById('modal-login').style.display='none';
		// 	document.getElementById('modal-map').style.display='none';
		// }
		// function modalMap(){
		// 	document.getElementById('modal-overlay').style.display='block';
		// 	document.getElementById('modal-map').style.display='block';
		// }
	</script>
</body>
</html>
