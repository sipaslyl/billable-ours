  <?php
//decimal_hours_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class HoursForm extends WebTestCase {

  function testDecimalHours() {
		//$this->get(VIRTUAL_PATH . '/hours.php');
		$this->assertResponse(200);

    $this->setField("hours", "1.5");
		$this->setField("rate", "50");
		$this->clickSubmit("Show Pay");

		$this->assertResponse(200);
		$this->assertText("You input 1 hours at a rate of $50 and your pay is $50");
	}
  }
