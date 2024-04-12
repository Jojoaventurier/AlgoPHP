<h2>Exercice 10</h2>

<p>
    A partir d'un montant à payer et d'une somme versée pour régler un achat, 
    écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie 
    en nombre de billets de 10€ et 5€, de pièces de 2€ et 1€.
</p>

<?php



$amountToPay = 152;
$amountGiven = 200;
$amountReturned = $amountGiven - $amountToPay;
$amountReturnedDisplayed = $amountGiven - $amountToPay;

$nbDix = 0;
$nbCinq = 0;
$nbDeux = 0;
$nbUn = 0;


while ($amountReturned >= 10) {
    $nbDix++;
    $amountReturned -= 10;
}
    if ($amountReturned < 10 && $amountReturned >= 5) {
        $nbCinq++;
        $amountReturned -= 5; 

    } while ($amountReturned < 5 && $amountReturned >= 2) {
        $nbDeux++;
        $amountReturned -= 2;
   
        } if ($amountReturned < 2) {
            $nbUn++;
            $amountReturned -= 1;
        }

    echo "Montant à payer : $amountToPay €<br> 
        Montant versé : $amountGiven €<br>
        A rendre : $amountReturnedDisplayed €<br>
        ************************<br>
        Rendu de monnaie :<br>
        $nbDix billet(s) de 10€, $nbCinq billet(s) de 5€, $nbDeux pièce(s) de 2€, $nbUn pièce(s) de 1€.<br>";





/*  COPILOT CAME UP WITH THIS :


function returnGeld($amountReturned) {
    $coins = [10, 5, 2, 1];
    $change = [];

while($amountReturned > 0) {
    foreach ($coins as $coin) {
        if ($amountReturned >= $coin) {
        $sumNotes = intdiv($amountReturned, $coin); // calculate the nomber of notes

        $amountReturned -= $sumNotes * $coin; // update the remaining amount

        $change[$coin] = $sumNotes; // store the denomination  and count
        }
    }
}
    return $change;
}

returnGeld($amountReturned);

var_dump(returnGeld($amountReturned));
*/


