	<!-- FOOTER -->
	<footer class="footer py-3" style="background-color: #0d2a59; height: 120px;">
		<p class="text-center text-white" style="font-size: small;"><b><?= ($lang == 'EN' ? 'Head Office' : 'Oficina Central') ?></b>
			<br>
			<?= ($lang == 'EN' ? '311 Chacabuco Street, 1st Floor, Off. 2, San Isidro<br>Buenos Aires. Argentina' : 'Chacabuco 311, 1er Piso, Oficina 2, San Isidro<br>Prov. Buenos Aires. Argentina') ?>
			<br>Tel. (54-11) 4742-9991
			<br>
		</p>
	</footer>

	<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		const navEl = document.querySelector('.navbar');
		window.addEventListener('scroll', () => {
			if (window.scrollY >= 56) {
				navEl.classList.add('navbar-scrolled');
			} else if (window.scrollY < 56) {
				navEl.classList.remove('navbar-scrolled');
			}
		})
	</script>