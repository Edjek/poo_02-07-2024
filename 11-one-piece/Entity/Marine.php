<?php

namespace App\Entity;

use App\Abstract\Character;
use App\Interface\CombatSkills;

class Marine extends Character implements CombatSkills
{
    /**
     * @return string
     */
    public function getRole(): string
    {
        return 'Marine';
    }

    /**
     * @return string
     */
    public function attack(): string
    {
        return "{$this->name} attaque!";
    }

    /**
     * @return string
     */
    public function defend(): string
    {
        return "{$this->name} defend";
    }
}
