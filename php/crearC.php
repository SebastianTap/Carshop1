<?php
//librerias 
include ('conexionMarcasAdm.php');
$con= connection();

 
        
         $nombre = $_POST['nombre'];
         $apellidoP = $_POST['apellidoP'];
         $apellidoM= $_POST['apellidoM'];
         $correo= $_POST['correo'];
         $contrasena= $_POST['contrasena'];
         $telefono= $_POST['telefono'];
         $direccion= $_POST['direccion'];
         $opcion ="1";


        $db= new mysqli('localhost', 'root', '', 'carshop');
        $stmt=$db->prepare('SELECT correo FROM usuarios WHERE correo = ?');
        $stmt->bind_param('s',$correo);
        $stmt->execute();
        $result= $stmt->get_result();
        $row= mysqli_fetch_assoc($result);
        $stmt->close();
          
        if($row['correo'] === $correo ){
                echo '<script> 
                alert("El correo ya existe"); 
                window.location="crearCuenta.php"
            </script>';
            }else{
                require ('PHPMailer/PHPMailerAutoload.php');

            mysqli_query($con, "INSERT INTO usuarios (nombre,apellidoP,apellidoM,correo,contrasena,telefono,direccion)
            VALUES('" . $nombre."','" . $apellidoP . "','".$apellidoM."','" . $correo . "','" . $contrasena. "','" . $telefono. "','".$direccion."')")
                or die("Problemas con el insert" . mysqli_error($con));

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
$mail->Subject = "CARSHOP BIENVENIDO";
$mail->Body = "Cuenta creada con exito en Carshop";

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
            
    Header("Location: controlCuentaNueva.php?opcion=$opcion&nombre=$nombre&apellidoP=$apellidoP&apellidoM=$apellidoM&correo=$correo&contrasena=$contrasena&telefono=$telefono&direccion=$direccion");
              
    }

?>