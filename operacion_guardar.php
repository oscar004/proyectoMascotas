<?php

include("conexion.php");


	$tipodoc=$_POST['tipodoc'];
	$numdoc=$_POST['numdoc'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$celular=$_POST['celular'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	$barrio=$_POST['barrio'];
	$ciudad=$_POST['ciudad'];
	$contraseña=$_POST['contraseña'];

	

	$query="INSERT INTO usuarios (tipodoc,numdoc,nombres,apellidos,celular,correo,direccion,barrio,ciudad,contraseña) 
	VALUES('$tipodoc','$numdoc','$nombres','$apellidos','$celular','$correo','$direccion','$barrio','$ciudad','$contraseña')";
	$resultado= $conexion->query($query);


	if($resultado){
		header("location: tabla.php");
		
	}
	else{
		echo "Insercion no exitosa <br>";

	}


?>