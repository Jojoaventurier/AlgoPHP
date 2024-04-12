<h2>Exercice 7</h2>

<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :<br>
    Poussin : entre 6 et 7 ans<br>
    Pupille : entre 8 et 9 ans<br>
    Minime : entre 10 et 11 ans<br>
    Cadet : à partir de 12 ans<br>
</p>

<?php

$age = 20;
$message = "Veuillez choisir un âge entre 6 et 17 ans";


if ($age <= 5) {
    echo $message;
} elseif ($age <=7) {
    echo "L'enfant qui a $age ans appartient à la catégorie \"Poussin\"";
} elseif ($age <= 9) {
    echo "L'enfant qui a $age ans appartient à la catégorie \"Pupille\"";
} elseif ($age <= 11) {
    echo "L'enfant qui a $age ans appartient à la catégorie \"Minime\"";
} elseif ($age >= 12 && $age < 18) {
    echo "L'enfant qui a $age ans appartient à la catégorie \"Cadet\"";
} elseif ($age >= 18) {
    echo $message;
} 
    


