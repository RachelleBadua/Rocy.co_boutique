Feature: Set order status
  In order to set order
  As a administrator 
  I need to click "edit status" and select "In process" or "Finished"

  Scenario: the administrator can set order status
  	Given I am on Orders page
  	And I am logged in as administrator
  	When I click on "edit status"
  	And select a status, "In process"
    And click "update status"
  	Then I should see the status, "In process"
