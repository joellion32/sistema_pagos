<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Oficina Virtual STDGO</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Combine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?=base_url?>assets/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?=base_url?>assets/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
  <link rel="stylesheet" href="<?=base_url?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
<body>	
<div class="main-top py-1">
<!-- header -->
	<header>
			<nav class="navbar navbar-dark bg-dark" style="height:20% !important;">
					<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
					<li class="mr-lg-2 active"><a href="<?=base_url?>Usuario/login">Iniciar Sesion</a></li>
          <li class="mr-lg-2"><a href="<?=base_url?>Usuario/registro" class="scroll">Registrate</a></li>
					</ul>
			 </nav>
				  
		<div class="container-fluid px-lg-4">
			<nav class="py-4">
                        <div class="logo" id="logo">
                            <a href="index.html"><img src="<?=base_url?>assets/img/asdo.png" id="logo" alt="logo"></a>
                        </div>
                        <label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop">
                        <ul class="menu mt-md-3">
                            <li class="mr-lg-2 active"><a href="index.html">Inicio</a></li>
                            <li class="mr-lg-2"><a href="#about" class="scroll">Sobre Nosotros</a></li>
							<li class="mr-lg-2"><a href="#services" class="scroll">Servicios</a></li>
                            <li><a href="#contact" class="scroll">Contacto</a></li>
                        </ul>
                    </nav>
		</div>
	</header>
	<!-- //header -->


	<!-- //header -->
	<!-- banner -->
	<div class="main-w3pvt">
		<div class="container-fluid">
			<div class="row">
				<div class="style-banner" id="baner">
					<h1 class="text-white">Bienvenido a la Oficina Virtual</h1>
					<p class="mt-5 text-white">Oficina virtual de pagos en linea del ayuntamiento de Santo Domingo trabajando para tu salud y un mejor futuro.</p>
					<a href="#about" class="btn button-style mt-sm-5 mt-4 scroll">Leer Mas</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
</div>
	 <!-- what we do -->
	 <section class="wedo py-5" id="about">
		<div class="container py-lg-5">
			<div class="text-center">
				<h2 class="w3_head">Sobre Nosotros</h2>
				<p class="main_p mt-4 mb-4 pt-2 text-center mx-auto">Somos una empresa dedicada o ofrecer mayor facilidad para los ayuntamientos ofreciendoles sistemas de pagos para 
				que puedan pagar su factura con la mayor facilidad y rapidez.</p>
			</div>
	 </div>
	</section>
	 <!-- //what we do -->
<section class="what_you py-5" id="services">
	<div class="container py-lg-5">
		<div class="row about-info-grids text-center">
				<div class="col-md-4 about-info about-info1">
					<span class="fa fa-credit-card"></span>
					<h4>Pagos En Linea</h4>
					<div class="h4-underline"></div>
					<p style="color:white;">Te ofrecemos un sistema de pago donde cada mes se te generara una factura y podras pagarla desde tu pc o movil.</p>
				</div>
				<div class="col-md-4 about-info about-info2">
					<span class="fa fa-truck"></span>
					<h4>Mayor Rapidez</h4>
					<div class="h4-underline"></div>
					<p style="color:white;">Imendiatamente pagues tu factura se te pospondra una fecha cuando el camion pase por ella.</p>
				</div>
				<div class="col-md-4 about-info about-info3">
					<span class="fa fa-cogs"></span>
					<h4>Soporte al dia</h4>
					<div class="h4-underline"></div>
					<p style="color:white;">Si tienes alguna duda o queja el sistema de pago te ofrece un sistema de correo para comunicarse entre tu y el administrador.</p>
				</div>
				<div class="whsat_bt text-center mx-auto">
					<a href="<?=base_url?>Usuario/registro" class="btn button-style mt-sm-5 mt-4 scroll">Registrate</a>
				</div>
		</div>
	</div>		
</section>
	 
	<!-- contact -->
	 <section class="wedo py-5" id="contact">
		<div class="container py-lg-5">
			<div class="text-center">
				<h3 class="w3_head">Contáctanos</h3>
				<p class="main_p mt-4 mb-4 pt-2 text-center mx-auto">Tienes dudas al usar el sistema contáctanos y nosotros te ayudaremos.</p>
			</div>
			<div class="contact_grid_right mt-5 mx-auto text-center">
				<form action="#" method="post">
					<div class="row contact_top">
						<div class="col-sm-6">
							<input type="text" name="Name" placeholder="Nombre" required="">
						</div>
						<div class="col-sm-6">
							<input type="email" name="Email" placeholder="Correo" required="">
						</div>
					</div>	
						<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje...';}" required="">Mensaje</textarea>
						<input type="submit" value="Enviar Mensaje">
						<input type="reset" value="Limpiar Formulario">
						<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</section>
	 <!-- //contact -->
	  <!-- footer -->
	<div class="cpy-right text-center py-5">
		<ul class="social_section_1info pt-lg-4 mb-lg-4">
			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
			<li><a href="#"><span class="fa fa-twitter"></span></a></li>
			<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
			<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
		</ul>
        <p>© 2019 Oficina Virtual. Todos los derechos son reservados | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
	 <!-- //footer -->
</body>
</html>