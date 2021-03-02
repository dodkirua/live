<?php

class Smartphone extends Computer{
    private String $operateur;

    /**
     * Smartphone constructor.
     * @param string $brand
     * @param string $os
     * @param String $operateur
     */
    public function __construct(string $brand, string $os, string $operateur)
    {
        parent::__construct($brand,$os);
        $this->setOperateur($operateur);
    }

    /**
     * return operateur
     * @return String
     */
    public function getOperateur(): string
    {
        return $this->operateur;
    }

    /**
     * set operateur
     * @param String $operateur
     */
    public function setOperateur(string $operateur): void
    {
        $this->operateur = $operateur;
    }


}
