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
<form action="./insertar_cripto.php" method="POST" >
  <div class="mb-3">
  <i class="icofont-id"></i>
  <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <i class="icofont-dollar"></i>
  <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <i class="icofont-listing-number"></i>
  <label for="exampleInputEmail1" class="form-label">Cantidad</label>
    <input type="number" name="cantidad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <i class="icofont-money-bag"></i>
  <label for="exampleInputEmail1" class="form-label">Valor</label>
    <input type="text" name="valor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <i class="icofont-calendar"></i>
  <label for="exampleInputEmail1" class="form-label">Fecha</label>
    <input type="date" name="fecha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Registrar</button>
  <div class="mb-3">
  <i class=""></i>
  <label class=""><a href="http://localhost/criptomonedas/criptomonedas.php">Ver Criptomonedas Registradas</a></label>
  </div>
</form>
</div>
</body>
</html>