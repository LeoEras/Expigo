<?php
class Test extends PHPUnit_Framework_TestCase
{
	include '\admin\controller\startup\login.php';
    echo index();
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
	
}
?>