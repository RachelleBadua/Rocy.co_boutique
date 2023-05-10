Feature: View orders
  In order to view orders
  I need to click on orders list

  Scenario: try to view orders list
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    When I click on "Order"
    And I click on "Order List"
    Then I see "Order List"