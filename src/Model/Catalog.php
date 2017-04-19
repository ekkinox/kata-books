<?php

namespace Ekkinox\KataBooks\Model;

/**
 * @package Ekkinox\KataBooks\Model
 */
class Catalog implements CatalogInterface
{
    /**
     * @var ProductInterface[]
     */
    private $products = [];

    /**
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param ProductInterface $product
     *
     * @return Catalog
     */
    public function addProduct(ProductInterface $product): self
    {
        $this->products[$product->getName()] = $product;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getProduct(string $name): ?ProductInterface
    {
        return $this->products[$name] ?? null;
    }

    /**
     * @param string $name
     *
     * @return Catalog
     */
    public function removeProduct(string $name): self
    {
        if (isset($this->products[$name])) {
            unset($this->products[$name]);
        }

        return $this;
    }
}
