<?php

include ('conexionMarcasAdm.php');
$con= connection();

$sql = "SELECT * FROM inventario";
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
        

       <br>
        <h3 class="centrar">Actualizar Inventario</h3>
        

        <div class="tablaModificar">
        <table  class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marca</th> 
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Precio</th>
                    <th>Direccion</th>
                    <th colspan="2">Descripcion</th>
                 
                </tr>

            </thead>
            <tbody>
                <?php while($row =mysqli_fetch_array($query)):?>
                <tr>
                    <div>
                        <th><?=$row['id_veh']  ?></th>
                        <th><?=$row['marca']  ?></th>
                        <th><?=$row['modelo']  ?></th>
                        <th><?=$row['ano']  ?></th>
                        <th><?=$row['precio']  ?></th>
                        <th><?=$row['direccion']  ?></th>
                        <th><?=$row['descripcion']  ?></th>
                                            
                        

                        <th>
                            <a class="btn btn-outline-danger" href="eliminarInventaAdm.php?id_veh=<?= $row['id_veh']?>">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                            </svg>Eliminar
                        
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