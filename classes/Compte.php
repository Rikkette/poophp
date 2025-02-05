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
        if ($somme > 0) {
            $this->solde += $somme;
        }

        /**
         * Retourne une chaine de caractere affichant le sodle
         *
         * @return string
         */
    }
    public function voirSolde()
    {
        return "Le solde du compte est de $this->solde euros";
    }


    /**
     *retire un montant du solde du compte 
     * @param float $somme montant à retirer
     * @return void
     */

    public function retirer(float $somme)
    {
        // On verifie le montant et mle sodle 
        if ($somme > 0 && $this->solde >= $somme) {
            $this->solde -= $somme;
        } else {
            echo "Montant invalide ou solde insuffisant ";
        }
    }
}
