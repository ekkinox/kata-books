<?php

namespace spec\Ekkinox\KataBooks\Model;

use Ekkinox\KataBooks\Model\Book;
use Ekkinox\KataBooks\Model\Cart;
use PhpSpec\ObjectBehavior;

class CartSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Cart::class);
    }

    function it_is_empty_after_construct()
    {
        $this->getBooks()->shouldHaveCount(0);
    }

    function it_can_add_a_book_and_increment_its_count()
    {
        $this->getBooks()->shouldHaveCount(0);

        $this->addBook(new Book())->shouldReturn($this);

        $this->getBooks()->shouldHaveCount(1);
    }

    function it_can_remove_a_book_and_decrement_its_count()
    {
        $book = new Book();
        $book->setName('book1');

        $this->getBooks()->shouldHaveCount(0);

        $this->addBook($book)->shouldReturn($this);

        $this->getBooks()->shouldHaveCount(1);

        $this->removeBook('book1')->shouldReturn($this);

        $this->getBooks()->shouldHaveCount(0);
    }

    function it_can_calculates_its_total_price()
    {
        $book1 = new Book();
        $book1->setName('book1')->setPrice(8.0);

        $book2 = new Book();
        $book2->setName('book2')->setPrice(10.0);

        $this->getBooks()->shouldHaveCount(0);

        $this->addBook($book1)->shouldReturn($this);
        $this->addBook($book2)->shouldReturn($this);

        $this->getBooks()->shouldHaveCount(2);

        $this->getTotalPrice()->shouldReturn(18.0);
    }
}
