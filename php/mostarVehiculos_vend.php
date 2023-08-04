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

                <li><a href="autos_comp.php">Autos</a></li>
                <li><a href="subirAuto_vend.php">Subir Autos</a></li>
                <li><a href="mostarVehiculos_vend.php">Mis Autos</a></li>
                <li class="caja-2"><a href="../index.html">Cerrar sesión</a></li>             
             </ul>                                  
        </div>   
        </nav> 
    <!---Menu-->

    <header class="heaer" id="inicio">
        <img src="../img/bx-menu-alt-right.svg" alt="" class="photo">
        <nav class="menu-navegacion">
                <a href="../html/Index_admin.html">Inicio</a>      
                <a href="Mantener_cliente.html">Cliente</a> 
                <a href="#">Vehiculos</a>
                <li><a href="../html/marcas.html">Marcas</a></li>
                <li><a href="../html/submarcas.html">Submarcas</a></li>
                <li><a href="../html/tipo.html">Tipos de auto</a></li>
                <a href="../index.html">Cerrar sesion</a> 
        </nav>
    </header>
    
        <main>
            <section id="articulosprincipales">
                <h1>Lista de vehiculos</h1>
            </section>
        </main>
        <main>
            <div class="table">
                
                    <?php
                        include "vehiculo_vend.php";
                        $ve = new Vehiculo();
                        $ve -> listarVehiculo();
                    ?>
                
            </div>
        </main>
        <div class="recuperar"></div> 
        <footer id="contacto">
            <div class="contenedor footer-content">
            <div class="contact-us">
            <h2 class="brand">Contacto </h2>
            <p>Número telefónico: 5517009776/ 5519696282 </p>
            <p>Dirección: Av.   Cuarta,   55556 Nezahualcóyotl, Méx.</p>
            <small>&copy; Derechos Reservados 2023 Carshop </small>     
            </div>
        
            <div class="social-media">
            <a href="https://www.facebook.com/profile.php?id=100089353427427&mibextid=ZbWKwL" class="social-media-icon">
            <i class='bx bxl-facebook'></i></a>
            <a href="https://twitter.com/Carcheap1?t=9j6VuqGw5dPBdiTh4Q-pRg&s=09" class="social-media-icon">
            <i class='bx bxl-twitter'></i></a>
            <a href="https://instagram.com/carcheap_?igshid=ZDdkNTZiNTM="  class="social-media-icon">
            <i class='bx bxl-instagram' ></i> </a>
            </div>
            </div>
            <div class="line"></div>
        </footer>
        
        
        <script src="../js/menu.js"></script>
        <script src="../js/lightbox.js"></script>
   </body>
</html>