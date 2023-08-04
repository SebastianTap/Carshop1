<?php
session_start();

include ('conexionModelosAdm.php');
$con= connection();

print_r($_POST['modeloA']." ");
print_r($_POST['id']);

$db= new mysqli('localhost', 'root', '', 'carshop');
$stmt=$db->prepare("SELECT mdl.modeloA,ma.id FROM modelos mdl, marca ma WHERE mdl.modeloA = ? and ma.id =?");
$stmt->bind_param('si',$_POST['modeloA'],$_POST['id']);
$stmt->execute();
$result= $stmt->get_result();
$row= mysqli_fetch_assoc($result);
$stmt->close();


$id_M=null;
$modeloA = $_POST['modeloA'];
$id=$_POST['id'];

if($row['modeloA']==0){
    $sql= "INSERT INTO  modelos VALUES('$id_M','$modeloA','$id')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: actualizarModelosAdm.php");

    }

}else{
    Header("Location: actualizarModelosAdm.php");
}




?>