<?php
//PREMIERE MANIERE: NE COMPARE PAS LES CLASSES
class Pomme {
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}
$objet1 = new Pomme("Pomme granny");
$objet2 = new Pomme("Pomme granny");

// ==: ce sont les mêmes donc true
// ===: pas les mêmes car identifiants différents donc false
//si on fait un copier-coller => $objet1 = $objet2 sera true car ce seront les mêmes identifiants

//SECONDE FACON: INSTANCEOF
if ($objet1 instanceof $objet2):
    echo "$objet1->name est une instance de Pomme";
else:
    echo "$objet2->name n'est pas une instance de Pomme";
endif;


