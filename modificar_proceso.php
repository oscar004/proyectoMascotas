<?php

include("conexion.php");

	$id=$_REQUEST['id'];

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

	$query="UPDATE usuarios SET tipodoc='$tipodoc',numdoc='$numdoc',nombres='$nombres',apellidos='$apellidos',celular='$celular',
	correo='$correo',direccion='$direccion',barrio='$barrio',ciudad='$ciudad',contraseña='$contraseña' WHERE id='$id'";
	$resultado= $conexion->query($query);

	if($resultado){
		header("location: tabla.php");
	}
	else{
		echo "Insercion no exitosa";
	}


?>