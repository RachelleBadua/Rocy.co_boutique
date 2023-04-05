Feature: View orders
  In order to view orders
  As a Admin
  I need to click on "orders" 

  Scenario: try clicking on "orders" as Admin
  	Given I am logged in as Admin
    And I am on the home page
  	When I click on "orders"
  	Then I see "Customer Orders"
