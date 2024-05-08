<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = "
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Contacto</title>

    <style>
      body {
        font-family: sans-serif;
        line-height: 12px;
      }
      div {
        padding: 10px 5px;
      }
      h2 {
        padding: 5px 0;
      }
    </style>
  </head>
 
  <body>
    <div>
      <h2>Datos de contacto:</h2>
      <p><b> Nombre y Apellido: </b>" . $name . "</p>
      <p><b> Telefono: </b>" . $phone . "</p>
      <p><b> Email: </b>" . $email . "</p>
      <p><b> Mensaje: </b>" . $message . "</p>
    </div>
  </body>
</html>
";

// -------------

include_once 'config.php';

// -------------

$mail->Body = $body;
$mail->Subject = 'Consulta Web desde quesoscampobasso.com';
$mail->setFrom($email, $name);

$mail->addAddress('quesocampobasso@gmail.com', 'Campobasso'); // receiver
$mail->addBCC('esteban@1828branding.com', 'Esteban'); // cco

// $mail->addAddress('nicolopezcesan@gmail.com', 'Campobasso'); // receiver
// $mail->addBCC('nicolas.lopez.cesan@ayi.group', 'Esteban'); // cco

if (!$mail->send()) {
  echo 'El mensaje no pudo ser enviado.';
  echo 'Error de correo: ' . $mail->ErrorInfo;
} else {
  echo 'El mensaje ha sido enviado exitosamente';
}

?>