Feature: Remove Product from cart
  In order to remove product from cart
  As a Customer
  I need to press "remove"

  Scenario: try removing "Chill Summer Bracelet" from cart
  	Given I am logged in as Customer 
    And I am on Cart page
  	And I see "Chill Summer Bracelet" in cart
  	When I press "remove"
  	Then I don't see "Chill Summer Bracelet" in cart