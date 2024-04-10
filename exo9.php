<h2>Exercice 9</h2>

<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son sexe.<br>
    Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, "non imposable").<br>
</p>

<?php

echo $age = 36;
echo "<br>";
echo $sexe = "F";
echo "<br>";
$categorie = "";


if ($sexe === "M") {
    if ($age > 20) {
        echo "La personne est imposable";
    } else {
        echo "La personne n'est pas imposable";
    }
} else if ($sexe === "F") {
    if ($age < 18 || $age > 35) {
        echo "La personne n'est pas imposable";
    } else {
        echo "La personne est imposable";
    }
}
