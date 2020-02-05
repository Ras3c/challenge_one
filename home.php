<?php 
	session_start();
	date_default_timezone_set("America/Monterrey");
	setlocale(LC_ALL,"es_ES");
	include "conectaBD.php";
	if(!isset($_SESSION["id_usuario"]) || empty($_SESSION["id_usuario"])){ 
		header("Location:login.php");
	}
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Flexi Clientes</title>
		<!-- for Chrome, Safari and FF -->
		<link rel="manifest" href="manifest.json">
		<meta name="theme-color" content="#cc0000">
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<!-- Font Awesome -->
		<!-- <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.css"> -->
		<link rel="stylesheet" href="plugins/fontawesome_5_2/css/all.css">
		<link rel="stylesheet" href="plugins/fontawesome_5_2/css/v4-shims.css">
		<link rel="stylesheet" href="dist/css/AdminLTE.css">
		<link rel="stylesheet" href="dist/css/skins/_all-skins.css">
		<link rel="stylesheet" type="text/css" href="dist/css/toastr.css">
		<link rel="stylesheet" type="text/css" href="dist/css/iziModal.css">
		<link rel="stylesheet" href="dist/css/buttons.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/datatables.min.css"/>
		<link rel="stylesheet" type="text/css" href="dist/css/responsive.dataTables.min.css"/>
		
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper" style="height: auto; min-height: 100%;">
			<header class="main-header">
				<a href="home.php" class="logo">
					<span class="logo-mini"><i class="fa fa-cloud"></i> <b>CL</b></span>
					<span class="logo-lg"><i class="fa fa-cloud"></i> <b>Flexi Clientes</b></span>
				</a>
				<nav class="navbar navbar-static-top">
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
						<span class="sr-only"></span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown notifications-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class="label">0</span> 
								</a>
								<ul class="dropdown-menu">
									<li>
										<ul class="menu">
											<li style="cursor: pointer;"></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="dist/img/user3.png" class="user-image" alt="Usuario">
									<span class="hidden-xs">Administrador </span>
								</a>
								<ul class="dropdown-menu">
									<li class="user-header">
										<img src="dist/img/user3.png" class="img-circle" alt="Usuario">
										<p><span>Administrador </span></p>
									</li>
									<li class="user-footer">
										<button type="button" class="btn btn-default" onclick="cerrar_sesion();">Cerrar Sesion</button>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<aside class="main-sidebar">
				<section class="sidebar">
					<ul class="sidebar-menu tree" data-widget="tree">
						<li class="header">MENU PRINCIPAL</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-boxes"></i><span>Finanzas</span>
								<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
							</a>
							<ul class="treeview-menu">
								<li id='send_pagos'><a href="#"><i class="fa fa-barcode"></i>Pagos</a></li>
							</ul>
						</li>
					</ul>
				</section>
			</aside>
			<div class="content-wrapper" id="contenido">
				<div class="container-fluid">
					<center>
						<h1>Bienvenido</h1>
						<h3>Trabajando para ti.</h3>
					</center>
				</div>
			</div>
			<footer class="main-footer">
				<strong>Desarrollado por Cesar Torres - 2020</strong>
			</footer>
		</div>
	</body>

	<script type="text/javascript" src="dist/js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="dist/js/adminlte.js"></script>
	<script type="text/javascript" src="dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist/js/datatables.min.js"></script>
	<script type="text/javascript" src="dist/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="dist/js/dataTables.buttons.min.js"></script>
	<script type='text/javascript' src='dist/js/dataTables.select.min.js'></script>
	<script type="text/javascript" src="dist/js/toastr.min.js"></script>
	<script type="text/javascript" src="dist/js/iziModal.js"></script>
	<script type="text/javascript" src="dist/js/funciones.js"></script>
</html>