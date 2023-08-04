<?php
	require ('conexion.php');
    
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
	
	$query = "SELECT id, marca FROM marca ORDER BY marca";
	$resultado=$mysqli->query($query);
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
    <script language="javascript" src="../js/jquery-3.1.1.min.js"></script>
    <title>CARSHOP</title>

    <script language="javascript">
			$(document).ready(function(){
				$("#cbx_estado").change(function () {

					
					$("#cbx_estado option:selected").each(function () {
						id = $(this).val();
						$.post("getMunicipio.php", { id: id }, function(data){
							$("#cbx_municipio").html(data);
						});
					});
				})
			});
		</script>


</head>

<body class="fondoV">
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
            <!---Formulario para crear cuenta--->
            <main>
                <div>
                    <section class="form-registerP">
                        <h4>Subir auto</h4><br>
                        <div id="columna1">
                        <?php if (isset($_REQUEST['nombreR'])): ?>
                        <p class="titulo">Bienvenido, <?= htmlspecialchars($_REQUEST['nombreR']) ?>!</p>
                        <?php endif; ?>

                            <br>
                            <br>

                          
                            <form action="ctr_subirVehiculo_vend.php" method="post" enctype="multipart/form-data">

                            <div>Selecciona Marca : <select name="cbx_estado" id="cbx_estado">
                                    <option value="0">Marca</option>
                                    <?php while($row = $resultado->fetch_assoc()) { ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['marca']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <br />
			
                            <div>Selecciona Modelo : <select name="cbx_municipio" id="cbx_municipio"></select></div>
                            
                          
                            <br><br>
                            Año
                            <input class="controlsP" type="number" name="año" placeholder="año" required>
                            Precio
                            <input class="controlsP" type="number" name="precio" placeholder="Precio" required>
                            Dirección
                            <input class="controlsP" type="text" name="direccion" placeholder="Dirección" required>
                        </div>
                        
                        <div id="columna2">
                            <br>
                            <br>
                            Descripción
                            <input class="controlsP" type="text" name="Descripcion" placeholder="Descripción" required>
                            Niv/Vin
                            <input class="controlsP" type="text" name="niv" placeholder="Niv/Vin" required>
                            Foto
                            <br>
                            <input  type="file" name="imagen" placeholder="imagen"  required><br><br>
                               
                            <input class="botonsP" id="boton" type="submit" value="Aceptar">
                       </div>

                        </form>
                    </section> 
                   
                </div>
            </main>
            <br><br>
            <br><br>
            <div class="recuperar">
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