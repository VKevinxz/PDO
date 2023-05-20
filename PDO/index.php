<h1>Registro de Usuarios</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="number" name="username" placeholder="Ingrese username"><br>
    <input type="password" name="password" placeholder="Ingrese password"><br>
    <input type="text" name="nombres" placeholder="Ingrese nombres"><br>
    <input type="text" name="apellidos" placeholder="Ingrese apellidos"><br>
    <input type="text" name="tipo" placeholder="Ingrese tipo"><br>
    <input type="number" name="id_escuela" placeholder="Ingrese escuela"><br>
    <input type="text" name="email" placeholder="Ingrese email"><br>
    <input type="submit" value="Guardar"><br>
</form>
<?php
    if(!empty($_POST)){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $apellidos = $_POST["apellidos"];
        $nombres = $_POST["nombres"];
        $tipo = $_POST["tipo"];
        $id_escuela = $_POST["id_escuela"];
        $email = $_POST["email"];
           
        require_once "controladores/UsuarioController.php";

        $uc = new UsuarioController();
        $resultado = $uc->guardar($username, $password, $apellidos, $nombres, $tipo, $id_escuela, $email);
        
        if($resultado!=0){
            header("location: mostrar.php");
        }else{
            echo "Error: no han guardado los datos";
        }
    }
?>