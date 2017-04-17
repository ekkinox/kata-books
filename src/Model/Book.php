<?php

namespace Ekkinox\KataBooks\Model;

/**
 * @package Ekkinox\KataBooks\Model
 */
class Book
{
    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $priceCurrency;

    /**
     * @var string
     */
    private $name;

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return Book
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriceCurrency(): ?string
    {
        return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     *
     * @return Book
     */
    public function setPriceCurrency($priceCurrency): self
    {
        $this->priceCurrency = $priceCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Book
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
