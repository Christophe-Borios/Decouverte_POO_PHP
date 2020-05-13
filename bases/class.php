<?php
//Créer une classe avec un ballon
class Ballon {
    //Props
    public $marque;
    public $sport;

    //Méthode
    function lancer ($distance = null){ //null pour éviter l'erreur s'il n'y a pas d'arguments
        echo "Vous avez lancé le ballon à $distance mètres";
    }
}


$ballonFoot = new Ballon ();//Instanciation
$ballonFoot->marque = 'Nike';
$ballonFoot->sport = 'Football';

$ballonRugby = new Ballon ();
$ballonRugby->marque = 'Gilbert';
$ballonRugby->sport = 'Rugby';

//Action sur les objet
echo '<div>';
echo 'Sport:' .$ballonFoot->sport;
echo '<div>';

echo '<div>';
echo 'Marque:' .$ballonFoot->marque;
echo '<div>';
$ballonFoot->lancer(50);

//spécification d'une classe
class BallonNike { //class permet de créer une class qui permettra de créer un objet
    public $marque = 'Nike'; //Attribut par défaut
    public $sport;

    function lancer($distance = 259){ //$distance = 259 permet de donner une valeur de base à un paramètre
        echo "Vous avez lancé le ballon à $distance mètres";
    }
}

$ballonHand = new BallonNike (); //new () permet d'instancier
$ballonHand->sport='handball';

class User {
    public $nom;
    public $age;

    function tchater ($message){
        echo "- $message";
    }
}

echo '<br><br>';
$michel = new User ();
$michel->nom = "Michel";
$michel->age = "52";

//On a mis une propritété de l'objet michel en tant qu'argument de la fonction tchater
$michel->tchater("$michel->nom: Salut beauté");