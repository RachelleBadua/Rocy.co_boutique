Feature: Modify quantity of products in cart
  In order to modify quantity of products in cart
  As a Customer 
  I need to click on the up arrow or the down arrow button to increase or decrease number of products

  Scenario: try increasing by 1 the quantity of a product in the cart 
	  Given I am on "/User/index" page 
    And I input "hello@email.com" in "email"
    And I input "1234" in "password"
    And I click on "Login"
    And I click on "Cart"
    And I see "My Cart"
    When I input "2" in ".qty"
    Then I see "2"

    
