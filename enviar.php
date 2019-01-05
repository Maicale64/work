<?php
$destino = "maicale64@gmail.com";
$nombre= $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo ."\nTelefono: " . $telefono . "\nMensaje: " .$mensaje;
if(mail('maicale64@gmail.com', $contenido)){
  echo "mail enviado";
}
else {
  echo "no enviado";
}
 ?>
