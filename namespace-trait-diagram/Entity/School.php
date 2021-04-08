<?php


namespace Live\Entity;

use Live\Traits\EntityTrait;
use Live\Entity\Implantation;
class School{

    use EntityTrait;

    private Implantation $implantation;
    private string  $director;

    /**
     * Student constructor.
     * @param Implantation $implantation
     * @param string $director
     */
    public function __construct(Implantation $implantation, string $director)    {
        $this->implantation = $implantation;
        $this->director = $director;
    }

    /**
     * Set the school implantation
     * @param Implantation $implantation
     */
    public function setImplantation(Implantation $implantation){
        $this->implantation = $implantation;

    }

    /**
     * Get the school implantation
     * @return Implantation
     */
    public function getImplantation(): Implantation {
        return $this->implantation;
    }

    /**
     * Set the school director
     * @param string $director
     */
    public function setDirector(string $director){
        $this->director = $director;
    }

    /**
     * Get the school director
     * @return string
     */
    public function getDirector(): string {
        return $this->director;
    }
}