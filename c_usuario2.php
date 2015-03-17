<?php

include "include/header.php";
$nombre = '';
$tipo = 'u';
$usuario = '';
$con = '';
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	$can = mysql_query("SELECT * FROM usuarios where id=$id");
	if ($dato = mysql_fetch_array($can)) {
		$con = $dato['con'];
		$nombre = $dato['nombre'];
		$usuario = $dato['usu'];
		$tipo = $dato['tipo'];
		$boton = "Actualizar Usuario";
	}
} else {
	$id = '';
	$boton = "Guardar Usuario";
}
include "include/aside.php";
?>
    
        <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
             <blockquote>
				<a href="usuarios2.php" class="btn btn-info"><i class="icon-list-alt"></i> Ir Listado de Usuario</a>
			</blockquote>
			
			<aside class="profile-info col-lg-12">
				<section class="panel">
						<div class="bio-graph-heading">
								Editar información
						</div>
						<div class="panel-body bio-graph-info">
							<h1> Perfil</h1>
							<form class="form-horizontal" name="form1" method="post" action="">
			<?php
			if (!empty($_POST['nombre']) and !empty($_POST['usu'])) {
				$nombre = $_POST['nombre'];
				$usuario = $_POST['usu'];
				$con = $_POST['con'];
				$tipo = $_POST['tipo'];
				//			if(!empty($_POST['con'])){
				//				$con=$_POST['con'];
				//			}

				if ($boton == 'Actualizar Usuario') {
					$xSQL = "Update usuarios Set  nombre='$nombre',
														usu='$usuario',
														con='$con',
														tipo='$tipo'
										Where id=$id";
					mysql_query($xSQL);
					echo '<div class="alert alert-success">
									  <button type="button" class="close" data-dismiss="alert">X</button>
									  <strong>Usuario!</strong> Actualizado con Exito
								</div>';
				} else {
					$can = mysql_query("SELECT * FROM usuarios where usu='$usuario'");
					if (!$dato = mysql_fetch_array($can)) {
						if (!preg_match("/\\s/", $usuario)) {
							$sql = "INSERT INTO usuarios (nombre, usu, con, tipo, estado)
												 VALUES ('$nombre','$usuario','$con','$tipo','s')";
							mysql_query($sql);
							$nombre = '';
							$tipo = 'u';
							$usuario = '';
							$con = '';
							echo '	<div class="alert alert-success">
											  <button type="button" class="close" data-dismiss="alert">X</button>
											  <strong>Usuario!</strong> Guardado con Exito
											</div>';
						} else {
							echo '	<div class="alert alert-error">
												<button type="button" class="close" data-dismiss="alert">X</button>
												<strong>Error!</strong> No se permiten espacios en la cuenta de usuario.
											</div>';
							$usuario = '';
							$con = '';
						}
					} else {
						echo '	<div class="alert alert-error">
												<button type="button" class="close" data-dismiss="alert">X</button>
												<strong>Error!</strong> Este usuario ya existe.
											</div>';
						$usuario = '';
					}
				}
			}
					?>
								<div class="form-group">
									<label  class="col-lg-2 control-label">Nombre</label>
									<div class="col-lg-8">
										<input type="text" class="form-control input-xlarge" name="nombre" id="nombre" value="<?php echo $nombre; ?>" autocomplete="off" required>

									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-lg-2 control-label">Nombre de usuario</label>
									<div class="col-lg-8">
									  
										<input type="text" class="form-control"name="usu" id="usu" value="<?php echo $usuario; ?>" <?php
										if (!empty($usuario)) {echo 'readonly';
										}
											?> autocomplete="off" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-lg-2 control-label">Contraseña</label>
									<div class="col-lg-8">
										  <input type="password" class="form-control"name="con" id="con" value="<?php echo $con; ?>" <?php
										if (!empty($con)) {echo '';
										}
										?> required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-lg-2 control-label">Tipo de usuario</label>
									<div class="col-lg-8">
									   
										
										<input type="radio" class="form-control" name="tipo" id="tipo" value="a" <?php
										if ($tipo == "a") { echo 'checked';
										}
										?>	> Administrador<br>
										<input type="radio" name="tipo" id="tipo"  class="form-control" value="u"<?php
										if ($tipo == "u") { echo 'checked';
										}
										?>> Usuario

									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									  
										
										 <button type="submit" class="btn btn-info btn-lg"><i class="icon-ok"></i> <?php echo $boton; ?></button>
										  <?php
										if ($boton == 'Actualizar Usuario') {
											echo '<button class="btn btn-success bt-lg"><a href="c_usuario2.php" style="color: white;"><i class="icon-ok"></i> Ingresar Nuevo</a></button>';
										}
											?>
									</div>
								</div>
								
								</div>
							</section>	
						</aside>
					</form>
                    
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="flatlab/js/jquery.js"></script>
    <script src="flatlab/js/bootstrap.min.js"></script>
    <script src="flatlab/js/jquery.scrollTo.min.js"></script>
    <script src="flatlab/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="flatlab/js/common-scripts.js"></script>


  </body>
</html>
