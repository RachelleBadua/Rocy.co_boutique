Feature: view catalog
  In order to view catalog 
  As a user 
  I need to press catalog button

  Scenario: try viewing catalog
  	Given I am on the home page
  	When I click on "Catalog"
  	Then I see "The Catalog"  
