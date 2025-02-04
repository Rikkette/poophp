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


    /**
     * Undocumented function
     *
     * @param string $nom du titulaire
     * @param float $somme du titulaire
     */

    public function __construct(string $nom, float $somme = 500)
    {
        //on attribue le nom a la propriété titulaire de l'instance créée 
        $this->titulaire = $nom;

        //on attribue la somme a la proppriété solde a l'intance créée
        $this->solde = $somme;
    }

    /**
     * @param float $somme déposé
     * @param void 
     * 
     */

    public function deposer(float $somme) 
    {
        // on verifie si le montant est posotif
        if($somme > 0){
            $this ->solde += $somme;
            }
    }
    public function voirSolde()
    {
        echo "Le solde du compte est de $this->solde"
    }
}