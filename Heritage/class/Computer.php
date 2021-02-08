<?php

class Computer
{
    // auto generated
    private Int $id;

    private String $brand;
    private String $graphicCards;


    private String $processor;
    private String $os;
    private String $color;
    // optionnal false default
    private Bool $keyboard;
    private Bool $mouse;
    private Int $memory;
    private User $owner;

    /**
     * Computer constructor.
     * @param String $brand
     * @param String $graphicCards
     * @param String $processor
     * @param String $os
     * @param String $color
     */

    public function __construct(string $brand, string $graphicCards, string $processor, string $os, string $color)
    {
        $this->setBrand($brand);
        $this->setGraphicCards($graphicCards);
        $this->setProcessor($processor);
        $this->setOs($os);
        $this->setColor($color);
        //optionnal default value
        $this->setKeyboard(false);
        $this->setMouse(false);
        $this->setMemory("8GB");
        // ID (auto generator
        $this->id = time();
    }


    /**
     *  Return the computer's ID
     * @return Int
     */
    public function getId(): int{
        return $this->id;
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
     * Return the computer's graphic card
     * @return String
     */
    public function getGraphicCards(): string    {
        return $this->graphicCards;
    }

    /**
     * Set the computer's graphicCards
     * @param String $graphicCards
     */
    public function setGraphicCards(string $graphicCards): void    {
        $this->graphicCards = $graphicCards;
    }

    /**
     * Return the computer's keyboard
     * @return bool
     */
    public function isKeyboard(): bool    {
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
    public function isMouse(): bool    {
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
     * Return the computer's memory
     * @return String
     */
    public function getMemory(): string    {
        return $this->memory;
    }

    /**
     * Set the computer's memory
     * @param String $memory
     */
    public function setMemory(string $memory): void    {
        $this->memory = $memory;
    }

    /**
     * Return the computer's processor
     * @return String
     */
    public function getProcessor(): string    {
        return $this->processor;
    }

    /**
     * Set the computer's processor
     * @param String $processor
     */
    public function setProcessor(string $processor): void    {
        $this->processor = $processor;
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
     * Return the computer's color
     * @return String
     */
    public function getColor(): string    {
        return $this->color;
    }

    /**
     * Set the computer's colo
     * @param String $color
     */
    public function setColor(string $color): void    {
        $this->color = $color;
    }

    /*
     * Start the computer
     */
    public function start() {
        echo $this->getBrand() . " started..... <br>";
    /*
     * Stop the computer
     */
    }
    public function shutdown(){
        echo $this->getBrand() . " off..... <br>";
    }

    /*
     * computer sleep
     */
    public function sleep()    {
        echo $this->getBrand() . " sleeping..... <br>";
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

