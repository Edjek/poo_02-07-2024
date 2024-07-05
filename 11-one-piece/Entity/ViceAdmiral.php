<?php

namespace App\Entity;

use App\Entity\Marine;

class ViceAdmiral extends Marine
{
    /**
     * @return string
     */
    public function commandFleet(): string
    {
        return "{$this->name} commande la flotte";
    }
}
