<?php

namespace App\Entity;

class Bd
{
    /**
     * @var string
     */
    private string $nom;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $dateParution;

    /**
     * @var string
     */
    private string $auteur;

    public function __construct($nom, $description, $dateParution, $auteur)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->dateParution = $dateParution;
        $this->auteur = $auteur;
    }

    /**
     *
     * @return  string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     *
     * @param  string  $nom
     *
     * @return  self
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     *
     * @return  string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @param  string  $description
     *
     * @return  self
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     *
     * @return  string
     */
    public function getDateParution()
    {
        return $this->dateParution;
    }

    /**
     *
     * @param  string  $dateParution
     *
     * @return  self
     */
    public function setDateParution(string $dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    /**
     *
     * @return  string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     *
     * @param  string  $auteur
     *
     * @return  self
     */
    public function setAuteur(string $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }
}
