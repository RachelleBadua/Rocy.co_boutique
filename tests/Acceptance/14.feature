Feature: Add product
  In order to add a new product
  As a Admin
  I need to click "Add"

  Scenario: try adding a new product as Admin
  	Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "Product"
    And I click on "Add product"
    And I see "Add Product"
    And I input "red bracelet" in "product_name"
    And I select "1" in "#category"
    And I attach file "image.png" in "image"
    And I input "12.99" in "sellingPrice"
    And I input "the bracelet is purple" in "description"
  	When I click on "Create" 
  	Then I see "Product added"
