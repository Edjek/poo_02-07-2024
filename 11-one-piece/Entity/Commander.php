<?php

namespace App\Entity;

use App\Entity\Revolutionary;

class Commander extends Revolutionary
{
    /**
     * @return string
     */
    public function leadRevolution(): string
    {
        return "{$this->name} mène la revolution";
    }
}
