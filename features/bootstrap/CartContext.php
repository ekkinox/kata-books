<?php

use Behat\Behat\Context\Context;
use Ekkinox\KataBooks\Model\Book;
use Ekkinox\KataBooks\Model\Cart;

/**
 * Defines application features from the specific context.
 */
class CartContext implements Context
{
    /**
     * @var Book
     */
    private $cart;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->cart = new Cart();
    }

    /**
     * @Given there is no book in the cart
     */
    public function thereIsNoBookInTheCart()
    {
        PHPUnit_Framework_Assert::assertCount(
            0,
            $this->cart->getBooks()
        );
    }

    /**
     * @When I add a book named :name that costs :price in :currency
     */
    public function iAddABook($name, $price, $currency)
    {
        $book = new Book();
        $book
            ->setName($name)
            ->setPrice($price)
            ->setPriceCurrency($currency);

        $this->cart->addBook($book);
    }

    /**
     * @Then the cart should contain :count book
     */
    public function theCartShouldContainBook($count)
    {
        PHPUnit_Framework_Assert::assertCount(
            intval($count),
            $this->cart->getBooks()
        );
    }

    /**
     * @Then the cart total price should be :totalPrice
     */
    public function theCartTotalPriceShouldBe($totalPrice)
    {
        PHPUnit_Framework_Assert::assertEquals(
            $totalPrice,
            $this->cart->getTotalPrice()
        );
    }

    /**
     * @Given there is :count book in the cart named :name that costs :price in :currency
     */
    public function thereIsBookInTheCartNamedThatCostsInEur($count, $name, $price, $currency)
    {
        $iterator = 0;

        while ($iterator < $count) {
            $this->iAddABook($name, $price, $currency);
            $iterator ++;
        }
    }

    /**
     * @When I remove the book named :name from the cart
     */
    public function iRemoveTheBookNamedFromTheCart($name)
    {
        $this->cart->removeBook($name);
    }
}
