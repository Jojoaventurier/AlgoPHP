<h2>Exercice 9</h2>

<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son sexe.<br>
    Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, "non imposable").<br>
</p>

<?php

echo $age = 5;
echo "<br>";
echo $sexe = "M";
echo "<br>";
$categorie = "";

if ($sexe === "M" && $age < 20) {
     $categorie = "non imposable";
} else if ( $sexe == "M" && $age >= 20) {
     $categorie = "imposable";
} else if ($sexe === "F" && $age < 18) {
    $categorie = "non imposable";
} else if ($sexe === "F" && $age < 36) {
    $categorie = "imposable";
} else if ($sexe === "F" && $age > 35) {
    $categorie = "non imposable";
}


echo "La personne est $categorie";