<?php
    $id = $_GET["id"];

    require_once "controladores/UsuarioController.php";

    $uc = new UsuarioController();
    $resultado = $uc->eliminar($id);    

    if($resultado!=0){
        header("location: mostrar.php");
    }else{
        echo "Error: no han eliminado los datos";
    }
            
        
?>