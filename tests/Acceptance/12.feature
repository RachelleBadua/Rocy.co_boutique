Feature: View products
  In order to view products
  As a Admin
  I need to click on "product list" 

  Scenario: try clicking on "product list" as Admin
  	Given I am logged in as Admin
    And I am on the home page
  	When I click on "product list"
  	Then I see "Product List"
