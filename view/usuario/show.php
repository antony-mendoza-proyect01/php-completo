<?php
require_once("c://xampp/htdocs/pruebaC/view/head/head.php");
require_once("c://xampp/htdocs/pruebaC/controller/usuarioController.php");

    $obj= new usarioController();
    $date = $obj->show($_GET['id']);
?>

<h2 class="text-center">Detalle del registro</h2>
  <div class="pb-3">
    <a class="btn btn-primary" href="index.php">Volver a la lista</a>
    <a class="btn btn-success" href="editar.php?id=<?= $date[0] ?>">Actualizar</a>
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
           
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <span> Una vez elimino no se podra recuperar el registro</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                    <a href="delete.php?id=<?= $date[0] ?>" class="btn btn-danger">Eliminar</a>
                   
                </div>
                </div>
            </div>
            </div>
  </div>
<table class="table container-fluid">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="col"><?= $date["id"] ?></td>
      <td scope="col"><?= $date["usuario"] ?></td>
      <td scope="col"><?= $date["contrasenia"] ?></td>
      <td scope="col"><?= $date["correo"] ?></td>
    </tr>
    <tr>
  </tbody>
</table>



<?php
require_once("c://xampp/htdocs/pruebaC/view/head/footer.php");
?>