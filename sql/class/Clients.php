<?php


class Clients{
    private PDO $db;

    public function __construct(PDO $dataBase){
        $this->db = $dataBase;
    }

    public function getClients() {
        // on verra plus tard
    }
}