<?php

$cantidaddatos=intval( readline("Ingrese la cantidad de datos a operar"."\n"));

$datos = [];

for($i=1; $i <= $cantidaddatos; $i++){
    $datos[$i-1]= floatval(readline("Ingrese datos $i:"));
    
}

$sum=0;
for ($i=0;$i<$cantidaddatos;$i++){
    $sum += $datos[$i];
}
echo $sum."\n";

$promedio = $sum/$cantidaddatos;
echo "El promedio de los datos ingresados es:".$promedio."\n";
?>