<?php

include("db.php");



	
    $tipodoc=$_POST['tipodoc'];
	$numdoc=$_POST['numdoc'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$fecha=$_POST['fecha'];
	$tipoden=$_POST['tipoden'];
	$descripcion=$_POST['descripcion'];
	

	

	$insertar="INSERT INTO denuncia (tipodoc,numdoc,nombres,apellidos,fecha,tipoden,descripcion) 
	VALUES('$tipodoc','$numdoc','$nombres','$apellidos','$fecha','$tipoden','$descripcion')";
	$resultado= mysqli_query($conexion,$insertar);


	if(!$resultado){
		echo "error al registrar denuncia";	
	}
	else{
		echo "denuncia registrada exitosamente";
		header("location:tabladenuncia.php");

	}

	mysqli_close($conexion);


?>