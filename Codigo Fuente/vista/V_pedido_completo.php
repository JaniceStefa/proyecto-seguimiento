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
								<li><a href="../index.php">Inicio</a></li>
								<li><a href="../vista/V_catalogo_productos.php"> Productos</a></li>
								<li><a href="../vista/V_contacto.php">Contactanos</a></li>
								<li class="active"><a href="../controlador/index_pedido.php"><i class="icon-shopping-cart"></i> Pedidos </a></li>
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

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</a></span></p>
								<h3>Ficha de Pedido</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Presupuesto</h3>
							</div>
							<div class="process text-center active" >
								<p><span>03</span></p>
								<h3>Pedido Completado</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<span class="icon"><i class="icon-shopping-cart"></i></span>
						<h2>Gracias por su pedido, Su orden se completó</h2>
						<p>
							<a href="../index.php"class="btn btn-primary">Inicio</a>
							<a href="../vista/V_catalogo_productos.php"class="btn btn-primary btn-outline">Catálogo Productos</a>
						</p>
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
								<li><a href="vista/V_contacto.php">Sobre nosotros</a></li>
								<li><a href="#">Información de envío</a></li>
								<li><a href="vista/V_terminos_condiciones.php">Términos y Condiciones</a></li>
								<li><a href="#">Seguimiento de Pedido</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 ">
						<h4>Soporte</h4>
						<ul class="colorlib-footer-links">
							<span class="icon-file-text3"></span><a href="assets/pdf/manual_usuario.php" target="_blank"> Manual de Usuario</a>
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
