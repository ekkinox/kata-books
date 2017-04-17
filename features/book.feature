Feature: Book
  In order to sell a book
  As a bookseller
  I need to be able to set the book price, price currency and name and to retrieve them

  Scenario: Setting and getting the book price and price currency
    Given there is no price set to the book
    And there is no price currency set to the book
    When I set the price to 8
    And I set the price currency to EUR
    Then the book price should be 8
    And the book price currency should be EUR

  Scenario: Setting and getting the book name
    Given there is no name set to the book
    When I set the name to "Harry Potter 1"
    Then the book name should be "Harry Potter 1"