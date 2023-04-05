Feature: Place an order with pick up option
  In order to place an order with pick up option
  As an Customer 
  I need to select "pick up" option

  Scenario: try placing an order as pick up option
  	Given I logged in as a Customer 
    And I am on Cart page
  	And I select "pick up" option as shipping method
    When I click on "place order"
  	Then I see "order submitted" message 
    And I get a confirmation email about the order (not sure if this will be implemented)