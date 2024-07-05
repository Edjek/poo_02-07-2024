<?php

namespace App\Interface;

interface CombatSkills
{
    /**
     * @return string
     */
    public function attack(): string;

    /**
     * @return string
     */
    public function defend(): string;
}
