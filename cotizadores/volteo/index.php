<?php
session_start();

include "funciones/funciones.php";

?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Cotizador TRAPMSA</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/material.css"/>
		<link rel="stylesheet" href="css/ripples.css"/>
		<link rel="stylesheet" href="css/material-wfont.css"/>
		<link rel="stylesheet" href="css/estilo1.css"/>

	</head>
	<body>
		<div class="container principal">
			<form id="formulario" action="" method="post">
<!--			<form id="formulario" action="indexc.php" method="post">-->
				<div class="row">
					<div class="container">
						<header class="page-headera">
							<div class="col-md-10 col-md-pull-0">
								<img src="img/cotizador_header.png" alt="header"/>
							</div>
						</header>
					</div>
				</div>

				<div class="row">
					<div class="container">
						<div class="col-md-offset-1 col-md-10">
							<section>
								<p>
									<label for="fecha"> FECHA:</label>
									<input type="text" class="input-xlarge " readonly="readonly" name="fecha" id="fecha" value="<?= date("d-m-Y") ?>" />
								</p>
								<p>
									<label for="contacto"> CONTACTO:</label>
									<input type="text" class="input-xlarge"  name="contacto" id="contacto" required/>
								</p>
								<p>
									<label for="email"> Email:</label>
									<input type="text" class="input-xlarge" name="email" id="email" required/>
								</p>
							</section>
							<div id="errores">

							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<h4 class="titulo">
                        <label for="folio">COTIZACION</label> <input class="input-xlarge" type="text" name="folio" id="folio" readonly="readonly" value="<?= $invoice ?>"/>
                        <input class="input-xlarge" type="hidden" id="tipo_cotiza" name="tipo_cotiza" readonly value="<?= id_cotiza($_GET['id']); ?>"/>
                    </h4>

					<section>
						<p class="titulo completo">
							De antemano agradecemos tu preferencia y le presento la cotización de la unidad posteriormente descrita.
						</p>
					</section>

					<h4 class="titulo"> DESCRIPCIÓN </h4>
					<div class="col-md-offset-1 col-md-10">


                        <?php

                            if($_GET['id']== 1){

                            ?>
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>TIPO</th>
                                        <th>MODELO</th>
                                        <th>AÑO</th>
                                        <th>LARGO EXT</th>
                                        <th>ANCHO EXT</th>
                                        <th>ALTO T</th>
                                        <th>EJES</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <select name="volteo" id="volteo" class="volteo">
                                                <option value="VOLTEO ACERO AL CARBON 24mts3">VOLTEO ACERO AL CARBON 24mts3</option>
                                                <option value="VOLTEO ACERO INOX 24mts3">VOLTEO ACERO INOX 24mts3</option>
                                                <option value="VOLTEO HARDOX 24mts3">VOLTEO HARDOX 24mts3</option>
                                                <option value="VOLTEO ACERO AL CARBON 30mts3" class="30mts">VOLTEO ACERO AL CARBON
                                                    30mts3
                                                </option>
                                                <option value="VOLTEO ACERO INOX 30mts3" class="30mts">VOLTEO ACERO INOX
                                                    30mts3
                                                </option>
                                                <option value="VOLTEO HARDOX 30mts3" class="30mts">VOLTEO HARDOX 30mts3
                                                </option>
                                            </select></th>
                                        <th>
                                            <select name="modelo" id="modelo" class="modelo">
                                                <option value="TPM-AF-HENDRIKSON">TPM-AF-HENDRICKSON</option>
                                                <option value="TPM-AF-NACIONAL">TPM-AF-NACIONAL</option>
                                            </select></th>
                                        <th>
                                            <?= fecha();?>
                                        </th>
                                        <th>
                                            <select name="largo" id="largo" class="largo_volteo" >
                                                <option value="7.31mts" class="largo">7.31mts</option>
                                                <option value="9.144mts" class="largo">9.144mts</option>
                                            </select>
                                        </th>
                                        <th>2.60mts</th>
                                        <th>
                                            <select name="alto" id="alto">
                                                <option value="2.77">2.77 mts</option>
                                                <option value="3.07">3.07 mts</option>
                                            </select>
                                        </th>
                                        <th>
                                            <select name="ejes" id="ejes" class="ejes">
                                                <option value="2" class="no_ejes">2</option>
                                                <option value="3" class="no_ejes">3</option>
                                            </select></th>
                                    </tr>
                                    </tbody>
                                </table>

                        <?php
                                //Datos de Tolva
                        }elseif ($_GET['id']== 2) {
                                ?>

                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>TIPO</th>
                                        <th>MODELO</th>
                                        <th>AÑO</th>
                                        <th>LARGO EXT</th>
                                        <th>ANCHO EXT</th>
                                        <th>ALTO T</th>
                                        <th>EJES</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <select name="volteo" id="volteo">
                                                <option value="TOLVA PRESURIZADA 28 MTS3 2 EJES" selected>  TOLVA PRESURIZADA 28 MTS3 2 EJES</option>
                                                <option value="TOLVA PRESURIZADA 36 MTS3 3 EJES" selected>  TOLVA PRESURIZADA 36 MTS3 3 EJES</option>
                                            </select>
                                        </th>
                                        <th>
                                            <select name="modelo" id="modelo" class="modelo">
                                                <option value="TPM-AF-HENDRIKSON">TPM-AF-HENDRICKSON</option>
                                                <option value="TPM-AF-NACIONAL">TPM-AF-NACIONAL</option>
                                            </select></th>
                                        <th>
                                            <?= fecha();?>
                                        </th>
                                        <th>8.95 mts</th>
                                        <th>2.60mts</th>
                                        <th>
                                            <select name="alto" id="alto">
                                                <option value="3.90 mts">3.90 mts</option>
                                            </select>
                                        </th>
                                        <th>
                                            <select name="ejes" id="ejes" class="ejes">
                                                <option value="2" class="no_ejes">2</option>
                                                <option value="3" class="no_ejes">3</option>
                                                <!--                                            <option value="3" class="no_ejes">3</option>-->
                                            </select></th>
                                    </tr>
                                    </tbody>
                                </table>

                            <?php
                                //Datos de dolly
                            }elseif($_GET['id'] == 3) {
                                ?>

                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>TIPO</th>
                                        <th>MODELO</th>
                                        <th>AÑO</th>
                                        <th>LARGO EXT</th>
                                        <th>ANCHO EXT</th>
                                        <th>ALTO T</th>
                                        <th>EJES</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <select name="volteo" id="volteo">
                                                <option value="DOLLY" selected>DOLLY</option>
                                            </select>
                                        </th>
                                        <th>
                                            <select name="modelo" id="modelo" class="modelo">
                                                <option value="TPM-AF-NACIONAL">TPM-AF-NACIONAL</option>
                                                <option value="TPM-AF-HENDRIKSON">TPM-AF-HENDRICKSON</option>
                                            </select></th>
                                        <th>
                                            <?= fecha();?>
                                        </th>
                                        <th>3.54mts</th>
                                        <th>2.60mts</th>
                                        <th>
                                            <select name="alto" id="alto">
                                                <option value="1.28">1.28 mts</option>
                                            </select>
                                        </th>
                                        <th>
                                            <select name="ejes" id="ejes" class="ejes">
                                                <option value="2" class="no_ejes">2</option>
                                                <!--                                            <option value="3" class="no_ejes">3</option>-->
                                            </select></th>
                                    </tr>
                                    </tbody>
                                </table>
                            <?php
                                //Datos de Caja seca
                            }elseif($_GET['id']==4) {
                                ?>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>TIPO</th>
                                    <th>MODELO</th>
                                    <th>AÑO</th>
                                    <th>LARGO EXT</th>
                                    <th>ANCHO EXT</th>
                                    <th>ALTO T</th>
                                    <th>EJES</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>
                                        <select name="volteo" id="volteo" class="caja_seca">
                                            <option value="CAJA SECA 40'" selected> CAJA SECA 40' </option>
                                            <option value="CAJA SECA 48'" > CAJA SECA 48' </option>
                                            <option value="CAJA SECA 53'" > CAJA SECA 53' </option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="modelo" id="modelo" class="modelo">
                                            <option value="TPM-AF-NACIONAL">TPM-AF-NACIONAL</option>
                                            <option value="TPM-AF-HENDRIKSON">TPM-AF-HENDRICKSON</option>
                                        </select></th>
                                    <th>
                                        <?= fecha();?>
                                    </th>
                                    <th>16.154 MTS
                                    </th>
                                    <th>2.60mts</th>
                                    <th>
                                        <select name="alto" id="alto">
                                            <option value="4.11mts">4.11mts</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="ejes" id="ejes" class="ejes">
                                            <option value="2" class="no_ejes">2</option>
                                            <option value="3" class="no_ejes">3</option>
                                        </select></th>
                                </tr>
                                </tbody>
                            </table>

                            <?php
                            }elseif($_GET['id'] == 5) {
                                ?>
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>TIPO</th>
                                        <th>MODELO</th>
                                        <th>AÑO</th>
                                        <th>LARGO EXT</th>
                                        <th>ANCHO EXT</th>
                                        <th>ALTO T</th>
                                        <th>EJES</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <select name="volteo" id="volteo" class="plataforma">
                                                <option value="PLATAFORMA DE 30'" selected> PLATAFORMA DE 30' </option>
                                                <option value="PLATAFORMA DE 35'" > PLATAFORMA DE 35' </option>
                                                <option value="PLATAFORMA DE 38'" > PLATAFORMA DE 38' </option>
                                                <option value="PLATAFORMA DE 40'" > PLATAFORMA DE 40' </option>
                                                <option value="PLATAFORMA DE 42'" > PLATAFORMA DE 42' </option>
                                                <option value="PLATAFORMA DE 45'" > PLATAFORMA DE 45' </option>
                                                <option value="PLATAFORMA DE 48'" > PLATAFORMA DE 48' </option>
                                            </select>
                                        </th>
                                        <th>
                                            <select name="modelo" id="modelo" class="modelo">
                                                <option value="TPM-AF-NACIONAL">TPM-AF-NACIONAL</option>
                                                <option value="TPM-AF-HENDRIKSON">TPM-AF-HENDRICKSON</option>
                                            </select>
                                        </th>
                                        <th>
                                            <?= fecha();?>
                                        </th>
                                        <th>
                                            <select name="largo" id="largo" class="largo-plataforma">
                                                <option value="9.144mts" class="largo">9.144mts</option>
                                                <option value="10.67mts" class="largo">10.67mts</option>
                                                <option value="11.58mts" class="largo">11.58mts</option>
                                                <option value="12.192mts" class="largo">12.192mts</option>
                                                <option value="12.80mts" class="largo">12.80mts</option>
                                                <option value="13.716mts" class="largo">13.716mts</option>
                                                <option value="14.63mts" class="largo">14.63mts</option>
                                            </select>
                                        </th>
                                        <th>2.60mts</th>
                                        <th>
                                            <select name="alto" id="alto">
                                                <option value="1.20mts">1.20mts</option>
                                            </select>
                                        </th>
                                        <th>
                                            <select name="ejes" id="ejes" class="ejes">
                                                <option value="2" class="no_ejes">2</option>
                                                <option value="3" class="no_ejes">3</option>
                                            </select></th>
                                    </tr>
                                    </tbody>
                                </table>
                            <?php
                            }elseif($_GET['id'] == 6){

                        ?>

                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>TIPO</th>
                                        <th>MODELO</th>
                                        <th>AÑO</th>
                                        <th>LARGO EXT</th>
                                        <th>ANCHO EXT</th>
                                        <th>ALTO T</th>
                                        <th>EJES</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>


                        <?php
                        }elseif($_GET['id'] == 7){}

                        ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-offset-1 col-md-10 principal">
                        <?php
                        //Datos Volteo
                        if($_GET['id']== 1) {

                            ?>
                            <section class="estructura">
                                <h4><strong> ESTRUCTURA</strong></h4>

                                <p>
                                    <strong>Vigas principales: </strong> Viga tipo "I" en 1/4 en acero de alta
                                    resisitencia ASTM A572.
                                </p>

                                <p>
                                    <strong>Costillas: </strong> de canal en acero de alta resistencia.
                                </p>

                                <p>
                                    <strong>Cuerpo: </strong> batea en acero de alta resistencia cal 3/16 y cal ASTM
                                    A572.
                                </p>

                                <p>
                                    <strong>Acoplador superior: </strong> fijo soldado con placa de 3/8 con perno rey
                                    marca HOLLAND.
                                </p>

                                <p>
                                    <strong>Frente: </strong> inlcinado y reforzado en acero de lata resistencia.
                                </p>

                                <p>
                                    <strong>Puerta trasera: </strong> a todo lo ancho y alto con refuerzos trnasversales
                                    con panel calibre 10.
                                </p>

                                <p>
                                    <strong>Mecanismo doble en puerta trasera: </strong> de operación neumática que fija
                                    ambos lados de la puerta y herraje.
                                </p>

                                <p>
                                    <strong>Pistón hidráulico= </strong> telescópico de 5 secciones importado.
                                </p>
                            </section>
                            <section class="suspencion">
                                <h4><strong> SUSPENSIÓN</strong></h4>
                                <p>
                                    <strong>Suspensión: </strong> Neumática <input class="input-xlarge hendrix" id="hendrix" name="hendrix" value="Hendrickson" readonly/> HT-300 de 30,000lbs.
                                </p>
                                <p>
                                    <strong>Ejes: </strong> <input type="text" class="ejes2"  name="ejes2" id="ejes2" readonly placeholder="(2)"/> en espesor de 3/4, capacidad de 30,000lbs.
                                </p>
                                <p>
                                    <strong>Frenos: </strong> sistema ABS 4S/2M.
                                </p>
                                <p>
                                    <strong>Rines: </strong>
                                    <input type="text" class="rines"  name="rines" id="rines" readonly placeholder="(8)"/>
                                    rhims unimont 24.5.
                                </p>
                                <p>
                                    <strong> <label for="llantas">Llantas:</label> </strong>
                                    <input type="text" class="llantas" name="no_llantas" id="no_llantas" readonly placeholder="(8)" />
                                    11R24.5 marca
                                    <select name="llantas" id="llantas">
                                        <option value="UNIROYAL">UNIROYAL</option>
                                        <option value="GENERAL">GENERAL</option>
                                        <option value="CONTINENTAL">CONTINENTAL</option>
                                        <option value="MICHELIN">MICHELIN</option>
                                        <option value="TRIANGLE">TRIANGLE</option>
                                        <option value="BFGODDRICH">BFGODDRICH</option>

                                    </select>
                                    .
                                </p>
                                <p>
                                    <strong>Patines: </strong> un juego; mecánicos de 2 velocidades marca HOLLAND.
                                </p>
                                <p>
                                    <strong>Porta llantas: </strong> tipo canastilla.
                                </p>
                                <p>
                                    <strong>Retráctil: </strong> (1) instalado en un eje.
                                </p>
                            </section>

                            <section class="luces_pintura">
                                <h4><strong>LUCES Y PINTURA</strong></h4>

                                <p>
                                    <strong>Sistema eléctrico: </strong> reglamentario con receptáculo de 7 hilos a 12 volts, plafones en LED.
                                </p>
                                <p>
                                    <strong>Pintura: </strong> con primarios epóxicos, esmalte automotivo al color requerido.
                                </p>

                            </section>

                        <?php
                            //Datos Tolva
                        }elseif($_GET['id']== 2) {

                            ?>
                            <section class="estructura">
                                <h4><strong> ESTRUCTURA</strong></h4>

                                <p>
                                    <strong>
                                        Cuerpo:
                                    </strong>
                                    En lámina de acero al carbón cal.10
                                </p>

                                <p>
                                    <strong>Cerchas: </strong>Canal comercial en acero al carbón en cal.3/16”.
                                </p>

                                <p>
                                    <strong>Bastidor: </strong>En placa de alta resistencia cal.1/4”.
                                </p>

                                <p>
                                    <strong> Acoplador superior: </strong>Fijo, soldado y atornillado entre las vigas principales del bastidor   frontal, con placa de 3/8”  en acero de alta resistencia, con perno rey HOLLAND.
                                </p>

                                <p>
                                    <strong>
                                        Domos:
                                    </strong>
                                    <select name="domos" id="domos">
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select> En aluminio de 20” de diámetro con herrajes de sujeción.

                                </p>

                                <p>
                                    <strong>
                                        Manómetros:

                                    </strong> (1) de glicerina con 4” de caratula.
                                </p>

                                <p>
                                    <strong>  Línea de alimentación:</strong> Tubería de 3” en acero negro ced.40.
                                </p>

                                <p>
                                    <strong> Línea de descarga: </strong>Tubería de 4” en acero negro ced.40.
                                </p>

                                <p>
                                    <strong> Válvulas de alivio: </strong>(3) En línea de alimentación al tanque.
                                </p>

                                <p>
                                    <strong>
                                        Válvula check:
                                    </strong>
                                    Instalada en línea de alimentación.
                                    “T” Descarga de material: Fabricada en aluminio de bajo perfil con entrada de 6” y descarga para tubo de 4”; con válvulas de mariposa de 6” para control de la descarga

                                </p>

                            </section>
                            <section class="suspencion">
                                <h4><strong> SUSPENCIÓN</strong></h4>
                                <p>
                                    <strong>Suspensión: </strong> Neumática <input class="input-xlarge hendrix" id="hendrix" name="hendrix" value="Hendrickson" readonly/> HT-300 de 30,000lbs.
                                </p>
                                <p>
                                    <strong>Ejes: </strong> <input type="text" class="ejes2"  name="ejes2" id="ejes2" readonly placeholder="(2)"/>Track 77.5 con capacidad de carga de 30,000 libras.
                                </p>
                                <p>
                                    <strong>Frenos: </strong> sistema ABS 2S/1M.
                                </p>
                                <p>
                                    <strong>Rines: </strong>
                                    <input type="text" class="rines"  name="rines" id="rines" readonly placeholder="(8)"/>
                                    rhims unimont 24.5.
                                </p>
                                <p>
                                    <strong> <label for="llantas">Llantas:</label> </strong>
                                    <input type="text" class="llantas" name="no_llantas" id="no_llantas" readonly placeholder="(8)" />
                                    11R24.5 marca
                                    <select name="llantas" id="llantas">
                                        <option value="UNIROYAL">UNIROYAL</option>
                                        <option value="GENERAL">GENERAL</option>
                                        <option value="CONTINENTAL">CONTINENTAL</option>
                                        <option value="MICHELIN">MICHELIN</option>
                                        <option value="TRIANGLE">TRIANGLE</option>
                                        <option value="BFGODDRICH">BFGODDRICH</option>

                                    </select>
                                    .
                                </p>
                                <p>
                                    <strong>Patines: </strong> un juego; mecánicos de 2 velocidades marca HOLLAND.
                                </p>
                                <p>
                                    <strong>Porta llantas: </strong> tipo canastilla.
                                </p>
                                <p>
                                    <strong>Fenders: </strong>  de aluminio en la parte trasera y delantera del tanque.
                                </p>

                            </section>
                            <section class="luces_pintura">
                                <h4><strong>LUCES Y PINTURA</strong></h4>

                                <p>
                                    <strong>Sistema eléctrico: </strong> reglamentario SCT, luces LED, enchufes y arnés importado.
                                </p>
                                <p>
                                    <strong>Pintura: </strong> en chasis con primario epóxico, esmalte automotivo.
                                </p>

                            </section>

                        <?php
                            //Datos Dolly
                        }elseif($_GET['id'] == 3) {
                            ?>
                            <section class="estructura">
                                <h4><strong> ESTRUCTURA</strong></h4>
                                <p><strong>Estructura</strong> fabricada con placa calibre de ½”, 3/8” Y ¼” en calidad H50</p>
                            </section>

                            <section class="suspencion">
                                <h4><strong> SUSPENCIÓN</strong></h4>
                                <p>
                                    <strong>Suspensión: </strong> Neumática <input class="input-xlarge hendrix" id="hendrix" name="hendrix" value="Hendrickson" readonly/> HT-300 de 30,000lbs.
                                </p>

                            </section>

                            <section class="luces_pintura">
                                <h4><strong>LUCES Y PINTURA</strong></h4>
                               <p><strong> Sistema eléctrico = </strong>reglamentario con receptáculo de 7 hilos a 12 volts, luces reglamentarias según SCT.</p>
                                <p><strong>Pintura = </strong>con primarios epóxicos, esmalte automotivo al color requerido.</p>

                            </section>
                        <?php
                            //Datos caja seca
                        }elseif($_GET['id']== 4) {

                            ?>
                            <section class="estructura">
                                <h4><strong> ESTRUCTURA</strong></h4>

                                <p>
                                    <strong>
                                        Acoplador superior:
                                    </strong> con perno fijo localizado a 36", bastidor a todo lo ancho de la unidad en cal. 5/16”.
                                </p>

                                <p>
                                    <strong> Puentes: </strong>viga "I" a cada 9" en el sub-bastidor y a cada 12" en parte intermedia.
                                </p>
                               <p>
                                   <strong>
                                       Piso:

                                   </strong>madera de pino de 1 1/2 de espesor, con recubrimiento de piso laminado antiderrapante, zoclo en galvanizado con solera de ¼ de refuerzo.
                               </p>
                                <p>
                                    <strong>
                                        Postes logísticos:
                                    </strong>canal de acero galvanizado localizados a 12".
                                </p>
                                <p>
                                    <strong>
                                        Postes frontales:
                                    </strong>canal de acero galvanizado.
                                </p>

                                <p>
                                    <strong>
                                        Borda superior e inferior:
                                    </strong>
                                    de aluminio extruido sujetada con remache de aluminio.
                                </p>

                                <p>
                                    <strong>
                                        Paneles:
                                    </strong>aluminio blanco wash y zoclo en lámina galvanizada de 12”.
                                </p>
                                <p>
                                    <strong>
                                        Puerta trasera:
                                    </strong>tipo cortina a todo lo ancho y alto, con sus respectivos cerrojos y gancho.
                                </p>

                                <p>
                                    <strong>
                                        Techo:
                                    </strong>aluminio de una sola pieza en cal. 19.
                                </p>

                                <p>
                                    <strong>
                                        Forro interior:
                                    </strong>en triplay de 6 mm en los costados y parte frontal.
                                </p>

                                <p>
                                    <strong>
                                        Portallanta:
                                    </strong>tipo canastilla en lado derecho.
                                </p>




                            </section>
                            <section class="suspencion">
                                <h4><strong> SUSPENCIÓN</strong></h4>
                                <p>
                                    <strong>Suspensión: </strong> Neumática <input class="input-xlarge hendrix" id="hendrix" name="hendrix" value="Hendrickson" readonly/> HT-300 de 30,000lbs.
                                    <input class="deslizable input-xlarge" id="deslizable" name="deslizable" type="text" value="" style="display: none" readonly/>
                                </p>
                                <p>
                                    <strong>Ejes: </strong> <input type="text" class="ejes2"  name="ejes2" id="ejes2" readonly placeholder="(2)"/> en espesor de 3/4, capacidad de 30,000lbs.
                                </p>
                                <p>
                                    <strong>Frenos: </strong> sistema ABS 4S/2M marca WABCO NOM-SCT035.
                                </p>
                                <p>
                                    <strong>Rines: </strong>
                                    <input type="text" class="rines"  name="rines" id="rines" readonly placeholder="(8)"/>
                                    rhims unimont 24.5.
                                </p>
                                <p>
                                    <strong> <label for="llantas">Llantas:</label> </strong>
                                    <input type="text" class="llantas" name="no_llantas" id="no_llantas" readonly placeholder="(8)" />
                                    11R24.5 marca
                                    <select name="llantas" id="llantas">
                                        <option value="UNIROYAL">UNIROYAL</option>
                                        <option value="GENERAL">GENERAL</option>
                                        <option value="CONTINENTAL">CONTINENTAL</option>
                                        <option value="MICHELIN">MICHELIN</option>
                                        <option value="TRIANGLE">TRIANGLE</option>
                                        <option value="BFGODDRICH">BFGODDRICH</option>

                                    </select>
                                    .
                                </p>
                                <p>
                                    <strong>Patines: </strong> un juego; mecánicos de 2 velocidades marca HOLLAND.
                                </p>

                            </section>
                            <section class="luces_pintura">
                                <h4><strong>LUCES Y PINTURA</strong></h4>

                                <p>
                                    <strong>
                                        Sistema eléctrico:

                                    </strong>reglamentario SCT, luces LED, enchufes y arnés importado marca GROTE.
                                </p>
                                <p>
                                    <strong>
                                        Pintura:

                                    </strong>primario epóxico con esmalte automotivo, al color requerido.
                                </p>

                            </section>

                        <?php
                            //plataforma
                        } elseif($_GET['id'] == 5) {
                        ?>
                            <section class="estructura">
                                <h4><strong> ESTRUCTURA</strong></h4>
                                <p>
                                    <strong>
                                        Vigas principales:
                                    </strong> Viga tipo “I” formada con acero de alta resistencia ASTM-A572
                                </p>
                                <p>
                                    <strong>
                                        Puentes travesaños:
                                    </strong>Tipo “I” estructural de 4” de 80,000 lbs
                                </p>
                                <p>
                                    <strong>
                                        Acoplador superior:
                                    </strong> Fijo soldado con placa de 3/8" con perno rey marca HOLLAND
                                </p>
                                <p>
                                    <strong>
                                        Defensa:
                                    </strong>Tipo estribo soldada a las vigas principales, con canal estructural de 6”.
                                </p>
                                <p>
                                    <strong>
                                        Piso:
                                    </strong>
                                    De madera de pino de 1 1/2. de espesor.
                                </p>
                                <p>
                                    <strong>
                                        Concha:
                                    </strong>fabricada en ptr y lámina a una altura de 1.20
                                </p>

                            </section>
                            <section class="suspencion">
                                <h4><strong> SUSPENSIÓN</strong></h4>
                                <p>
                                    <strong>Suspensión: </strong> Neumática <input class="input-xlarge hendrix" id="hendrix" name="hendrix" value="Hendrickson" readonly/> HT-300 de 30,000lbs.
                                </p>
                                <p>
                                    <strong>Ejes: </strong> <input type="text" class="ejes2"  name="ejes2" id="ejes2" readonly placeholder="(2)"/> en espesor de 3/4, capacidad de 30,000lbs.
                                </p>
                                <p>
                                    <strong>Frenos: </strong> sistema ABS 4S/2M.
                                </p>
                                <p>
                                    <strong>Rines: </strong>
                                    <input type="text" class="rines"  name="rines" id="rines" readonly placeholder="(8)"/>
                                    rhims unimont 24.5.
                                </p>
                                <p>
                                    <strong> <label for="llantas">Llantas:</label> </strong>
                                    <input type="text" class="llantas" name="no_llantas" id="no_llantas" readonly placeholder="(8)" />
                                    11R24.5 marca
                                    <select name="llantas" id="llantas">
                                        <option value="UNIROYAL">UNIROYAL</option>
                                        <option value="GENERAL">GENERAL</option>
                                        <option value="CONTINENTAL">CONTINENTAL</option>
                                        <option value="MICHELIN">MICHELIN</option>
                                        <option value="TRIANGLE">TRIANGLE</option>
                                        <option value="BFGODDRICH">BFGODDRICH</option>

                                    </select>
                                    .
                                </p>
                                <p>
                                    <strong>Patines: </strong> un juego; mecánicos de 2 velocidades marca HOLLAND.
                                </p>
                                <p>
                                    <strong>Porta llantas: </strong> tipo canastilla.
                                </p>
                                <p>
                                    <strong>Gancho de arrastre: </strong> marca HOLLAND.
                                </p>

                            </section>
                            <section class="luces_pintura">
                                <h4><strong>LUCES Y PINTURA</strong></h4>

                                <p>
                                    <strong>
                                        Sistema eléctrico:

                                    </strong>reglamentario SCT, luces LED, enchufes y arnés importado marca GROTE.
                                </p>
                                <p>
                                    <strong>
                                        Pintura:

                                    </strong>primario epóxico con esmalte automotivo, al color requerido.
                                </p>

                            </section>
                       <?php
                        } elseif($_GET['id']== 6) {

                            ?>
                            <section class="estructura">
                                <h4><strong> ESTRUCTURA</strong></h4>
                            </section>
                            <section class="suspencion">
                                <h4><strong> SUSPENCIÓN</strong></h4>

                            </section>
                            <section class="luces_pintura">
                                <h4><strong>LUCES Y PINTURA</strong></h4>

                            </section>

                        <?php
                        }elseif($_GET['id'] == 7) {

                        }
                        ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-offset-1 col-md-10">
                        <table id="items" class="table table-responsive" border="0">

            			    <tbody>
                            <tr>
                                <th></th>
                                <th>Precio</th>
                                <th>Iva</th>
                                <th>Total</th>
                            </tr>
                                <tr class="item-row">
                                    <td class="item-name">
                                        <div>
                                            <strong>Precio vehiculo</strong>
                                        </div>
                                    </td>

                                    <td>

                                    <input type="text" id="cantidad_precio" class="cost" id="precio_cotiza" name="precio_cotiza" placeholder="$0.00" required/>
                                    </td>

                                    <td>
                                        <input type="text" class="price iv" id="precio_veh" name="precio_veh" disabled readonly placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="iva" id="total_v" name="total_v" disabled readonly placeholder="$0.00"/>
                                    </td>
                                </tr>

                            <tr>
                                <td colspan="4">
                                    <strong style="font-size:25px;">Opcionales</strong>
                                </td>
                            </tr>


                            <tr class="item-row">
                            <td class="item-name">
                                <div>
                                    <strong>Patin Extra</strong>
                                </div>
                            </td>

                            <td>
                                <input type="text" class="cost opc" id="patin_ext" name="patin_ext" placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="price iv" id="precio_u1" name="precio_u1" disabled readonly placeholder="$0.00"/>
                            </td>
                            <td>
                                <input type="text" class="iva" id="total" name="total" disabled readonly placeholder="$0.00"/>
                            </td>
                        </tr>

                        <tr class="item-row">
                            <td class="item-name">
                                <div >
                                    <strong>Retractil 1 eje</strong>
                                </div>
                            </td>

                            <td>
                                <input type="text" class="cost opc" id="retractil_1" name="retractil_1" placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="price iv" id="precio_u2" name="precio_u2" disabled readonly placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="iva" id="total1" name="total1" disabled readonly placeholder="$0.00"/>
                            </td>
                        </tr>
                        <tr class="item-row">
                            <td class="item-name">
                                <div >
                                    <strong>Retractil 2 ejes</strong>
                                </div>
                            </td>

                            <td>
                                <input type="text" class="cost opc" id="retractil_2" name="retractil_2" placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="price iv" id="precio_u3" name="precio_u3" disabled readonly placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="iva" id="total2" name="total2" disabled readonly placeholder="$0.00"/>
                            </td>
                        </tr>

                        <tr class="item-row">
                            <td class="item-name">
                                <div >
                                    <strong>Caja de herramientas</strong>
                                </div>
                            </td>

                            <td>
                                <input type="text" class="cost opc" id="caja_h" name="caja_h" placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="price iv" id="precio_u4" name="precio_u4" disabled readonly placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="iva" id="total3" name="total3" disabled readonly placeholder="$0.00"/>
                            </td>
                        </tr>

                        <tr class="item-row">
                            <td class="item-name">
                                <div >
                                    <strong>Gancho de arrastre PH-400 Holland</strong>
                                </div>
                            </td>

                            <td>
                                <input type="text" class="cost opc" id="gancho_holland" name="gancho_holland" placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="price iv" id="precio_u5" name="precio_u5" disabled readonly placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="iva" id="total4" name="total4" disabled readonly placeholder="$0.00"/>
                            </td>
                        </tr>

                        <tr class="item-row">
                            <td class="item-name">
                                <div >
                                    <strong>Autonflado 2 ejes</strong>
                                </div>
                            </td>

                            <td>
                                <input type="text" class="cost opc" id="autoinflado_2" name="autoinflado_2" placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="price iv" id="precio_u6" name="precio_u6" disabled readonly placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="iva" id="total5" name="total5" disabled readonly placeholder="$0.00"/>
                            </td>
                        </tr>
                        <tr class="item-row">
                            <td class="item-name">
                                <div >
                                    <strong>Autonflado 3 ejes</strong>
                                </div>
                            </td>

                            <td>
                                <input type="text" class="cost opc" id="autoinflado_3" name="autoinflado_3" placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="price iv" id="precio_u7" name="precio_u7" disabled readonly placeholder="$0.00"/>
                            </td>

                            <td>
                                <input type="text" class="iva" id="total6" name="total6" disabled readonly placeholder="$0.00"/>
                            </td>
                        </tr>
                            <?php
                            //Opcioales Caja seca
                            if($_GET['id'] == 4) {
                                ?>

                                <tr class="item-row">
                                    <td class="item-name">
                                        <div >
                                            <strong>Puerta Cortina</strong>
                                        </div>
                                    </td>

                                    <td>
                                        <input type="text" class="cost opc" id="puerta_cortina" name="puerta_cortina" placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="price iv" id="precio_u8" name="precio_u8" disabled readonly placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="iva" id="total7" name="total7" disabled readonly placeholder="$0.00"/>
                                    </td>
                                </tr>
                                <tr class="item-row">
                                    <td class="item-name">
                                        <div >
                                            <strong>Ventilas</strong>
                                        </div>
                                    </td>

                                    <td>
                                        <input type="text" class="cost opc" id="ventilas" name="ventilas" placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="price iv" id="precio_u9" name="precio_u9" disabled readonly placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="iva" id="total8" name="total8" disabled readonly placeholder="$0.00"/>
                                    </td>
                                </tr>

                                <tr class="item-row">
                                    <td class="item-name">
                                        <div >
                                            <strong>Puerta lateral</strong>
                                        </div>
                                    </td>

                                    <td>
                                        <input type="text" class="cost opc" id="puerta _latetal" name="puerta_lateral" placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="price iv" id="precio_u11" name="precio_u11" disabled readonly placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="iva" id="total10" name="total10" disabled readonly placeholder="$0.00"/>
                                    </td>
                                </tr>
                                <tr class="item-row">
                                    <td class="item-name">
                                        <div >
                                            <strong>Interior linner</strong>
                                        </div>
                                    </td>

                                    <td>
                                        <input type="text" class="cost opc" id="interior_linner" name="interior_linner" placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="price iv" id="precio_u12" name="precio_u12" disabled readonly placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="iva" id="total11" name="total11" disabled readonly placeholder="$0.00"/>
                                    </td>
                                </tr>
                                <tr class="item-row">
                                    <td class="item-name">
                                        <div >
                                            <strong>Sistema antivolcadura</strong>
                                        </div>
                                    </td>

                                    <td>
                                        <input type="text" class="cost opc" id="antivolcadura" name="antivolcadura" placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="price iv" id="precio_u13" name="precio_u13" disabled readonly placeholder="$0.00"/>
                                    </td>

                                    <td>
                                        <input type="text" class="iva" id="total12" name="total12" disabled readonly placeholder="$0.00"/>
                                    </td>
                                </tr>
                            <?php
                            }

                            ?>
                            <tr class="item-row">
                                <td class="item-name">
                                    <div >
                                        <strong>Piso antiderrapante</strong>
                                    </div>
                                </td>

                                <td>
                                    <input type="text" class="cost opc" id="piso_antiderrapante" name="piso_antiderrapante" placeholder="$0.00"/>
                                </td>

                                <td>
                                    <input type="text" class="price iv" id="precio_u10" name="precio_u10" disabled readonly placeholder="$0.00"/>
                                </td>

                                <td>
                                    <input type="text" class="iva" id="total9" name="total9" disabled readonly placeholder="$0.00"/>
                                </td>
                            </tr>
                            <tr class="item-row">
                                <td class="item-name">
                                    <div >
                                        <strong>Winches</strong>
                                    </div>
                                </td>

                                <td>
                                    <input type="text" class="cost opc" id="winches" name="winches" placeholder="$0.00"/>
                                </td>

                                <td>
                                    <input type="text" class="price iv" id="precio_u14" name="precio_u14" disabled readonly placeholder="$0.00"/>
                                </td>

                                <td>
                                    <input type="text" class="iva" id="total9" name="total13" disabled readonly placeholder="$0.00"/>
                                </td>
                            </tr>
                        <tr>
                            <td colspan="4">
                                <strong style="font-size:25px;">Totales</strong>
                            </td>
                        </tr>

                        <tr>
                            <td   class="item-name">
                                <strong>Precio</strong>
                            </td>

                            <td class="total-value">
                                <div id="subtotal">
                                    <input type="number" id="precio_cotiza" name="cantidad_precio" placeholder="$0.00" disabled readonly />
                                </div>
                            </td>
                            <td  class="blank"></td>
                            <td  class="blank"></td>

                        <tr>
                            <td  class="item-name">
                                <strong>Total Opcionales</strong>
                            </td>
                            <td class="total-value">
                                <div id="total">
                                    <input type="number" id="total_opcionales" name="total_opcionales" placeholder="$0.00" disabled readonly />
                                </div>
                            </td>
                            <td  class="blank"></td>
                            <td  class="blank"></td>
                        </tr>
                        <tr>
                            <td  class="item-name">
                                <strong>Total IVA</strong>
                            </td>
                            <td class="total-value">
                                <div id="total">
                                    <input type="number" id="total_iva" name="total_iva" placeholder="$0.00" disabled readonly />
                                </div>
                            </td>
                            <td  class="blank"></td>
                            <td  class="blank"></td>
                        </tr>

                        <tr>


                            <td  class="item-name">
                                <strong>Total</strong>
                            </td>

                            <td class="total-value balance">
                                <div class="due">
                                    <input type="number" id="total_total" name="total_total" placeholder="$0.00" disabled readonly>
                                </div>
                            </td>
                            <td  class="blank"></td>
                            <td  class="blank"></td>
                        </tr>

			</tbody>
		</table>
		<section class="pagos2">
			<p>
				Tiempo de entrega: <span>
					<input type="number" id="dias" name="dias" placeholder="12" required/>
					días hábiles después del anticipo.</span>
			</p>
			<p>
				L.A.B.: <span>Cuautla, Morelos.</span>
			</p>
			<p>
				Condiciones de pago: $
				<input type="number" id="fifty" name="fifty" readonly />
				<select name="porcentaje" id="porcentaje" required>
					<option value="0" selected>0</option>
					<option value="0.2">20 </option>
					<option value="0.3">30 </option>
					<option value="0.4">40 </option>
					<option value="0.5">50 </option>
					<option value="0.6">60 </option>
					<option value="0.7">70 </option>
				</select>
				% de anticipo y  $
				<input type="number" class="fifty2" id="fifty2" name="fifty2" readonly />
				<input type="number" id="porcentaje2" name="porcentaje2" readonly />
				% contra entrega.</span>
			</p>
		</section>
					</div>
				</div>
				<input type="submit" value="Enviar" name="Enviar" id="enviar" class="btn btn-success btn-block"/>

				<div class="alert-material-amber"></div>
				<div class="row">
					<footer class="titulo">
						<p>
							Calle Calvario s/n Esq. Av. Insurgentes, Col. Guadalupe Victoria C.P.62746
						</p>
						<p>
							01 (735) 353 52 50 - 353 31 27-353 8577
						</p>
						<p>
							www.trapmsa.com.mx
						</p>
					</footer>
				</div>

		</div>

		</form>

		<label for="cosa" class="label-danger"></label>
	</body>

	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/enviar.js"> </script>


</html>