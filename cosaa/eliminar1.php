<html>
	<head>
		<title>Ejercicio  - DELETE</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
			include 'conexion2.php';
			$consulta = $conexion2 -> query ("DELETE FROM compania WHERE nombre LIKE 'j%'") or die ("Ha fallado la conexión");
			$conexion = null;
			echo 'finich head!!';
		?>
	</body>
</html>