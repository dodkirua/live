<?php


class Utilisateurs{
    private PDO $db;

    public function __construct(PDO $dataBase){
        $this->db = $dataBase;
    }

    public function getUtilisateurs() {
        // on verra plus tard
    }
}