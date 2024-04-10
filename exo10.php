<h2>Exercice 10</h2>

<p>
    A partir d'un montant à payer et d'une somme versée pour régler un achat, 
    écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie 
    en nombre de billets de 10€ et 5€, de pièces de 2€ et 1€.
</p>

<?php



$amountToPay = 152;
$amountGiven = 200;

$nbDix = 0;
$nbCinq = 0;
$nbDeux = 0;
$nbUn = 0;

$amountReturned = $amountGiven - $amountToPay;

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

echo "Montant à payer : $amountToPay €<br> 
        Montant versé : $amountGiven €<br>
        Reste à payer : $amountReturned €<br>
        *************************************<br>
        Rendu de monnaie : <br>";


var_dump(returnGeld($amountReturned));


/* on soustrait la somme due et somme donnée
doit nous rendre 48€
tant que 48€ > 10, je donne un billet de 10 et j'enlève 10 de la somme à rendre etc... 
si la somme à rendre est inf à 10, supérieur à 5
tant que peut donner p.2   P2 + 1
