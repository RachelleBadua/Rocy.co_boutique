Feature: Search products by name
  In order to search product by name
  As a user
  I need to be able to input text
  and get results

  Scenario: try searching products that contains "blue" in its name 
  	Given I am on the Catalog page
  	When I input "blue" in "q"
  	And I press "search"
  	Then I see products that contains "blue" in its name