<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Ekkinox\KataBooks\Model\Book;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * @var Book
     */
    private $book;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->book = new Book();
    }

    /**
     * @Given there is no price set to the book
     */
    public function thereIsNoPriceSetToTheBook()
    {
        PHPUnit_Framework_Assert::assertNull($this->book->getPrice());
    }

    /**
     * @Given there is no price currency set to the book
     */
    public function thereIsNoPriceCurrencySetToTheBook()
    {
        PHPUnit_Framework_Assert::assertNull($this->book->getPriceCurrency());
    }

    /**
     * @When I set the price to :price
     */
    public function iSetThePriceTo($price)
    {
        $this->book->setPrice($price);
    }

    /**
     * @When I set the price currency to :currency
     */
    public function iSetThePriceCurrencyTo($currency)
    {
        $this->book->setPriceCurrency($currency);
    }

    /**
     * @Then the book price should be :price
     */
    public function theBookPriceShouldBe($price)
    {
        PHPUnit_Framework_Assert::assertEquals(
            $price,
            $this->book->getPrice()
        );
    }

    /**
     * @Then the book price currency should be :currency
     */
    public function theBookPriceCurrencyShouldBe($currency)
    {
        PHPUnit_Framework_Assert::assertEquals(
            $currency,
            $this->book->getPriceCurrency()
        );
    }

    /**
     * @Given there is no name set to the book
     */
    public function thereIsNoNameSetToTheBook()
    {
        PHPUnit_Framework_Assert::assertNull($this->book->getName());
    }

    /**
     * @When I set the name to :name
     */
    public function iSetTheNameTo($name)
    {
        $this->book->setName($name);
    }

    /**
     * @Then the book name should be :name
     */
    public function theBookNameShouldBe($name)
    {
        PHPUnit_Framework_Assert::assertEquals(
            $name,
            $this->book->getName()
        );
    }
}
