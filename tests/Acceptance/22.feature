Feature: Edit About us 
  In order to edit about us 
  As a Admin
  I need to click "edit about us"

  Scenario: try editing a product as Admin
    Given I am on "/User/index" page 
    And I input "eto@eto.com" in "email"
    And I input "eto123" in "password"
    And I click on "Login"
    And I see "Logged in"
    And I click on "About Us"
    And I click on "Edit About Us"
    And I input "This is an updated about us. Sed augue orci, commodo non pellentesque ac, porttitor eu augue. Donec ac mauris massa. Maecenas consequat arcu sed rutrum sollicitudin. Aliquam faucibus ut sapien congue accumsan. Aliquam elementum semper arcu at tempor. Praesent pharetra lorem sed porttitor mattis. Integer vel leo venenatis, ullamcorper odio id, cursus quam. Sed malesuada, libero non euismod facilisis, odio augue pharetra lorem, a pulvinar enim nisl porta augue. Cras vestibulum justo sed lobortis vestibulum. Aenean nec cursus nisl, a interdum velit. Curabitur non elit rhoncus, hendrerit sem sit amet, lobortis elit." in "text"  
    When I click on "Update"
    Then I see "This is an updated about us."
