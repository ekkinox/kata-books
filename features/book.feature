Feature: Book
  In order to sell a book
  As a bookseller
  I need to be able to set the book name and price and to retrieve them

  Scenario: Setting and getting the book name
    Given there is no name set to the book
    When I set the name to "Harry Potter 1"
    Then the book name should be "Harry Potter 1"

  Scenario: Setting and getting the book price
    Given there is no price set to the book
    When I set the price to 8
    Then the book price should be 8