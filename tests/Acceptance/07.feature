Feature: Add products to cart
  In order to add products to cart
  As a user
  I need to press "Add to Cart"

  Scenario: try adding product "Dark Red Fabric Scrunchy" to cart
  	Given I am on "/User/index" page 
    And I input "hello@email.com" in "email"
    And I input "1234" in "password"
    And I click on "Login"
    And I click on "Products"
    And I see "Catalog"  
    And I click on "Dark Red Fabric Scrunchy"
    And I see "Dark Red Fabric Scrunchy"
    When I click on "#addToCart" 
  	Then I see "Product added to cart"