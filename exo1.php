<h2>Exercice 1</h2>

<p>
    Soit la phrase "Notre formation DL commence aujourd'hui".<br>
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus)    
</p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($phrase);
echo "La phrase contient $nbCaracteres caractères";