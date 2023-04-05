Feature: Remove Product 
  In order to remove product
  As a Admin
  I need to click on "Remove product"

  Scenario: try removing a product as Admin
  	Given I am logged in as an Admin
  	And I am on Products page
  	When I click on "Remove" on the record of "bracelet1" 
    And I click "Confirm"
  	Then I see "Product has been removed"
