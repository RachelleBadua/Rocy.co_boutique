Feature: Set order status
  In order to set order status
  As a Admin 
  I need to click "edit status" and select "In progress" or "Finished"

  Scenario: try setting order status to "In progress"
  	Given I am logged in as Admin
  	And I am on Orders page
  	When I click on "edit status"
  	And I set the status to "In progress"
    And I click "update status"
  	Then I see "Status updated"

  Scenario: try setting order status to "Finished"
  	Given I am logged in as Admin
  	And I am on Orders page
  	When I click on "edit status"
  	And I set the status to "Finished"
    And I click "update status"
  	Then I see "Status updated"
