Feature: Edit product 
  In order to edit product
  As a administrator
  I need to click "edit product"

  Scenario: The administrator editing a product
  	Given I am on Products Page
  	And I am logged in as administrator
  	When I click "Edit Product" 
  	And I edit description of a bracelet
    And I click "save changes"
  	Then I should see the description of the bracelet changed
