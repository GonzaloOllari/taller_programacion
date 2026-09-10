<?php
/*
$cadena_texto="Hola Mundo";

$cadena_texto =ucwords($cadena_texto);

echo $cadena_texto;
*/

$cadena_texto="Hola Mundo php";

$longitud=strlen($cadena_texto);
echo $cadena_texto ." tiene " . $longitud." caracteres  <br>";

$palabras=str_word_count($cadena_texto);
echo $cadena_texto." tiene ". $palabras ." palabras <br> ";