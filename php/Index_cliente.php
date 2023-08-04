<?php
session_start();
/*if(!isset($_SESSION['usuario'])){
    header("Location: ../html/inicioSesion.html");
    exit(0);

}*/


if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
    $db = new mysqli('localhost', 'root', '', 'carshop');

    $stmt = $db->prepare('SELECT nombre, adm FROM usuarios WHERE correo = ? AND contrasena = ?');
    $stmt->bind_param('ss', $_POST['correo'], $_POST['contrasena']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['correo'] = $_POST['correo'];
        $_SESSION['nombre'] = $row['nombre'];
        if ($row['adm']) {
            header('Location: Index_admin.php');
        } else {
            header('Location: Index_cliente.php');
            
        }
        exit;
    } else {
        // El correo electrónico o la contraseña son incorrectos
        // Manejar este caso como desees
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/car.jpg">
    <title>CARSHOP</title>
</head>

<body>
        <!--Titulo Cabecera-->
        <section class="inicio" id="inicio">
            <header id="cabeceralogo">     
                <div>       
                <h1>CARSHOP</h1> 
                <h2>Conduce tus propios sueños</h2>
              
                </div>   
                <nav>
                <div class="Logo">
                <img src="../img/logo (2).png" alt="" class="logo">
                </nav>
            </header>

      <!---Barra de nav-->
    
      <nav id="menuprincipal">     
        <div> 
            <ul id="listamenu">       
                <li class="caja-2"><a href="#">Inicio</a></li>
                <li><a href="subirAuto_vend.php">Quieres vender?</a></li>
                <li><a href="autos_comp.php">Quieres comprar?</a></li>  

               <!-- <li><a href="autos_comp.php">Autos</a></li>
                <li><a href="subirAuto_vend.php">Subir Autos</a></li>
                <li><a href="mostarVehiculos_vend.php">Mis Autos</a></li> -->
                <li class="caja-2"><a href="cerrarSesion.php">Cerrar sesión</a></li>     
             </ul>                                  
        </div>  
        </nav> 

    
            <!---Menu HAMBURGUESA-->

            <head class="objetivo-head" id="inicio">
                <img src="../img/bx-menu-alt-right.svg" alt="" class="photo">
                <nav class="menu-navegacion">
                    <a href="#">Inicio</a>
                    <a href="objetivo.html">Objetivo</a>
                    <a href="quienes.html">¿Quiénes somos?</a>
                    <a href="Misión_Visión.html">Misión y visión</a>
                    <a href="vehiculos.html">Autos</a>
                    <a href="contacto.html">Contacto</a>
                    <a href="Iniciar_sesion.html">Iniciar sesión</a>
                </nav>
            </head>

            <!---BANNER--->
            <section class="bienvenidos" id="bienvenidos"></section>
            <div class="header">

            <?php if (isset($_REQUEST['nombreR'])): ?>
                <p class="titulo">Bienvenido, <?= htmlspecialchars($_REQUEST['nombreR']) ?>!</p>
            <?php endif; ?>

            </div>

        <main>
              <!---TARJETAS-->
         
        </main>

    <br>
    <br>
    <br>
    <br>
          <!---SERVICIOS--->
            <section class="servicios" id="servicios">
                <div class="contenedor-servicio"> 
                <img src="../img/joey-banks-YApiWyp0lqo-unsplash.jpg" alt="" class="img-galeria">
                <div class="checklist-servicio">
                <h2 class="subtitulos">Servicios</h2>
                <div class="service">
                <h3 class="n-service">
                <p>1- Compramos tu auto de manera fácil y rápida (evaluandolo al mejor precio que puedas encontrar)</p>
                <p>2- Venta de autos seminuevos en muy buenas condiciones (contamos con un amplio catalogo de vehículos)</p>
                </div>
                </section>

                <div class="box3">
                </div>
                   
          
        <!--footer-->

        <footer id="contacto">
            <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">Contacto </h2>
                    <p>Número telefónico: 5517009776/ 5519696282 </p>
                    <p>Dirección: Av.   Ejido   Colectivo,   Orfebres,   56353 Nezahualcóyotl, Méx.</p>
                    <small>&copy; Derechos Reservados 2023 CarCheap</small>
    
                </div>
                <div class="social-media">
                    <a href="https://www.facebook.com/profile.php?id=100089353427427&mibextid=ZbWKwL" class="social-media-icon">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="https://twitter.com/Carshop_ofc?t=f4GCpRzobfC6AselaDYVeg&s=09"  class="social-media-icon">
                    <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="https://instagram.com/carshop_ofc?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" class="social-media-icon">
                    <i class="bx bxl-instagram" ></i>
                    </a>
                </div>
                <div class="line"></div>
        </footer>        
        <script src="../js/menu.js"></script>
        <script src="../js/lightbox.js"></script>
</body>
</html>