Feature: Set order status
  In order to set order status
  As a Admin 
  I need to click "done" or "undone" and see "Ordered" or "Finished"

  Scenario: try setting order status to "In progress"
  	Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "Order"
    And I click on "Order List"
    And I see "Order List"
  	When I click on "done"
  	Then I see "Finished"

  Scenario: try setting order status to "Finished"
  	Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "Order"
    And I click on "Order List"
    And I see "Order List"
    When I click on "undone"
    Then I see "Ordered"
