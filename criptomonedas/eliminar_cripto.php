<?php


$servername = "localhost";
$database = "cripto";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_GET['id'])){
  $id = $_GET['id'];
  $query = "DELETE FROM criptomonedas WHERE id = '$id'";
  $result = mysqli_query($conn,$query);
  if (!$result){
      die ("Error en la query");
  }

  header("Location: ./criptomonedas.php");
}

mysqli_close($conn);
?>
