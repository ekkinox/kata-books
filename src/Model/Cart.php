<?php

namespace Ekkinox\KataBooks\Model;

/**
 * @package Ekkinox\KataBooks\Model
 */
class Cart
{
    /**
     * @var Book[]
     */
    private $books = [];

    /**
     * @return Book[]
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    /**
     * @param Book $book
     *
     * @return Cart
     */
    public function addBook(Book $book): self
    {
        $this->books[$book->getName()] = $book;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        $totalPrice = 0.0;

        foreach ($this->books as $book) {
            $totalPrice += $book->getPrice();
        }

        return $totalPrice;
    }

    /**
     * @param string $name
     *
     * @return Cart
     */
    public function removeBook(string $name): self
    {
        unset($this->books[$name]);

        return $this;
    }
}
