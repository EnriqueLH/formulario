<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signos Zodiacales</title>
	<link rel="stylesheet" type="text/css" href="signo.css">
</head>
<body>
<?php
	
	$nombre=$_POST['nombre'];
	$mes=$_POST['mes'];
	$dia=intval($_POST['dia']);
	$signo;
	$imgsigno;
	$descripcion_signo;

switch ($mes) {
	case 'Marzo':
		if($dia>20){
			$signo="Aries";
			$imgsigno = "imgsignos/aries.jpg";
		}else{
			$signo="Piscis";
			$imgsigno = "imgsignos/piscis.jpg";
		}
		break;
}

switch ($mes) {
	case 'Abril':
		if($dia>19){
			$signo="Tauro";
			$imgsigno = "imgsignos/tauro.jpg";
		}else{
			$signo="Aries";
			$imgsigno = "imgsignos/aries.jpg";
		}
		break;
}

switch ($mes) {
	case 'Mayo':
		if($dia>20){
			$signo="Geminis";
			$imgsigno = "imgsignos/geminis.jpg";
		}else{
			$signo="Tauro";
			$imgsigno = "imgsignos/tauro.jpg";
		}
		break;	
}

switch ($mes) {
	case 'Junio':
		if($dia>20){
			$signo="Cancer";
			$imgsigno = "imgsignos/cancer.jpg";
		}else{
			$signo="Geminis";
			$imgsigno = "imgsignos/geminis.jpg";
		}
		break;
}

switch ($mes) {
	case 'Julio':
		if($dia>22){
			$signo="Leo";
			$imgsigno = "imgsignos/leo.jpg";
		}else{
			$signo="Cancer";
			$imgsigno = "imgsignos/cancer.jpg";
		}
		break;
}

switch ($mes) {
	case 'Agosto':
		if($dia>23){
			$signo="Virgo";
			$imgsigno = "imgsignos/virgo.jpg";
		}else{
			$signo="Leo";
			$imgsigno = "imgsignos/leo.jpg";
		}
		break;
}

switch ($mes) {
	case 'Septiembre':
		if($dia>22){
			$signo="Libra";
			$imgsigno = "imgsignos/libra.jpg";
		}else{
			$signo="Virgo";
			$imgsigno = "imgsignos/virgo.jpg";
		}
		break;
}

switch ($mes) {
	case 'Octubre':
		if($dia>22){
			$signo="Escorpio";
			$imgsigno = "imgsignos/escorpio.jpg";
		}else{
			$signo="Libra";
			$imgsigno = "imgsignos/libra.jpg";
		}
		break;
}

switch ($mes) {
	case 'Noviembre':
		if($dia>21){
			$signo="Sagitario";
			$imgsigno = "imgsignos/sagitario.jpg";
		}else{
			$signo="Escorpio";
			$imgsigno = "imgsignos/escorpio.jpg";
		}
		break;
}

switch ($mes) {
	case 'Diciembre':
		if($dia>21){
			$signo="Capricornio";
			$imgsigno = "imgsignos/capricornio.jpg";
		}else{
			$signo="Sagitario";
			$imgsigno = "imgsignos/sagitario.jpg";
		}
		break;
}

switch ($mes) {
	case 'Enero':
		if($dia>19){
			$signo="Acuario";
			$imgsigno = "imgsignos/acuario.jpg";
		}else{
			$signo="Capricornio";
			$imgsigno = "imgsignos/capricornio.jpg";
		}
		break;
}

switch ($mes) {
	case 'Febrero':
		if($dia>19){
			$signo="Piscis";
			$imgsigno = "imgsignos/piscis.jpg";
		}else{
			$signo="Acuario";
			$imgsigno = "imgsignos/acuario.jpg";
		}
		break;
}

if ($signo == "Cancer" || $signo == "Escorpio" || $signo == "Piscis") {
        $descripcion_signo = "eres una persona que ama comunicarse y entablar relaciones con otras personas.";
}

if ($signo == "Aries" || $signo == "Leo" || $signo == "Sagitario") {
        $descripcion_signo = "eres una persona apasionada, dinámica y temperamental.";
}
    
if ($signo == "Tauro" || $signo == "Virgo" || $signo == "Capricornio") {
        $descripcion_signo = "eres una persona conservadora y realista, pero también emocional.";
}

if ($signo == "Geminis" || $signo == "Libra" || $signo == "Acuario") {
        $descripcion_signo = "eres una persona pensadora, amigable, intelectual, comunicativa y analítica.";
}

?>

<?php if  ($nombre == "") { ?>
	<div class="informacion_signo">
		<p>No has ingresado tu nombre, porfavor vuelve a intentarlo.</p>
		<br>
		<a href="index.html" class="btn">Regresar</a>
	</div>
<?php } else { ?>
	<div class="informacion_signo">
		<p>Hola <?php echo $nombre; ?>, naciste el <?php echo $dia; ?> del mes de <?php echo $mes; ?> y tu signo es <?php echo $signo; ?>, por lo tanto <?php echo $descripcion_signo; ?></p>
		<center>
			<img src="<?php echo $imgsigno; ?>">
		</center>
		<br><br>
		<a href="index.html" class="btn">Regresar</a>
	</div>
<?php } ?>
