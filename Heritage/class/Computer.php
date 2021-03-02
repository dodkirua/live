<?php

class Computer
{
    private String $brand;
    private String $os;
    // optionnal false default
    private Bool $keyboard;
    private Bool $mouse;
    private User $owner;

    /**
     * Computer constructor.
     * @param String $brand
     * @param String $os
     */
    public function __construct(string $brand, string $os)
    {
        $this->setBrand($brand);
        $this->setOs($os);
        //optionnal default value
        $this->setKeyboard(false);
        $this->setMouse(false);


    }

    /**
     *  Return the computer's brand
     * @return String
     */
    public function getBrand(): string    {
        return $this->brand;
    }

    /**
     * Set the computer's brand
     * @param String $brand
     */
    public function setBrand(string $brand): void    {
        $this->brand = $brand;
    }

    /**
     * Return the computer's keyboard
     * @return bool
     */
    public function hasKeyboard(): bool    {
        return $this->keyboard;
    }

    /**
     * Set the computer's keyboard
     * @param bool $keyboard
     */
    public function setKeyboard(bool $keyboard): void    {
        $this->keyboard = $keyboard;
    }

    /**
     * Return the computer's Mouse
     * @return bool
     */
    public function hasMouse(): bool    {
        return $this->mouse;
    }

    /**
     * Set the computer's Mouse
     * @param bool $mouse
     */
    public function setMouse(bool $mouse): void    {
        $this->mouse = $mouse;
    }

    /**
     * Return the computer's OS
     * @return String
     */
    public function getOs(): string    {
        return $this->os;
    }

    /**
     * Set the computer's OS
     * @param String $os
     */
    public function setOs(string $os): void    {
        $this->os = $os;
    }

    /**
     * Start the computer
     */
    public function start() {
        echo $this->getBrand() . " started..... <br>";

    /**
     * Stop the computer
     */
    }

    public function shutdown(){
        echo $this->getBrand() . " off..... <br>";
    }

     /**
     * Set the computer's Owner
     * @param User $user*
     */
    public function setOwner(User $user){
        $this->owner = $user;
    }

    /**
     * Return the computer' Owner
     * @return User
     */
    public function getOwner() : User {
        return $this->owner;
    }
}

