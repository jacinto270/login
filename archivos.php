<?php
/**
 * guardar y leer datos de un fichero
 * file_put_contents()para guardar textoen un fichero
 * file_get_contens()para leer texto de un fichero
 */
file_put_contents('ficheros/notas.txt', "mis primeras frases en un fichero\n");
file_put_contents('ficheros/notas.txt', "esta es la segunda linea\n", FILE_APPEND);


echo "datos guardados";
echo '</br>';
echo file_get_contents('ficheros/notas.txt');
echo '</br>';
echo "leemos linea a linea";
echo '</br>';
echo file_get_contents('ficheros/notas.txt', FILE_IGNORE_NEW_LINES);
echo '</br>';

/**
 * podemos guardar datos como json y leer datos como json
 */

$socios = [
    ['nombre'=> 'juan', 'socio' => 'Si'],
    ['nombre'=> 'jacinto', 'socio' => 'No'],
];

file_put_contents('ficheros/socios.json', json_encode($socios));

/**
 * leer un .json
 */

$leidos = json_decode(file_get_contents('ficheros/socios.json'), true);
var_dump($leidos);
echo '</br>';


//comprobar si un fichero existe
if(file_exists('ficheros/notas.txt')){
    echo 'el fichero existe';
}


?>