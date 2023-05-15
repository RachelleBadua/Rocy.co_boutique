Feature: View Product detail
  In order to view product detail
  I need to click on id of a product

  Scenario: try to view product detail
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "Product"
    And I click on "Product List"
    When I click on 2
    Then I see "Product Details"