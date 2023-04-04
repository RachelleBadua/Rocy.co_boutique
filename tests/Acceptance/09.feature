Feature: Modify quantity of products in cart
  In order to modify quantity of products in cart
  As a customer 
  I need to click on the up arrow or the down arrow button to increase or decrease number of products

  Scenario: increasing by 1 the quantity of a product in the cart 
  	Given I am on cart
  	And I am an user who is logged in
  	And I added product(s) to cart
  	When I click on the Up arrow one time
  	Then the number of quantity the product will increase by 1
