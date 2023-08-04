<?php


    $db = new mysqli('localhost', 'root', '', 'carshop');
    $stmt = $db->prepare('SELECT nombre, adm FROM usuarios WHERE correo = ? AND contrasena = ?');
    $stmt->bind_param('ss', $_POST['correo'], $_POST['contrasena']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = mysqli_fetch_assoc($result);
    $stmt->close();
    if($row > 1){
        //echo "--->".$row['adm'];
        if ($row['adm']==1) {
            session_start();
            $nombreR=$row['nombre'];
            //echo "eres admin";
            header("Location: ../php/Index_admin.php?nombreR=$nombreR");
        }else if($row['adm']==0) {
            session_start();
            $nombreR=$row['nombre'];
            //echo "eres cliente";
            header("Location: ../php/Index_cliente.php?nombreR=$nombreR");
            
        } 
    }else{
        //echo "no Existe usuario";
        header('Location: ../html/inicioSesion.html');
    }
   

    
?>