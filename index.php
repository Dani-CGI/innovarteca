<!doctype html>
<html>

<head lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>InnovARTECA</title>
    <meta property="og:image" content="https://daniponce.com.ar/innovarteca/images/favicon-256x256.png" />
	<meta name="description" content="InnovARTEca es una galería revolucionaria creada en el mundo de la realidad virtual, una iniciativa que combina tecnología e innovación con el arte contemporáneo. Esta plataforma ha sido diseñada con el objetivo de brindar a los artistas emergentes y establecidos una oportunidad única para exhibir sus obras de manera gratuita y accesible para un público global." />
	<meta name="keywords" content="Arte, realidad virtual, realidad, virtual, galeria, exposicion, museo, gratis">
	<meta property="og:title" content="InnovARTECA">
    <link rel="shortcut icon" href="images/favicon.ico" />


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="css/style.css?<?= uniqid(); ?>">
	<link rel="stylesheet" type="text/css" href="css/estilo.css?<?= uniqid(); ?>">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


	<link rel="prefetch" href="images/zoom.png">

</head>

<body>



<header>

<div class="navbar fixed-top" data-activeslide="1">
	<div class="container">


		<button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<i class="fas fa-navicon" style=" font-size:20px;"></i>
			</span>
		</button>


		<div class="nav-collapse collapse navbar-responsive-collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="nav row">
				<span class="col-12 col-md-1"></span>
				<li data-slide="1" class="col-12 col-md-2">
					<a id="menu-link-1" href="#slide-1" title="Next Section">
						<span class="icon icon-home"></span>
						<span class="text">Inicio</span>
					</a>
				</li>
				<li data-slide="2" class="col-12 col-md-2">
					<a id="menu-link-2" href="#slide-2" title="Next Section">
						<span class="icon icon-user"></span>
						<span class="text">Nosotros</span>
					</a>
				</li>
				<li data-slide="3" class="col-12 col-md-2">
					<a id="menu-link-3" href="#slide-3" title="Next Section">
						<span class="icon icon-briefcase"></span>
						<span class="text">Algunas Obras</span>
					</a>
				</li>
				<li data-slide="4" class="col-12 col-md-2">
					<a Scriptid="menu-link-4" href="#slide-4" title="Next Section">
						<span class="icon icon-heart"></span>
						<span class="text"> Participar</span>
					</a>
				</li>
				<li data-slide="5" class="col-12 col-md-2">
					<a id="menu-link-6" href="#slide-6" title="Next Section">
						<span class="icon icon-envelope"></span>
						<span class="text">Contacto</span>
					</a>
				</li>
				<span class="col-12 col-md-1"></span>
			</ul>
			<div class="row">
				<div class="col-md-2 active-menu"></div>
			</div>
		</div>



	</div>
</div>


</header>

	<div id="arrows">
		<div id="arrow-up" class="disabled"></div>
		<div id="arrow-down"></div>
		<div id="arrow-left" class="disabled visible-lg"></div>
		<div id="arrow-right" class="disabled visible-lg"></div>
	</div>

	<div class="slide1 story" id="slide-1" data-slide="1">
		<video autoplay loop muted plays-inline class="videohead">
			<source src="video/renderV3.mp4" type="video/mp4">
		</video>
		<div class="container">
			<div id="home-row-1" class="row">
				<div class="col-md-12">
					<div class="cajon">
						<h1 class="font-semibold">
							<img src="images/logo-blanco.svg" alt="" srcset="" width="40%"><br>
							<span style="display:none">INNOVARTECA</span>
						</h1>
						<br>
						<h4 class="font-thin">Sumérgete en una <span class="font-semibold">experiencia única que fusiona la riqueza cultural de América Latina con la innovación tecnológica.</span> Explora nuestra galería de arte digital y descubre obras que trascienden fronteras y épocas.</h4>
						<br>
						<button class="btn btn-descarga">DESCARGAR</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">Sobre Nosotros</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr1">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-md-12 col-12 font-thin">
					En <span class="font-semibold">Innovarteca</span>, estamos dedicados a <span class="font-semibold">celebrar y preservar la cultura latinoamericana a través del arte y la
						innovación tecnológica</span>. Somos un equipo apasionado de artistas y expertos en realidad
					virtual que creen en el poder de la <span class="font-semibold">creatividad y el diálogo cultural
						para unir al mundo</span> a través del arte.
				</div>
				<div class="col-md-12 col-12 font-thin">
					En Innovarteca, <span class="font-semibold">valoramos la diversidad, la creatividad y el diálogo
						cultural.</span> Creemos que la colaboración entre artistas y la comunidad virtual es clave para
					impulsar el arte latinoamericano hacia nuevos horizontes.
				</div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-6 col-lg-3 col-md-6">
					<p><i class="fa-solid fa-arrow-up-right-dots"></i></p>
					<h2 class="font-thin">Ampliar los <span class="font-semibold">límites del arte</span> tradicional
					</h2>
				</div><!-- /col12 -->
				<div class="col-6 col-lg-3 col-md-6">
					<p><i class="fa-solid fa-earth-americas"></i></p>
					<h2 class="font-thin">Romper barreras <span class="font-semibold">geográficas</span></h2>
				</div><!-- /col12 -->
				<div class="col-6 col-lg-3 col-md-6">
					<p><i class="fa-solid fa-vr-cardboard"></i></p>
					<h2 class="font-thin">Ofrecer experiencia <span class="font-semibold">inmersiva</span></h2>
				</div><!-- /col12 -->
				<div class="col-6 col-lg-3 col-md-6">
					<p><i class="fa-solid fa-palette"></i></p>
					<h2 class="font-thin">Aprecio por nuestra<span class="font-semibold"> cultura</span></h2>
				</div><!-- /col12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide2 -->

	<!-- === SLide 3 - Portfolio -->
	<div class="slide story" id="slide-3" data-slide="3">
		<div class="row">
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/001.jpg"><img class="thumb" src="images/portfolio/tumb_01.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/002.jpg"><img class="thumb" src="images/portfolio/tumb_02.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/003.jpg"><img class="thumb" src="images/portfolio/tumb_03.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/004.jpg"><img class="thumb" src="images/portfolio/tumb_04.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/005.jpg"><img class="thumb" src="images/portfolio/tumb_05.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/006.jpg"><img class="thumb" src="images/portfolio/tumb_06.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/007.jpg"><img class="thumb" src="images/portfolio/tumb_07.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/008.jpg"><img class="thumb" src="images/portfolio/tumb_08.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/009.jpg"><img class="thumb" src="images/portfolio/tumb_09.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/010.jpg"><img class="thumb" src="images/portfolio/tumb_10.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/011.jpg"><img class="thumb" src="images/portfolio/tumb_11.jpg" alt=""></a></div>
			<div class="col-3 col-md-3 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/012.jpg"><img class="thumb" src="images/portfolio/tumb_12.jpg" alt=""></a></div>
		</div><!-- /row -->
	</div><!-- /slide3 -->

	<!-- === Slide 4 - Process === -->
	<div class="slide story" id="slide-4" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Envia tu <span class="font-semibold">Propuesta</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-md-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-md-10 font-light">Si sos artista y queres presentar tus obras en nuestra galeria, podés enviarnos tu propuesta. ¡Es una oportunidad única para dar vida a tu creatividad en nuestro espacio virtual interactivo! Aceptamos diferentes formatos y los adaptamos a la realidad virtual.
				</div>
				<div class="col-md-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-md-1 hidden-sm">&nbsp;</div>
				<div class="col-4 col-md-2">
					<p><i class="fa-solid fa-paintbrush"></i></p>
					<h2 class="font-thin"><span class="font-semibold">Visual</span></h2>
				</div><!-- /col12 -->
				<div class="col-4 col-md-2">
					<p><i class="fa-solid fa-camera-retro"></i></p>
					<h2 class="font-thin"><span class="font-semibold">Fotografía</span></h2>
				</div><!-- /col12 -->
				<div class="col-4 col-md-2">
					<p><i class="fa-solid fa-clapperboard"></i></p>
					<h2 class="font-thin"><span class="font-semibold">Video</span></h2>
				</div><!-- /col12 -->
				<div class="col-4 col-md-2">
					<p><i class="fa-solid fa-music"></i></p>
					<h2 class="font-thin"><span class="font-semibold">Musica</span></h2>
				</div><!-- /col12 -->
				<div class="col-4 col-md-2">
					<p><i class="fa-solid fa-masks-theater"></i></p>
					<h2 class="font-thin"><span class="font-semibold">En vivo</span></h2>
				</div>
				<div class="col-md-1 hidden-sm">&nbsp;</div>
			</div>



		</div>

	</div>


	</div>
	</div>

	<div class="slide story" id="slide-6" data-slide="5">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-light"><span class="font-semibold">Contacto</span></div>
			</div>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>
			<div class="row subtitle-row">
				<div class="col-md-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-md-10 font-light">Si querés enviarnos tu propuesta, o tenés alguna consulta o comentario relacionado con el programa te invitamos a que completes el formulario.</div>
				<div class="col-md-1 hidden-sm">&nbsp;</div>
			</div>

			<div class="row line-row">
				<div class="col-md-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-md-10">
					<form id="form1" action="php/procesar.php" method="POST" class="needs-validation formulario-contacto" novalidate>
						<div class="form-row">
							<div class="col-12 col-md-6 mb-3">
								<label for="nombre">Nombre</label>
								<input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
								<div class="valid-feedback"></div>
								<div class="invalid-feedback">Complete el campo.</div>
							</div>
							<div class="col-12 col-md-6 mb-3">
								<label for="email">Correo Electrónico</label>
								<input name="email" type="text" class="form-control" id="email" placeholder="" value="" required>
								<div class="valid-feedback"></div>
								<div class="invalid-feedback">Complete el campo.</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-12 col-md-12 mb-3">
								<label for="mensaje">Mensaje</label>
								<textarea rows="5" name="mensaje" type="tel" class="form-control" id="mensaje" placeholder="" value="" required></textarea>
								<div class="valid-feedback"></div>
								<div class="invalid-feedback">Complete el campo.</div>
							</div>
						</div>


						<div class="col-12 col-md-12 mb-3">
							<div id="botonloco" class="form-group">
								<button class="btn btn-contacto" type="submit">Enviar</button>
							</div>
						</div>

						<div class="col-12 col-md-12 mb-3">
							<div id="alerta" class="alert collapse">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong class="respuesta"></strong><span class="mensaje-alerta"></span>
							</div>
						</div>

					</form>
				</div>
				<div class="col-md-1 hidden-sm">&nbsp;</div>
			</div>

		</div>
	</div>

	<footer class="footer-innovarteca">
		<div class="container">
			<div class="row">

				<div class="col-md-2 col-12">
					<a href="http://daniponce.com.ar/innovarteca/"><img class="innovarteca-logo-footer" src="images/logo-blanco.svg" alt="Logo innovarteca"> </a>
				</div>
				<div class=" col-md-8 col-12">
					<p class="centro" center><strong>InnovARTEca © | 2023 - Todos los derechos reservados<br> Desarrollo: <a href="http://daniponce.com.ar" target="_blank" rel="noopener noreferrer">Daniel Ponce</a></strong></p>
				</div>
				<div class=" col-md-2 col-12">
					<p class="centro" center>
						<a class="rrss" href="https://www.instagram.com/daniponce.cgi/" target="_blank" id="boton-compartir-instagram"> <img src="images/instagram.svg" alt="imagen de Instagram con vinculo"> </a>
						<a class="rrss" href="#" target="_blank" id="boton-compartir-facebook"><img src="images/facebook.svg" alt="imagen de facebook con vinculo"> </a>
						<a class="rrss" href="#" target="_blank" id="boton-compartir-twitter"><img src="images/twitter.svg" alt="imagen de twitter con vinculo"></a>
						<a class="rrss" href="https://youtu.be/CgUE5t8y32s" target="_blank"><img src="images/youtube.svg" alt="imagen de youtube con vinculo"> </a><br><br>
						<a href="http://daniponce.com.ar/innovarteca/coleccionables/" rel="noopener noreferrer">Ver coleccionables</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
</body>
<!-- SCRIPTS -->
  <script>
    function compartirEnFacebook() {
      var urlPagina = 'https://daniponce.com.ar/innovarteca/';
      window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(urlPagina), 'Compartir en Facebook', 'width=600,height=400');
    }

    function compartirEnTwitter() {
      var urlPagina = 'https://daniponce.com.ar/innovarteca/';
      window.open('https://twitter.com/share?url=' + encodeURIComponent(urlPagina), 'Compartir en Twitter', 'width=600,height=400');
    }

    // Asociar la función de compartir con los botones correspondientes
    document.getElementById('boton-compartir-facebook').addEventListener('click', compartirEnFacebook);
    document.getElementById('boton-compartir-twitter').addEventListener('click', compartirEnTwitter);
  </script>
<script type="text/javascript" src="js/html5shiv.js?<?= uniqid(); ?>"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js?<?= uniqid(); ?>"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js?<?= uniqid(); ?>"></script>
<!-- <script type="text/javascript" src="js/bootstrap.bundle.min.js?<?= uniqid(); ?>"></script> -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js?<?= uniqid(); ?>"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack-v=2.1.5.js?<?= uniqid(); ?>"></script>
<script type="text/javascript" src="js/script.js?<?= uniqid(); ?>"></script>
<script type="text/javascript" src="js/enviar.js?<?= uniqid(); ?>"></script>

<!-- fancybox init -->
<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus(lis[0], 1);

		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});

	});
</script>
<script>
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
</script>

</html>