Feature: Remove Product from cart
  In order to remove product from cart
  As a user
  I need to press "remove"

  Scenario: Remove "Chill Summer Bracelet" from cart
  	Given I am on cart page
  	And I see "Chill Summer Bracelet" in cart
  	When I press "remove"
  	Then I don't see "Chill Summer Bracelet" in cart