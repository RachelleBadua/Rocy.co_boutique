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

    // /**
    //  * Define custom actions here
    //  */

    // /**
    //  * @Given I am on :arg1 page
    //  */
    //  public function iAmOnPage($arg1)
    //  {
    //     $this->amOnPage($arg1);
    //  }

    // /**
    //  * @Given I click :arg1
    //  */
    //  public function iClick($arg1)
    //  {
    //     $this->click($arg1);
    //  }
    //   /**
    //  * @Then I see :arg1
    //  */
    //  public function iSee($arg1)
    //  {
    //     $this->see($arg1);
    //  }



    // 01.feature //
      /**
     * @Given I am on :arg1 page
     */
     public function iAmOnPage($arg1)
     {
        $this->amOnPage($arg1);
     }

    /**
     * @When I click on :arg1
     */
     public function iClickOn($arg1)
     {
        $this->click($arg1);
     }

     /**
     * @Then I see :arg1
     */
     public function iSee($arg1)
     {
        $this->see($arg1);
     }


    // 04.feature //
     /**
     * @When I input :arg1 in :arg2
     */
     public function iInputIn($arg1, $arg2)
     {
        $this->fillField($arg2, $arg1);
     }

    /**
     * @When I press :arg1
     */
     public function iPress($text)
     {
        $this->click($text);
     }

}
