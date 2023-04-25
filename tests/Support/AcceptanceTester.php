<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */

    /**
     * @Given I am logged in as Admin
     */
     public function iAmLoggedInAsAdmin()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged in as Admin` is not defined");
     }

    /**
     * @Given I am on the home page
     */
     public function iAmOnTheHomePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the home page` is not defined");
     }

    /**
     * @When I click on :arg1
     */
     public function iClickOn($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on :arg1` is not defined");
     }

    /**
     * @Then I see :arg1
     */
     public function iSee($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see :arg1` is not defined");
     }
}
