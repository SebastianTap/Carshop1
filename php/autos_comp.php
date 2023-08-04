<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/carlog.jpg">
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
        <header class="Logo">
            <img src="../img/logo (2).png" alt="" class="logo">
        </nav>
    </header>
    <!---Barra de nav-->

    <nav id="menuprincipal">     
        <div> 
            <ul id="listamenu">       
                <li class="caja-2"><a href="Index_cliente.php">Inicio</a></li>
                <li><a href="subirAuto_vend.php">Quieres vender?</a></li>
                <li><a href="autos_comp.php">Quieres comprar?</a></li>  

               <!-- <li><a href="autos_comp.php">Autos</a></li>
                <li><a href="subirAuto_vend.php">Subir Autos</a></li>
                <li><a href="mostarVehiculos_vend.php">Mis Autos</a></li> -->
                <li class="caja-2"><a href="cerrarSesion.php">Cerrar sesión</a></li>     
             </ul>                                  
        </div>  
        </nav> 
    <!---Menu-->


    <head class="objetivo-head" id="inicio">
        <img src="../img/bx-menu-alt-right.svg" alt="" class="photo">
        <nav class="menu-navegacion">
            <a href="../index.html">Inicio</a>
            <a href="../html/objetivo.html">Objetivo</a>
            <a href="../html/quienesSomos.html">¿Quiénes somos?</a>
            <a href="../html/misionVision.html">Misión y visión</a>
            <a href="../html/autos.html">Autos</a>
            <a href="../html/contacto.html">Contacto</a>
            <a href="../index.html">Iniciar sesión</a>
        </nav>
    </head>

        
        <!--Secion de automoviles-->


        <main>
            <section>
                <div class="mision">
                    <h1>Autos</h1>
                </div>
            </section>
        </main>
        <div class="recuperar"></div>
        <main>
            <section class="caja">
                  <?php
                        include "vehiculo_vend.php";
                        $ve = new Vehiculo();
                        $ve -> listarVehiculoCards();
                    ?>
            </section>
        </main>


<!--footer-->


<footer id="contacto">
    <div class="contenedor footer-content">
    <div class="contact-us">
    <h2 class="brand">Contacto </h2>
    <p>Número telefónico: 5517009776/ 5519696282 </p>
    <p>Dirección: Av.   Ejido   Colectivo,   Orfebres,   56353 Nezahualcóyotl, Méx.</p>
    <small>&copy; Derechos Reservados 2023 CarShop </small>     
    </div>

    <div class="social-media">
                    <a href="https://www.facebook.com/profile.php?id=100089353427427&mibextid=ZbWKwL" class="social-media-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://twitter.com/Carshop_ofc?t=f4GCpRzobfC6AselaDYVeg&s=09"  class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                    </a>
                    <a href="https://instagram.com/carshop_ofc?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" class="social-media-icon">
                    <i class='bx bxl-instagram' ></i>
                    </a>
                </div>
                <div class="line"></div>
        </footer>        
        <script src="../js/menu.js"></script>
        <script src="../js/lightbox.js"></script>
</body>
</html>