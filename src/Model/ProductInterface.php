<?php

namespace Ekkinox\KataBooks\Model;

/**
 * @package Ekkinox\KataBooks\Model
 */
interface ProductInterface
{
    /**
     * @return null|string
     */
    public function getName(): ?string;

    /**
     * @return int|null
     */
    public function getPrice(): ?int;
}
