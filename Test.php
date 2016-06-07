<?php
include '\admin\controller\startup\login.php';
class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
}
?>