<?php 
/*
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
    $numeri = [];
    for($i = 0; $i < 15; $i++) {
        $numero = rand(1, 100);
        if (!in_array($numero, $numeri)) {
            $numeri[$i] = $numero;
            echo $numero . " ";
        }
    }
?>

    