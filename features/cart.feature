Feature: Cart
  In order to buy some books
  As a customer
  I need to be able to add, remove books to the shopping cart and get it's total price

  Scenario: Adding a book to the cart
    Given there is no book in the cart
    When I add a book named "book1" that costs 8 in EUR
    Then the cart should contain 1 book
    And the cart total price should be 8

  Scenario: Adding several books to the cart
    Given there is no book in the cart
    When I add a book named "book1" that costs 8 in EUR
    And I add a book named "book2" that costs 10 in EUR
    Then the cart should contain 2 book
    And the cart total price should be 18

  Scenario: Removing a book from the cart
    Given there is 1 book in the cart named "book1" that costs 10 in EUR
    When I remove the book named "book1" from the cart
    Then the cart should contain 0 book
    And the cart total price should be 0