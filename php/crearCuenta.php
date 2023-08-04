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

<body class="formulario-se">
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
                <li class="caja-2"><a href="../index.html">Inicio</a></li>  
                <li class="caja-2"><a href="../html/objetivo.html">Objetivo</a></li>   
                <li class="caja-1"><a href="../html/quienesSomos.html">¿Quiénes somos?</a></li>    
                <li><a href="../html/misionVision.html">Misión y visión</a></li> 
                <li><a href="../html/autos.html">Autos</a></li>
                <li><a href="../html/contacto.html">Contacto</a></li>   
                <li class="caja-2"><a href="../html/inicioSesion.html">Iniciar sesión</a></li> 
                   
             </ul>                                  
        </div>   
        </nav> 

    
            <!---Menu HAMBURGUESA-->

            <head class="objetivo-head" id="inicio">
                <img src="../img/bx-menu-alt-right.svg" alt="" class="photo">
                <nav class="menu-navegacion">
                    <a href="../index.html">Inicio</a>
                    <a href="objetivo.html">Objetivo</a>
                    <a href="quienesSomos.html">¿Quiénes somos?</a>
                    <a href="misionVision.html">Misión y visión</a>
                    <a href="autos.html">Autos</a>
                    <a href="contacto.html">Contacto</a>
                    <a href="inicioSesion.html">Iniciar sesión</a>
                </nav>
            </head>
            <main>
                <div>
                    <form  action="crearC.php" method="post">
                    <section class="form-registerC">
                        <h4>Nueva Cuenta</h4>
                        
                        <div id="columna1">
                            <br>
                            <br> 
                            <div>
                            Nombre
                            <input class="controlsC" type="text" name="nombre" placeholder="Nombre"  required>
                            Apellido Paterno
                            <input class="controlsC" type="text" name="apellidoP" placeholder="Apellido" required>
                        
                            Apellido Materno
                            <input class="controlsC" type="text" name="apellidoM" placeholder="Apellido" required>
                            
                               <!--   
                                    include 'crearC.php';
                                    $cur = new Crear();
                                    $cur -> cerrarBD();                      
                                -->

                            <br><br>
                            Correo electronico
                            <input class="controlsC" type="email" name="correo" placeholder="Ingrese su correo" required><br>
                            Contraseña
                            <input class="controlsC" type="password" name="contrasena" placeholder="Ingrese su contraseña" required><br>
                            Telefono:
                            <input class="controlsC" type="number" name="telefono" placeholder="Ingrese su telefono" min="0" minlength="10" maxlength="10" required><br>
                            Direccion:
                            <input class="controlsC" type="text" name="direccion" placeholder="Ingrese su Direccion" required><br>
                            </div>

                            <input type='hidden' name= 'opcion' value= '1'>
                            <input class="botonsC" id="boton" type="submit" value="Registrar">
                                
                    </div>
                    </section> 
                </form>
                </div>
        </main>
        <br><br>
        <br><br>
        <br>

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