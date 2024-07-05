<?php

namespace App\Entity;

use App\Abstract\Character;
use App\Interface\CombatSkills;

class Pirate extends Character implements CombatSkills
{
    /**
     * @return string
     */
    public function getRole(): string
    {
        return 'Pirate';
    }

    /**
     * @return string
     */
    public function attack(): string
    {
        return "{$this->name} attaque";

    }

    /**
     * @return string
     */
    public function defend(): string
    {
        return "{$this->name} defend";
    }
}
