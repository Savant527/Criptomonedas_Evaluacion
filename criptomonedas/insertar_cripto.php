<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$valor = $_POST["valor"];
$fecha = $_POST["fecha"];


$servername = "localhost";
$database = "cripto";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}
// echo "Conexion satisfactoria";

$sql = "INSERT INTO criptomonedas (id, nombre, cantidad, valor, fecha)  values ('$id','$nombre','$cantidad','$valor','$fecha')";

if ($conn->query($sql) === TRUE) {
	echo "criptomoneda creada";
  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }

mysqli_close($conn);
?>
