Feature: Edit product 
  In order to edit product
  As a Admin
  I need to click "edit product"

  Scenario: try editing a product as Admin
  	Given I am logged in as Admin
  	And I am on Products Page
  	And I click on "Edit" on the record of "bracelet1" 
  	And I input "15.99" in "sellingPrice"
    When I click "Save Changes"
    And I click "Confirm"
  	Then I see "Changes were saved"
