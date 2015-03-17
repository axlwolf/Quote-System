<?php

include "include/header.php";
include "Conexion.php";

$user = $_SESSION['nombre'];

$query = "SELECT * FROM usuarios WHERE nombre = '$user' ";

$resultado = $conexion -> query($query);

$rowUsuarios = $resultado->fetch_assoc();

// then to output
include "include/aside.php";

?>
      
      <!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <aside class="profile-nav col-lg-3">
                <section class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="../img/avatar.png" alt="">
                        </a>
                        <h1><?= $_SESSION['nombre']; ?></h1>
                       
                    </div>

                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#"> <i class="icon-user"></i> Perfil</a></li>
                        <li><a href="#"> <i class="icon-calendar"></i> Actividad Reciente </a></li>
                    </ul>

                </section>
            </aside>
            <aside class="profile-info col-lg-9">
                <section class="panel">
                    <div class="bio-graph-heading">
							Editar información
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1> Perfil</h1>
                        <form class="form-horizontal" role="form">
							<div class="form-group">
                                <label  class="col-lg-2 control-label">Nombre</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="f-name" value="<?= $rowUsuarios['nombre'] ?>">

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Nombre de usuario</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="c-name" value="<?= $rowUsuarios['usu'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Contraseña</label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="b-day" value="<?= $rowUsuarios['con'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Tipo de usuario</label>
                                <div class="col-lg-6">
                                    <input type="radio" class="form-control" value="a"> Administrador
                                    <input type="radio" class="form-control" value="u"> Usuario

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                </aside>
        </div>

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
    <script src="flatlab/assets/jquery-knob/js/jquery.knob.js"></script>

    <!--common script for all pages-->
    <script src="flatlab/js/common-scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
