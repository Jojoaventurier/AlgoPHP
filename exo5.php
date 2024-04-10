<h2>Exercice 5</h2>

<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
    Attention, la valeur générée devra ^etre arrondie à 2 décimales.
</p>

<?php

$montantFrancs = 100;
$montantEuros = round(($montantFrancs / 6.56), 2);

echo "Montant en francs : $montantFrancs<br>";
echo "$montantFrancs francs = $montantEuros €<br>";

