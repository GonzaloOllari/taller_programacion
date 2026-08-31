<?php

$c = 1;
$p = 8000;

do{
    echo "El precio de " . $c . " pizza/as es de = $". $p * $c . "<br>";
    $c += 1;
}while($c <= 8);