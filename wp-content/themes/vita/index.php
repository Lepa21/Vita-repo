<!DOCTYPE html>
<html>
	<head>
		<!-- Title -->
		<title>Vita Testailua</title>

		<!-- Responsiivisuus -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Tyylit -->
		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	</head>



	<body>
		<!-- HEADERI -->
		<?php get_header(); ?>

		<!-- KAPPALEJAKO -->

			<!-- Vasen navbar -->
			<div class ="col-md-3">
				<ul style="list-style: none;">
					<li><button type="button" class="btn btn-block">Työterveyshuolto</button></li>
					<li><button type="button" class="btn btn-block">Laboratorion näytteenotto</button></li>
					<li><button type="button" class="btn btn-block">Hammaslääkärit</button></li>
					<li><button type="button" class="btn btn-block">Fysioterapia</button></li>
					<li><button type="button" class="btn btn-block">Röntgen- ja ultraäänitutkinnat</button></li>
					<li><button type="button" class="btn btn-block">Papa-seulonnat</button></li>
					<li><button type="button" class="btn btn-block">Gynekologipalvelut</button></li>
					<li><button type="button" class="btn btn-block">Mammografiaseulonnat</button></li>
					<a href="#" 
				</ul>
			</div>

			<!-- Mainpalsta -->
			<div class ="col-md-6">
				<h1>
					Lorem ipsum dolor sit amet.
				</h1>

				<p>
					Consectetuer adipiscing elit, sed diam nonummy nibhh euismod tincidunt 
					ut laoreet. Sed diam nonummy nibh euismod tincidunt ut
					lareet dolore magna aliquam erat volupat. Ut wisi enim ad minim
					veniam.
				</p>

				<h2>
					Sed diam nonummy nibh
				</h2>

				<p>
					Vel illum dolore eu fugiat nulla facilis at vero eros.
				</p>

				<h2>
					Euismod tincidunt ut lareet
				</h2>

				<p>
					Accumusan et iusto odio dignissim qui blandit praesent luptatum zzril
					delenit augue duis dolore te feugait nulla
				</p>

				<p>
					<b>
						Duis autem vel eum iriure dolor in hendrerit in vulpulate velit
						esse molestien consequat
					</b>
				</p>

			</div>

			<!-- Oikea navbar -->
			<div class ="col-md-3">

			</div>

		<!-- JQuery ja Bootstrap-->
		<script src = "http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src = "bootstrap/js/bootstrap.js"></script>

		<!-- Footeri -->
		<?php get_footer(); ?>

	</body>
</html>