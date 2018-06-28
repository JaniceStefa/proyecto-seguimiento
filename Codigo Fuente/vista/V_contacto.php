<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Garras | Pagina Oficial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link rel="shortcut icon" href="../assets/icono_pestania.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/magnific-popup.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="../assets/PaginaOficial/fonts/flaticon/font/flaticon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/style.css">

	<!-- Modernizr JS -->
	<script src="../assets/PaginaOficial/js/modernizr-2.6.2.min.js"></script>

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/PaginaOficial/css/owl.theme.default.min.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/bootstrap-datepicker.css">

</head>
	<body>
		
	<div class="colorlib-loader"></div>
	<div id="page">
		<!-- Navegacion -->
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="../index.php">Empresa Garras</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="../index.php"><i class="icon-home"></i> Inicio</a></li>
								<li><a href="../vista/V_catalogo_productos.php"><i class="icon-tag"></i> Productos</a></li>
								<li class="active"><a href="../vista/V_contacto.php"> <i class="icon-phone"></i> Contactanos</a></li>
								<li><a href="../vista/V_ficha_pedido.php"><i class="icon-shopping-cart"></i> Pedidos </a></li>
								<?php 
								session_start();
								include "../modelo/conectar_bd.php";
							    if (isset($_SESSION['user'])){ // vlaida si se ha iniciado sesión
								?>

								<li class="has-dropdown">
									<a href=""><i class="icon-user2"></i> <?php echo $_SESSION['user']?> </a>
									<ul class="dropdown">
										<?php
											if($_SESSION['privilegio']== 1){
										?>
										<li><a href="../vista/Tablero_Admi.php""><i class="icon-user-plus2">Administrador</i></a></li>
										<?php 
										}	
										?>
										<li><a href="../controlador/c_validar_logout.php">Cerrar Sesión</a></li>
									</ul>
								</li>	
								<?php 
								} else { ?>
								<li><a href="../vista/V_login.php"><i class="icon-user2"></i> Inicio Sesión </a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(../assets/PaginaOficial/images/cover.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Contacto</h1>
				   					<h2 class="bread"><span><a href="../index.php">Inicio</a></span> <span>Contactanos</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h3>Información de Contacto</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> Jr. Huanuco N° 248 <br> Huancayo </p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> 935993138 </a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-mail5"></i></span> iromega@hotmail.com</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="about-flex">
						<div class="col-one-forth">
							<div class="row">
								<div class="col-md-12 about">
									<h2>Acerca de</h2>
									<ul>
										<li><a class="active" data-toggle="tab"href="#nosotros">Nosotros</a></li>
										<li><a data-toggle="tab"href="#mision">Mision</a></li>
										<li><a data-toggle="tab"href="#vision">Vision</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-three-forth">
							<div class="tab-content">
								<div id="nosotros" class="tab-pane fade in active">
								<h2>Nosotros</h2>
									<div class="row">
										<div class="col-md-12">
											<p align="justify">Somos una empresa dedicada a la satisfaccion de nuestrso clientes y dotarlos de todos el equipo deportivo necesario para realizar sus actividades</p>

											<div class="row row-pb-sm">
												<div class="col-md-6">
													<img class="img-responsive" src="../assets/PaginaOficial/images/about.jpg" alt="">
												</div>
												<div class="col-md-6">
													<p align="justify">Mediante el sistema lo que queremos lograr es designar de manera más eficiente las responsabilidades y organizar de mejor forma los procesos que realiza la empresa ello con el objetivo de que cuando la empresa quiera crecer y expandirse no tenga problemas dentro de su estructura orgánica, además de que por el momento el sistema podrá adecuar horarios de entrega, registrar pedidos y notificar al cliente cómo va el proceso de su pedido para optimizar la producción de la empresa y mejorar sus utilidades.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="mision" class="tab-pane fade">
								<h2>Misión</h2>
									<div class="row">
										<div class="col-md-12">
											<p align="justify">Somos una empresa textil de ropa deportiva, trabajamos para cumplir con las necesidades y exigencias que requiere la población de la Región Junín, ello apoyándonos de un grupo humano comprometidos en la innovación, satisfacción y brindando el mejor trato posible para con nuestros clientes.</p>
										</div>
									</div>
								</div>
								<div id="vision" class="tab-pane fade">
								<h2>Visión</h2>
									<div class="row">
										<div class="col-md-12">
											<p align="justify">Ser reconocida como una empresa líder en confección de prendas deportivas con calidad nacional, que se caracterice por la calidad, confiabilidad y actualidad de nuestros productos ello mediante un desarrollo sustentable en base a la satisfacción de nuestros clientes, manteniendo siempre un espíritu de responsabilidad social.</p>
										</div>
									</div>
								</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Sobre nuestra tienda</h4>
						<p>Acercate a nuestro local ubicado en Gamarrita Huanca y conoce más de nuestros productos. Te esperamos.</p>
						<p>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Información</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="../vista/V_contacto.php">Sobre nosotros</a></li>
								<li><a href="../vista/V_terminos_condiciones.php">Términos y Condiciones</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 ">
						<h4>Soporte</h4>
						<ul class="colorlib-footer-links">
							<span class="icon-file-text3"></span><a href="../assets/pdf/manual_usuario.php" target="_blank"> Manual de Usuario</a>
						</ul>
					</div>

					<div class="col-md-3">
						<h4>Información de contacto</h4>
						<ul class="colorlib-footer-links">
							<li>Jr. Huanuco N° 248 <br> Huancayo </li>
							<li>935993138 </li>
							<li>iromega@hotmail.com</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados </span> 
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../assets/PaginaOficial/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../assets/PaginaOficial/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../assets/PaginaOficial/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../assets/PaginaOficial/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../assets/PaginaOficial/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="../assets/PaginaOficial/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="../assets/PaginaOficial/js/jquery.magnific-popup.min.js"></script>
	<script src="../assets/PaginaOficial/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="../assets/PaginaOficial/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="../assets/PaginaOficial/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="../assets/PaginaOficial/js/main.js"></script>

	</body>
</html>
