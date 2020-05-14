<?php

//Manipuler des objets doit se faire avec $this.
   class Voiture{
    
    public $name;
    public $couleur="Rouge";
    public $puissance;
    public $vitesse;

    
    function ralentir(){
        echo "Appel de la méthode" .$this->accelerer();
    }
    
    function accelerer(){
         echo "Appel de la méthode " .$this->couleur;
    }
}

$citadine = new Voiture();
   
echo '<br><br>';

echo $citadine->accelerer();

$citadine->couleur = 'Bleue';
echo '<br><br>';
echo $citadine->accelerer();
echo '<br><br>';
echo $citadine->ralentir();
