<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Home</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="assets/dashboard/css/styles.css">

</head>
<body>

	<!-- Main container -->
	<main class="full-box main-container">

		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="assets/dashboard/assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="?c=Dashboard"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu <?php echo $action == ('rolCreate'|| 'rolRead') ? 'active' : '' ?> "><i class="fas fa-users fa-fw"></i> &nbsp; Roles <i class="fas fa-chevron-down"></i></a>
							<ul class="<?php echo $action == ('rolCreate'|| 'rolRead') ? 'show-nav-lateral-submenu':''?>">
								<li>
									<!-- Etiqueta a, propiedad href="Se llama Controlador y Método" -->
									<a class="<?php echo $action == 'rolCreate' ? 'background-btn-active' : ''?>" href="?c=Users&a=rolCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Rol</a>
								</li>
								<li>
									<a class="<?php echo $action == 'rolRead' ? 'background-btn-active' : ''?>" href="?c=Users&a=rolRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Consultar Roles</a>
								</li>
								<li>
									<a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Rol</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="user-update.html">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>