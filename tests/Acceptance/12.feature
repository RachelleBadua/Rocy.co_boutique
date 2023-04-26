Feature: View products
  In order to view products
  I need to click on product list

  Scenario: try to view product list
  	Given I am on "Main Index" page
  	And I click "Products"
  	When I click "Product List"
    Then I see "Product List"