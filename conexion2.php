<?php
$servidor='localhost';
$basedatos='compania';
$usuario='root';
$contrasena='';

$conexion2 = new mysqli($servidor,$usuario,$contrasena,$basedatos);
if ($conexion2->connect_errno)
{
	echo"error de conexion verifique sus datos ";
}
else 
{
	echo "<h1>Tu vuelo a sido programado</h1>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirección de Vuelo</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .button {
            padding: 15px 30px;
            background-color: #ffffff;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 1.5em;
            color: #333;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .button:hover {
            background-color: #e0e0e0;
        }

        .icon {
            margin-left: 10px;
        }
    </style>
</head>

</html>