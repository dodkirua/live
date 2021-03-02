<?php

class DB2{
    // propriety define
    private string $server;
    private string $db;
    private string $user;
    private string $pass;
    private ?PDO $dbInstance;

    /**
     * dbConnect constructor.
     * @param string $serv
     * @param string $db
     * @param string $user
     * @param string $pass
     */
    public function __construct(string $serv, string $db, string $user , string $pass) {
        $this->server = $serv;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbInstance = $this->connect();
    }

    /**
     * connect to database
     * @return PDO|null
     */
    public function connect() : ?PDO {
        try {
            $bdd = new PDO ("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user, $this->pass);
            $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }

        catch (PDOException $e){
            return null;
        }
        return $bdd;
    }

    /**
     * return PDO object
     * @return PDO|null
     */
    public function getInstance() : ?PDO{
        if (is_null($this->dbInstance)){
            $this->dbInstance = $this->connect();
        }
        return $this->dbInstance;
    }
}
