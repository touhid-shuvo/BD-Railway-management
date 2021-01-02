  
<?php

use PHPUnit\Framework\TestCase;

class makereservationtest extends TestCase{

	protected $customer;

	public function setUp(){

		$this->customer = new \App\Models\makereservation;
	
	}

	public function testgetCustomername(){

		$this->customer->setCustomername('Touhid');
	
		$this->assertEquals($this->customer->getCustomerName(), 'Touhid');
	
	}

	public function testgetNumberofSeat(){

		$this->customer->setNumberofSeat(5);

		$this->assertEquals($this->customer->getNumberofSeat(), 5);

	}

}