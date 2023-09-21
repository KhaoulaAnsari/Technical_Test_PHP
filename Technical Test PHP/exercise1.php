<?php

function scaleTip($arr) {
    // pour trouver l'indice "I" dans le tableau
    $index_of_i = array_search("I", $arr);
    
    // calculer la somme des nombres à gauche de "I"
    $left_sum = array_sum(array_slice($arr, 0, $index_of_i));
    
    // calculer la somme des nombres à droite de "I"
    $right_sum = array_sum(array_slice($arr, $index_of_i + 1));
    
    // Comparer les sommes de gauche et droite pour décider le retour
    if ($left_sum > $right_sum) {
        return "left";
    } elseif ($left_sum < $right_sum) {
        return "right";
    } else {
        return "balanced";
    }
}

// Test des exemples de l'exercice
echo scaleTip([0, 0, "I", 1, 1]); 
echo scaleTip([1, 2, 3, "I", 4, 0, 0]);
echo scaleTip([5, 5, 5, 0, "I", 10, 2, 2, 1]);

?>
