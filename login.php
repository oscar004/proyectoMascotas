<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
		<form action="operacion_guardar.php" method="POST">
			<br/><br/><br/>
			<select name="tipodoc" type="text">
				<option value="cc">Cédula de ciudadanía</option>
				<option value="ce">Cédula de extrangeria</option>
				<option value="ti">Tarjeta de indentidad</option>
				<option value="pp">Pasaporte</option>
			</select><br/><br/>
			<input type="text" required name="numdoc" placeholder="n° documento" value=""/><br/><br/>
			<input type="text" required name="nombres" placeholder="Nombres" value=""/><br/><br/>
			<input type="text" required name="apellidos" placeholder="Apellidos" value=""/><br/><br/>
			<input type="text" required name="celular" placeholder="Celular" value=""/><br/><br/>
			<input type="email" required name="correo" placeholder="Correo" value=""/><br/><br/>
			<input type="text" required name="direccion" placeholder="Direccion" value=""/><br/><br/>
			<input type="text" required name="barrio" placeholder="Barrio" value=""/><br/><br/>
			<input type="text" required name="ciudad" placeholder="Ciudad" value=""/><br/><br/>
			<input type="password" required name="contraseña" placeholder="ingresa una contraseña" value=""/><br/><br/>
			<input type="submit" value="Guardar"/>
			<input type="reset" value="Limpiar"/>
		</form>
	</center>

</body>
</html>