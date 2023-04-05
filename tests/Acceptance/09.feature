Feature: Modify quantity of products in cart
  In order to modify quantity of products in cart
  As a Customer 
  I need to click on the up arrow or the down arrow button to increase or decrease number of products

  Scenario: try increasing by 1 the quantity of a product in the cart 
  	Given I am an user who is logged in
  	And I am on Cart page 
  	When I click on the Up arrow one time
  	Then I see the quantity of the "bracelet1" will increase by 1
