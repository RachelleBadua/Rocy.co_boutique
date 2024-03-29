Feature: View products
  In order to view products
  I need to click on product list

  Scenario: try to view product list
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    When I click on "Product"
    And I click on "Product List"
    Then I see "Product List"