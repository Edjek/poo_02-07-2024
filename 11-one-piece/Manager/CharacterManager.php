<?php

namespace App\Manager;

use App\Abstract\Character;

class CharacterManager
{
    private array $characters = [];

    public function addCharacter(Character $character)
    {
        $this->characters[] = $character;
    }

    public function listCharacters(): array
    {
        return $this->characters;
    }
}
