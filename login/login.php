<?php
include('conexion_bd.php');
if(!empty($_POST['ingresar'])) {
    if(empty($_POST['usuario']) && empty($_POST['password'])) {
        echo '<div>LOS CAMPOS ESTÁN VACIOS</div>'; //se puede usar bootstrap para hacerlo bonito?
    } else {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $consulta = $conexion->query("SELECT * FROM clientes WHERE username='$usuario' and password='$password'");
        if($datos=$consulta->fetch_object()){  //si $datos existe, existe el usuario también
            header("location: ../indexBoostrap.html");
        } else {
            echo '<div>ACCESO DENEGADO</div>';
        }

    }
}

if(!empty($_POST['registrar'])){ //con include("login.php") en inicioSesion.php debería funcionar, 
    header("location: registrar.php"); 
}

if(!empty($_POST['crearCuenta'])){
    /*me creo el formulario en registrar.php donde habrá un botón con name
      crearCuenta que funciona una vez rellenados todos los campos. Además habrá include(login.php).
       Y en este mismo bloque habrá una consulta de INSERT en la base de datos,
       y luego header("location: ../indexBoostrap.html");
*/
}



?>