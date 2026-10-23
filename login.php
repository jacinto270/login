<?php
session_start();
$mensaje = $_SESSION['mensaje'] ?? '';
unset($_SESSION['mensaje']);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
    <h1>inicio de sesion</h1>

    <form action="index.php" method="POST" >
        <label for="nombre">nombre de usuario</label>
        <input type="text" name="nombre" placeholder="nombre de usuario" required>

        <label for="password">contraseña</label>
        <input type="password" name="password" placeholder="password" required>
        <p><?= $mensaje ?></p>
        <input class = "boton"  type="submit" value="iniciar sesion">
</form>
</div>
</body>
</html>