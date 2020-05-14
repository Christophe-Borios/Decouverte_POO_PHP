<?php

class Verre {

    public $nom;
    public $materiau;
    public $contenu;

    function __construct($nom, $materiau, $contenu){
        echo $this->nom = $nom;
        echo $this->materiau = $materiau;
        echo $this->contenu = $contenu;
        echo "<p> Création de l'objet</p>"; //On peut rajouter ce que l'on veut à l'interieur
        //Création d'un constructor avec __construct() (=>il s'agit d'une méthode magique: Toutes les méthodes magiques DOIVENT être déclarées en public)
        $this->nom = $nom;
        $this->materiau = $materiau;
        $this->contenu = $contenu;
    }
}

$gobelet = new Verre("Gobelet", "Plastique","Eau");