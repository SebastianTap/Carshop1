<?php

include ('conexionMarcasAdm.php');
$con= connection();

$db= new mysqli('localhost', 'root', '', 'carshop');
$stmt=$db->prepare('SELECT marca FROM marca WHERE marca = ?');
$stmt->bind_param('s',$_POST['marca']);
$stmt->execute();
$result= $stmt->get_result();
$row= mysqli_fetch_assoc($result);
$stmt->close();


$id=null;
$marca = $_POST['marca'];


if ($row['marca']==0){
$sql= "INSERT INTO  marca VALUES('$id','$marca')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: actualizarMarcasAdm.php");

    }
}else{
    Header("Location: actualizarMarcasAdm.php");
}

?>