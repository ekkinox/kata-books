<?php

namespace Ekkinox\KataBooks\Model;

/**
 * @package Ekkinox\KataBooks\Model
 */
interface DiscountInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int|null
     */
    public function getPercentage(): ?int;

    /**
     * @return int|null
     */
    public function getProductCount(): ?int;
}
