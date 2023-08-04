<?php
session_start();

include ('conexionMarcasAdm.php');
$con= connection();

$id =$_GET['id'];

$sql="SELECT * FROM marca WHERE id='$id'";
$query =mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar marca</title>
</head>
<body>
    <div class="user-form">
        <form action="editarMarca.php" method="POST">
            <h1>Editar marca</h1>
            <input type="hidden" name="id" value="<?=$row['id']?>"> 
            <input type="text" name="marca" placeholder="Marca" value="<?=$row['marca']?>">

            <input type="submit" value="Modificar marca">
        </form>
    </div>
</body>
</html>