<?php
require_once("c://xampp/htdocs/pruebaC/view/head/head.php")
?>
  <div class="container p-2 mb-3 ">
<div class="card ">
  <div class="card-header">
    <h5 class="card-title text-center">Crear usuario</h5>
        <form action="store.php"  method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" name="usuario" requiered class="form-control" id="usuario" placeholder="Crear Usuario">
    </div>
    <div class="mb-3">
        <label for="contrasenia" class="form-label">Password</label>
        <input type="password" name="contrasenia" required class="form-control" id="contrasenia" placeholder="Crear Contraseña">
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="email" name="correo" required class="form-control" id="correo" placeholder="Crear Usuario">
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
    <a type="submit" class="btn btn-danger" href="index.php"> Volver</a>
    </form>
</div>
</div>
</div>





<?php
require_once("c://xampp/htdocs/pruebaC/view/head/footer.php")
?>