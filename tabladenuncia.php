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
					<th colspan="12">Lista de Denuncias</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id</td>
					<td>Tipo de documento</td>
					<td>Número de documento</td>
					<td>Nombres</td>
					<td>Apellidos</td>
					<td>fecha</td>
					<td>tipo Denuncia</td>
					<td>Descripcion</td>
					
					
					<td colspan="2">Opciones</td>
				</tr>
				<?php
					$conexion=mysqli_connect("localhost","root","","login");include("conexion.php");
					$query="SELECT * FROM denuncia";
					$resultado= $conexion->query($query);
					while($row=$resultado->fetch_assoc()){
				?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['tipodoc'];?></td>					
						<td><?php echo $row['numdoc'];?></td>
						<td><?php echo $row['nombres'];?></td>
						<td><?php echo $row['apellidos'];?></td>
						<td><?php echo $row['fecha'];?></td>
						<td><?php echo $row['tipoden'];?></td>
						<td><?php echo $row['descripcion'];?></td>
						<td><a href="modificardenuncia.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
						<td><a href="eliminardenuncia.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
					</tr>
				<?php		
					}
				?>

			</tbody>
		</table>
	</center>

</body>
</html>

