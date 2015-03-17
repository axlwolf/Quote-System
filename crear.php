<?php

require 'clase_conecta.php';

if (!empty($_POST['titulo']) and empty($_POST['id'])) {
	// keep track validation errors
	$nameError = null;
	$emailError = null;
	$mobileError = null;

	// keep track post values
	$titulo = $_POST['titulo'];
	$intro = $_POST['intro'];
	$nota = $_POST['nota'];
	$tipo = $_POST['tipo'];
	$fecha = date("Y-m-d H:i:s");
	// validate input
	$valid = true;
	if (empty($titulo)) {
		$nameError = 'Ingresa el título de la noticia';
		$valid = false;
	}

	if (empty($intro)) {
		$emailError = 'Inresa estracto de la noticia';
		$valid = false;
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailError = 'Please enter a valid Email Address';
		$valid = false;
	}

	if (empty($nota)) {
		$mobileError = 'Ingresa la noticia';
		$valid = false;
	}
	if (empty($tipo)) {
		$valid = false;
	}

	//subir la imagen del articulo
	$nameimagen = $_FILES['imagen']['name'];
	$tmpimagen = $_FILES['imagen']['tmp_name'];
	$extimagen = pathinfo($nameimagen);
	$urlnueva = "noticias/" . $id . ".jpg";
	if (is_uploaded_file($tmpimagen)) {
		copy($tmpimagen, $urlnueva);
	}

	// insert data
	if ($valid) {
		$pdo = Database::connect();
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO noticias (titulo, intro, texto, tipo, fecha) VALUES  values(?, ?, ?, ?, ?)";
		$q = $pdo -> prepare($sql);
		$q -> execute(array($titulo, $intro, $nota, $tipo, $fecha));
		echo '<div class="alert alert-success"><strong>Noticia creada con Exito!</strong></div>';
		Database::disconnect();
		header("Location: crear.php");
	}
}
?>
<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
   <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootflat.css" />
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Nueva noticia</h3>
                    </div>
             
                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group <?php echo !empty($nameError) ? 'error' : ''; ?>">
                        <label class="control-label">Título de noticia</label>
                        <div class="controls">
                            <input type="text" name="titulo" id="titulo" required autocomplete="off" autofocus value="<?php echo $dato['titulo']; ?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError; ?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($emailError) ? 'error' : ''; ?>">
                        <label class="control-label">Introducción de la noticia</label>
                        <div class="controls">
                            <textarea name="intro" id="intro" required><?php echo $dato['intro']; ?></textarea>
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError; ?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($mobileError) ? 'error' : ''; ?>">
                        <label class="control-label">Nota</label>
                        <div class="controls">
                           <textarea name="nota" id="nota" required><?php echo $dato['texto']; ?></textarea>
                            <?php if (!empty($mobileError)): ?>
                                <span class="help-inline"><?php echo $mobileError; ?></span>
                            <?php endif; ?>
                        </div>
                      </div>
					  <div class="control-group">
					   <label class="control-label">Tipo</label>
					   <div class="controls">
						<select name="tipo" id="tipo">
            	
            			<option value="Noticias">Noticias</option>
             
						</select>
					  
					    </div>
					  </div> 
					  <div class="control-group">
					   <label class="control-label">Imagen de Presentación</label>
					   <div class="controls">
						
							<input type="file" class="btn" name="imagen" id="imagen">
					  
					    </div>
					  </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Crear</button>
                          <a class="btn" href="crud.php">Regresar</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
