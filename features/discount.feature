Feature: Discount
  In order to get customer fidelity
  As a bookseller
  I need to be able to define discounts percentages to shopping cart by product count

  Scenario: Setting and getting the discount percentage
    Given there is no percentage set to the book
    When I set the percentage to 10 %
    Then the book percentage should be 10 %

  Scenario: Setting and getting the discount products count
    Given there is no discount products count set to the book
    When I set the discount products count to 2
    Then the discount products count should be 2