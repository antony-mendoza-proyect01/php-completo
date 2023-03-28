<?php
require_once("c://xampp/htdocs/pruebaC/view/head/head.php");
require_once("c://xampp/htdocs/pruebaC/controller/usuarioController.php");

    $obj= new usarioController();
    $user = $obj->show($_GET['id']);
?>
  <div class="container p-2 mb-3 ">
    <div class="card ">
    <div class="card-header">
            <h5 class="card-title text-center">Editar usuario</h5>
                <form action="update.php"  method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" name="id" readonly requiered class="form-control" id="id" value="<?= $user[0] ?>">
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" name="usuario" requiered class="form-control" id="usuario" value="<?= $user[1] ?>">
            </div>
            <div class="mb-3">
                <label for="contrasenia" class="form-label">Password</label>
                <input type="text" name="contrasenia" required class="form-control" id="contrasenia" value="<?= $user[2] ?>">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" name="correo" required class="form-control" id="correo" value="<?= $user[3] ?>">
            </div>
         <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="show.php?id=<?= $user[0] ?>">Cancelar</a>
         </div>   
            </form>
        </div>
    </div>
</div>





<?php
require_once("c://xampp/htdocs/pruebaC/view/head/footer.php")
?>