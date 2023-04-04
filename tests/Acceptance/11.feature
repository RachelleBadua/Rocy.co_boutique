Feature: Place an order with pick up option
  In order to place an order with pick up option
  As an customer 
  I need to select pick up option

  Scenario: placing a order as pick up option
  	Given I am on cart
    And I am an user who is logged in
  	And I add product(s) into cart
  	And I select "pick up" option as shipping method
    When I click on "place order"
  	Then I should get a "order submitted" message on screen that the order has been sent by email to the admin
    And I should get a confirmation email about the order