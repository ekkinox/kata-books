Feature: Catalog
  In order to sell some products
  As a bookseller
  I need to be able to add, remove products to the catalog

  Scenario: Adding a product to the catalog
    Given there is no product in the catalog
    When I add a product named "book1" that costs 8
    Then the catalog should contain 1 products

  Scenario: Adding several different products to the catalog
    Given there is no product in the catalog
    When I add a product named "book1" that costs 8
    And I add a product named "book2" that costs 10
    Then the catalog should contain 2 products
    And the catalog should contain a product named "book1"
    And the catalog should contain a product named "book2"

  Scenario: Adding twice the same product to the catalog
    Given there is no product in the catalog
    When I add a product named "book1" that costs 8
    And I add a product named "book1" that costs 10
    Then the catalog should contain 1 products

  Scenario: Retrieving a product from the catalog
    Given there is already a product in the catalog named "book1" that costs 10
    Then the catalog should contain a product named "book1"

  Scenario: Removing a product from the catalog
    Given there is already a product in the catalog named "book1" that costs 10
    When I remove the product named "book1" from the catalog
    Then the catalog should contain 0 products