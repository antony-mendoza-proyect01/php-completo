<?php
require_once("c://xampp/htdocs/pruebaC/view/head/head.php");
require_once("c://xampp/htdocs/pruebaC/controller/usuarioController.php");

    $obj= new usarioController();
    $rows =  $obj->index();

?>

 <div class="container p-2 mb-3 ">
<div class="card ">
  <div class="card-header">
    <h5 class="card-title text-center">Lista de Usuarios</h5>
    <a href="/pruebaC/view/usuario/create.php" class="btn btn-success p-2 mb-3">Crear Usuario</a>
    <table class=" table">
  <thead>
    <tr class=" table-dark">
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
     <?php if($rows): ?>
    <?php foreach($rows as $row):  ?>
     <tr>
        <th><?= $row['id'] ?></th>
        <th><?= $row['usuario'] ?></th>
        <th><?= $row['contrasenia'] ?></th>
        <th><?= $row['correo'] ?></th>
      <td scope="col">
      <a href="show.php?id=<?= $row[0] ?>" class="btn btn-primary">Ver</a>
      <a href="editar.php?id=<?= $row[0] ?>" class="btn btn-warning">Editar</a>
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
                   <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                  
               </div>
               </div>
           </div>
           </div>
      </td>
     </tr>
    <?php endforeach;  ?>
        <?php else: ?>
          <tr>
            <td colspan="3" class="text-center"> No hay registro</td>
          </tr>
        <?php endif;  ?>
  </tbody>
</table>
  </div>
</div>
</div>
<?php
require_once("c://xampp/htdocs/pruebaC/view/head/footer.php")
?>
