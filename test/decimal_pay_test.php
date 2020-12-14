<?php
//decimal_pay_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class DecimalPayTest extends WebTestCase {

  function testDecimalPay() {
		  $this->get(VIRTUAL_PATH . '/hours.php');
		  $this->assertResponse(200);

      $this->setField("hours", "2");
		  $this->setField("rate", "12.5");
		  $this->clickSubmit("Show Pay");

		  $this->assertResponse(200);
		  $this->assertText("You input 2 hours at a rate of $12.5 and your pay is $25");
	  }
  }
