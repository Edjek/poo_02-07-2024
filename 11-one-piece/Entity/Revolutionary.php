<?php

namespace App\Entity;

use App\Abstract\Character;
use App\Interface\CombatSkills;

class Revolutionary extends Character implements CombatSkills
{
    /**
     * @return string
     */
    public function getRole(): string
    {
        return 'Revolutionary';
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
