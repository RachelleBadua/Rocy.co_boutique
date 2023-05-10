Feature: View product's detail
  In order to view product detail
  As a user
  I need to be able to click on the product
  And see the products information in detail

  Scenario: try viewing product "Dark Red Fabric Scrunchy"
  	Given I am on "/Product/index" page
  	When I click on "Dark Red Fabric Scrunchy"
  	Then I see "Dark Red Fabric Scrunchy" 