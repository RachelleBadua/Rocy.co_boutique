Feature: Add new product
  In order to add a new product
  As a administrator
  I need to click "Add"

  Scenario: The administrator adding a new product
  	Given I am on Products page 
  	And I am logged in as administrator
  	When I click "Add new Product" 
  	And I fill-in the product's information of bracelet
  	Then I should see the new product on Products page
