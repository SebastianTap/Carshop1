<?php
	
	require ('conexion.php');
	
	$id = $_POST['id'];
	
	$queryM = "SELECT id_M,modeloA FROM modelos WHERE id = '$id' ORDER BY modeloA";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar Modelo</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_M']."'>".$rowM['modeloA']."</option>";
	}
	
	echo $html;
?>		