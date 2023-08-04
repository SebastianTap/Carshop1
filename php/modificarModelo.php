<?php
include ('conexionModelosAdm.php');
$con= connection();

$id_M =$_GET['id_M'];

$sql="SELECT * FROM modelos WHERE id_M='$id_M'";
$query =mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar modelo</title>
</head>
<body>
    <div class="user-form">
        <form action="editarModelo.php" method="POST">
            <h1>Editar modelo</h1>
            <input type="hidden" name="id_M" value="<?=$row['id_M']?>"> 
            <input type="text" name="modeloA" placeholder="Modelo" value="<?=$row['modeloA']?>">

            <input type="submit" value="Modificar modelo">
        </form>
    </div>
</body>
</html>