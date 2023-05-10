Feature: Add category
  In order to add a category
  I need to input a category and click on add

  Scenario: try to view customers list
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "Product"
    And I click on "Category"
    And I see "Category"
    And I input "kits" in "categoryName"
    When I click on "Add"
    Then I see "Category added"