<?php

namespace App\Entity;

use App\Abstract\Vehicule;
use App\Entity\User;
use App\Utilitaire\Engine;

class Renault extends Vehicule implements Engine
{
    /**
     * @var string
     */
    private string $carburant;

    /**
     * @return string
     */
    public function carburant(): string
    {
        return 'Diesel';
    }

    /**
     * @return int
     */
    public function nbTest(): int
    {
        return parent::nbTest() + 30;
    }

    public function start(User $user)
    {
        return "{$user->getPseudo()} a démarré la Renault";
    }
}
