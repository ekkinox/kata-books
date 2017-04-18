<?php

namespace Ekkinox\KataBooks\Model;

/**
 * @package Ekkinox\KataBooks\Model
 */
class Cart
{
    /**
     * @var CatalogInterface
     */
    private $catalog;

    /**
     * @var array
     */
    private $items;

    /**
     * @param CatalogInterface $catalog
     */
    public function __construct(CatalogInterface $catalog)
    {
        $this->catalog = $catalog;
        $this->items   = [];
    }

    /**
     * @return int
     */
    public function getProductsTotalQuantity(): int
    {
        return array_sum($this->items);
    }

    /**
     * @return int
     */
    public function getProductsDistinctQuantity(): int
    {
        return count(array_keys($this->items));
    }

    /**
     * @param string $name
     *
     * @return int
     */
    public function getProductQuantity(string $name): int
    {
        return intval($this->items[$name] ?? 0);
    }

    /**
     * @return int
     */
    public function getTotalPrice(): int
    {
        $totalPrice = 0;
        foreach ($this->items as $name => $quantity) {
            $totalPrice += $this->catalog->getProduct($name)->getPrice() * $quantity;
        }

        return $totalPrice;
    }

    /**
     * @param string $name
     * @param int    $quantity
     *
     * @return Cart
     */
    public function addProduct(string $name, int $quantity): self
    {
        if (null !== $this->catalog->getProduct($name)) {
            if (!isset($this->items[$name])) {
                $this->items[$name] = 0;
            }
            $this->items[$name] += $quantity;
        }

        return $this;
    }

    /**
     * @param string $name
     * @param int    $quantity
     *
     * @return Cart
     */
    public function removeProduct(string $name, int $quantity): self
    {
        if (isset($this->items[$name])) {
            if ($this->items[$name] > $quantity) {
                $this->items[$name] -= $quantity;
            } else {
                unset($this->items[$name]);
            }
        }

        return $this;
    }
}
