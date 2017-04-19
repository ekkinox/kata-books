<?php

namespace spec\Ekkinox\KataBooks\Model;

use Ekkinox\KataBooks\Model\Book;
use Ekkinox\KataBooks\Model\Cart;
use Ekkinox\KataBooks\Model\Catalog;
use PhpSpec\ObjectBehavior;

class CartSpec extends ObjectBehavior
{
    function let()
    {
        $catalog = new Catalog();
        $catalog
            ->addProduct((new Book())->setName('book1')->setPrice(8))
            ->addProduct((new Book())->setName('book2')->setPrice(9))
            ->addProduct((new Book())->setName('book3')->setPrice(10));

        $this->beConstructedWith($catalog);

        $this->addProduct('book1', 1)->shouldReturn($this);
        $this->addProduct('book2', 2)->shouldReturn($this);
        $this->addProduct('book3', 3)->shouldReturn($this);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Cart::class);
    }

    function it_add_products()
    {
        $this->getProductsTotalQuantity()->shouldReturn(6);
        $this->getProductsDistinctQuantity()->shouldReturn(3);
    }

    function it_remove_products()
    {
        $this->getProductsTotalQuantity()->shouldReturn(6);
        $this->getProductsDistinctQuantity()->shouldReturn(3);
        $this->removeProduct('book3', 1)->shouldReturn($this);
        $this->getProductQuantity('book3')->shouldReturn(2);
        $this->getProductsTotalQuantity()->shouldReturn(5);
        $this->getProductsDistinctQuantity()->shouldReturn(3);
        $this->removeProduct('book1', 1)->shouldReturn($this);
        $this->getProductQuantity('book1')->shouldReturn(0);
        $this->getProductsTotalQuantity()->shouldReturn(4);
        $this->getProductsDistinctQuantity()->shouldReturn(2);
    }

    function it_get_a_product_quantity()
    {
        $this->getProductQuantity('book1')->shouldReturn(1);
        $this->getProductQuantity('book2')->shouldReturn(2);
        $this->getProductQuantity('book3')->shouldReturn(3);
    }

    function it_get_total_price()
    {
        $this->getTotalPrice()->shouldReturn(56);
    }
}
