<?php
 $color = readline("escriba un color: ");
// $color= 'morado';
// $color= 'azul';
// $color= 'cafe';

 $resultado = match($color){
    'morado' => 'es el color de los tulipanes',
    'azul' => 'es el color del cielo',
    'cafe' =>'es el color de la madera',
    default => 'no esta ese color'
 };

  echo $resultado;



?>