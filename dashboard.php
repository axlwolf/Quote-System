<?php
include "include/header.php";

include "include/aside.php";


?>
    
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div align="center" style="font-family:Verdana, Geneva, sans-serif">
                  <h2><strong>BIENVENIDOS</strong></h2>

			<img src="../img/logo.png" alt="">
			<br>
			<h3>
                <strong>
                    Sistema de Cotizaciones en línea TRAMPSA
                </strong>
            </h3>
		</div>
              <!-- page end-->
          </section>
		    <div class="row" style="overflow: hidden;">
                          <div class="col-lg-12">
                              <section class="panel">
                                  <div class="panel-body">
                                      <ul class="summary-list">
                                          <?php
                                          if ($_SESSION['tipo_usu'] == 'a' ) {
                                              ?>
                                              <li>
                                                  <a href="usuarios2.php">
                                                      <i class=" icon-user text-primary"></i>
                                                    Hay   <?php
                                                      include "Conexion.php";
                                                      $query = $conexion->query("SELECT * FROM usuarios");

                                                      $conta_filas = $query->num_rows;

                                                      echo $conta_filas;
                                                      ?>
                                                      Usuario(s)

                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="cotizaciones.php">
                                                      <i class="icon-shopping-cart text-info"></i>
                                                      <?php
                                                      include "Conexion.php";
                                                      $query = $conexion->query("SELECT * FROM cotizaciones");

                                                          $conta_filas = $query->num_rows;
//                                                     echo '<pre>';
//                                                      var_dump($conta_filas);
//                                                      echo '</pre>';
                                                        if($conta_filas == 0){
                                                            echo 'No hay cotizaciones';
                                                        }else {
                                                            echo 'Hay ' . $conta_filas . ' Cotizacion(es)';
                                                        }
                                                      ?>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="perfil.php">
                                                      <i class=" icon-smile text-danger"></i>
                                                      Perfil
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="c_usuario2.php">
                                                      <i class=" icon-plus text-danger"></i>
                                                      Crear usuarios
                                                  </a>
                                              </li>
                                          <?php

                                          }else{
                                              ?>
                                              <li>
                                                  <a href="cotizaciones.php">
                                                      <i class="icon-shopping-cart text-info"></i>
                                                      Cotizaciones realizadas <?php
                                                      include "Conexion.php";


                                                      $query = $conexion->query("SELECT * FROM cotizaciones  WHERE  id_usuario = '$id'");

                                                      $conta_filas = $query->num_rows;

                                                      echo $conta_filas;
                                                      ?>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="perfil.php">
                                                      <i class=" icon-smile text-danger"></i>
                                                      Perfil
                                                  </a>
                                              </li>
                                          <?php

                                          }
                                          ?>
                                      </ul>
                                  </div>
                              </section>
                          </div>
                      </div>
                  
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
