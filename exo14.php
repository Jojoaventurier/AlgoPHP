<h2>Exercice 14</h2>

<p>
    Calculer l'âge exact d'une persone à partir de sa date de naissance 
    (en années, mois, jours). 17/01/1985 - 21/05/2018<br>
</p>

<?php

$bday = new \DateTime('17.1.1985'); // Your date of birth
$today = new \Datetime(date('21.05.2018'));
$diff = $today->diff($bday);
 printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
