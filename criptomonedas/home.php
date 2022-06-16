<?php 
$servername = "localhost";
$database = "cripto";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$cripto ="SELECT * FROM criptomonedas";
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
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/criptomonedas/login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
<br>
<br>
<div class="container">
<!-- CARRUSEL -->

<div id="carouselExampleControls" class="carousel slide w-70" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="./img/1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/3.jpg " class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</body>
<br>
<br>
<!-- TEXTO -->
<section>
<h1 class="d-flex justify-content-center text-center fw-bold">Criptomonedas</h1>
<br>
<p>Una criptomoneda es un activo digital que emplea un cifrado criptográfico para garantizar su titularidad y asegurar la integridad de las transacciones, y controlar la creación de unidades adicionales, es decir, evitar que alguien pueda hacer copias como haríamos, por ejemplo, con una foto. Estas monedas no existen de forma física: se almacenan en una cartera digital.</p>
</section>
<!-- TABLA -->

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Valor (USD)</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
  <?php 

while($mostrar = mysqli_fetch_array($result))
{
?>
<tr> <td><?php echo $mostrar['id'] ?>
	<td><?php echo $mostrar['nombre'] ?>
	<td><?php echo $mostrar['cantidad'] ?>
	<td><?php echo $mostrar['valor'] ?>
	<td><?php echo $mostrar['fecha'] ?>

</tr>
<?php
}

?>
  </tbody>
</table>

</div>

</html>