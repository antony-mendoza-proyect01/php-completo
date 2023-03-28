<?php
session_start();
//Autenticacion
if(!isset($_SESSION['usuario'])){
  header("Location:login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PRUEBA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

<div class="container-fluid bg-dark p-2 mb-3">
  <nav class="navbar navbar-expand-lg  navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/pruebaC/index.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/pruebaC/view/usuario/create.php">Crear Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/pruebaC/view/usuario/show.php">Usuario</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <a class="btn btn-outline-success"  href="/pruebaC/view/usuario/cerrar.php" type="submit">Cerrar sesion</a>
      </form>
      </div>
  </div>
</nav>
</div>


  


