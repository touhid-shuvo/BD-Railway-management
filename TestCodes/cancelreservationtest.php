<?php

use PHPUnit\Framework\TestCase;

class cancelreservationtest extends TestCase{

	protected $customer;

	public function setUp(){

		$this->customer = new \App\Models\cancelreservation;
	
	}

	public function testgetCustomername(){

		$this->customer->setCustomername('Touhid');
	
		$this->assertEquals($this->customer->getCustomerName(), 'Touhid');
	
	}
}	