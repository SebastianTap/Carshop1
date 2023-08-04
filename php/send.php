<?php

//librerias
  require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();

//Configuracion servidor mail
$mail->From = "carshopolveragarcia@gmail.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='carshopolveragarcia@gmail.com'; //nombre usuario
$mail->Password = 'utcziwfxlzssyowp'; //contraseña

//Agregar destinatario
$mail->AddAddress("j.ivan_olvera_garcia@hotmail.com");
$mail->Subject = "prueba en local host";
$mail->Body = "prueba";

//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
    echo'<script type="text/javascript">
           alert("Enviado Correctamente");
        </script>';
} else {
    echo'<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo");
        </script>';
}
