<?php
session_start();

include ('conexionMarcasAdm.php');
$con= connection();


$id =$_POST['id'];
$marca=$_POST['marca'];
 

$sql="UPDATE marca SET marca='$marca' WHERE id=$id";
$query =mysqli_query($con,$sql);

if($query){
    Header("Location: actualizarMarcasAdm.php");

};

?>