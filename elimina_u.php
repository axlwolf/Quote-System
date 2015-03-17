<?php

//session_start();
//include ('php_conexion.php');
include "Conexion.php";

$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id=$id";
$q = $conexion->query($sql);
//    $q->execute(array(':id' => $id));
header('Location:usuarios2.php');
