<?php

//Méthode plus rapide
class Pomme{
    public $name;
    public static $count=0;

    function __construct($name){
        Pomme::$count++;
        $this->name = $name;
    }
}

class Poire{
    public $name;
    public static $count=0;

    function __construct($name){
        Poire::$count++;
        $this->name = $name;
    }
}

//Créations des objets
$pomme1 = new Pomme("Pomme Verte");
$pomme2 = new Pomme("Pomme Bleue");
$pomme3 = new Pomme("Pomme Rouge");

$poire1 = new Poire("Poire Verte");
$poire2 = new Poire("Poire Bleue");

//Calculer le nombre d'objets
$quantites = Pomme::$count + Poire::$count;

echo '<div>Il y a ' .Pomme::$count .' pommes</div>';
echo '<div>Il y a ' .Poire::$count .' poires</div>';
echo '<div>Total du panier: ' .$quantites .' fruits</div>';

?>