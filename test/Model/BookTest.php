<?php

namespace Ekkinox\KataBooks\Test\Model;

use Ekkinox\KataBooks\Model\Book;
use PHPUnit\Framework\TestCase;

/**
 * @package Ekkinox\KataBooks\Test\Model
 */
class StubTest extends TestCase
{
    /**
     * @var Book
     */
    private $subject;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();

        $this->subject = new Book();
    }

    /**
     * @covers \Ekkinox\KataBooks\Model\Book
     */
    public function testPrice()
    {
        $this->subject->setPrice(8.0);

        $this->assertEquals(8.0, $this->subject->getPrice());
    }

    /**
     * @covers \Ekkinox\KataBooks\Model\Book
     */
    public function testPriceCurrency()
    {
        $this->subject->setPriceCurrency('EUR');

        $this->assertEquals('EUR', $this->subject->getPriceCurrency());
    }

    /**
     * @covers \Ekkinox\KataBooks\Model\Book
     */
    public function testName()
    {
        $this->subject->setName('name');

        $this->assertEquals('name', $this->subject->getName());
    }
}