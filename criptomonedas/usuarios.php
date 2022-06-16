<?php 
$servername = "localhost";
$database = "cripto";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$cripto ="SELECT * FROM usuarios";
$result = mysqli_query($conn, $cripto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Criptomonedas/librerias/icofont/icofont.min.css">
    <title>Inicio</title>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="icofont-money icofont-3x"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/criptomonedas/home.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/criptomonedas/home.php">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
<br>
<br>
<!-- TABLA -->
<td><a href="http://localhost/criptomonedas/registro.php" class="btn btn-dark">Crear Usuario</a></td>
<td><a href="http://localhost/criptomonedas/admin.php" class="btn btn-success">Volver</a></td>

<br>
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php 

while($mostrar = mysqli_fetch_array($result))
{

?>
<tr> <td><?php echo $mostrar['id'] ?>
	<td><?php echo $mostrar['nombres'] ?>
	<td><?php echo $mostrar['apellidos'] ?>
	<td><?php echo $mostrar['correo'] ?>
	<td><?php echo $mostrar['usuario'] ?>
	<td><?php echo $mostrar['contrasena'] ?>
  <td> <a class="m-1 btn btn-warning" href="./editar_usuario.php?id=<?php echo $mostrar['id']?>">Editar</a></td>
    <td><a href="./eliminar_usuario.php?id=<?php echo $mostrar['id']; ?>" class="btn btn-danger">Eliminar</a></td>

</tr>
<?php
}

?>
  </tbody>
</table>

</div>

</html>