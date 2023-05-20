<?php

require_once "modelos/Usuario.php";

class UsuarioController{
    public function mostrar(){
        $usuario = new Usuario();
        return $usuario->mostrar();
    }

    public function mostrarPorId($id){
        $usuario = new Usuario();
        return $usuario->mostrarPorId($id);
    }

    public function guardar($username, $password, $apellidos, $nombres, $tipo, $id_escuela, $email){
        $usuario = new Usuario();
        $usuario->setUsername($username);
        $usuario->setPassword($password);
        $usuario->setApellidos($apellidos);
        $usuario->setNombres($nombres);
        $usuario->setTipo($tipo);
        $usuario->setIdEscuela($id_escuela);
        $usuario->setEmail($email);
        return $usuario->guardar();            
    }

    public function actualizar($id, $username, $password, $apellidos, $nombres, $tipo, $id_escuela, $email){
        $usuario = new Usuario();
        $usuario->setUsername($username);
        $usuario->setPassword($password);
        $usuario->setApellidos($apellidos);
        $usuario->setNombres($nombres);
        $usuario->setTipo($tipo);
        $usuario->setIdEscuela($id_escuela);
        $usuario->setEmail($email);
        return $usuario->actualizar($id);            
    }

    public function eliminar($id){
        $usuario = new Usuario();
        return $usuario->eliminar($id);
    }
}