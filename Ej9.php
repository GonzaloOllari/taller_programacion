<?php

$c = 1;
$p = 3500;

do{
    echo "Pedido N° " . $c . " = $". $p * $c . "<br>";
    $c += 1;
}while($c <= 10);

echo "Promocion finalizada.";