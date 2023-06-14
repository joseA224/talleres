
<?php


$opcion = readline("Ingrese una opción del 1 al 5: ");


$resultado = match ($opcion) {
    '1' => 
         "Seleccionaste la opción 1. Realizar acción 1.",

    '2' => 
         "Seleccionaste la opción 2. Realizar acción 2.",

    '3' => 
         "Seleccionaste la opción 3. Realizar acción 3." ,

    '4' => 
         "Seleccionaste la opción 4. Realizar acción 4.",

    '5' => 
         "Seleccionaste la opción 5. Realizar acción 5." ,
    
    default => 
         "Opción inválida. Por favor, ingrese una opción del 1 al 5."
    
};

echo $resultado;
?>

