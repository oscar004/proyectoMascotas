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
					<th colspan="1"><a href="inicioadmin.html">atras</a></th>
					<th colspan="12">Lista de mascotas</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id</td>
					<td>Nombres</td>
					<td>edad</td>
					<td>color</td>
					<td>raza</td>
					<td>sexo</td>
					<td>tipo</td>
					<td>imgadd</td>
					<td colspan="2">Opciones</td>
				</tr>
				<?php
					$conexion=mysqli_connect("localhost","root","","login");include("conexion.php");
					$query="SELECT * FROM mascota";
					$resultado= $conexion->query($query);
					while($row=$resultado->fetch_assoc()){
				?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['nombres'];?></td>
						<td><?php echo $row['edad'];?></td>
						<td><?php echo $row['color'];?></td>
						<td><?php echo $row['raza'];?></td>
						<td><?php echo $row['sexo'];?></td>
						<td><?php echo $row['tipo'];?></td>
						<td><?php echo $row['imgadd'];?></td>
						<td><a href="modificarmascota.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
						<td><a href="eliminarmascota.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
					</tr>
				<?php		
					}
				?>

			</tbody>
		</table>
	</center>

</body>
</html>

