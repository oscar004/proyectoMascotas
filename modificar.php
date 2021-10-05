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

				$query="SELECT * FROM usuarios WHERE id='$id'";
				$resultado= $conexion->query($query);
				$row=$resultado->fetch_assoc();
			?>

		<form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">

			

			<br/><br/><br/>
			<select name="tipodoc" type="text" action="elegir.php" method="POST">
				<option value="cc">Cédula de ciudadanía</option>
				<option value="ce">Cédula de extrangeria</option>
				<option value="ti">Tarjeta de indentidad</option>
				<option value="pp">Pasaporte</option>
			</select><br/><br/>
			<input type="text" required name="numdoc" placeholder="n° documento" value="<?php echo $row['numdoc']; ?>"/><br/><br/>
			<input type="text" required name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']; ?>"/><br/><br/>
			<input type="text" required name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']; ?>"/><br/><br/>
			<input type="text" required name="celular" placeholder="Celular" value="<?php echo $row['celular']; ?>"/><br/><br/>
			<input type="email" required name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>"/><br/><br/>
			<input type="text" required name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']; ?>"/><br/><br/>
			<input type="text" required name="barrio" placeholder="Barrio" value="<?php echo $row['barrio']; ?>"/><br/><br/>
			<input type="text" required name="ciudad" placeholder="Ciudad" value="<?php echo $row['ciudad']; ?>"/><br/><br/>
			<input type="password" required name="contraseña" placeholder="Contraseña" value="<?php echo $row['contraseña']; ?>"/><br/><br/>
			<input type="submit" value="Aceptar"/>
			<input type="reset" value="Limpiar"/>
		</form>
	</center>

</body>
</html>