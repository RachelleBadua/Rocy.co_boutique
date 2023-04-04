Feature: Contact Us/Contact Admin
  In order to contact the admin
  As a user
  I need to be able to input message
  And send message to the Admin

  Scenario: Send message "I want refund" as "cust1@gmail.com" to admin
  	Given I am on Contact Us page
	And I input "cust1@gmail.com" in email
  	And I input "I want refund" in message
  	When I press "Send"
  	Then I see "Message sent!" notification