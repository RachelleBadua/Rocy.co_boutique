Feature: Search products by name
  In order to search product by name
  I need to be able to input text
  and get results

  Scenario: try searching products that contains "red" in its name 
  	Given I am on "/Product/index" page
  	When I input "red" in "value"
  	And I press "searching"
  	Then I see "red"