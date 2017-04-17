<?php

namespace spec\Ekkinox\KataBooks\Model;

use Ekkinox\KataBooks\Model\Book;
use PhpSpec\ObjectBehavior;

class BookSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType(Book::class);
    }

    function it_gets_and_sets_a_price()
    {
        $this->getPrice()->shouldReturn(null);

        $this->setPrice(8.0);

        $this->getPrice()->shouldReturn(8.0);
    }

    function it_gets_and_sets_a_price_currency()
    {
        $this->getPriceCurrency()->shouldReturn(null);

        $this->setPriceCurrency('EUR');

        $this->getPriceCurrency()->shouldReturn('EUR');
    }

    function it_gets_and_sets_a_name()
    {
        $this->getName()->shouldReturn(null);

        $this->setName('name');

        $this->getName()->shouldReturn('name');
    }
}
