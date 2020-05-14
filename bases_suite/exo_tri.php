<?php

//Créatiions des classes
class Pomme{
    public $name;
    function __construct($name, $type){
        $this->name = $name;
        $this->type = $type;
    }
}

class Poire{
    public $name;

    function __construct($name, $type){
        $this->name = $name;
        $this->type = $type;
    }
}

//Créations des objets
$pomme1 = new Pomme("Pomme Verte", "Pomme");
$pomme2 = new Pomme("Pomme Bleue", "Pomme");
$pomme3 = new Pomme("Pomme Rouge", "Pomme");

$poire1 = new Poire("Poire Verte", "Poire");
$poire2 = new Poire("Poire Bleue", "Poire");

//Créer des paniers
$panier = [$pomme1, $pomme2, $pomme3, $poire1, $poire2];
$panier_poire = null; //Mettre null pour que la variable soit bien déclaré
$panier_pomme = null; //Mettre null pour que la variable soit bien déclaré

foreach($panier as $fruits){
    if($fruits instanceof Poire){
        $panier_poire += 1;
    }else{
        $panier_pomme += 1;
    }
}

echo '<div>Total: ' .count($panier) .'</div>';
echo '<div>Pommes: ' .$panier_pomme .'</div>';
echo '<div>Poires: ' .$panier_poire .'</div>';

?>