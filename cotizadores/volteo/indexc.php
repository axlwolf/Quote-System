<?php
session_start();


ini_set("memory_limit", "128M");

include "funciones/funciones.php";
// Iniciamos el buffer
ob_start();

$id_usuario  =  $_SESSION['id'];

$fecha       = date("Y-m-d H:i:s");   
$cliente     = $_POST['contacto'];
$email       = $_POST['email'];
$folio       = $_POST['folio'];
$tipo_cotiza = $_POST['tipo_cotiza'];

$volteo     = $_POST['volteo'];
$modelo     = $_POST['modelo'];
$llantas    = $_POST['llantas'];
$ejes       = $_POST['ejes'];
$no_llantas = $_POST['no_llantas'];
$no_rines   = $_POST['rines'];
$no_ejes    = $_POST['ejes2'];
$alto       = $_POST['alto'];
$hendrix    = $_POST['hendrix'];
$deslizable = $_POST['deslizable'];

$precio_cotiza = $_POST['precio_cotiza'];
$precio_veh    = $_POST['precio_veh'];
// $precio_v = $_POST['precio_v'];
$total_v       = $_POST['total_v'];
$plazo         = $_POST['dias'];

$domos      = $_POST['domos'];
$largo      = $_POST['largo'];
//$deslizable = $_POST[''];

$patin_ext = $_POST['patin_ext'];
$precio_u1 = $_POST['precio_u1'];
$total     = $_POST['total'];

$retractil_1 = $_POST['retractil_1'];
$precio_u2   = $_POST['precio_u2'];
$total1      = $_POST['total1'];

$retractil_2 = $_POST['retractil_2'];
$precio_u3   = $_POST['precio_u3'];
$total2      = $_POST['total2'];

$caja_h    = $_POST['caja_h'];
$precio_u4 = $_POST['precio_u4'];
$total3    = $_POST['total3'];

$gancho_holland = $_POST['gancho_holland'];
$precio_u5      = $_POST['precio_u5'];
$total4         = $_POST['total4'];

$autoinflado_2 = $_POST['autoinflado_2'];
$precio_u6     = $_POST['precio_u6'];
$total5        = $_POST['total5'];

$autoinflado_3 = $_POST['autoinflado_3'];
$precio_u7     = $_POST['precio_u7'];
$total6        = $_POST['total6'];

$puerta_cortina = $_POST['puerta_cortina'];
$precio_u8      = $_POST['precio_u8'];
$total7         = $_POST['total7'];

$ventilas       = $_POST['ventilas'];
$precio_u9      = $_POST['precio_u9'];
$total8         = $_POST['total8'];

$piso_antiderrapante  = $_POST['piso_antiderrapante'];
$precio_u10           = $_POST['precio_u10'];
$total9               = $_POST['total9'];

$puerta_lateral  = $_POST['puerta_lateral'];
$precio_u11      = $_POST['precio_u11'];
$total10         = $_POST['total10'];

$interiores_linner  = $_POST['interior_linner'];
$precio_u12         = $_POST['precio_u12'];
$total11            = $_POST['total11'];

$antivolcadura  = $_POST['antivolcadura'];
$precio_u13     = $_POST['precio_u13'];
$total12        = $_POST['total12'];

$winches       = $_POST['winches'];
$precio_u14    = $_POST['precio_u14'];
$total13       = $_POST['total13'];



$precio           = $_POST['cantidad_precio'];
$total_opcionales = $_POST['total_opcionales'];
$total_iva        = $_POST['total_iva'];
$total_total      = $_POST['total_total'];
$fifty            = $_POST['fifty'];
$fifty2           = $_POST['fifty2'];
$porcentaje       = $_POST['porcentaje'] * 100;
$porcentaje2      = $_POST['porcentaje2'];

?>

	<!doctype html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Cotizador TRAPMSA</title>
	
		<link rel="stylesheet" href="css/estilo.css"/>

		<style>



		</style>

	</head>
	<body>
	<div class="container">
        <div class="contenedor2">
		<div class="row">
			<div class="container">
				<header class="page-headera">

					<img src="img/cotizador_header.png" alt="header"/>
				</header>
			</div>
		</div>
		<div class="row" style="font-size: 18px">
			<div class="container">

				<section>
					<table>
						<tr>
							<td style='font-family: "Times New Roman"'>
								<p>
									<label for="fecha"> FECHA:</label>
									<?= $fecha ?>
								</p>
							</td>
							<td style='font-family: "Times New Roman"'>

							</td>
							<td style='font-family: "Times New Roman"'></td>
							<td style='font-family: "Times New Roman"'></td>
						<tr>
							<td style='font-family: "Times New Roman"'>
								<p>
									<label for="contacto"> CONTACTO:</label>
									<?= $cliente; ?>
								</p>
							</td>
							<td style="width: 40%"></td>
							<td style="width: 40%"></td>
							<td style='font-family: "Times New Roman"'>
								<p style="font-size: 14px; margin-left:85px;"> COTIZACION  <?= $folio ?></p> <?php //echo $tipo_cotiza  ?>
							</td>
						</tr>
						<tr>
							<td style='font-family: "Times New Roman"'>
								<p>
									<label for="contacto"> Email:</label>
									<?= $email; ?>
								</p>
							</td>
							<td style='font-family: "Times New Roman"'></td>
							<td style='font-family: "Times New Roman"'></td>
							<td style='font-family: "Times New Roman"'></td>
						</tr>

					</table>
				</section>

			</div>
		</div>
		<div style="width: 95%; margin: 0 auto; background: #066c3f; color: #fff; text-align: center; padding: 1px 0 2px 0; ">

			<section class="tit-comp" style=" margin: 15px 0;">
				<p style="font-size:14px">
					De antemano agradecemos su preferencia y le presento la cotización de la unidad posteriormente descrita.
				</p>
			</section>

		</div>

		<div class="row">
			<section class="descripcion" style=" margin: 20px 0;">
				<h4 class="titulo"> DESCRIPCIÓN </h4>
				<div class="col-md-offset-1 col-md-10">
					<table id="datos" style="width: 90%; max-width: 100%; border: 1px solid #066c3f; background: #f9f9f9; margin: 0 auto;"  >
						<thead>
						<tr style=" background: #066c3f; color: #fff">
							<th>TIPO</th>
							<th>MODELO</th>
							<th>AÑO</th>
							<th>LARGO EXT</th>
							<th>ANCHO EXT</th>
							<th>ALTO T</th>
							<th>EJES</th>
						</tr>
						</thead>
						<tbody style="border: 1px solid #066c3f;">
						<tr style=" border: 1px solid #066c3f;">
							<th> <?= $volteo ?> </th>
							<th> <?= $modelo ?> </th>
							<th> <?php
								if (date('m') <= 7) {
									echo date('Y');
								} else {
									echo date('Y') + 1;
								}
								?>
							</th>

                            <?php
                            if($tipo_cotiza == 'Plataforma' || $tipo_cotiza == 'Volteo') {
                                ?>
                                <th><?= $largo; ?></th>
                                <th>2.60mts</th>

                            <?php
                            }else{
                            echo largoAncho();
                            }
                            ?>


							<th>
								<?=  $alto ?>
							</th>
							<th> <?= $ejes ?> </th>
						</tr>
						</tbody>
					</table>
				</div>
			</section>
		</div>
        <?php
        if ($tipo_cotiza == "Volteo") {
            ?>
            <div class="row">
                <div class="col-md-offset-1 col-md-10" style="margin-left: 25px">

                    <section style="margin-bottom: 35px">
                        <h4><strong> ESTRUCTURA</strong></h4>

                        <table>

                            <tr>
                                <td class="forty" style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Vigas principales: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>Viga tipo "I" en 1/4 en acero de alta
                                    resisitencia ASTM A572.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Costillas: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    de canal en acero de alta resistencia.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Cuerpo: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    batea en acero de alta resistencia cal 3/16 y cal ASTM A572.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Acoplador superior: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    fijo soldado con placa de 3/8 con perno rey marca HOLLAND.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Frente: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    inclinado y reforzado en acero de lata resistencia.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Puerta trasera: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>a todo lo ancho y alto con refuerzos
                                    trnasversales con panel calibre 10.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Mecanismo doble <br> en puerta trasera: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>de operación neumática que fija ambos lados
                                    de la puerta y herraje.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Pistón hidráulico: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    telescópico de 5 secciones importado.
                                </td>
                            </tr>
                        </table>
                    </section>

                    <section style="margin-bottom: 35px">
                        <h4><strong> SUSPESIÓN</strong></h4>

                        <table>
                            <tr>
                                <td class="forty">
                                    <p>
                                        <strong>Suspensión: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    Neumática <?= $hendrix ?> HT-300 de 30,000lbs.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Ejes: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    (<?= $no_ejes ?>) en espesor de 3/4, capacidad de 30,000lbs.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Frenos: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    sistema ABS 4S/2M.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Rines: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    ( <?= $no_rines ?>) rhims unimont 24.5.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong><label for="llantas">Llantas:</label> </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    ( <?= $no_llantas ?>) 11R24.5 marca <?= $llantas ?>.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Patines: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    un juego; mecánicos de 2 velocidades marca HOLLAND.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Porta llantas: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    tipo canastilla.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Retráctil: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    (1) instalado en un eje.
                                </td>
                            </tr>
                        </table>
                    </section>

                    <section style="margin-bottom: 35px">
                        <h4><strong>LUCES Y PINTURA</strong></h4>

                        <table>
                            <tr>
                                <td class="forty">
                                    <p>
                                        <strong>Sistema eléctrico: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>reglamentario con receptáculo de 7 hilos a 12
                                    volts, plafones en LED.

                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Pintura: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    con primarios epóxicos, esmalte automotivo al color requerido.
                                </td>
                            </tr>
                        </table>
                    </section>
                </div>
            </div>

        <?php
        }elseif($tipo_cotiza == "Tolva") {
            ?>
            <div class="row">
                <div class="col-md-offset-1 col-md-10" style="margin-left: 25px">

                    <section style="margin-bottom: 15px">3<h4><strong> ESTRUCTURA</strong></h4>

                        <table>

                            <tr>
                                <td class="forty" style="font-family: 'Times New Roman'">
                                <p>
                                    <strong> Cuerpo: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                En lámina de acero al carbón cal.10.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Cerchas: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                Canal comercial en acero al carbón en cal.3/16”.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Bastidor: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                En placa de alta resistencia cal.1/4”.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Acoplador superior: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                Fijo, soldado y atornillado entre las vigas principales del bastidor   frontal, con placa de 3/8”  en acero de alta resistencia, con perno rey HOLLAND.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Domos:
                                        </strong>

                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                <?= $domos; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>
                                        Manómetros:
                                    </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                (1) de glicerina con 4” de caratula.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>  Línea de alimentación:</strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                Tubería de 3” en acero negro ced.40.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong> Línea de descarga: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                Tubería de 4” en acero negro ced.40.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong> Válvulas de alivio: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                (3) En línea de alimentación al tanque.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>
                                        Válvula check:
                                    </strong>

                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                Instalada en línea de alimentación.
                                “T” Descarga de material: Fabricada en aluminio de bajo perfil con entrada de 6” y descarga para tubo de 4”; con válvulas de mariposa de 6” para control de la descarga

                                </td>
                            </tr>
                        </table>
                    </section>
                    <section style="margin-bottom: 15px">3<h4><strong> SUSPESIÓN</strong></h4>

                        <table>
                            <tr>
                                <td class="forty">
                                    <p>
                                        <strong>Suspensión: </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                Neumática <?= $hendrix ?> HT-300 de 30,000lbs.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Ejes: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                (<?= $no_ejes ?>) en espesor de 3/4, capacidad de 30,000lbs.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Frenos: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                sistema ABS 4S/2M.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Rines: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                ( <?= $no_rines ?>) rhims unimont 24.5.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong><label for="llantas">Llantas:</label> </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                ( <?= $no_llantas ?>) 11R24.5 marca <?= $llantas ?>.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Patines: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                un juego; mecánicos de 2 velocidades marca HOLLAND.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Porta llantas: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                tipo canastilla.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Retráctil: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                (1) instalado en un eje.
                                </td>
                            </tr>
                        </table>
                    </section>

                    <section style="margin-bottom: 15px">3<h4><strong>LUCES Y PINTURA</strong></h4>

                        <table>
                            <tr>
                                <td class="forty">
                                    <p>
                                        <strong>Sistema eléctrico: </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">reglamentario con receptáculo de 7 hilos a 12 volts, plafones en LED.

                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Pintura: </strong>
                                </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                con primarios epóxicos, esmalte automotivo al color requerido.
                                </td>
                            </tr>
                        </table>
                    </section>
                </div>
            </div>
        <?php
        }elseif($tipo_cotiza == "Dolly") {
            ?>
        <div class="row">
            <div class="col-md-offset-1 col-md-10" style="margin-left: 25px">

                <section class="estructura" style="margin-bottom: 15px"><h4><strong> ESTRUCTURA</strong></h4>

                    <table>

                        <tr>
                            <td class="forty" style="font-family: 'Times New Roman'">
                                <p><strong>Estructura</strong> </p>

                            </td>
                            <td style="font-family: 'Times New Roman'">
                                fabricada con placa calibre de ½”, 3/8” Y ¼” en calidad H50
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Times New Roman'">
                            </td>
                        </tr>
                     </table>

                 </section>

                <section class="suspencion" style="margin-bottom: 15px">
                    <h4><strong> SUSPESIÓN</strong></h4>

                    <table>
                        <tr>
                            <td class="forty">
                                <p>
                                    <strong>Suspensión: </strong>
                                </p>
                            </td>
                            <td style="font-family: 'Times New Roman'">
                                Neumática <?= $hendrix ?> HT-300 de 30,000lbs.
                            </td>
                        </tr>

                    </table>
                </section>

                <section style="margin-bottom: 15px">3<h4><strong>LUCES Y PINTURA</strong></h4>

                    <table>
                        <tr>
                            <td class="forty">
                                <p>
                                    <strong>Sistema eléctrico: </strong>
                                </p>
                            </td>
                            <td style="font-family: 'Times New Roman'">reglamentario con receptáculo de 7 hilos a 12 volts, plafones en LED.

                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Times New Roman'">
                                <p>
                                    <strong>Pintura: </strong>
                                </p>
                            </td>
                            <td style="font-family: 'Times New Roman'">
                                con primarios epóxicos, esmalte automotivo al color requerido.
                            </td>
                        </tr>
                    </table>
                </section>
             </div>
        </div>
        <?php
        }elseif($tipo_cotiza == "Caja seca") {
            ?>
            <div class="row">
                <div class="col-md-offset-1 col-md-10" style="margin-left: 25px">

                    <section class="estructura" style="margin-bottom: 5px">
                        <h4><strong> ESTRUCTURA</strong></h4>

                        <table>
                            <tr>
                                <td class="forty" style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong> Acoplador superior:  </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    con perno fijo localizado a 36", bastidor a todo lo ancho de la unidad en cal. 5/16”.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Puentes:

                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    viga "I" a cada 9" en el sub-bastidor y a cada 12" en parte intermedia.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Piso:
                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    madera de pino de 1 1/2 de espesor, con recubrimiento de piso laminado antiderrapante, zoclo en galvanizado con solera de ¼ de refuerzo.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Postes logísticos:

                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    canal de acero galvanizado localizados a 12".
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Postes frontales:
                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    canal de acero galvanizado.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Borda superior e inferior:

                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    de aluminio extruido sujetada con remache de aluminio.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Paneles:
                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    aluminio blanco wash y zoclo en lámina galvanizada de 12”.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Puerta trasera:
                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    tipo cortina a todo lo ancho y alto, con sus respectivos cerrojos y gancho.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Techo:
                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    aluminio de una sola pieza en cal. 19.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Forro interior:
                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    en triplay de 6 mm en los costados y parte frontal.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Portallanta:

                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    tipo canastilla en lado derecho.
                                </td>
                            </tr>
                        </table>

                    </section>

                    <section class="suspencion" style="margin-bottom: 15px">
                        <h4><strong> SUSPESIÓN</strong></h4>


                            <table>
                                <tr>
                                    <td class="forty">
                                        <p>
                                            <strong>Suspensión: </strong>
                                        </p>
                                    </td>
                                    <td style='font-family: "Times New Roman"'>
                                        Neumática <?= $hendrix ?> HT-300 de 30,000lbs. <?= $deslizable ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='font-family: "Times New Roman"'>
                                        <p>
                                            <strong>Ejes: </strong>
                                        </p>
                                    </td>
                                    <td style='font-family: "Times New Roman"'>
                                        (<?= $no_ejes ?>) en espesor de 3/4, capacidad de 30,000lbs.
                                    </td>
                                </tr>
                                <tr>
                                    <td style='font-family: "Times New Roman"'>
                                        <p>
                                            <strong>Frenos: </strong>
                                        </p>
                                    </td>
                                    <td style='font-family: "Times New Roman"'>
                                        sistema ABS 4S/2M.
                                    </td>
                                </tr>
                                <tr>
                                    <td style='font-family: "Times New Roman"'>
                                        <p>
                                            <strong>Rines: </strong>
                                        </p>
                                    </td>
                                    <td style='font-family: "Times New Roman"'>
                                        ( <?= $no_rines ?>) rhims unimont 24.5.
                                    </td>
                                </tr>
                                <tr>
                                    <td style='font-family: "Times New Roman"'>
                                        <p>
                                            <strong><label for="llantas">Llantas:</label> </strong>
                                        </p>
                                    </td>
                                    <td style='font-family: "Times New Roman"'>
                                        ( <?= $no_llantas ?>) 11R24.5 marca <?= $llantas ?>.
                                    </td>
                                </tr>
                                <tr>
                                    <td style='font-family: "Times New Roman"'>
                                        <p>
                                            <strong>Patines: </strong>
                                        </p>
                                    </td>
                                    <td style='font-family: "Times New Roman"'>
                                        un juego; mecánicos de 2 velocidades marca HOLLAND.
                                    </td>
                                </tr>
                        </table>
                    </section>

                    <section style="margin-bottom: 15px">3<h4><strong>LUCES Y PINTURA</strong></h4>

                        <table>
                            <tr>
                                <td class="forty">
                                    <p>
                                        <strong>Sistema eléctrico: </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">reglamentario con receptáculo de 7 hilos a 12 volts, plafones en LED.

                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>Pintura: </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    con primarios epóxicos, esmalte automotivo al color requerido.
                                </td>
                            </tr>
                        </table>
                    </section>
                </div>
            </div>

        <?php
        }elseif($tipo_cotiza == "Plataforma") {
            ?>
            <div class="row">
                <div class="col-md-offset-1 col-md-10" style="margin-left: 25px">

                    <section class="estructura" style="margin-bottom: 5px">
                        <h4><strong> ESTRUCTURA</strong></h4>

                        <table>
                            <tr>
                                <td class="forty" style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong> Vigas principales:  </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    Viga tipo "I" formada con acero de alta resistencia ASTM-A572.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Puentes travesaños:

                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    Tipo "I" estructural de 4" de 80,000 lbs.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Acoplador superior:
                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    Fijo soldado con placa de 3/8" con perno rey marca HOLLAND.
                                </td>

                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Defensa:
                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    Tipo estribo soldada a las vigas principales, con canal estructural de 6".
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Piso:

                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    De madera de pino de 1 1/2. de espesor.
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>
                                            Concha:


                                        </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    fabricada en ptr y lámina a una altura de 1.20.
                                </td>
                            </tr>
                        </table>

                    </section>

                    <section class="suspencion" style="margin-bottom: 15px">
                        <h4><strong> SUSPESIÓN</strong></h4>

                        <table>
                            <tr>
                                <td class="forty">
                                    <p>
                                        <strong>Suspensión: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    Neumática <?= $hendrix ?> HT-300 de 30,000lbs. <?= $deslizable ?>
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Ejes: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    (<?= $no_ejes ?>) en espesor de 3/4, capacidad de 30,000lbs.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Frenos: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    sistema ABS 4S/2M.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Rines: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    ( <?= $no_rines ?>) rhims unimont 24.5.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong><label for="llantas">Llantas:</label> </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    ( <?= $no_llantas ?>) 11R24.5 marca <?= $llantas ?>.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Patines: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    un juego; mecánicos de 2 velocidades marca HOLLAND.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Porta llantas: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    Tipo canastilla.
                                </td>
                            </tr>
                            <tr>
                                <td style='font-family: "Times New Roman"'>
                                    <p>
                                        <strong>Ganho de arrastre: </strong>
                                    </p>
                                </td>
                                <td style='font-family: "Times New Roman"'>
                                    marca HOLLAND.
                                </td>
                            </tr>
                        </table>
                    </section>

                    <section style="margin-bottom: 35px">
                        <h4><strong>LUCES Y PINTURA</strong></h4>

                        <table>
                            <tr>
                                <td class="forty">
                                    <p>
                                        <strong>Sistema eléctrico: </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">reglamentario con receptáculo de 7 hilos a 12 volts, plafones en LED.

                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman'">
                                    <p>
                                        <strong>Pintura: </strong>
                                    </p>
                                </td>
                                <td style="font-family: 'Times New Roman'">
                                    con primarios epóxicos, esmalte automotivo al color requerido.
                                </td>
                            </tr>
                        </table>
                    </section>
                </div>
            </div>

        <?php
        }
        ?>
            <div class="row" style="margin: 0 0 110px 0">
                <table class="contenedor">
                    <tr class="opcionales">

                        <td class="lateral"><h4 style="padding-left: 25px"><strong> OPCIONALES: </strong></h4></td>

                        <td class="principal1" style="padding-left: 15px">
                            <table>
                                <thead>
                                <tr class="forty">
                                    <th>
                                        Producto
                                    </th>
                                    <th>
                                        Precio
                                    </th>
                                    <th>
                                        IVA
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                </tr>
                                </thead>
                                <?php
                                if(isset($patin_ext) && $patin_ext !== ''){
                                    ?>
                                    <tr>
                                        <td class="forty">
                                            <p>
                                                <label for="patin_ext">PATIN EXTRA: </label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $	<?= $patin_ext; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $	<?= $precio_u1; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $	<?= $total; ?>
                                        </td>
                                    </tr>
                                <?php
                                }else{

                                }
                                if(isset($retractil_1) && $retractil_1 !== ''){

                                    ?>
                                    <tr>
                                        <td class="forty">
                                            <p>
                                                <label for="retractil_1">RETRACTIL 1 EJE : </label>

                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $retractil_1; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u2; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            =	$ <?= $total1; ?>
                                        </td>
                                    </tr>
                                <?php
                                }else{

                                }
                                if(isset($retractil_2) && $retractil_2 !== ''){

                                    ?>
                                    <tr>
                                        <td class="forty">
                                            <p>
                                                <label for="retractil_2">RETRACTIL 2 EJES : </label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $retractil_2; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u3; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total2; ?>
                                        </td>
                                    </tr>
                                <?php
                                }else{

                                }
                                if(isset($caja_h) && $caja_h !== ''){


                                    ?>
                                    <tr>
                                        <td class="forty">
                                            <p>
                                                <label for="caja_h">CAJA DE HERRAMIENTAS:  </label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $	<?= $caja_h; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u4; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total3; ?>
                                        </td>
                                    </tr>
                                <?php
                                }else{

                                }
                                if(isset($gancho_holland) && $gancho_holland !== ''){

                                    ?>
                                    <tr>
                                        <td class="forty">
                                            <p>
                                                <label for="gancho_holland">GANCHO DE ARRASTRE PH-400 HOLLAND</label>

                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $gancho_holland; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u5; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total4; ?>
                                        </td>
                                    </tr>
                                <?php
                                }else{

                                }
                                if(isset($autoinflado_2) && $autoinflado_2 !== ''){

                                    ?>
                                    <tr>
                                        <td class="forty">
                                            <p>
                                                <label for="autoinflado_2">AUTOINFLADO 2 EJES</label>

                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $autoinflado_2; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u6; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $	<?= $total5; ?>

                                        </td>
                                    </tr>
                                <?php
                                }else{

                                }
                                if(isset($autoinflado_3) && $autoinflado_3 !== ''){

                                    ?>
                                    <tr>
                                        <td class="forty">

                                            <p>
                                                <label for="autoinflado_3">AUTOINFLADO 3 EJES</label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $autoinflado_3; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u7; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            =	$ <?= $total6; ?>
                                        </td>
                                    </tr>
                                <?php
                                }else{

                                }
                                if (isset($puerta_cortina) && $puerta_cortina !== '') {
                                    ?>
                                    <tr>
                                        <td class="forty">

                                            <p>
                                                <label for="puerta_cortina">Puerta Cortina</label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $puerta_cortina; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u8; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total7; ?>
                                        </td>
                                    </tr>

                                <?php
                                } else{

                                }
                                if (isset($ventilas) && $ventilas != '') {
                                    ?>
                                    <tr>
                                        <td class="forty">

                                            <p>
                                                <label for="ventilas">Ventilas</label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $ventilas; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u9; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total8; ?>
                                        </td>
                                    </tr>


                                <?php
                                } else{}
                                if (isset($piso_antiderrapante) && $piso_antiderrapante != '') {
                                    ?>

                                    <tr>
                                        <td class="forty">

                                            <p>
                                                <label for="piso_antiderapante">Piso antiderrapante</label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $piso_antiderrapante; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u10; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total9; ?>
                                        </td>
                                    </tr>


                                <?php
                                } else{}
                                if (isset($puerta_lateral) && $puerta_lateral != ''){
                                    ?>
                                    <tr>
                                        <td class="forty">

                                            <p>
                                                <label for="puerta_lateral">Puerta lateral</label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $puerta_lateral; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u11; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total10; ?>
                                        </td>
                                    </tr>
                                <?php
                                }else{}
                                if(isset($interiores_linner) && $interiores_linner != '') {
                                    ?>

                                    <tr>
                                        <td class="forty">

                                            <p>
                                                <label for="interiores_linner">Interiores linner</label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $interiores_linner; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u12; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total11; ?>
                                        </td>
                                    </tr>

                                <?php
                                }else{}
                                if(isset($antivolcadura) && $antivolcadura != '') {
                                    ?>
                                    <tr>
                                        <td class="forty">

                                            <p>
                                                <label for="antivolcadura">Sistema antivolcadura</label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $antivolcadura; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u13; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total12; ?>
                                        </td>
                                    </tr>
                                <?php
                                }else{}
                                if(isset($winches) && $winches != '') {
                                    ?>
                                    <tr>
                                        <td class="forty">

                                            <p>
                                                <label for="winches">Winches</label>
                                            </p>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $winches; ?>  +
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            $ <?= $precio_u14; ?>
                                        </td>
                                        <td style='font-family: "Times New Roman"'>
                                            = $ <?= $total13; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>


                            </table>
                        </td>

                    </tr>
                </table>
            </div>



        </div>
        <div class="contenedor2">

	    <div class="row" style="margin:250px 0 150px 0">

            <table style="width: 90%; margin: 0 auto">
                <tr style="text-align: center">
                    <?= fotos(); ?>
                </tr>
            </table>

        </div>
		<div class="row">
		<table style="width: 90%;
			margin: 0 0 100px 40px">
			<tr>

				<td class="pagos2" style="
					color: #000;
					padding: 10px 0 10px 5px;
					float: left;
					width: 70%;
					">
					<table>

						<tr>
							<td style='font-family: "Times New Roman"'>Tiempo de entrega: </td>
							<td style='font-family: "Times New Roman"'><span> <?= $plazo; ?> días hábiles después del anticipo.</span></td>
						</tr>
						<tr>
							<td style='font-family: "Times New Roman"'>L.A.B.: </td>
							<td style='font-family: "Times New Roman"'><span>Cuautla, Morelos.</span></td>
						</tr>
						<tr>
							<td style='font-family: "Times New Roman"'>
								Condiciones de pago:
							</td>
							<td style='font-family: "Times New Roman"'>
								<span style="font-size: 12px">$ <?= $fifty; ?>,  <?= $porcentaje ?> % de anticipo y  $ <?= $fifty2; ?>,  <?= $porcentaje2 ?> % contra entrega.</span>
							</td>
						</tr>

					</table>

				</td>
				<td class="totales" style="border: solid #066c3f;
						border-radius: 25px ;
						padding: 12px;
						float: right;
						width: 30%;
						">
					<table>
						<tr>
							<td class="verde">
								<p>
									PRECIO =
								</p>
							</td>
							<td style='font-family: "Times New Roman"'>
								$ <?= $precio; ?>
							</td>
						</tr>
						<tr>
							<td class="verde">
								<p>
									OPCIONALES =
								</p>
							</td>
							<td style='font-family: "Times New Roman"'>
								$ <?= $total_opcionales; ?>
							</td>
						</tr>
						<tr>
							<td class="verde">
								<p>
									IVA =
								</p>
							</td>
							<td style='font-family: "Times New Roman"'>
								$ <?= $total_iva; ?>
							</td>
						</tr>
						<tr>
							<td class="verde">
								<p>
									TOTAL =
								</p>
							</td>
							<td style='font-family: "Times New Roman"'>
								$ <?php echo $total_total; ?>
							</td>
						</tr>
					</table>

				</td>

			</tr>

		</table>
		</div>

            <div class="row datos" style="margin: 25px 0 10px 0">
                <footer class="titulo">
                    <p>
                        Calle Calvario s/n Esq. Av. Insurgentes, Col. Guadalupe Victoria C.P.62746
                    </p>
                    <p>
                        01 (735) 353 52 50 / 353 31 27 / 353 8577
                    </p>
                    <p>
                        www.trapmsa.com.mx
                    </p>
                </footer>
            </div>
        </div>

	</div>

	</body>

	</html>

<?php
//exit();
include "../../Conexion.php";


$query = "INSERT INTO cotizaciones (fecha, cliente, email, folio_cotizacion, tipo_cotiza, id_usuario)
 VALUES ('$fecha', '$cliente','$email', '$folio','$tipo_cotiza','$id_usuario' )
 ";
#Resultado
$resultado = $conexion -> query($query) or die($conexion -> error . __LINE__);


$dir = dirname(__FILE__);
require_once ("includes/dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf -> load_html(ob_get_clean());
$dompdf -> render();
$pdf = $dompdf -> output();

ob_start();
require_once($dir.'/html.php');
$html_message = ob_get_contents();
ob_end_clean();


$filename = "cotizacion " . $folio . '.pdf';
file_put_contents("pdf/".$filename, $pdf);
$dompdf -> stream($filename);

require_once($dir.'/swift/swift_required.php');

$mailer = new Swift_Mailer(new Swift_MailTransport()); // Create new instance of SwiftMailer

$message = Swift_Message::newInstance()
	->setSubject('Cotización', $invoice) // Message subject
	//->setTo(array($email => $cliente, 'axlwolf@gmail.com' => 'Axel Lanuza')) // Array of people to send to
        ->setTo(array($email => $cliente, 'ventas@trapmsa.com.mx' => 'Ventas TRAPMSA')) // Array of people to send to
	->setFrom(array('contacto@cotizaciones-trapmsa.com.mx' => 'Cotizaciones Trapmsa')) // From:
	->setBody($html_message, 'text/html') // Attach that HTML message from earlier
	->attach(Swift_Attachment::newInstance($pdf, $filename, 'application/pdf')); // Attach the generated PDF from earlier

// Send the email, and show user message
if ($mailer->send($message))
	$success = true;
else
	$error = true;

?>