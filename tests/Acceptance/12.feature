Feature: View orders
  In order to view orders
  As a administrator
  I need to click on "orders" 

  Scenario: the administrator clicks on "orders"
  	Given I am on the home page
    And I am loggd in as admin
  	When I click on "orders"
  	Then I should see "Customers' Orders"
