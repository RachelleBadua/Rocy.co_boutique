Feature: Add product
  In order to add a new product
  As a Admin
  I need to click "Add"

  Scenario: try adding a new product as Admin
  	Given I am logged in as Admin 
    And I am on Products page 
    And I click "Add Product"
    And I input "01" in "category_id"
    And "bracelet1" in "product_name"
    And "image.png" in "image"
    And "12.99" in "sellingPrice"
    And "the bracelet is purple" in "description"
  	When I click on "Add" 
  	Then I see "Product has been added"
