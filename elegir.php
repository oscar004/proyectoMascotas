<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recepción de datos</title>
</head>
<body>
	<?php

	$tipodoc=$_POST['tipodoc'];

	if ($_REQUEST['elegir']=='cc'){
		$tipodoc = $_REQUEST['elegir'];
		echo $tipodoc;
	}elseif ($_REQUEST['elegir']=='ce'){
		$tipodoc = $_REQUEST['elegir'];
	}elseif ($_REQUEST['elegir']=='ti'){
		$tipodoc = $_REQUEST['elegir'];
	}elseif ($_REQUEST['elegir']=='pp'){
		$tipodoc = $_REQUEST['elegir'];
	}

	?>

</body>
</html>