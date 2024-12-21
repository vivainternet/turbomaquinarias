<?php session_start();
if (!empty($_GET['lang'])) {
	$_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'];
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<?php include('head.php') ?>

<body style="padding-bottom: 0;"> <!-- Para que el footer quede pegado abajo. -->

	<?php include('header.php') ?>

	<main>
		<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="mx-auto">
						<div class="container">
							<div class="carousel-caption">
								<h1 class="fw-bold">TURBOMAQUINARIAS S.A.</h1>
								<p class="fs-5 mb-4"><?= ($lang == 'EN' ? 'Leading company in industrial equipment.' : 'Empresa l&iacute;der en equipamiento para la industria.') ?></p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Marketing messaging and featurettes ================================================== -->
		<!-- Wrap the rest of the page in another container to center all the content. -->

		<div class="container marketing">
			<!-- Three columns of text below the carousel -->
			<div class="row">
				<div class="col-lg-3">
					<img class="img-fluid" src="./assets/img/marca_elliott.jpg">
					<button type="button" class="w-100 btn btn-secondary btn-sm"><a class="text-decoration-none text-white"
							href="https://www.elliott-turbo.com" target="_blank">EBARA ELLIOTT ENERGY</a></button>
					<br><br>
					<p class="fs-6 fw-bold"><?= ($lang == 'EN' ? 'CENTRIFUGAL COMPRESSORS STEAM TURBINES' : 'COMPRESORES CENTRIFUGOS<br>TURBINAS A VAPOR') ?></p>
				</div><!-- /.col-lg-3 -->

				<div class="col-lg-3">
					<img class="img-fluid" src="./assets/img/marca_ebara.jpg">
					<button type="button" class="w-100 btn btn-secondary btn-sm"><a class="text-decoration-none text-white"
							href="https://www.ebara.com/en/" target="_blank">EBARA CORPORATION</a></button>
					<br><br>
					<p class="fs-6 fw-bold"><?= ($lang == 'EN' ? 'API CENTRIFUGAL PUMPS' : 'BOMBAS CENTRIFUGAS API') ?></p>
				</div><!-- /.col-lg-3 -->

				<div class="col-lg-3">
					<img class="img-fluid" src="./assets/img/marca_howden.jpg">
					<button type="button" class="w-100 btn btn-secondary btn-sm"><a class="text-decoration-none text-white"
							href="https://www.chartindustries.com/Businesses-Brands/Howden" target="_blank">HOWDEN</a></button>
					<br><br>
					<p class="fs-6 fw-bold"><?= ($lang == 'EN' ? 'RECIPROCATING COMPRESSORS' : 'COMPRESORES ALTERNATIVOS') ?></p>
				</div><!-- /.col-lg-3 -->

				<div class="col-lg-3">
					<img class="img-fluid" src="./assets/img/marca_graham.jpg">
					<button type="button" class="w-100 btn btn-secondary btn-sm"><a class="text-decoration-none text-white"
							href="https://graham-mfg.com/" target="_blank">GRAHAM</a></button>
					<br><br>
					<p class="fs-6 fw-bold"><?= ($lang == 'EN' ? 'VACUUM EQUIPMENT PUMPS AND EJECTORS' : 'EQUIPOS DE VACIO<br>BOMBAS Y EYECTORES') ?></p>
				</div><!-- /.col-lg-3 -->
			</div><!-- /.row -->

		</div>
		<section class="page-section" style="background-color: #0d2a59;">
			<div class="container">
				<div class="row align-items-center py-5 px-2">
					<div class="col-md-6 order-md-2">
						<?= ($lang == 'EN'
							? '<p class="text-white">We are a company dedicated to <i>industrial equipment for large rotating equipment</i>, mainly turbines and compressors to supply oil refineries, petrochemical, steel, chemical, and continuous process plants.</p>
								<p class="text-white">The company currently has a team of engineers and technicians trained in the factories of origin to provide technical advice, as well as service engineers for installation, start-up, and equipment maintenance.</p>'

							: '<p class="text-white">Somos una empresa dedicada al <i>equipamiento industrial dirigido a grandes equipos rotativos</i>, principalmente turbinas y compresores para abastecer refiner&iacute;as de petr&oacute;leo, plantas petroqu&iacute;micas, sider&uacute;rgicas, qu&iacute;micas, y de proceso continuo.</p><p class="text-white">La empresa cuenta hoy con un plantel de ingenieros y t&eacute;cnicos entrenados en las f&aacute;bricas de origen para brindar asesoramiento t&eacute;cnico, como asimismo ingenieros de servicio para instalaci&oacute;n, puesta en marcha y atenci&oacute;n de equipos.</p>'
						) ?>
						<p class="text-white"><?= ($lang == 'EN' ? '311 Chacabuco Street, 1st Floor, Off. 2 <br>San Isidro, Buenos Aires<br>Argentina' : 'Chacabuco 311, 1er Piso, Oficina 2<br>San Isidro, Prov. Buenos Aires<br>Argentina') ?></p>
					</div>
					<div class="col-md-6 order-md-1" style="height: 280px;">
						<iframe jsname="L5Fo6c" width="100%" height="100%"
							sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox allow-downloads allow-modals allow-storage-access-by-user-activation"
							frameborder="0" aria-label="Map, Chacabuco 311"
							src="https://maps-api-ssl.google.com/maps?hl=es&amp;ll=-34.469161,-58.509865&amp;output=embed&amp;q=Chacabuco+311,+B1642CHC+San+Isidro,+Provincia+de+Buenos+Aires,+Argentina+(Chacabuco+311)&amp;z=17"
							allowfullscreen="">
						</iframe>
					</div>
				</div>
			</div>
		</section>

		<section class="page-section" style="background-color: #e9e9e9;">
			<div class="container">
				<div class="row align-items-center py-4">
					<div class="col-md-12 text-center">
						<p class="fw-bold"><?= ($lang == 'EN' ? 'SOME OF OUR FREQUENT CUSTOMERS' : 'ALGUNOS DE NUESTROS CLIENTES FRECUENTES') ?>:</p>
						<br>
						<img class="p-2" src="assets/img/clientes_ypf.jpg">
						<img class="p-2" src="assets/img/clientes_shell.jpg">
						<img class="p-2" src="assets/img/clientes_ancap.jpg">
						<img class="p-2" src="assets/img/clientes_panamerican_energy.jpg">
						<img class="p-2" src="assets/img/clientes_dow.jpg">
						<img class="p-2" src="assets/img/clientes_tgs.jpg">
						<br><br>
						<p class="fw-bold">PBB POLISUR - ATANOR - PASA - PETROQUIMICA RIO lll - BASF - SCANSCA - SIDERAR -
							SIDERCA - REFFISAN - TECHINT - VOLKSWAGEN - PROFERTIL - REFINOR - PRAXAIR - LEDESMA - AIR LIQUIDE -
							CELULOSA ARGENTINA - AIR ZINC (SULFACID) - SOCOTHERM - FIRESTONE - CABOT - DUPERIAL - DUPONT -
							ACEITERA GRAL. DEHEZA - ARCOR - MALEIC - MERANOL - SANTA BARBARA - ING. AGUILARES - ING. CRUZ ALTA
							- ING. LA TRINIDAD - ING. LEALES - ING. MARAPA - ING. NUNORCO - ING. PROVIDENCIA - ING. SAN JUAN
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- START THE FEATURETTES -->
		<p>&nbsp;</p>

		<?php include('contacto_inc.php') ?>

	</main>

	<?php include('footer.php') ?>
</body>

</html>