<?php
//Créer une classe avec un ballon
class Ballon {
    //Props
    public $marque;
    public $sport;

    //Méthode
    function lancer ($distance){
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
