<?php
//CONSTRUCTOR: IMPORTANT
class Verre {

    public $nom;
    public $materiau;
    public $contenu;

    function __construct($nom, $materiau, $contenu){
        echo $this->nom = $nom;
        echo $this->materiau = $materiau;
        echo $this->contenu = $contenu;
        
        //Création d'un constructor avec __construct() (=>il s'agit d'une méthode magique: Toutes les méthodes magiques DOIVENT être déclarées en public) => Une mthode magique se passe au moment où qqch se passe
        $this->nom = $nom;
        $this->materiau = $materiau;
        $this->contenu = $contenu;
        echo "<p> Création de l'objet $this->nom fait en $this->materiau et contenant de $this->contenu</p>"; //On peut rajouter ce que l'on veut à l'interieur, d'autres instructions
    }
}

$gobelet = new Verre("Gobelet", "Plastique","Eau");

//DESTRUCT: PEU IMPORTANT
class Chicken {
    //Toujours en premier
    function __destruct(){
        echo 'On détruit la classe';
    }
    function __construct(){
        echo 'On construit la classe';
    }

}

$nugget = new Chicken ();
unset($nugget) //Permet de détruire un objet (=> similaire à la session/cookie)

//CLONE: IMPORTANT
class Poulet {
    function __clone(){
        echo 'On clone l\'objet';
    }

    function __destruct(){
        echo 'On détruit la classe';
    }

    function __construct(){
        echo 'On construit la classe';
    }
}

$tender = new Poulet();
$tender2 = clone $tender;
