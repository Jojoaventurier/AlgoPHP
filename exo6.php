<h2>Exercice 6</h2>

<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de 
    la quantité d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. EX : 20% -> 0.2)
</p>

<?php

$prixUnite = 9.99;
$quantite = 5;
$tauxDeTva = 0.2;

$prixHT = $prixUnite * $quantite;
$prixTva = $prixHT * $tauxDeTva;

$montantFacture = $prixHT + $prixTva;

echo "Prix unitaire de l'article : $prixUnite<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $tauxDeTva<br>";
echo "Le montant de la facture à régler est de : $montantFacture<br>";

