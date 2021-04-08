<?php

namespace Live\Entity;

use Live\Traits\EntityTrait;

class Student {

    use EntityTrait;

    private string $firstName;

    /**
     * Student constructor.
     * @param $firstname
     */
    public function __construct($firstname)    {
        $this->firstName =  $firstname;
    }

    /**
     * simply say hello
     */
    public function hello(){
        echo "Hello From Entity Student file<br>";
    }

    /**
     * get the firstname
     * @return string
     */
    public function getFirstname(){
        return $this->firstName;

    }

    /**
     * set the firstname
     * @param $firstname
     */
    public function setFirstname($firstname){
        $this->firstName = $firstname;
    }
}