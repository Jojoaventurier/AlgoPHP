<h2>Exercice 3</h2>

<p>
    A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot "aujourd'hui" par le mot "demain".<br>
    Afficher l'ancienne et la nouvelle phrase.
</p>

<?php

$phrase = "Notre formation commence aujourd'hui.";
var_dump($phrase);

// SOLUTION 
echo $phrase;
$phrase3 = str_replace("aujourd'hui", "demain", $phrase);
echo $phrase3;
