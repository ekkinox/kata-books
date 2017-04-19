<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Ekkinox\KataBooks\Model\Discount;

/**
 * Defines application features from the specific context.
 */
class DiscountContext implements Context
{
    private $discount;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->discount = new Discount();
    }

    /**
     * @Given there is no percentage set to the book
     */
    public function thereIsNoPercentageSetToTheBook()
    {
        PHPUnit_Framework_Assert::assertNull($this->discount->getPercentage());
    }

    /**
     * @When I set the percentage to :percentage %
     */
    public function iSetThePercentageTo($percentage)
    {
        $this->discount->setPercentage($percentage);
    }

    /**
     * @Then the book percentage should be :percentage %
     */
    public function theBookPercentageShouldBe($percentage)
    {
        PHPUnit_Framework_Assert::assertEquals(
            $percentage,
            $this->discount->getPercentage()
        );
    }

    /**
     * @Given there is no discount products count set to the book
     */
    public function thereIsNoDiscountProductsCountSetToTheBook()
    {
        PHPUnit_Framework_Assert::assertNull($this->discount->getProductCount());
    }

    /**
     * @When I set the discount products count to :productCount
     */
    public function iSetTheDiscountProductsCountTo($productCount)
    {
        $this->discount->setProductCount($productCount);
    }

    /**
     * @Then the discount products count should be :productCount
     */
    public function theDiscountProductsCountShouldBe($productCount)
    {
        PHPUnit_Framework_Assert::assertEquals(
            $productCount,
            $this->discount->getProductCount()
        );
    }
}
