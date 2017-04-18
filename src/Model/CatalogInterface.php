<?php

namespace Ekkinox\KataBooks\Model;

/**
 * @package Ekkinox\KataBooks\Model
 */
interface CatalogInterface
{
    /**
     * @param string $name
     *
     * @return ProductInterface|null
     */
    public function getProduct(string $name): ?ProductInterface;
}
