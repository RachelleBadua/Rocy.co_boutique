Feature: View Customer detail
  In order to view Customer detail
  I need to click on id of an customer

  Scenario: try to view Customer list
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "Customer"
    And I click on "Customer List"
    When I click on 13
    Then I see "Customer Details"