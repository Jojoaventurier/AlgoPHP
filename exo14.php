<h2>Exercice 14</h2>

<p>
    Calculer l'âge exact d'une persone à partir de sa date de naissance 
    (en années, mois, jours). 17/01/1985 - 21/05/2018<br>
</p>

<?php
/*
$birthDate = "1985-01-17";
$now = "2018-05-21";
$birthDate = explode("-", $birthDate);
$nowDate = explode("-", $nowDate);

//$yearDiff = $birthDate[0] - $nowDate[0];

var_dump($yearDiff);
*/

// $age = date_diff(date_create($birthDate), date_create('now'))->y;

//SOLUTION

$bday = new DateTime('17.1.1985'); // Your date of birth
$today = new Datetime(date('21.05.2018'));
$diff = $today->diff($bday);
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
printf("\n");
