<?php

$pc=["SO", "SSD", "GPU", "RAM", "CPU"];
foreach($pc as $componentes){
    if($componentes == "GPU"){
        continue;
    }
    echo $componentes . "<br>";
        
}