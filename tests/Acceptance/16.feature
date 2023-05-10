Feature: Remove Product 
  In order to remove product
  As a Admin
  I need to click on "Remove product"

  Scenario: try removing a product as Admin
  	Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "Product"
    And I click on "Product List"
    And I see "Product List"
  	When I click on "delete"
  	Then I see "Product deleted"
