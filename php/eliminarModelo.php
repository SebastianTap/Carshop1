<?php
session_start();

include ('conexionModelosAdm.php');
$con= connection();

$id_M=$_GET['id_M'];

$sql= "DELETE FROM modelos WHERE id_M='$id_M'";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: actualizarModelosAdm.php");

};

?>