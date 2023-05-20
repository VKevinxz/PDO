<?php

require_once "Conn.php";

class Usuario{
    private $username;
    private $password;
    private $apellidos;
    private $nombres;
    private $tipo;
    private $id_escuela;
    private $email;

    public function __construct(){
    /*    $this->username = $username;
        $this->password = $password;
        $this->apellidos = $apellidos;
        $this->nombres = $nombres;
        $this->tipo = $tipo;
        $this->id_escuela = $id_escuela;
        $this->email = $email; */
    }

    public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function mostrarPorId($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario WHERE id=$id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function guardar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO usuario(username, password, apellidos, nombres, tipo, id_escuela, email) 
                VALUES('".$this->username."', '".$this->password."', '".$this->apellidos."', '".$this->nombres."', '".$this->tipo."', ".$this->id_escuela.", '".$this->email."')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function actualizar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE usuario
                SET username='".$this->username."', password='".$this->password."', apellidos='".$this->apellidos."', nombres='".$this->nombres."', tipo='".$this->tipo."', id_escuela=".$this->id_escuela.", email='".$this->email."' 
                WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function eliminar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM usuario WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setIdEscuela($id_escuela){
        $this->id_escuela = $id_escuela;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}