<?php

$archivo = 'archivoejercicio/comentario.json';

//comprobar si hay comentarios guardados
$comentarios = [];
if (file_exists($archivo)) {
    $comentarios = json_decode(file_get_contents($archivo), true) ?? [];
}

//si viene del formulario añado el comentario a la lista y la guardo
if (isset($_POST["nombre"], $_POST["comentario"])) {
    $comentarios[] = ["nombre" => $_POST["nombre"], "comentario" => $_POST["comentario"]];
    file_put_contents($archivo, json_encode($comentarios, JSON_PRETTY_PRINT));
}

//vuelvo al formulario, que es donde se muestra la lista
header("Location: misnotas.php");
exit;
