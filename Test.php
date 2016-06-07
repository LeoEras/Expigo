<?php
include '\catalog\controller\startup\error.php';

class Test extends PHPUnit_Framework_TestCase
{
	public function testHandler() {
		$value = handler(E_USER_NOTICE, $message, $file, $line);
		$this->assertEquals(true, value);
  	}
}
?>