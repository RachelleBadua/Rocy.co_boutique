Feature: Filter Products in Catalog
  In order to filter products in catalog
  As a user
  I need to be able to select filter options
  and get filtered results

  Scenario: Filter products under $20 in Catalog
  	Given I am on the catalog page
  	When I clicks clicks on "Under $20"
  	Then I see products has price under $20