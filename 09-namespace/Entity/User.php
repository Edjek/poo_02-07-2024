<?php

namespace App\Entity;

final class User
{
    /**
     * @var string
     */
    private string $pseudo;

    /**
     * @var bool
     */
    private bool $isInjured;

    /**
     * Get the value of pseudo
     *
     * @return  string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**set
     * Set the value of pseudo
     *
     * @param  string  $pseudo
     *
     * @return  self
     */
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of isInjured
     *
     * @return  bool
     */
    public function getIsInjured()
    {
        return $this->isInjured;
    }

    /**
     * Set the value of isInjured
     *
     * @param  bool  $isInjured
     *
     * @return  self
     */
    public function setIsInjured(bool $isInjured)
    {
        $this->isInjured = $isInjured;

        return $this;
    }
}
