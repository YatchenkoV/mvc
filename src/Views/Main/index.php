	<main class="container">
		<div class="index-logo">
			<img src="../img/logo.png" width="368px" height="204px" alt="Borodinski Barbershop">
		</div>
		<section class="features">
			<div class="features-items">
				<b class="features-name">Быстро</b>
				<p>МЫ ДЕЛАЕМ СВОЮ РАБОТУ БЫСТРО! ДВА ЧАСА ПРОЛЕТЯТ НЕЗАМЕТНО И ВЫ — СЧАСТЛИВЫЙ ОБЛАДЕТЕЛЬ СТИЛЬНОЙ СТРИЖКИ-МИНУТКИ!</p>
			</div>
			<div class="features-items">
				<b class="features-name">Круто</b>
				<p>ЗАБУДЬТЕ, КАК ВЫ СТРИГЛИСЬ РАНЬШЕ.
МЫ СДЕЛАЕМ ИЗ ВАС ЗВЕЗДУ ФУТБОЛА ИЛИ КИНО!
ВО ВСЯКОМ СЛУЧАЕ ВНЕШНЕ.</p>
			</div>
			<div class="features-items">
				<b class="features-name">Дорого</b>
				<p>НАШИ МАСТЕРА — ПРОФЕССИОНАЛЫ СВОЕГО ДЕЛА И НЕ МОГУТ СТОИТЬ ДЕШЕВО. К ТОМУ ЖЕ, РАЗВЕ ЦЕНА НЕ ДАЕТ ОПРЕДЕЛЕНЫЙ СТАТУС?</p>
			</div>
		</section>
		<section class="index-content">
			<div class="index-content-left">
				<h2 class="index-content-title">Новости</h2>
				<ul class="news-preview">
					<li>
						<p>НАМ НАКОНЕЦ ЗАВЕЗЛИ ЯГЕРМАЙСТЕР! ТЕПЕРЬ ВЫ МОЖЕТЕ ПРОПУСТИТЬ СТАКАНЧИК ВО ВРЕМЯ СТРИЖКИ</p>
						<time datetime="2018-01-11">18 января</time>
					</li>
					<li>
						<p>В НАШЕЙ КОМАНДЕ ПОПОЛНЕНИЕ, БОРИС «БРИТВА» СТРИГУНЕЦ, ОБЛАДЕТЕЛЬ МНОЖЕСТВА ТИТУЛОВ И НАГРАД ПОПОЛНИЛ НАШИ СТРОЙНЫЕ РЯДЫ</p>
						<time datetime="2018-01-18">18 января</time>
					</li>
				</ul>
				<a href="" class="btn">Все новости</a>
			</div>
			<div class="index-content-right">
				<h2 class="index-content-title">фотогалерея</h2>
				<div class="gallery">
					<div class="gallery-content">
						<img src="../img/gallery.jpg" alt="gallery">
					</div>
					<button class="btn gallery-prev" disabled="disabled">назад</button>
					<button class="btn gallery-next">вперед</button>
				</div>
			</div>
		</section>
		<section class="index-content">
			<div class="index-content-left">
				<h2 class="index-content-title">контактная информация</h2>
				<p class="contacts__info_address">
					БАРБЕРШОП «БОРОДИНСКИЙ»<br>
					АДРЕС: Г. САНКТ-ПЕТЕРБУРГ, Б. КОНЮШЕННАЯ, Д. 19/8<br>
					ТЕЛЕФОН: +7 (495) 666-02-66
				</p>
				<p class="contacts__info_shifts">
					ВРЕМЯ РАБОТЫ:<br>
					ПН — ПТ: С 10:00 ДО 22:00<br>
					СБ — ВС: С 10:00 ДО 19:00
				</p>
				<a href="" class="btn">Как проехать</a>
				<a href="" class="btn">Обратная связь</a>
			</div>
			<div class="index-content-right">
				<h2 class="index-content-title">Записаться</h2>
				<p>УКАЖИТЕ ЖЕЛАЕМУЮ ДАТУ И ВРЕМЯ И МЫ СВЯЖЕМСЯ С ВАМИ ДЛЯ ПОДТВЕРЖДЕНИЯ БРОНИ</p>
				<form action="" class="appointment-form">
					<div class="group">
						<input type="text" name="date" placeholder="ДАТА">
						<input type="text" name="time" placeholder="ВРЕМЯ">
					</div>
					<div class="group">
						<input type="text" name="name" placeholder="ВАШЕ ИМЯ">
						<input type="tel" name="tel" placeholder="ТЕЛЕФОН">
					</div>
					<input class="btn" type="submit" name="submit" value="ОТПРАВИТЬ">
				</form>
			</div>
		</section>
	</main>
	
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
