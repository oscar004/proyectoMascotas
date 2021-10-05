<?php

include("db.php");


	$id=$_REQUEST['id'];
	$nombres=$_POST['nombres'];
	$edad=$_POST['edad'];
	$color=$_POST['color'];
	$raza=$_POST['raza'];
	$sexo=$_POST['sexo'];
    $tipo=$_POST['tipo'];
	$imgadd=$_POST['imgadd'];
	

	$query="UPDATE mascota SET nombres='$nombres',edad='$edad',color='$color',raza='$raza', 
	sexo='$sexo',tipo='$tipo',imgadd='$imgadd' WHERE id='$id'";
	$resultado= $conexion->query($query);

	if($resultado){

		header("location:tablamascota.php");	
	}
	else{
		echo "Insercion no exitosa";
		

	}

	mysqli_close($conexion);
?>