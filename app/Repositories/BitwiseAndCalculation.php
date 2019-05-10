<?php
namespace App\Repositories;

use  App\Repositories\Contracts\CalculationInterface;

class BitwiseAndCalculation implements CalculationInterface{

	public function calculate($number1,$number2){
		return ($number1 & $number2);
	}
	public function getOperatorType(){
		return '&';
	}
}