<?php


namespace Live\Entity;


use Live\Traits\EntityTrait;

class Implantation{
    use EntityTrait;

    private string $address;
    private string $country;

    /**
     * Implantation constructor.
     * @param string $address
     * @param string $country
     */
    public function __construct(string $address, string $country)    {
        $this->id = 10;
        $this->name = 'mon name';
        $this->country = $country;
        $this->address = $address;

    }

    /**
     * set the address
     * @param string $address
     */
    public function setAddress(string $address){
        $this->address = $address;
    }

    /**
     * get address
     * @return string
     */
    public function getAddress(): string    {
        return $this->address;
    }

    /**
     * set country
     * @param $country
     */
    public function setCountry($country){
       $this->country = $country;
    }

    /**
     * get the country
     * @return string
     */
    public function getCountry(): string    {
       return $this->country;
    }
}