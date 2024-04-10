<h2>Exercice 11</h2>

<p>
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant
    de parcourir ce tableau et d'en afficher le contenu (une marque de voiture par lignes).
    Il est également demandé d'afficher le nombre de marques de voitures présentes 
    dans le tableau.<br>
    Exemple : tableau --> "Peugeot", "Renault", "BMW", "Mercedes".<br>
</p>

<?php

$tableauMarques = ["Peugeot", "Renault", "BMW", "Mercedes", "Toyota"];
$nbMarques = count($tableauMarques);

echo "Il y a $nbMarques marques dans le tableau :<br>";
for ($i = 0; $i < $nbMarques; $i++) {
    echo $tableauMarques[$i]."<br>";
}