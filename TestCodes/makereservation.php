<?php

namespace App\Models;

class makereservation{

public $customernane;

public $seatnumber;

public function setCustomername($name){

	$this->customernane = $name;

}
public function setNumberofSeat($number){

	$this->seattnumber = $number;

}
public function getCustomername(){

	return $this->customernane;

}
public function getNumberofSeat(){

	return $this->guestnumber;

}

}