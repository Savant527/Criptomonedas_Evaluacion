<?php
$id = $_POST["id"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

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

$sql = "INSERT INTO usuarios (id, nombres, apellidos, correo, usuario, contrasena)  values ('$id','$nombres','$apellidos','$correo','$usuario','$contrasena')";

if ($conn->query($sql) === TRUE) {
	echo "usuario creado";
  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }

mysqli_close($conn);
?>
