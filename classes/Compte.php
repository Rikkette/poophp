<?php

/* objet Compte Bancaire */

class Compte
{
    /*Titulaire du compte
     @var string */
    public $titulaire;

    /*Solde du compte 
    @var float*/
    public $solde;

    public function __construct(string $nom, float $somme) {
        //on attribue le nom a la propriété titulaire de l'instance créée 
        $this->titulaire = $nom;
    
        //on attribue la somme a la proppriété solde a l'intance créée
        $this->solde = $somme;
    }
}

?>