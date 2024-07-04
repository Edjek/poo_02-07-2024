<?php

namespace App\Abstract;

use App\Entity\User;

abstract class Vehicule
{
    /**
     * @var int
     */
    protected int $nbTest = 100;

    /**
     * @return string
     */
    final public function demarrer(): string
    {
        return 'Je suis démarré';
    }

    /**
     * @return string
     */
    abstract public function carburant(): string;

    /**
     * @return int
     */
    public function nbTest(): int
    {
        return $this->nbTest;
    }

    public function getCrash(User $user, bool $isInjured)
    {
        $user->setIsInjured($isInjured);

        if($user->getIsInjured()) {
            return "{$user->getPseudo()} est blessé";
        }

        return "{$user->getPseudo()} n'est pas blessé";


    }
}
