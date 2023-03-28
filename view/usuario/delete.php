<?php 
require_once("c://xampp/htdocs/pruebaC/controller/usuarioController.php");
$obj = new usarioController();
$obj->delete($_GET['id']);

?>