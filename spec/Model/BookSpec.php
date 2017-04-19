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

    function it_gets_and_sets_a_name()
    {
        $this->getName()->shouldReturn(null);

        $this->setName('name');

        $this->getName()->shouldReturn('name');
    }

    function it_gets_and_sets_a_price()
    {
        $this->getPrice()->shouldReturn(null);

        $this->setPrice(8);

        $this->getPrice()->shouldReturn(8);
    }
}
