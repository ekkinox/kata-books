<?php

namespace Ekkinox\KataBooks\Test\Model;

use Ekkinox\KataBooks\Model\Book;
use PHPUnit\Framework\TestCase;

/**
 * @package Ekkinox\KataBooks\Test\Model
 */
class BookTest extends TestCase
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
    public function testName()
    {
        $this->subject->setName('name');

        $this->assertEquals('name', $this->subject->getName());
    }

    /**
     * @covers \Ekkinox\KataBooks\Model\Book
     */
    public function testPrice()
    {
        $this->subject->setPrice(8);

        $this->assertEquals(8, $this->subject->getPrice());
    }
}
