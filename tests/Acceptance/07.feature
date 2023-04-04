Feature: Add products to cart
  In order to add products to cart
  As a user
  I need to press "Add to Cart"

  Scenario: Add product "Chill Summer Bracelet" to cart
  	Given I am viewing product's detail of "Chill Summer Bracelet"
  	When I press "Add to cart"
  	Then I see "Add to cart successfully" notification