<?php
include '\admin\controller\startup\login.php';
class Test extends PHPUnit_Framework_TestCase
{
    index();
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
	
}
?>