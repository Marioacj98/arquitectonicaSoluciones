<?php
//Llamando a los campos
$nombre = $_POST['name'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$mensaje = $_POST['message'];

//Datos para el correo
$destinatario = "arquitectonica.soluciones@hotmail.com";
$asunto = "Nuevo contacto desde Arquitectónica Soluciones";

$mensajeCorreo = "Nuevo mensaje de contacto desde nuestra web de: \n - Nombre: $nombre \n - Teléfono: $telefono \n - Correo: $correo \n - Mensaje: $mensaje";

// Enviando mensaje
mail($destinatario, $asunto, $mensajeCorreo);
header('Location: https://arquitectonicasoluciones.com/index.html');
?>