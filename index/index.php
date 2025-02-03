<?php

require_once 'classes/Compte.php';

// premier instance de la classe Compte 
$compte1 = new Compte ("Stéphane",1000000);

//On ecrit dans la propriété titulaire
$compte1->titulaire = "Stephane";

//On ecrit dans la propriété solde
$compte1->solde = 1000000;

//Seconde instance de la classe Compte 
$compte2 = new Compte ("Guillaume",1000000.01);

//on ecrit dans la propriété titulaire
$compte2->titulaire="Guillaume";

var_dump($compte1);
echo '<br>';

var_dump($compte2);

/*Constructeur de l'objet Compte
@param string $nom
@param float $somme
*/

public function_construct(string $nom, float $somme) {
    //on attribue le nom a la propriété titulaire de l'instance créée 
    $this->titulaire = $nom;

    //on attribue la somme a la proppriété solde a l'intance créée
    $this->solde $somme;
}

?>