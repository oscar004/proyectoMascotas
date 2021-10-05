<?php

include("conexion.php");

	$id=$_REQUEST['id'];

	$query="DELETE FROM mascota WHERE id='$id'";
	$resultado= $conexion->query($query);

	if($resultado){
		header("location: tablamascota.php");
	}
	else{
		echo "Insercion no exitosa";
	}


?>