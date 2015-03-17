<?php
session_start();
//include ('php_conexion.php');
include('Conexion.php');
$act = "0";
$act = "1";



if (!empty($_POST['usuario']) and !empty($_POST['contra'])) {

	$usuario = trim($_POST['usuario']);
	$contra  = trim($_POST['contra']);

	$query = ("SELECT * FROM usuarios WHERE usu='" . $usuario . "' and con='" . $contra . "'");

	$resultado = $conexion -> query($query);

	$dato = $resultado ->fetch_array();


	$_SESSION['id'] = $dato['id'];
	$_SESSION['nombre'] = $dato['nombre'];
	$_SESSION['usuario'] = $dato['usu'];
	$_SESSION['tipo_usu'] = $dato['tipo'];
	$_SESSION['estado'] = $dato['estado'];

	if ($_SESSION['tipo_usu'] == 'a') {
		header('location:dashboard.php');
	} elseif ( $_SESSION['tipo_usu'] == 'u') {
		header('location:dashboard.php');
	}
}

//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Entrar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="../css/bootflat.min.css"/>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<![endif]-->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<![endif]-->

		<!-- Fav and touch icons -->

	</head>

	<body class="eternity-form">
		<header>

		</header>
		<section class="colorBg1 colorBg" id="demo1" data-panel="first">
			<div class="login-form-section">
				<div class="login-content " data-animation="bounceIn">
					<form name="form1" method="post" action="" class="form-signin">
						<div class="section-title" >
							<img src="../img/logo.png" style="margin: auto 0;
position: relative;
left: 68px;" alt="" />
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
								<input type="text" name="usuario" class="input-block-level" placeholder="Usuario" />
							</div>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
								<input type="password" required="required" class="form-control" name="contra"  placeholder="Contraseña" />
							</div>
						</div>
						<div class="login-form-action clearfix">
							<button type="submit" class="btn btn-success pull-right green-btn">
								Ingresar &nbsp; <i class="icon-chevron-right"></i>
							</button>
							<p>
								&nbsp;
							</p>
							<?php
							$act = "1";
							if (!empty($_POST['usuario']) and !empty($_POST['contra'])) {
								$usuario = trim($_POST['usuario']);
								$contra = trim($_POST['contra']);
								$can = mysql_query("SELECT * FROM usuarios WHERE usu='" . $usuario . "' and con='" . $contra . "'");
								if ($dato = mysql_fetch_array($can)) {
								} else {
									if ($act == "1") {echo '<div class="alert alert-error" align="center">Usuario y Contraseña Incorrecta</div>';
									} else {$act = "0";
									}
								}
							} else {

							}
							?>
						</div>
						<footer class="footer">
							<div class="container">
								<div class="clearfix">
									
								</div>
								<div class="footer-copyright text-center">
									Copyright &copy; <?= date('Y'); ?> Axel Lanuza
								</div>
							</div>
						</footer>
					</form>
				</div>

			</div>

		</section>

		<!-- /container -->

	</body>
	
	<script src="../js/jquery-1.10.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

</html>
