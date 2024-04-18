<h2>Exercice 15</h2>

<p>
    Créer une classe Personne (nom, prénom et date de naissance). 
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>

    $p1 = new Personne ("DUPONT", "Michel", "1980-02-19");
    $p2 = new Personne ("DUCHEMIN", "Alice", "1985-01-171");
</p>

<?php

class Personne {

    private string $nom;
    private string $prenom;
    private Datetime $dateNaissance;

    public function __construct(string $nom, string $prenom, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance->format("d.m.Y");
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function afficherInfos() {

        $bdate = $this->dateNaissance;
        $today = new DateTime();
        $diff = $today->diff($bdate);

         return  $this. " a ". $diff->format('%Y') . " ans<br>" ;

        
        
    }

    public function __toString() {
        return $this->prenom." ". $this->nom;
    }
  
}

$p1 = new Personne ("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne ("DUCHEMIN", "Alice", "1985-01-18");

echo $p1->afficherInfos();
echo $p2->afficherInfos();











