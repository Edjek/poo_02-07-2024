<?php

namespace App\Entity;

use App\Entity\Pirate;

final class Captain extends Pirate
{
    /**
     * @var string
     */
    private string $crewName;

    /**
     * @param string $name
     * @param int $age
     * @param int $bounty
     * @param string $crewName
     */
    public function __construct(string $name, int $age, int $bounty, string $crewName)
    {
        parent::__construct($name, $age, $bounty);
        $this->crewName = $crewName;
    }


    /**
     * Get the value of crewName
     *
     * @return  string
     */
    public function getCrewName()
    {
        return $this->crewName;
    }

    /**
     * Set the value of crewName
     *
     * @param  string  $crewName
     *
     * @return  self
     */
    public function setCrewName(string $crewName)
    {
        $this->crewName = $crewName;

        return $this;
    }
}
