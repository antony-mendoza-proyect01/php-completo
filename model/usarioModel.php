<?php
class usuarioModel{
    private $PDO;
    public function __construct(){

    require_once("c://xampp/htdocs/pruebaC/config/db.php");
    $con = new db();
    $this->PDO=$con->conexion();         
    }
    public function insertar($usuario, $contrasenia, $correo){
        $stament = $this->PDO->prepare("INSERT INTO usuario VALUES (NULL, :usuario, :contrasenia, :correo)");
        $stament->bindParam(":usuario",$usuario);
        $stament->bindParam(":contrasenia",$contrasenia);
        $stament->bindParam(":correo",$correo);
        return($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM usuario where id=:id limit 1");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function index(){
        $stament= $this->PDO->prepare("SELECT * FROM usuario");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }
    public function update($id,$usuario, $contrasenia, $correo){
        $stament = $this->PDO->prepare("UPDATE usuario SET usuario = :usuario, contrasenia =:contrasenia,
        correo = :correo WHERE id = :id ");
        $stament->bindParam(":usuario", $usuario);
        $stament->bindParam(":contrasenia", $contrasenia);
        $stament->bindParam(":correo", $correo);
        $stament->bindParam(":id", $id);
        return ($stament->execute())? $id : false;
    }
    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM usuario WHERE id = :id");
        $stament->bindParam(":id", $id);
        return($stament->execute()) ? true : false;
    }
    public function login($usuario, $contrasenia){
        $stament = $this->PDO->prepare("SELECT *, count(*) as n_usuario
        FROM usuario WHERE usuario=:usuario
        AND contrasenia=:contrasenia");
        $stament->bindParam(":usuario", $usuario);
        $stament->bindParam(":contrasenia", $contrasenia);
        return ($stament->execute()) ? $stament->fetch(): false;
    }

}
?>