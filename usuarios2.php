<?php

include "include/header.php";

	if (!empty($_GET['estado'])) {
		$codig = $_GET['estado'];
		$cans = mysql_query("SELECT * FROM usuarios WHERE estado='s' and id='$codig'");
		if ($d = mysql_fetch_array($cans)) {
			$estado = 'n';
		} else {
			$estado = 's';
		}
		$sql = "UPDATE usuarios SET estado='$estado' WHERE id='$codig'";
		mysql_query($sql);
	}

include "include/aside.php";
?>
    
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
             <div align="right">
<form name="form1" method="post" action="">
	<a href="c_usuario2.php" class="btn btn-info"><i class="icon-user"></i> Nuevo Usuario</a>
	<input type="text" name="bus" class="input-xlarge search-query" placeholder="Nombre o Cuenta de Usuario">
	<button type="submit" class="btn btn-info"><i class="icon-search"></i> Buscar</button>
</form>
</div>
<table class="table table-striped table-advance table-hover" border="0"  style="font-size: initial";>
  <thead>
  <tr>
    <td>Id</td>
    <td><strong><i class="icon-question-sign"></i> Nombre y Apellido</strong></td>
    <td><strong><i class=" icon-edit"></i> Estado</strong></td>
    <td><strong><i class=" icon-user"></i> Usuario</strong></td>
    <td><strong><i class=" icon-group"></i> Tipo de Usuario</strong></td>
    <td><strong>Acciones</strong></td>
  </tr>
  </thead>
  <tbody>
  <?php
  	if(empty($_POST['bus'])){
		$can=mysql_query("SELECT * FROM usuarios");
	}else{
		$buscar=$_POST['bus'];
		$can=mysql_query("SELECT * FROM usuarios where nombre LIKE '$buscar%' or usu LIKE '$buscar%'");
	}	
	while($dato=mysql_fetch_array($can)){
		if($dato['estado']=="n"){
			$estado='<span class="label label-important">Inactivo</span>';
		}else{
			$estado='<span class="label label-success">Activo</span>';
		}
		if($dato['tipo']=="a"){
			$tipo='Administrador';
		}else{
			$tipo='Usuario';
		}
  ?>
  <tr>
    <td><?php echo $dato['id']; ?></td>
    <td><?php echo $dato['nombre']; ?></td>
    <td><a href="usuarios2.php?estado=<?php echo $dato['id']; ?>"><?php echo $estado; ?></a></td>
    <td><?php echo $dato['usu']; ?></td>
    <td><?php echo $tipo; ?></td>
    <td>
		<a href="c_usuario2.php?id=<?php echo $dato['id']; ?>" title="Editar Usuario" class="btn btn-info"><i class="icon-pencil"></i></a>
		<a href="elimina_u.php?id=<?php echo $dato['id']; ?>" name="eliminar" title="Eliminar Usuario" class="btn btn-danger btn-xs delete" data-confirm="Quieres borrar este usuario">
              <i class="icon-trash"></i>
          </a>
        <a href="actividad_usuario.php?id=<?php echo $dato['id']; ?>" name="eliminar" title="Actividad usuario" class="btn btn-primary btn-xs">
            <i class="ic icon-bar-chart"></i>
        </a>
	</td>
	
  </tr>
  <?php } ?>
  </tbody>
</table>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
<script>
    $('.delete').on("click", function (e) {
        e.preventDefault();

        var choice = confirm($(this).attr('data-confirm'));

        if (choice) {
            window.location.href = $(this).attr('href');
        }
    });
</script>


  </body>
</html>
