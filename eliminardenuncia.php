<?php

include("conexion.php");

	$id=$_REQUEST['id'];

	$query="DELETE FROM denuncia WHERE id='$id'";
	$resultado= $conexion->query($query);

	if($resultado){
		header("location: tabladenuncia.php");
	}
	else{
		echo "Insercion no exitosa";
	}


?>