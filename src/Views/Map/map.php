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
	</script>