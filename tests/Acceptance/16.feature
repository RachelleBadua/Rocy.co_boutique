Feature: Remove Product 
  In order to remove product
  As a administrator
  I need to click on "Remove product"

  Scenario: The adminitrator removing a product
  	Given I am on Products page
  	And I am logged in as an administrator
  	When I click on "Remove Product"
  	And I select bracelet 
    And I click on "remove"
  	Then I should not see bracelet in products
