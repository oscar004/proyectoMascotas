<?php

include("db.php");


	$tipodoc=$_POST['tipodoc'];
	$numdoc=$_POST['numdoc'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$celular=$_POST['celular'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	$barrio=$_POST['barrio'];
	$ciudad=$_POST['ciudad'];
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];

	

	$insertar="INSERT INTO usuarios (tipodoc,numdoc,nombres,apellidos,celular,correo,direccion,barrio,ciudad,usuario,contraseña) 
	VALUES('$tipodoc','$numdoc','$nombres','$apellidos','$celular','$correo','$direccion','$barrio','$ciudad','$usuario','$contraseña')";
	$resultado= mysqli_query($conexion,$insertar);


	if(!$resultado){
		echo "error al registrarse";	
	}
	else{
		echo "usuario registrado exitosamente";
		header("location:inicio.html");

	}

	mysqli_close($conexion);


?>