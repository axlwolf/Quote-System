<?php

include "include/header.php";
include "include/aside.php";


include "Conexion.php";

$id = $_GET['id'];

$query = "SELECT fecha, cliente, email, folio_cotizacion,tipo_cotiza,nombre FROM cotizaciones,usuarios WHERE  id_usuario = '$id' AND  cotizaciones.id_usuario = usuarios.id  "
;
#Resultado
$resultado = $conexion -> query($query) or die($conexion -> error . __LINE__);

//$dato = $resultado ->fetch_array();




while($row = $resultado->fetch_assoc()) {
    $datos[] = array(
        'fecha'         	   => $row['fecha'],
        'cliente'              => $row['cliente'],
        'email'                => $row['email'],
        'folio_cotizacion'     => $row['folio_cotizacion'],
        'tipo_cotiza'          => $row['tipo_cotiza'],
        'nombre' 			   => $row['nombre']
    );
}




?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->

      
		<section class="panel">
                          <header class="panel-heading">
                              <h3>
                El usuario <?=  $datos[0]['nombre']; ?> ha generado <?php
                include "Conexion.php";
                $query = $conexion->query("SELECT * FROM cotizaciones  WHERE  id_usuario = '$id'");

                $conta_filas = $query->num_rows;

                echo $conta_filas;
                ?> cotizaciones
            </h3>
                          </header>
                          <table class="table table-striped table-responsive border-top" id="sample_1">
                          <thead>
                          <tr>

                              <th>fecha</th>
								<th>cliente</th>
								<th>email</th>
								<th>cotización</th>
								<th>tipo</th>
								<th>Nombre usuario</th>
                          </tr>
                          </thead>
                              <tbody>
                          <?php

            if(isset($datos)){
            foreach ($datos as $datito):
                ?>
                 <tr class="odd gradeX">


                    <td>
                        <?= $datito['fecha'];?>
                    </td>
                    <td>
                        <?= $datito['cliente'];?>
                    </td>
                    <td>
                        <?= $datito['email'];?>
                    </td>
                    <td>
                        <a class="btn btn-success" href="cotizadores/volteo/pdf/cotizacion <?= $datito['folio_cotizacion'];?>.pdf" target="_blank">
                            <i class="ic icon-file-text"></i> <?= $datito['folio_cotizacion'];?>
                        </a>

                    </td>
                    <td>
                        <?= $datito['tipo_cotiza'];?>
                    </td>
                    <td>
                        <?= $datito['nombre'];?>
                    </td>
                </tr>



            <?php

            endforeach;}else {


                ?>
                              </tbody>
                          </table>



            <?php

            }
            ?>


                      </section>
      

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
<script type="text/javascript" src="assets/assets/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/assets/data-tables/DT_bootstrap.js"></script>

	  <!--script for this page only-->
    <script src="assets/js/dynamic-table.js"></script>


</body>
</html>
