Feature: view catalog
  In order to view catalog 
  I need to press Products
  To see Catalog


  Scenario: try viewing catalog
  	Given I am on "/Main/index" page
  	When I click on "Products"
  	Then I see "Catalog"  
