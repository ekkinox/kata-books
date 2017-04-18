<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Ekkinox\KataBooks\Model\Book;
use Ekkinox\KataBooks\Model\Catalog;

/**
 * Defines application features from the specific context.
 */
class CatalogContext implements Context
{
    /**
     * @var Book
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
     * @Given there is no product in the catalog
     */
    public function thereIsNoProductInTheCatalog()
    {
        PHPUnit_Framework_Assert::assertCount(
            0,
            $this->catalog->getProducts()
        );
    }

    /**
     * @When I add a product named :name that costs :price
     */
    public function iAddANamedProductWithACost($name, $price)
    {
        $this->catalog->addProduct(
            (new Book())->setName($name)->setPrice($price)
        );
    }

    /**
     * @Then the catalog should contain :productCount products
     */
    public function theCatalogShouldContainProducts($productCount)
    {
        PHPUnit_Framework_Assert::assertCount(
            intval($productCount),
            $this->catalog->getProducts()
        );
    }

    /**
     * @Given there is already a product in the catalog named :name that costs :price
     */
    public function thereIsANamedProductInTheCatalogWithACosts($name, $price)
    {
        $this->iAddANamedProductWithACost($name, $price);
    }

    /**
     * @When I remove the product named :arg1 from the catalog
     */
    public function iRemoveTheProductNamedFromTheCatalog($name)
    {
        $this->catalog->removeProduct($name);
    }

    /**
     * @Then the catalog should contain a product named :name
     */
    public function theCatalogShouldContainAProductNamed($name)
    {
        PHPUnit_Framework_Assert::assertNotNull($this->catalog->getProduct($name));
    }
}
