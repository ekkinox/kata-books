<?php

use Behat\Behat\Context\Context;
use Ekkinox\KataBooks\Model\Book;

/**
 * Defines application features from the specific context.
 */
class BookContext implements Context
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

    /**
     * @Given there is no price set to the book
     */
    public function thereIsNoPriceSetToTheBook()
    {
        PHPUnit_Framework_Assert::assertNull($this->book->getPrice());
    }


    /**
     * @When I set the price to :price
     */
    public function iSetThePriceTo($price)
    {
        $this->book->setPrice($price);
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
}
