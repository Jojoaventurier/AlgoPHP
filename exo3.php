<h2>Exercice 3</h2>

<p>
    A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot "aujourd'hui" par le mot "demain".<br>
    Afficher l'ancienne et la nouvelle phrase.
</p>

<?php

$phrase = "Notre formation DL commence aujourd'hui.<br>";

//SOLUTION 1
$date = ["aujourd'hui", "demain"];
$phrase1 = "Notre formation DL commence ".$date[0].".<br>";
$phrase2 = "Notre formation DL commence ".$date[1].".<br>";

echo $phrase1;
echo $phrase2;


// SOLUTION 2
echo $phrase;
$phrase3 = str_replace("aujourd'hui", "demain", $phrase);
echo $phrase3;

// SOLUTION 3
function replaceAuj(string $phrase): string {
    if ($phrase = "Notre formation commence aujourd'hui.") {
        str_replace("aujourd'hui", "demain", $phrase);
        return $phrase;
    } else if ($phrase == "Notre formation commence demain.") {
        str_replace("demain", "aujourd'hui", $phrase); 
        return $phrase;
    }
}

echo $phrase;
echo replaceAuj($phrase);
echo replaceAuj($phrase);

