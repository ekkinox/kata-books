Feature: Cart
  In order to buy some products
  As a customer
  I need to be able to add, remove products to the cart, and get the total price and count

  Background:
    Given the following products exist in catalog
      | name  | price |
      | book1 | 8     |
      | book2 | 9     |
      | book3 | 10    |

  Scenario: Adding a product to the cart
    Given there is no products in the cart
    When I add 1 products named "book1"
    Then the cart should contain 1 distinct products
    Then the cart should contain 1 total products
    Then the cart total price should be 8

  Scenario: Adding twice the same product to the cart
    Given there is no products in the cart
    When I add 1 products named "book1"
    And I add 1 products named "book1"
    Then the cart should contain 1 distinct products
    Then the cart should contain 2 total products

  Scenario: Adding different products to the cart
    Given there is no product in the cart
    When I add 1 products named "book1"
    And I add 1 products named "book2"
    And I add 1 products named "book3"
    Then the cart should contain 3 distinct products
    And the cart should contain 3 total products
    And the cart should contain 1 products named "book1"
    And the cart should contain 1 products named "book2"
    And the cart should contain 1 products named "book3"
    And the cart total price should be 27

  Scenario: Adding several different products to the cart
    Given there is no product in the cart
    When I add 1 products named "book1"
    And I add 2 products named "book2"
    And I add 3 products named "book3"
    Then the cart should contain 3 distinct products
    And the cart should contain 6 total products
    And the cart should contain 1 products named "book1"
    And the cart should contain 2 products named "book2"
    And the cart should contain 3 products named "book3"
    And the cart total price should be 56

  Scenario: Removing a product from the cart
    Given I already added 1 products to the cart named "book1"
    When I remove 1 products named "book1" from the cart
    And the cart should contain 0 products named "book1"
    Then the cart should contain 0 distinct products
    Then the cart should contain 0 total products