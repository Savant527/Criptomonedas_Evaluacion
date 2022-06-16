<?php
$servername = "localhost";
$database = "cripto";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM criptomonedas WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) == 1){
        $mostrar = mysqli_fetch_array($result);
        $nombre = $mostrar['nombre'];
        $valor = $mostrar['valor'];
        $cantidad = $mostrar['cantidad'];
    }
}

    if(isset($_POST['editar_cripto'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $valor = $_POST['valor'];
        $cantidad = $_POST['cantidad'];

        $query = "UPDATE criptomonedas set nombre = '$nombre', valor = $valor, cantidad = $cantidad WHERE id = $id";
        if (mysqli_query($conn,$query)){
            header("Location: ./criptomonedas.php");
        }
    }
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
    <title>Registro</title>
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
          <a class="nav-link active" aria-current="page" href="http://localhost/criptomonedas/home.php">Inicio</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
<br>
<br>

<!-- LOGIN -->
<div class="container container-fluid w-50">
<form action="editar_cripto.php?id=<?php echo $_GET['id'];?>" method="POST" >
  <div class="mb-3">
    <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <i class="icofont-user-male"></i>
  <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" value="<?php echo $nombre;?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <i class="icofont-user"></i>
  <label for="exampleInputEmail1" class="form-label">Cantidad</label>
    <input type="number" name="cantidad" class="form-control" id="exampleInputEmail1" value="<?php echo $cantidad;?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <i class="icofont-ui-email"></i>
  <label for="exampleInputEmail1" class="form-label">valor</label>
    <input type="text" name="valor" class="form-control" id="exampleInputEmail1" value="<?php echo $valor;?>" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary" name="editar_cripto">Editar Criptomoneda</button> <td><a href="http://localhost/criptomonedas/criptomonedas.php" class="btn btn-success">Volver</a></td>
</form>
</div>
</body>
</html>