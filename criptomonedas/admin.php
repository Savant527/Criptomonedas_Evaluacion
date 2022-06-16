<?php 
$servername = "localhost";
$database = "cripto";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

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
    <title>Admin</title>
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

<!-- CARTAS -->
<div class="container d-flex justify-content-center w-100">
<div class="card-img m-5">
  <a href="http://localhost/criptomonedas/criptomonedas.php"><i class="icofont-bitcoin icofont-5x d-flex justify-content-center" wi></i></a>
  </div>
  <div class="card-img m-5">
  <a href="http://localhost/criptomonedas/usuarios.php"><i class="icofont-user icofont-5x d-flex justify-content-center"></i></a>
  </div>
</div>

</div>
</body>
</html>