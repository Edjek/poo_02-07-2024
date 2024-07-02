<?php

require_once './Article.php';

class Conserve extends Article
{
    /**
     * @var array
     */
    private array $listExcipient;

    // constructor


    /**
     *
     * @return  array
     */
    public function getListExcipient(): array
    {
        return $this->listExcipient;
    }

    /**
     *
     * @param  array  $listExcipient
     *
     * @return  self
     */
    public function setListExcipient(array $listExcipient): self
    {
        $this->listExcipient = $listExcipient;

        return $this;
    }

    /**
     * @return string
     */
    public function displayExcipient(): string
    {
        return "Dans le produit $this->name , La liste des excipient est " . implode(' - ', $this->listExcipient);
    }

    /**
     * @return string
     */
    public function displayProduct(): string
    {
        return parent::displayProduct() . " et la liste des excipient est : ";
    }
}
