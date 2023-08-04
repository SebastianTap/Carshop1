<?php
session_start();


    include "vehiculo_vend.php";
    $ve = new Vehiculo();
    $ve -> borrarVehiculo($_GET["id"]);
    header('Location: mostarVehiculos_vend.php');
?>