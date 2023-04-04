Feature: Place an order with delivery option
  In order to place an order with delievry option
  As a customer 
  I need to select delivery

  Scenario: the customer clicks wants to deliver their order
  	Given I am on cart
    And I am an user who is logged in
  	And I added product(s) in cart
    And I selected delivery option as shipping method
    And I filled-in form for address
  	When I click on "place order"
  	Then I should get a "order submitted" message on screen that the order has been sent by email to the admin
  	And I should get a confirmation email about the order