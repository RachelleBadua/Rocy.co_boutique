Feature: View Edit About Us
  In order to view edit About Us
  I need to click on edit about us

  Scenario: try to view orders list
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    When I click on "About Us"
    And I click on "Edit About Us"
    Then I see "Edit About Us"