<?php


    $foto = $_FILES['imagen']['tmp_name'];
    $imgContent = addslashes(file_get_contents($foto));

    include "vehiculo_vend.php";
    $ve = new Vehiculo();
    $ve -> actualizarVehiculo($_REQUEST["id_veh"], $_REQUEST['marca'], $_REQUEST['modelo'], $_REQUEST['ano'], 
    $_REQUEST['precio'], $_REQUEST['direccion'], $_REQUEST['descripcion'], $imgContent, $_REQUEST['niv']);

    header('Location: mostarVehiculos_vend.php');
?>