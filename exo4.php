<h2>Exercice 4</h2>

<p>
    Ecrire un algorithme permettant de savoir si une phrase est un palindrome.
</p>

<?php

$mot1 = "bonjour";
$mot2 = "dad";

function palindrome(string $mot): string {
    if ($mot == strrev($mot)) {
        return "$mot est un palindrome.<br>";
    } else {
        return "$mot n'est pas un palindrome.<br>";
    }
}

echo palindrome($mot1);
echo palindrome($mot2);