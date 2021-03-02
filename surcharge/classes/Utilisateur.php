<?php


class Utilisateur
{
    protected const TEST = "TATA";
    //the user name
    private String $nom;

    // user code
    protected String $code;

    /**
     * Utilisateur constructor.
     * @param string $nom
     */
    public function __construct(string $nom){
        $this->setNom($nom);
    }

    /**
     * return the user's name
     * @return String
     */
    public function getNom(): string    {
        return $this->nom;
    }

    /**
     * Set the user's name
     * @param String $nom
     */
    public function setNom(string $nom): Utilisateur    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Generate a user code
     */
     public function generateCode() : string{
        $this->code = uniqid('utilisateur-') . "-" . time();
        return $this->code;
     }
}