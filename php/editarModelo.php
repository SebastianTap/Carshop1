<?php
session_start();

include ('conexionModelosAdm.php');
$con= connection();


$id_M =$_POST['id_M'];
$modeloA=$_POST['modeloA'];
 

$sql="UPDATE modelos SET modeloA='$modeloA' WHERE id_M=$id_M";
$query =mysqli_query($con,$sql);

if($query){
    Header("Location: actualizarModelosAdm.php");

};

?>