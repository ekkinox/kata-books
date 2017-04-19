<?php

namespace spec\Ekkinox\KataBooks\Model;

use Ekkinox\KataBooks\Model\Discount;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @package spec\Ekkinox\KataBooks\Model
 */
class DiscountSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Discount::class);
    }

    function it_gets_and_sets_a_percentage()
    {
        $this->getPercentage()->shouldReturn(null);

        $this->setPercentage(10);

        $this->getPercentage()->shouldReturn(10);
    }

    function it_gets_and_sets_a_product_count()
    {
        $this->getProductCount()->shouldReturn(null);

        $this->setProductCount(3);

        $this->getProductCount()->shouldReturn(3);
    }
}
