Feature: Edit product 
  In order to edit product
  As a Admin
  I need to click "edit product"

  Scenario: try editing a product as Admin
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "Product"
    And I click on "Product List"
    And I see "Product List"
    And I click on "edit"
    And I input "2.99" in "sellingPrice"
    When I click on "Edit Product"
    Then I see "2.99"



