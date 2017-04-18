<?php

use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Ekkinox\KataBooks\Model\Book;
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
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->catalog = new Catalog();
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
        throw new PendingException();
    }

    /**
     * @When I add :arg2 products named :arg1
     */
    public function iAddProductsNamed($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then the cart should contain :arg1 distinct products
     */
    public function theCartShouldContainDistinctProducts($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the cart should contain :arg1 total products
     */
    public function theCartShouldContainTotalProducts($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the cart total price should be :arg1
     */
    public function theCartTotalPriceShouldBe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given there is no product in the cart
     */
    public function thereIsNoProductInTheCart()
    {
        throw new PendingException();
    }

    /**
     * @Then the cart should contain :arg2 products named :arg1
     */
    public function theCartShouldContainProductsNamed($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given I already added :arg2 products to the cart named :arg1
     */
    public function iAlreadyAddedProductsToTheCartNamed($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I remove :arg2 products named :arg1 from the cart
     */
    public function iRemoveProductsNamedFromTheCart($arg1, $arg2)
    {
        throw new PendingException();
    }
}
