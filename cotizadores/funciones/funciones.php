<?php


//exit();
include "../../Conexion.php";


$query = "INSERT INTO cotizaciones (fecha, cliente, email, folio_cotizacion, tipo_cotiza, id_usuario)
 VALUES ('$fecha', '$cliente','$email', '$folio','$tipo_cotiza','$id_usuario' )
 ";
#Resultado
$resultado = $conexion -> query($query) or die($conexion -> error . __LINE__);


//$dir = dirname(__FILE__);
require_once ("../includes/dompdf/dompdf_config.inc.php");
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

require_once("../includes/swift/swift_required.php");

$mailer = new Swift_Mailer(new Swift_MailTransport()); // Create new instance of SwiftMailer

$message = Swift_Message::newInstance()
    ->setSubject('Cotización', $invoice) // Message subject
    ->setTo(array($email => $cliente, 'ventas@trapmsa.com.mx' => 'Ventas TRAPMSA')) // Array of people to send to
    ->setFrom(array('ventas@trapmsa.com.mx' => 'Cotizaciones Trapmsa')) // From:
    ->setBody($html_message, 'text/html') // Attach that HTML message from earlier
    ->attach(Swift_Attachment::newInstance($pdf, $filename, 'application/pdf')); // Attach the generated PDF from earlier

// Send the email, and show user message
if ($mailer->send($message))
    $success = true;
else
    $error = true;



?>