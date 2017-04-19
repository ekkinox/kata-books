<?php

namespace Ekkinox\KataBooks\Test\Model;

use Ekkinox\KataBooks\Model\Discount;
use PHPUnit\Framework\TestCase;

/**
 * @package Ekkinox\KataBooks\Test\Model
 */
class DiscountTest extends TestCase
{
    /**
     * @var Discount
     */
    private $subject;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();

        $this->subject = new Discount();
    }

    /**
     * @covers \Ekkinox\KataBooks\Model\Discount
     */
    public function testName()
    {
        $this->subject->setName('name');

        $this->assertEquals('name', $this->subject->getName());
    }

    /**
     * @covers \Ekkinox\KataBooks\Model\Discount
     */
    public function testPercentage()
    {
        $this->subject->setPercentage(10);

        $this->assertEquals(10, $this->subject->getPercentage());
    }

    /**
     * @covers \Ekkinox\KataBooks\Model\Discount
     */
    public function testProductCount()
    {
        $this->subject->setProductCount(1);

        $this->assertEquals(1, $this->subject->getProductCount());
    }
}