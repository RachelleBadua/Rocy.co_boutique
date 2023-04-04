Feature: Scroll to category location in catalog
  In order to browse products based on category
  As a user
  I need to click on a specific category

  Scenario: Scroll to "bracelet" category
  	Given I am on the catalog page
  	When I click on "bracelet"
  	Then I see bracelet products