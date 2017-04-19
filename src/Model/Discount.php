<?php

namespace Ekkinox\KataBooks\Model;

/**
 * @package Ekkinox\KataBooks\Model
 */
class Discount
{
    /**
     * @var int
     */
    private $percentage;

    /**
     * @var int
     */
    private $productCount;

    /**
     * @return int|null
     */
    public function getPercentage(): ?int
    {
        return $this->percentage;
    }

    /**
     * @param int $percentage
     *
     * @return Discount
     */
    public function setPercentage(int $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProductCount(): ?int
    {
        return $this->productCount;
    }

    /**
     * @param int $productCount
     *
     * @return Discount
     */
    public function setProductCount(int $productCount): self
    {
        $this->productCount = $productCount;

        return $this;
    }
}
