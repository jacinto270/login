<?php

//leo los comentarios guardados para mostrarlos debajo del formulario
$comentarios = [];
if (file_exists('archivoejercicio/comentario.json')) {
    $comentarios = json_decode(file_get_contents('archivoejercicio/comentario.json'), true) ?? [];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comentarios</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
    <h1>deja tu comentario</h1>

    <form action="archivoejercicio.php" method="POST" >
        <label for="nombre">nombre de usuario</label>
        <input type="text" id="nombre" name="nombre" placeholder="nombre de usuario" required>

        <label for="comentario">comentario</label>
        <input type="text" id="comentario" name="comentario" required>

        <input class = "boton"  type="submit" value="guardar">
    </form>

    <!-- comentarios guardados dentro del mismo container que el formulario -->
    <ul class="comentarios">
        <?php foreach ($comentarios as $c): ?>
            <li class="tarjeta">
                <span class="etiqueta">nombre de usuario</span>
                <p class="campo"><?= htmlspecialchars($c["nombre"]) ?></p>

                <span class="etiqueta">comentario</span>
                <p class="campo"><?= htmlspecialchars($c["comentario"]) ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
