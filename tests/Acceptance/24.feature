Feature: View Order detail
  In order to view Order detail
  I need to click on id of an order

  Scenario: try to view orders list
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "Order"
    And I click on "Order List"
    When I click on 21
    Then I see "Order Details"