<?php

use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Ekkinox\KataBooks\Model\Book;
use Ekkinox\KataBooks\Model\Cart;
use Ekkinox\KataBooks\Model\Catalog;

/**
 * Defines application features from the specific context.
 */
class CartContext implements Context
{
    /**
     * @var Catalog
     */
    private $catalog;

    /**
     * @var Cart
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
        $this->catalog = new Catalog();
        $this->cart    = new Cart($this->catalog);
    }

    /**
     * @Given the following products exist in catalog
     */
    public function theFollowingProductsExistInCatalog(TableNode $table)
    {
        foreach ($table as $row) {
            $this->catalog->addProduct(
                (new Book())->setName($row['name'])->setPrice($row['price'])
            );
        }
    }

    /**
     * @Given there is no products in the cart
     */
    public function thereIsNoProductsInTheCart()
    {
        PHPUnit_Framework_Assert::assertEquals(
            0,
            $this->cart->getProductsTotalQuantity()
        );

        PHPUnit_Framework_Assert::assertEquals(
            0,
            $this->cart->getProductsDistinctQuantity()
        );
    }

    /**
     * @When I add :quantity products named :name
     */
    public function iAddNamedProducts($quantity, $name)
    {
        $this->cart->addProduct($name, $quantity);
    }

    /**
     * @Then the cart should contain :quantity distinct products
     */
    public function theCartShouldContainDistinctProducts($quantity)
    {
        PHPUnit_Framework_Assert::assertEquals(
            intval($quantity),
            $this->cart->getProductsDistinctQuantity()
        );
    }

    /**
     * @Then the cart should contain :quantity total products
     */
    public function theCartShouldContainTotalProducts($quantity)
    {
        PHPUnit_Framework_Assert::assertEquals(
            intval($quantity),
            $this->cart->getProductsTotalQuantity()
        );
    }

    /**
     * @Then the cart total price should be :totalPrice
     */
    public function theCartTotalPriceShouldBe($totalPrice)
    {
        PHPUnit_Framework_Assert::assertEquals(
            intval($totalPrice),
            $this->cart->getTotalPrice()
        );
    }

    /**
     * @Then the cart should contain :quantity products named :name
     */
    public function theCartShouldContainProductsNamed($quantity, $name)
    {
        PHPUnit_Framework_Assert::assertEquals(
            intval($quantity),
            $this->cart->getProductQuantity($name)
        );
    }

    /**
     * @Given I already added :quantity products to the cart named :name
     */
    public function iAlreadyAddedProductsToTheCartNamed($quantity, $name)
    {
        $this->cart->addProduct($name, $quantity);
    }

    /**
     * @When I remove :arg2 products named :arg1 from the cart
     */
    public function iRemoveProductsNamedFromTheCart($quantity, $name)
    {
        $this->cart->removeProduct($name, $quantity);
    }
}
