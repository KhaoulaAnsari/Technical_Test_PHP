<?php

function getPrices($groceryList) {
    $prices = [];
    
    foreach ($groceryList as $item) {
        //rechercher une correspondance entre la chaîne $item et le modèle défini par l'expression régulière 
        //pour extraire le prix entre les parenthèses
        if (preg_match('/\(\$([0-9.]+)\)/', $item, $matches)) {
            //le prix extrait est stocké dans $matches[1]
            $price = (float)$matches[1]; //convertir le prix en nombre float
            $prices[] = $price; //ajouter le prix au tableau des prix
        }
    }
    
    return $prices;
}

// Test des exemples de l'exercice
$List1 = ["ice cream ($5.99)", "banana ($0.20)", "sandwich ($8.50)", "soup ($1.99)"];
$List2 = ["salad ($4.99)"];

print_r(getPrices($List1)); 
print_r(getPrices($List2)); 

?>
