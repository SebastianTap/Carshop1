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
<body class="contactob">
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
            <a href="../html/inicioSesion.html">Iniciar sesión</a>
        </nav>
    </head>


    <!-- Contactos -->
    <div class="contentCon">
        <h1 class="titulocontacto"><b>Informacion del vendedor</b></h1>
        <br> <br>
        <div class="contactCon-wrapper">
            <div class="contactCon-form">
                <form action="">
                    <p>
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="nombre" id="Nombre" required>
                    </p>
                    <p>
                         <label for="Teléfono">Teléfono</label>
                        <input type="tel" name="telefono" id="Telefono">
                    </p>
                    <p>
                       
                        <label for="Correo">Correo eléctronico</label>
                        <input type="email" name="correo" id="Correo" required>
                    </p>
                    <p>
                        <label for="Motivo">Motivo</label>
                        <input type="text" name="motivo" id="Motivo">
                    </p>
                    
                    <p class="blockCon">
                        <label for="Comentario">Mensaje</label>
                        <textarea name="mensaje" id="Comentario" cols="30" rows="3" required></textarea>
                    </p class="blockCon">
                    <button type="submit">
                        Generar cita
                        </button>
                </form>
            </div>
            <div class="contactCon-info">
                <h2>Datos del vendedor</h2>
                <ul>
                    
                    <li><a href="" class="icono-hoverCon"> <i class='bx bxl-instagram'></i></a><a href="https://instagram.com/carcheap_?igshid=ZDdkNTZiNTM="> carshop_</a></li>
                    <li><a href="" class="icono-hoverCon"> <i class='bx bxl-facebook'></i></i></a><a href="https://www.facebook.com/profile.php?id=100089353427427&mibextid=ZbWKwL"> Carshop</a></li>
                    <li> <a href="" class="icono-hoverCon"><i class='bx bxl-twitter'></i></i></a><a href="https://twitter.com/Carcheap1?t=9j6VuqGw5dPBdiTh4Q-pRg&s=09">@Carshop1 </a></li>
                    <li><a href="" class="icono-hoverCon"> <i class='bx bxl-gmail'></i></i></a><a href=""> Carshop2023@gmail.com</a></li>
                    <br>
                    <br>
 
                    <li><i class='bx bxs-phone'></i> Número telefónico: 5517009776/ 5519696282 </li>
                    <li><i class='bx bxs-map'></i> Dirección: Av.   Ejido   Colectivo,   Orfebres,   56353 Nezahualcóyotl, Méx.</li>
                </ul>
                
            </div>
        </div>
    </div>


    
        <footer id="contacto">
            <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">Contacto </h2>
                    <p>Número telefónico: 5517009776/ 5519696282 </p>
                    <p>Dirección: Av.   Ejido   Colectivo,   Orfebres,   56353 Nezahualcóyotl, Méx.</p>
                    <small>&copy; Derechos Reservados 2023 CarShop</small>
    
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