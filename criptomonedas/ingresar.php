<?php
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

  $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '".$usuario."' and contrasena = '".$contrasena."'");
  $nr = mysqli_num_rows($query);
  
  if ($nr == 1){
	//   echo "<br> Bienvenido";
	  header("Location: ./admin.php");
  }
  elseif ($nr == 0){
	  echo '<p>El usuario no existe. Click <a href="http://localhost/criptomonedas/views/registro.php">aquí</a> para registrar usuario</p>';
  }
  
mysqli_close($conn);
?>
