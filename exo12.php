<h2>Exercice 12</h2>

<p>
    A partir d'une fonction personnalisée et à partir d'un tableau de prénoms 
    et de langue associee (tableau contenant clé et valeur), dire bonjour 
    aux différentes personnes dans leur langue respective.<br>
</p>

<?php

$tabNoms = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

$tabLan = [
    $greetFra = "Bonjour",
    $greetEsp = "Hola",
    $greetEng = "Hello"
];

ksort($tabNoms); 

foreach($tabNoms as $prenom => $langue) {
    if ($langue == "FRA") {
        echo "$greetFra $prenom<br>";
    } else if ($langue == "ESP") {
        echo "$greetEsp $prenom<br>";
    } else if ($langue == "ENG") {
        echo "$greetEng $prenom<br>";
    }
}