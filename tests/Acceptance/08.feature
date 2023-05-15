Feature: Remove Product from cart
  In order to remove product from cart
  As a Customer
  I need to press "remove"

  Scenario: try removing "Dark Red Fabric Scrunchy" from cart
    Given I am on "/User/index" page 
    And I input "hello@email.com" in "email"
    And I input "1234" in "password"
    And I click on "Login"
    And I click on "Cart"
    When I click on "#deleteButton"
    Then I see "Items Removed"



  