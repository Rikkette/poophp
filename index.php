<?php

require_once 'classes/Compte.php';

// premier instance de la classe Compte 
$compte1 = new Compte("Stéphane", 1000000);

//On ecrit dans la propriété titulaire
$compte1->titulaire = "Stephane";

//On ecrit dans la propriété solde
$compte1->solde = 1000000;

var_dump($compte1);
echo '<br>';

//Seconde instance de la classe Compte 
$compte2 = new Compte("Guillaume");

//on ecrit dans la propriété titulaire
$compte2->titulaire = "Guillaume";

$compte2->solde = 500;

var_dump($compte2);


?>