<?php
        class usarioController {
            private $model;
            public function __construct()
            {
               require_once("c://xampp/htdocs/pruebaC/model/usarioModel.php");
               $this->model = new usuarioModel();     
            }
            public function guardar($usuario, $contrasenia, $correo){
              $id = $this->model->insertar($usuario,$contrasenia, $correo);
              return ($id!=false)? header("Location:show.php?id=".$id):header("Location:create.php") ;
            }
            public function show($id){
                return ($this->model->show($id) != false ) ? $this->model->show($id) : header("Location:index.php") ;
            }
            public function index(){
                return ($this->model->index()) ? $this->model->index() : false;
            }
            public function update($id, $usuario, $contrasenia, $correo){
                return ($this->model->update($id, $usuario, $contrasenia, $correo) != false) ? 
                header("Location:show.php?id=".$id):  header("Location:index.php"); 
            }
            public function delete($id){
                return ($this->model->delete($id))? header("Location:index.php") :
                header("Location:show.php?id=".$id);
            }
            public function login($usuario, $contrasenia){
                return ($this->model->login($usuario,$contrasenia)) ?  header("Location:index.php") : false;
            }
        }
?>