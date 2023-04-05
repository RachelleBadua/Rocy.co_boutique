Feature: Place an order with delivery option
  In order to place an order with delievry option
  As a Customer 
  I need to select delivery

  Scenario: try placing an order as delivery option 
  	Given I am logged in as Customer 
    And I am on Cart page
    And I select "delivery" option as shipping method
    And I input "821 Sainte Croix Ave" in "address" 
    And I input "Saint-Laurent" in "city"
    And I input "Quebec" in "Province/State"
    And I input "H4L 3X9" in "Postal code"
  	When I click on "place order"
  	Then I see "order submitted" message
  	And I get a confirmation email about the order (not sure if this will be implemented)