<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
			<?php

				$id=$_REQUEST['id'];

				include("conexion.php");

				$query="SELECT * FROM mascota WHERE id='$id'";
				$resultado= $conexion->query($query);
				$row=$resultado->fetch_assoc();
			?>

		<form action="mascota_guardar.php?id=<?php echo $row['id']; ?>" method="POST">
			<br/><br/><br/>
			<input type="text" required name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']; ?>"/><br/><br/>
			<input type="text" required name="edad" placeholder="edad" value="<?php echo $row['edad']; ?>"/><br/><br/>
			<input type="text" required name="color" placeholder="color" value="<?php echo $row['color']; ?>"/><br/><br/>
			<input type="text" required name="raza" placeholder="raza" value="<?php echo $row['raza']; ?>"/><br/><br/>
			<input type="text" required name="sexo" placeholder="sexo" value="<?php echo $row['sexo']; ?>"/><br/><br/>
			<input type="text" required name="tipo" placeholder="tipo mascota" value="<?php echo $row['tipo']; ?>"/><br/><br/>
			<input type="file" required name="imgadd" id="imgadd" size="60"/><br/><br/>
 			<input type="submit" value="Aceptar"/>
			<input type="reset" value="Limpiar"/>
		</form>
	</center>

</body>
</html>
