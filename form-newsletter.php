<?php

  $email = $_POST['contact2'];

  $body = "
  <!DOCTYPE html>
  <html lang='en'>
    <head>
      <title>Newsletter</title>

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
        <p>Hola, quiero suscribirme las novedades de Campobasso, mi email es: </b>" . $email . "</p>
      </div>
    </body>
  </html>
  ";

// -------------

include_once 'config.php';

// -------------

$mail->Body = $body;
$mail->Subject = 'Quiero suscribirme a las newsletter!';
$mail->setFrom($email, $email);

$mail->addAddress('quesocampobasso@gmail.com', 'Campobasso'); // receiver
$mail->addBCC('esteban@1828branding.com', 'Esteban'); // cco

// $mail->addAddress('nicolopezcesan@gmail.com', 'Campobasso'); // receiver
// // $mail->addCC('nicolas.lopez.cesan@ayi.group', 'NombreDeCopia'); // cc
// $mail->addBCC('nicolas.lopez.cesan@ayi.group', 'Esteban'); // cco

if (!$mail->send()) {
  echo 'El mensaje no pudo ser enviado.';
  echo 'Error de correo: ' . $mail->ErrorInfo;
} else {
  echo 'El mensaje ha sido enviado exitosamente.';
}

?>