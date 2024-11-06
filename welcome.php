<?php
session_start();

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
	exit();
}


?>

<!DOCTYPE html>
<html>

<head>
	<title>expreso s</title>
	<meta charset="UTF-8" />
	
</head>
<style> 
	body {
    font-family: Arial, sans-serif;
   
    margin: 0;
    padding: 20px;
    
       background-image: url(tecnologia-tecnologia_523458626_160908915_1706x1280.jpg);
       background-repeat: no-repeat;
       background-size: cover;
       
}  



h1 {
    color: #b500c2;
    text-align: center;
    display:flex; justify-content: center;
}


form {
    background-color: zip_entry_open;
            max-width: 220px;
            margin: 0 auto;
            padding: 100px;
            border-radius: 20px;
            font-size: 25px;
            font-family: array_key_first;
            color: black;
}
    


label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="date"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="radio"] {
    margin-right: 5px;
}

input[type="submit"] {
    background-color: #28a745;
    color: grey;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #218838;
}

a {
    display: inline-block;
    margin-top: 15px;
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>

	<h1>¡Hola, <?php echo $_SESSION['username']; ?>!Bienvenido</h1>
	<a href="logout.php">Cerrar sesión</a>


<body>
	<form action="recoger2.php" method="POST">

		<label>Digite su Nombre y apellidos</label>

		<input type="text" name="nombre" size="20" placeholder="Digite nombre" /><br /><br>
		<label>Digite su direccion</label><input type="text" name="direccion" placeholder="Digite su direccion" /><br /><br>
		<label>Digite su Edad</label><input type="number" name="Edad" min="1" max="90" required placeholder="Edad" /><br /><br>
		<label>Seleccione fecha de viaje </label><input type="date" name="Fecha" required /><br /><br>
		<label for="VIP">Es usted un cliente vip ?</label><br />
		<input type="radio" name="VIP" value="si">Si<br />
		<input type="radio" name="VIP" value="no">No<br />
		<label>Seleccione Ciudad Destino</label><br />
		<select name="Provincia">
			<option>Medellin</option>
			<option>Villavicencio</option>
			<option>Bogota</option>
			<option>Cartagena</option>
		</select>
		<br> <br>
		<input type="submit" value="Guardar!!" />
	</form>

</body>

</html>