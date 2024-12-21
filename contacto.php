<?php session_start();

if (!empty($_GET['lang'])) {
	//
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
								<h1 class="fw-bold"><?= ($lang == 'EN' ? 'Contact' : 'Contacto') ?></h1>
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

		<?php include('contacto_inc.php') ?>

		<section class="page-section">
			<div class="container">
				<div class="row align-items-center py-4 px-2">
					<div class="col-md-12 order-md-1" style="height: 360px;">
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

		<!-- START THE FEATURETTES -->
		<p>&nbsp;</p>

	</main>

	<?php include('footer.php') ?>
</body>

</html>