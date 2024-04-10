<h2>Exercice 8</h2>

<p>
   Ecrire un algorithme qui renvoie la table de mutltiplication d'un nombre passé en paramètre sous la forme suivante<br>
</p>

<?php

$nombre = 8;

echo "Table de $nombre :<br>";

//SOLUTION 1
for ($i = 1; $i < 11; $i++) {
    $resultat1 = $i * $nombre;
    echo "$i * $nombre = $resultat1<br>";
}

//SOLUTION 2
foreach(range(1,10) as $multiplicateur) {
    $resultat2 = $multiplicateur * $nombre;
    echo "$multiplicateur * $nombre = $resultat2<br>";
}

