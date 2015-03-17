<?php
session_start();
//var_dump($_SESSION);
//exit();
include ('php_conexion.php');
date_default_timezone_set('America/Mexico_City');

if (!$_SESSION['tipo_usu'] == 'a' or !$_SESSION['tipo_usu'] == 'u') {
	header('location:index.php');
}
if ($_SESSION['tipo_usu'] == 'a') {
	$titulo = 'Administrador/a';
} else {
	$titulo = 'Usuario';
}
include "Conexion.php";

$user = $_SESSION['nombre'];

$query = "SELECT * FROM usuarios WHERE nombre = '$user' ";

$resultado = $conexion -> query($query);

$rowUsuarios = $resultado->fetch_assoc();

$id = $rowUsuarios['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Axel Lanuza">
    <meta name="keyword" content="Cotizador Trapmsa">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Inicio</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
	<link rel="stylesheet" href="css/material.css"/>
	<link rel="stylesheet" href="css/ripples.css"/>
	<link rel="stylesheet" href="css/material-wfont.css"/>
	<!--<link rel="stylesheet" href="css/estilo1.css"/> -->
    <!--external css-->
    <link href="assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Cerrar navegación" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="dashboard.php" class="logo" >Sistema de Cotizaciones<span> TRAPMSA</span></a>
          <!--logo end-->
         
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          
                          <span class="username"><?php echo $_SESSION['nombre'];  ?></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="perfil.php"><i class=" icon-suitcase"></i>Perfil</a></li>
                          <li><a href="php_cerrar.php"><i class="icon-key"></i> Salir</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->