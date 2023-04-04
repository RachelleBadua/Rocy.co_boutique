Feature: View product's detail
  In order to view product detail
  As a user
  I need to be able to click on the product
  And see the products information in detail

  Scenario: View product "Chill Summer Bracelet"
  	Given I am on the catalog page
  	When I click on the product "Chill Summer Bracelet"
  	Then I see all "Chill Summer Bracelet" information