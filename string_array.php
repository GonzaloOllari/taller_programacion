<?php

$fecha1="2021/11/29";
$fecha2="2021-11-29";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros, -2);

echo $array_numeros[4];