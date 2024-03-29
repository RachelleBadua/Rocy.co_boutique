Feature: View category
  In order to view category
  I need to click on add category

  Scenario: try to view category
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    When I click on "Product"
    And I click on "Category"
    Then I see "Category"