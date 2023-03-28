<?php
require_once("c://xampp/htdocs/pruebaC/controller/usuarioController.php");

$obj= new usarioController();
$obj->guardar(($_POST['usuario']),($_POST['contrasenia']),($_POST['correo'])); 


//echo $_POST['usuario'];

//echo $_POST['contrasenia'];
//echo $_POST['correo'];
?>