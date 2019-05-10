<?php
namespace App\Repositories;

use  App\Repositories\Contracts\CalculationInterface;

class MultiplicationCalculation implements CalculationInterface{

	public function calculate($number1,$number2){
		return ($number1 * $number2);
	}
	public function getOperatorType(){
		return '*';
	}
}