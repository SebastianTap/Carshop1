<?php

include ('conexionMarcasAdm.php');
$con= connection();

$sql = "SELECT * FROM marca";
$query= mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/car.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
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
                <li><a href="actualizarMarcasAdm.php">Actualizar Marcas</a></li>
                <li><a href="actualizarModelosAdm.php">Actualizar Modelos</a></li>
                <li><a href="actualizarInventarioAdm.php">Actualizar inventarios</a></li>
                <li><a href="actualizarUsuariosAdm.php">Actualizar Usuarios</a></li>
                <li><a href="Index_admin.php">Atras</a></li>
                
                <li class="cerrarSesion"><a href="../index.html">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>

        <div class="centrar">
            <form action="insertarMarcaAdm.php" method="POST" >
                <h3>Agregar nueva marca</h3>
                <input type="text" name="marca" placeholder="Marca" required>

                <input type="submit" value="Agregar marca">
            </form>
            <br>
            <h2>Marcas registradas</h2>
        </div>
        
        <div class="tablaModificar">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th>Id</th>
                    <th colspan="3">Marca</th> 
                </tr>

            </thead>
            <tbody>
                <?php while($row =mysqli_fetch_array($query)): ?>
                <tr>
                    <div>
                        <th><?=$row['id']  ?></th>
                        <th><?=$row['marca']  ?></th>
                        
                        <th>
                        <a class="btn btn-primary" href="modificarMarca.php?id=<?= $row['id']?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                            </svg>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"></font>
                            </font>
                            Editar
                        </a>
                        </th>
                        
                    </div>
                </tr>
                <?php endwhile; ?>

            </tbody>
        </table>
            
        </div>

        

    </body>
</html>

