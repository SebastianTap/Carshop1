<?php

include ('conexionMarcasAdm.php');
$con= connection();

$correo= $_POST['correo'];

$db= new mysqli('localhost', 'root', '', 'carshop');
$stmt=$db->prepare('SELECT correo, contrasena FROM usuarios WHERE correo = ?');
$stmt->bind_param('s',$correo);
$stmt->execute();
$result= $stmt->get_result();
$row= mysqli_fetch_assoc($result);
$stmt->close();


if($row['correo']!=$correo){
    echo '<script> 
    alert("El correo que ingreso no es correcto"); 
    window.location="recuperarContraseña.php"
</script>';

}else{
    require ('PHPMailer/PHPMailerAutoload.php');

    $contra=$row['contrasena'];

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
$mail->AddAddress($correo);
$mail->Subject = "Recuperacion de contrasena en Carshop: ";
$mail->Body = "Su contrasena es: ".$contra;

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
            
//    Header("Location: controlCuentaNueva.php?opcion=$opcion&nombre=$nombre&apellidoP=$apellidoP&apellidoM=$apellidoM&correo=$correo&contrasena=$contrasena&telefono=$telefono&direccion=$direccion");
header('Location: ../html/inicioSesion.html');            
    
}


?>