<!DOCTYPE html>
<html>
<head>
	<title>modificar denuncia</title>
</head>
<body>
	<center>
			<?php

				$id=$_REQUEST['id'];

				include("conexion.php");

				$query="SELECT * FROM denuncia WHERE id='$id'";
				$resultado= $conexion->query($query);
				$row=$resultado->fetch_assoc();
			?>

		<form action="denuncia_modificar.php?id=<?php echo $row['id']; ?>" method="POST">

			

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
			<input type="date" required name="fecha" placeholder="fecha" value="<?php echo $row['fecha']; ?>"/><br/><br/>
			<select name="tipoden" type="text">
					<option value="ab">Abandono</option>
					<option value="ne">Negligencia</option>
					<option value="se">Sobreexplotación</option>
					<option value="as">Abuso sexual</option>
					<option value="mf">Maltrato físico</option>
					<option value="me">Maltrato emocional</option>
				</select><br/><br/>
			<input type="text" required name="descripcion" placeholder="descripcion" value="<?php echo $row['descripcion']; ?>"/><br/><br/>
			<input type="submit" value="Aceptar"/>
			<input type="reset" value="Limpiar"/>
		</form>
	</center>

</body>
</html>