<?php

namespace Ekkinox\KataBooks\Model;

/**
 * @package Ekkinox\KataBooks\Model
 */
class Discount implements DiscountInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $percentage;

    /**
     * @var int
     */
    private $productCount;

    /**
     * @inheritdocing
     */
    public function getName(): string
    {
        return $this->name ?? uniqid('discount_');
    }

    /**
     * @param string $name
     *
     * @return Discount
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @inheritdoc
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
     * @inheritdoc
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
