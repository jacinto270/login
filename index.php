<?php
session_start();

function validarDatos($usuario, $password): bool {
    $usuarioBase = "nino";
    $passwordBase = "1234";

    return $usuarioBase === $usuario && $passwordBase === $password;
}

function vieneDeFormulario(){
    $usuario = $_POST['nombre'] ?? '';
    $password = $_POST['password'] ?? '';

    //comprobar si son validos 
// si son validos "si" iniciamos sesion los guadamos en la sesion
// y si no son validos redirigimos al login

if(validarDatos($usuario, $password)){
    $_SESSION['nombre'] = $usuario;
    $_SESSION['password'] = $password;

}else{
    $_SESSION['mensaje'] = "los datos no son correctos";
    header("Location: login.php");
  }
}
//compruebo si viene del formulario

if(isset($_POST["nombre"]) && isset($_POST['password'])){
    vieneDeFormulario();
}

//compruebo si se a iniciado sesion 
if(!isset($_SESSION['nombre'])){
    header("Location: login.php");
    exit;
}



//guardo los datos que vienen del formulario de login
$usuario = $_POST['nombre'] ?? '';
$password = $_POST['password'] ?? '';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>hola <?= $_SESSION['nombre'] ?></h1>

    <a href="close.php">cerrar sesion</a>
</body>
</html>