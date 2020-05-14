<?php
//Par convention même dans les dossiers l'initiale d'une classe commence toujours par une majuscule

//--------------------------->TEST 1
//Partie Class
//class User {
    //    public $nom;
    //    public $age;
    //    public $avatars = ['🤢','😎','🐱‍🐉','🐱‍🚀'];
    
    //    function tchater($blabla){
        //        echo $blabla;
        //    }
        
        //    function choixAvatar($index){
            //        foreach($this->avatars as $avatar){
                // //           echo $avatar[$index];
                //        }
                //    }
                
                //    function vieillir($years){
                    //        $sum = $this->age + $years;
                    //        $resultat ='';
                    //        if($sum > 100){
                        //            $resultat = 'Wow! à '.$sum.'il est temps de crever' .$this->name;
                        //        }
                        //        return $resultat;
                        //    }
                        //}
                        
                        //Partie Objets
                        //$michel = new User();
                        //$michel->age = 54;
                        //$michel->name = "Michel";
                        //$michel->choixAvatar(0);
                        
                        //$david = new User();
                        //$david->age = 32;
                        //$david->name = "David";
                        //$david->choixAvatar(1);
                        
                        //$zak = new User();
                        //$zak->age = 26;
                        //$zak->name = "Zak";
                        //$zak->choixAvatar(2);
                        
                        //$samy = new User();
                        //$samy->age = 28;
                        //$samy->name = "Samy";
                        //$samy->choixAvatar(3);
                        
                        //Partie Tchat
                        //echo '<h1>Tchat</h1>';
//echo '-' .$michel->choixAvatar(0) .'|' .$michel->name = "Michel" .'Salut la compagnie !';


//Partie Veillir
//echo '<h1>Vieillir</h1>';
//echo $samy->age .' ans';

//$samy->vieillir(10);

//--------------------------->Test 2
class User {
    public $nom;
    public $age;
    public $avatars = ['😎','🤣','😂','😁'];
    
    function tchater($index, $messsage){
        $avatar = $this->avatars[$index];
        echo "<div> - $avatar $this->nom | $message </div>" ;
    }

    function rajeunir($years){
        $newAge = $this->age - $years .' ans'; 
        $limite = "<div>$this->nom à $newAge ans ! C'est pas possible !!!!</div>";
        echo $newAge <= 0 ? $limite : $newAge;
        //if($this->age >= 125) {
        //echo "coucou j'ai $this->age";
        //}else{
        //$this->age += $years;
        //
}

$moussa = new User ();
$moussa->nom = "Moussa";
$moussa->age = 58;

$junior = new User ();
$junior->nom = "Junior";
$junior->age = 15;

$duma = new User ();
$duma->nom = "Duma";
$duma->age = 23;

$lisa = new User ();
$lisa->nom = "Lisa";
$lisa->age = 48;

//TCHAT
echo '<h1>TCHAT</h1>';
$moussa->tchater(0, 'Bonjour la famille !');
$junior->tchater(1, 'Bonjour à tous !');
$duma->tchater(3, 'Bon café !');
$lisa->tchater(2, 'Hola !');

//RAJEUNIR
echo '<h1>RAJEUNIR</h1>';
$lisa->rajeunir(1);
$lisa->rajeunir(50);
$lisa->rajeunir(60);


//Comment instancier plusieurs objets qui ont les mêmes attributs en une fois ? Répétition du code ligne 81 à 95
//Edit: avec un constructor
