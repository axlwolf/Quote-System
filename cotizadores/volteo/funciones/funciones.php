<?php
/**
 * Created by PhpStorm.
 * User: Axel
 * Date: 15/02/2015
 * Time: 03:53 PM
 */


if (!$_SESSION['tipo_usu'] == 'a' or !$_SESSION['tipo_usu'] == 'u') {
    header('location:../../index.php');
}
date_default_timezone_set('America/Mexico_City');


include "../../Conexion.php";
$query = $conexion->query("SELECT * FROM cotizaciones");

$conta_filas = $query->num_rows;

$id 		  = $conta_filas;
$marca        = 'TPM-';
$fecha_actual = date('y-m-');  // date('y')
//					$numero ;
if ($conta_filas == 0){
    $numero = 1;
}else {
    $numero = $id+1;
}

$inc = str_pad($numero, 4, '0', STR_PAD_LEFT); //Format with leading 0 eg: 0001
$invoice = $marca.$fecha_actual.$inc;

function fecha(){
    if (date('m') <= 7) {
        echo date('Y');
    } else {
        echo date('Y') + 1;
    }

}

function id_cotiza($id_cotiza){
    $id_cotiza = $_GET['id'];

    if (isset($id_cotiza) && $id_cotiza != '') {

        switch ($id_cotiza) {
            case 1:
                echo "Volteo";
                break;
            case 2:
                echo "Tolva";
                break;
            case 3:
                echo "Dolly";
                break;
            case 4:
                echo "Caja seca";
                break;
            case 5:
                echo "Plataforma";
                break;
        }
    }
}
function largoAncho(){
    $largo='';
    $id_cotiza = $_POST['tipo_cotiza'];

    if (isset($id_cotiza) && $id_cotiza != '') {

        switch ($id_cotiza) {
//            case "Volteo":
//                echo "<th> {$largo} </th>
//                                                      <th>2.60mts</th>";
//                break;
            case "Tolva":
                echo "  <th>8.95 mts</th>
                                        <th>2.60mts</th>";
                break;
            case "Dolly":
                echo " <th>3.54mts</th>
                                        <th>2.60mts</th>";
                break;
            case "Caja seca":
                echo "  <th>16.154 MTS
                                    </th>
                                    <th>2.60mts</th>";
                break;
//            case "Plataforma":
//                echo "<th></th> <th></th>";
//                break;
        }
    }
}

function fotos(){
    $id_cotiza = $_POST['tipo_cotiza'];

    if (isset($id_cotiza) && $id_cotiza != '') {

        switch ($id_cotiza) {
            case "Volteo":
                echo '<td style="width: 25%">
						<img class="polaroid" src="img/v_1.png" alt=""/>
					</td>
					<td style="width: 25%">
						<img class="polaroid" src="img/v_2.png" alt=""/>
					</td>';
                break;
            case "Tolva":
                echo '
                <td style="width: 25%">
						<img class="polaroid" src="img/tol_1.png" alt=""/>
					</td>
					<td style="width: 25%">
						<img class="polaroid" src="img/tol_2.png" alt=""/>
					</td>
                ';
                break;
            case "Dolly":
                echo '
                <td style="width: 25%">
						<img class="polaroid" src="img/dol_1.png" alt=""/>
					</td>
					<td style="width: 25%">
						<img class="polaroid" src="img/dol_2.png" alt=""/>
					</td>
                ';
                break;
            case "Caja seca":
                echo '
                <td style="width: 25%">
						<img class="polaroid" src="img/case_1.png" alt=""/>
					</td>
					<td style="width: 25%">
						<img class="polaroid" src="img/case_2.png" alt=""/>
					</td>
                ';
                break;
            case "Plataforma":
                echo '
                <td style="width: 25%">
						<img class="polaroid" src="img/plata_1.png" alt=""/>
					</td>
					<td style="width: 25%">
						<img class="polaroid" src="img/plata_2.png" alt=""/>
					</td>
                ';
                break;
        }
    }
}





?>
