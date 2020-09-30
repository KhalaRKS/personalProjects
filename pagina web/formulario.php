<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario de contacto</title>

<link href="hojaestilosconsulta.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<center>
    <?php 
$myemail = 'albanokainer@hotmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente, sera respondido lo antes posible.";
?>
<h1>Contacto</h1>
	<form action="formulario.php" method="post">
    <input id="email" type="email" name="correo" placeholder="CORREO">
    <input id="nombre" type="text" name="nombre" placeholder="NOMBRE">
    <br>
    <textarea id="texto" type="text" name="mensaje" placeholder="CONSULTA"></textarea>
    <br>
    <input id="enviar" type="submit" value="ENVIAR">

    </form>
    </center>
</body>
</html>
