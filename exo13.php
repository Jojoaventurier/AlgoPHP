<h2>Exercice 13</h2>

<p>
    Calculer la moyenne générale d'un élève dont les notes sont renseignées 
    dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.<br>
</p>

<?php

$tabNotes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$moyEleve = calcMoy($tabNotes);


function calcMoy(array $notes) : float {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}

echo "Les notes obtenues par l'élève sont : ";
foreach($tabNotes as $note) {
    echo $note.", ";
}
echo "<br>";
echo "Sa moyenne est donc de : ".$moyEleve."<br>";

