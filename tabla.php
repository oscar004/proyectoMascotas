<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
	<center>
		<table border="2">
			<thead>
				<tr>
					<th colspan="1"><a href="usuario.html">Nuevo</a></th>
					<th colspan="12">Lista de Usuarios</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id</td>
					<td>Tipo de documento</td>
					<td>Número de documento</td>
					<td>Nombres</td>
					<td>Apellidos</td>
					<td>celular</td>
					<td>Correo</td>
					<td>Direccion</td>
					<td>Barrio</td>
					<td>Ciudad</td>
					<td>usuario</td>
					<td>Contraseña</td>
					<td colspan="2">Opciones</td>
				</tr>
				<?php
					$conexion=mysqli_connect("localhost","root","","login");include("conexion.php");
					$query="SELECT * FROM usuarios";
					$resultado= $conexion->query($query);
					while($row=$resultado->fetch_assoc()){
				?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['tipodoc'];?></td>					
						<td><?php echo $row['numdoc'];?></td>
						<td><?php echo $row['nombres'];?></td>
						<td><?php echo $row['apellidos'];?></td>
						<td><?php echo $row['celular'];?></td>
						<td><?php echo $row['correo'];?></td>
						<td><?php echo $row['direccion'];?></td>
						<td><?php echo $row['barrio'];?></td>
						<td><?php echo $row['ciudad'];?></td>
						<td><?php echo $row['usuario'];?></td>
						<td><?php echo $row['contraseña'];?></td>
						<td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
						<td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
					</tr>
				<?php		
					}
				?>

			</tbody>
		</table>
	</center>

</body>
</html>

