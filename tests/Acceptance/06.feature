Feature: Contact Us/Contact Admin
  In order to contact the admin
  As a user or generic person visiting page
  I need to be able to input message
  And send message to the Admin

  Scenario: try sending message "I want refund" as "hello@email.com" to admin
  	Given I am on "/Contact/index" page
	  And I input "hello@email.com" in "email"
  	And I input "I want refund" in "message"
  	When I click on "Send"
  	Then I see "Message sent!" 