<?php

//1)Création d'un objet en php par la méthode de transformation = convertir un tableau en objet
$tab['couleur'] = "bleu";
$tab['type'] = "plume";
$tab['prix'] = 5;

$stylo = (object) $tab;
print_r($stylo);

//Pour récupérer des informations d'une BDD ou JSON en string, les mettre dans un tableau et ensuite la transformer en objet pour intéragir avec d'autres objets


//2)Création d'un objet par inférence
$voiture->couleur = "blue";
print_r($voiture);

//inférence car on déduit que $voiture est un objet grâce à ->
//

//L'inférence est peu utilisée, en général on crée un objet en l'istanciant à partir d'une classe en utilisant le mot de clé New
$allonfootball = new stdClass();
//stdClass une classe par défaut et () est pas obligé mais toujours à mettre
$ballonFootball->type="Football";

var_dump($ballonFootball);

//De manière générale, on va instancier un objet, c'est la manière la plus commune
// Utiliser un objet dans une concaténation avec la méthode de l'instanciation
$ballonFootball = new stdclass();

$ballonFootball->marque="Nike";
$ballonFootball->type="Football";
$ballonFootball->taille=5;
$ballonFootball->status="crevé";

echo " - hey le ballon de $ballonFootball->type";
//Un . s'utilisera en JS uniquement

//Il y a différentes fonctions pour les objets
//property_exists(nomObjet, attribut); permet de voir si une props/properties/attributs existe
echo "<br><br>";

var_dump(property_exists($ballonFootball, "prix"));


echo "<br><br>";
// echo "<br><br>";
// $action = !property_exists($ballonFootball, "prix") ? $ballonFootball->prix=5 : $ballonFootball->prix=5;

// Bonne écriture mais plus facile de faire, pas besoind la variable
!property_exists($ballonFootball, "prix") ? $ballonFootball->prix=5 : 'pas de prix';
echo 'Le ballon coute ' .$ballonFootball->prix . '€';

//Autre écriture
// if(!property_exists($ballonFootball, "prix")){
//      $ballonFootball->prix=5;
//      echo "le ballon coute $ballonFootball->prix €";
// }

//Pour connaître le contenu d'un objet: get_object-vars(nomObjet)
//var_dump affiche le tableau tandis que cette fonction permet de traiter le tableau
echo '<br><br>';
var_dump(get_object_vars($ballonFootball));

//Pour connaître la classe d'un objet
echo '<br><br>';
var_dump(get_class($ballonFootball));//Nom de la classe

var_dump(get_class_vars('stdClass'));//attributs = vars
var_dump(get_class_methods('stdClass'));//Méthode = methods
//stdClass => est une string donc ''

//Pour renvoyer les classes natives à PHP en POO
var_dump(get_declared_classes());

