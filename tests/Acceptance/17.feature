Feature: View customers
  In order to view customers
  I need to click on customers list

  Scenario: try to view customers list
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    When I click on "Customer"
    And I click on "Customer List"
    Then I see "Customer List"