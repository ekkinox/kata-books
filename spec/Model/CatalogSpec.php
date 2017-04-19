<?php

namespace spec\Ekkinox\KataBooks\Model;

use Ekkinox\KataBooks\Model\Book;
use Ekkinox\KataBooks\Model\Catalog;
use PhpSpec\ObjectBehavior;

/**
 * @package spec\Ekkinox\KataBooks\Model
 */
class CatalogSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Catalog::class);
    }

    function it_is_empty_after_construct()
    {
        $this->getProducts()->shouldHaveCount(0);
    }

    function it_can_add_a_product()
    {
        $this->getProducts()->shouldHaveCount(0);

        $this->addProduct(new Book())->shouldReturn($this);

        $this->getProducts()->shouldHaveCount(1);
    }

    function it_can_retrieve_a_product()
    {
        $book = (new Book())->setName('name')->setPrice(1);

        $this->getProducts()->shouldHaveCount(0);

        $this->addProduct($book)->shouldReturn($this);

        $this->getProducts()->shouldHaveCount(1);

        $this->getProduct('name')->shouldReturn($book);
    }

    function it_can_remove_a_product()
    {
        $book = (new Book())->setName('name')->setPrice(1);

        $this->getProducts()->shouldHaveCount(0);

        $this->addProduct($book)->shouldReturn($this);

        $this->getProducts()->shouldHaveCount(1);

        $this->removeProduct('name')->shouldReturn($this);

        $this->getProducts()->shouldHaveCount(0);
    }
}
