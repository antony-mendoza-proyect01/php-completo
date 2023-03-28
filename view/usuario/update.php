<?php
require_once("c://xampp/htdocs/pruebaC/controller/usuarioController.php");
$obj = new usarioController();
$obj->update($_POST['id'],$_POST['usuario'],$_POST['contrasenia'],$_POST['correo']);
?>